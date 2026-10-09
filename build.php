<?php
/**
 * Build script for Netlify deployment
 * ------------------------------------------------------------------
 * Renders the PHP pages to static HTML in dist/, rewrites .php links to
 * .html, and copies the assets alongside. Run locally with:
 *
 *     php build.php
 *
 * Netlify runs it via the build command in netlify.toml and publishes dist/.
 */

// Run from the project root no matter where the script was called from.
chdir(__DIR__);

// The CLI has no request, but the page templates may read $_SERVER. Give
// them something sane so nothing warns mid-render.
$_SERVER['REQUEST_METHOD'] = 'GET';
$_SERVER['REQUEST_URI']    = $_SERVER['REQUEST_URI']    ?? '/';
$_SERVER['HTTP_HOST']      = $_SERVER['HTTP_HOST']      ?? 'anewwichita.com';
$_SERVER['SERVER_NAME']    = $_SERVER['SERVER_NAME']    ?? 'anewwichita.com';
$_SERVER['HTTPS']          = 'on';

// Pages to publish. Homepage only for now; add the rest as they're built,
// e.g. 'meet-our-team.php' => 'meet-our-team/index.html' for a pretty URL.
$pages = [
    'index.php'       => 'index.html',
    'about/index.php' => 'about/index.html',
    'talk-therapy/index.php' => 'talk-therapy/index.html',
    'mental-health-medication-management/index.php' => 'mental-health-medication-management/index.html',
    'adhd-assessment/index.php' => 'adhd-assessment/index.html',
    'emdr-therapy/index.php'    => 'emdr-therapy/index.html',
    'play-therapy/index.php'    => 'play-therapy/index.html',
    'insurance/index.php'       => 'insurance/index.html',
    'contact-us/index.php'      => 'contact-us/index.html',
    'meet-our-team/index.php'   => 'meet-our-team/index.html',
    'conditions/index.php'      => 'conditions/index.html',
    'mental-health-careers-wichita-ks/index.php' => 'mental-health-careers-wichita-ks/index.html',
    'privacy-policy/index.php'              => 'privacy-policy/index.html',
    'notice-of-privacy-practices/index.php' => 'notice-of-privacy-practices/index.html',
    'terms-of-use/index.php'                => 'terms-of-use/index.html',
    'good-faith-estimate/index.php'         => 'good-faith-estimate/index.html',
    'nondiscrimination/index.php'           => 'nondiscrimination/index.html',
    'accessibility/index.php'               => 'accessibility/index.html',
    'thank-you/index.php'                   => 'thank-you/index.html',
    '404.php'                               => '404.html',
];

// Every condition page: conditions/{slug}/index.php → conditions/{slug}/index.html
foreach (glob('conditions/*/index.php') as $conditionPage) {
    $pages[$conditionPage] = substr($conditionPage, 0, -3) . 'html';
}

// Folders copied wholesale into dist/: images (brand, team, office,
// scenery), css/site.css and js/main.js.
$assetDirs = ['assets'];

// Anything under the asset folders that must never be served. Paths are
// relative to the project root.
$noPublish = [];

// Single files copied into dist/ when present.
$rootFiles = [
    'favicon.ico', 'favicon.png', 'apple-touch-icon.png', 'robots.txt', 'sitemap.xml',
    '_redirects', '_headers',
];

/* ------------------------------------------------------------------ */

function removeDir(string $dir): void
{
    if (!is_dir($dir)) {
        return;
    }
    foreach (scandir($dir) as $file) {
        if ($file === '.' || $file === '..') {
            continue;
        }
        $path = "$dir/$file";
        is_dir($path) ? removeDir($path) : unlink($path);
    }
    rmdir($dir);
}

function copyDir(string $src, string $dst, array $skip = []): int
{
    if (!is_dir($src) || in_array($src, $skip, true)) {
        return 0;
    }
    if (!is_dir($dst)) {
        mkdir($dst, 0755, true);
    }
    $count = 0;
    foreach (scandir($src) as $file) {
        if ($file === '.' || $file === '..' || $file === '.DS_Store') {
            continue;
        }
        $srcPath = "$src/$file";
        $dstPath = "$dst/$file";
        if (is_dir($srcPath)) {
            $count += copyDir($srcPath, $dstPath, $skip);
        } elseif (in_array($srcPath, $skip, true)) {
            continue;
        } elseif (copy($srcPath, $dstPath)) {
            $count++;
        }
    }
    return $count;
}

/* ---- Start from a clean dist/ ------------------------------------- */

removeDir('dist');
mkdir('dist', 0755, true);

/* ---- Render the pages --------------------------------------------- */

$built = 0;
$skipped = [];

