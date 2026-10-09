<?php
/** Renders a condition page. The caller sets $slug first. */

require __DIR__ . '/config.php';
require __DIR__ . '/conditions-content.php';
require_once __DIR__ . '/icons.php';

$c = $conditions[$slug];
$page_title       = $c['name'] . ' Treatment & Therapy in Wichita, KS | ANew Mental Health';
$page_description = $c['name'] . ' care in Wichita, Kansas. Learn the signs, how ANew’s therapists and medication providers can help, and who on our team specializes in ' . (in_array($slug, ['adhd', 'ocd'], true) ? $c['name'] : mb_strtolower($c['name'])) . '.';
$canonical_path   = '/conditions/' . $slug . '/';
$current_page     = 'conditions';
$og_image         = $c['image'];

include __DIR__ . '/header.php';
include __DIR__ . '/partials/condition-page.php';
include __DIR__ . '/footer.php';
