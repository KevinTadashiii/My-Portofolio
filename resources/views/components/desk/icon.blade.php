@props([
    'name' => 'wrench',
])

@php
    $icons = [
        'wrench' => '<path d="M20.6 5.4a5 5 0 0 1-6.6 6.6L7.9 18a2.4 2.4 0 0 1-3.4-3.4l5.9-6.1a5 5 0 0 1 6.6-6.6l-3 3 .9 2.6 2.6.9 3-3Z" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/>',
        'hammer' => '<path d="M13.5 3.5 20 7l-2.5 2.5-3-1-6.6 6.6a2 2 0 0 1-2.8-2.8L11.7 5.6l-1-3.1Z" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/><path d="m11.5 14.5 4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>',
        'screwdriver' => '<path d="M19 5 15.5 8.5 13 6l3.5-3.5a3.2 3.2 0 0 0-4.6 4.4L4 14.7a2 2 0 0 0 2.8 2.8l7.8-7.8A3.2 3.2 0 0 0 19 5Z" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/>',
        'saw' => '<path d="M3 17h11l7-9-3-2-5 7H3Z" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/><path d="M3 17v3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>',
        'pliers' => '<path d="M8 3 6 15a2 2 0 0 0 4 0L8 3Z" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/><path d="M16 3l2 12a2 2 0 0 1-4 0L16 3Z" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/><path d="M8 17h8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>',
    ];
@endphp

<svg viewBox="0 0 24 24" role="img" aria-hidden="true" focusable="false">
    {!! $icons[$name] ?? $icons['wrench'] !!}
</svg>