foreach ($pages as $srcFile => $outFile) {

    if (!file_exists($srcFile)) {
        $skipped[] = $srcFile;
        echo "Skipped: $srcFile (not created yet)\n";
        continue;
    }

    $destPath = 'dist/' . $outFile;
    $destDir  = dirname($destPath);

    if (!is_dir($destDir)) {
        mkdir($destDir, 0755, true);
    }

    // Each page starts from a clean slate: includes/header.php falls back to
    // defaults only when these are unset, so leftovers would carry over.
    unset($page_title, $page_description, $canonical_path, $current_page, $og_image, $svc, $slug, $doc, $noindex);

    $_SERVER['SCRIPT_NAME'] = '/' . $srcFile;

    // Render. Included at global scope on purpose: the pages expect the data
    // arrays from includes/config.php in the global scope.
    ob_start();
    try {
        include $srcFile;
    } catch (Throwable $e) {
        ob_end_clean();
        fwrite(STDERR, "ERROR: $srcFile failed to render: {$e->getMessage()}\n");
        exit(1);
    }
    $html = ob_get_clean();

    if (trim($html) === '') {
        fwrite(STDERR, "ERROR: $srcFile rendered nothing.\n");
        exit(1);
    }

    // Internal .php links become .html for the static host. Anything with a
    // scheme (tel:, mailto:, https://) has no .php in it, so it is untouched.
    $html = str_replace(
        ['.php"', ".php'", '.php#', '.php?'],
        ['.html"', ".html'", '.html#', '.html?'],
        $html
    );

    file_put_contents($destPath, $html);
    $built++;
    echo "Built:   $outFile (" . number_format(strlen($html) / 1024, 1) . " KB)\n";
}

/* ---- Copy the static files ---------------------------------------- */

foreach ($assetDirs as $dir) {
    $n = copyDir($dir, 'dist/' . $dir, $noPublish);
    echo "Copied:  $dir/ ($n files)\n";
}

foreach ($noPublish as $path) {
    if (file_exists($path)) {
        echo "Held back: $path (not for the public site)\n";
    }
}

foreach ($rootFiles as $file) {
    if (file_exists($file) && copy($file, 'dist/' . $file)) {
        echo "Copied:  $file\n";
    }
}

/* ---- sitemap.xml + robots.txt ------------------------------------- */

$noIndex = ['404.html', 'thank-you/index.html'];
$urls = [];
foreach ($pages as $src => $out) {
    if (in_array($out, $noIndex, true) || !file_exists('dist/' . $out)) {
        continue;
    }
    $path = '/' . preg_replace('#(^|/)index\.html$#', '$1', $out);
    $urls[] = '  <url><loc>' . htmlspecialchars($site['url'] . $path) . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
}
file_put_contents('dist/sitemap.xml', "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n" . implode("\n", $urls) . "\n</urlset>\n");
if (!file_exists('dist/robots.txt')) {
    file_put_contents('dist/robots.txt', "User-agent: *\nAllow: /\nDisallow: /thank-you/\n\nSitemap: {$site['url']}/sitemap.xml\n");
}
echo "Wrote:   sitemap.xml (" . count($urls) . " URLs), robots.txt\n";

/* ---- Sanity checks -------------------------------------------------- */

// Every local file the build references (images, css, js) must exist in
// dist/ — catches a renamed photo before it 404s in production.
// Links to pages (paths ending in "/" like /talk-therapy/) are tracked
// separately: those pages simply haven't been built yet.
$missing = [];
$unbuiltPages = [];
$builtPages = new RegexIterator(new RecursiveIteratorIterator(new RecursiveDirectoryIterator('dist', FilesystemIterator::SKIP_DOTS)), '/\.html$/');
foreach ($builtPages as $page) {
    $page = $page->getPathname();
    $html = file_get_contents($page);
    preg_match_all('/(?:src|href|poster)="(?!https?:|\/\/|tel:|sms:|mailto:|#|data:)([^"]+)"/i', $html, $m);
    foreach (array_unique($m[1]) as $ref) {
        $path = rawurldecode(ltrim(strtok($ref, '?#'), '/'));
        if ($path === '' || str_ends_with($path, '/')) {
            if (!file_exists('dist/' . $path . 'index.html')) {
                $unbuiltPages['/' . $path] = true;
            }
        } elseif (!file_exists('dist/' . $path)) {
            $missing[] = basename($page) . ' -> ' . $ref;
        }
    }
}

/* ---- Report -------------------------------------------------------- */

echo "\nBuild complete: $built page" . ($built === 1 ? '' : 's') . " in dist/.\n";

if ($skipped) {
    echo "Not built yet: " . implode(', ', $skipped) . "\n";
}

if ($unbuiltPages) {
    ksort($unbuiltPages);
    echo "\nNOTE: " . count($unbuiltPages) . " linked page(s) are not part of this build yet and will 404 on Netlify:\n";
    foreach (array_keys($unbuiltPages) as $url) {
        echo "  $url\n";
    }
}

if ($missing) {
    echo "\nERROR: " . count($missing) . " file reference(s) missing from dist/:\n";
    foreach (array_slice($missing, 0, 20) as $ref) {
        echo "  $ref\n";
    }
    if (count($missing) > 20) {
        echo "  ... and " . (count($missing) - 20) . " more\n";
    }
    // A missing image/css/js is a real bug — fail the deploy.
    exit(1);
}
