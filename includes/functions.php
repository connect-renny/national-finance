<?php

/** HTML-escape a value for output. */
function e($value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** Load the UI string table for a language ('en' or 'ar'). */
function load_strings(string $lang): array
{
    static $cache = [];
    $lang = $lang === 'ar' ? 'ar' : 'en';
    return $cache[$lang] ??= require __DIR__ . "/lang/{$lang}.php";
}

/** ' aria-current="page"' when $slug is the current page, otherwise ''. */
function current_attr(string $slug, string $page): string
{
    return $slug === $page ? ' aria-current="page"' : '';
}

/** Link to the same page in the other language. */
function lang_switch_href(array $t, string $page): string
{
    return $t['switch_href'] . $page . '.php';
}
