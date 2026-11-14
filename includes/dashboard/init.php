<?php
/**
 * Dashboard bootstrap: loads the strings and works out the paths.
 *
 * Every dashboard page sets these, then requires header.php:
 *   $lang     'en' | 'ar'
 *   $page     page slug = file name without .php, e.g. 'index', 'edit-profile'
 *   $title    plain-text <title>
 *   $pageCss  optional, true to load assets/dashboard/css/pages/{$page}.css
 *   $pageJs   optional, true to load assets/dashboard/js/pages/{$page}.js
 */
require_once __DIR__ . '/../functions.php';

$lang    = $lang === 'ar' ? 'ar' : 'en';
$page    = $page ?? 'index';
$pageCss = $pageCss ?? false;
$pageJs  = $pageJs ?? false;
$d       = require __DIR__ . "/../lang/dashboard-{$lang}.php";

// dashboard/x.php → site root is ../ ; ar/dashboard/x.php → ../../
$root = $lang === 'ar' ? '../../' : '../';
// The main intranet pages in the same language sit one folder up either way.
$site = '../';
$icons = $root . 'assets/images/icons.svg';

/** A Lucide icon from the sprite. Add 'icon--grad' for the brand gradient. */
function icon(string $name, string $class = ''): string
{
    global $icons;
    $cls = trim('icon ' . $class);
    return '<svg class="' . e($cls) . '" aria-hidden="true" focusable="false"><use href="' . e($icons) . '#' . e($name) . '" /></svg>';
}

/** Sidebar link target: "site:policies" → ../policies.php, "index" → index.php */
function dash_href(string $slug): string
{
    global $site;
    return str_starts_with($slug, 'site:') ? $site . substr($slug, 5) . '.php' : $slug . '.php';
}
