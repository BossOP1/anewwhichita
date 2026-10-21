<?php
/** Renders a condition page. The caller sets $slug first. */

require __DIR__ . '/config.php';
require __DIR__ . '/conditions-content.php';
require_once __DIR__ . '/icons.php';

$c = $conditions[$slug];
/* Condition name for mid-sentence use: lowercase, but acronyms stay capitalized (“trauma & PTSD”). */
$c_lower = str_replace(['adhd', 'ocd', 'ptsd'], ['ADHD', 'OCD', 'PTSD'], mb_strtolower($c['name']));
$page_title       = $c['name'] . ' Treatment & Therapy in Wichita, KS | ANew Mental Health';
$page_description = $c['name'] . ' care in Wichita, Kansas. Learn the signs, how ANew’s therapists and medication providers can help, and who on our team specializes in ' . $c_lower . '.';
$canonical_path   = '/conditions/' . $slug . '/';
$current_page     = 'conditions';
$og_image         = $c['image'];

include __DIR__ . '/header.php';
include __DIR__ . '/partials/condition-page.php';
include __DIR__ . '/footer.php';
