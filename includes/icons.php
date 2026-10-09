<?php
/* Simple line icons for the condition cards (24×24, stroke). */
$icons = [
    'anxiety'       => '<path d="M3 9c2-2 4-2 6 0s4 2 6 0 4-2 6 0M3 15c2-2 4-2 6 0s4 2 6 0 4-2 6 0"/>',
    'depression'    => '<path d="M7 17a4 4 0 1 1 .9-7.9A5.5 5.5 0 0 1 18.5 11 3 3 0 0 1 18 17H7Z"/><path d="M9 20.5h6"/>',
    'adhd'          => '<circle cx="12" cy="12" r="2.2"/><path d="M12 3v3M12 18v3M3 12h3M18 12h3M5.6 5.6l2.1 2.1M16.3 16.3l2.1 2.1M5.6 18.4l2.1-2.1M16.3 7.7l2.1-2.1"/>',
    'trauma'        => '<path d="M12 21V11"/><path d="M12 13c-4 0-6-2.5-6-6 3.5 0 6 2 6 6ZM12 11c0-3.5 2.5-6 6-6 0 3.5-2 6-6 6Z"/>',
    'grief'         => '<path d="M12 20s-7-4.4-7-10a4 4 0 0 1 7-2.6A4 4 0 0 1 19 10c0 5.6-7 10-7 10Z"/>',
    'bipolar'       => '<path d="M2.5 12c2.4-6 4.8-6 7.1 0s4.8 6 7.2 0 3.5-4 4.7-3"/>',
    'ocd'           => '<path d="M17 7a7 7 0 1 0 2 5"/><path d="M19 4v4h-4"/>',
    'stress'        => '<rect x="3" y="7" width="16" height="10" rx="2.5"/><path d="M21 10.5v3M6.5 10.5v3"/>',
    'child'         => '<circle cx="8.5" cy="7" r="2.5"/><circle cx="16.5" cy="9.5" r="2"/><path d="M4 20a4.5 4.5 0 0 1 9 0M13 20a3.5 3.5 0 0 1 7 0"/>',
    'relationships' => '<circle cx="9" cy="12" r="5.5"/><circle cx="15" cy="12" r="5.5"/>',
    'addiction'     => '<path d="M10 14a4 4 0 0 0 5.7 0l3-3a4 4 0 0 0-5.7-5.7l-1 1"/><path d="M14 10a4 4 0 0 0-5.7 0l-3 3a4 4 0 0 0 5.7 5.7l1-1"/>',
    'womens'        => '<circle cx="12" cy="9" r="3"/><path d="M12 12v9M12 6c0-2 1.5-3 3-3M12 6c0-2-1.5-3-3-3M9 17h6"/>',
];

if (!function_exists('icon')) {
function icon(string $paths, string $class = 'h-6 w-6'): string
{
    return '<svg viewBox="0 0 24 24" class="' . $class . '" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $paths . '</svg>';
}
}
