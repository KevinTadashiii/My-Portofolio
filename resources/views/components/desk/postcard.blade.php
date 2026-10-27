@php
    $email = config('portfolio.profile.email');
@endphp

<a class="postcard" href="#contact">
    <span class="postcard__stamp" aria-hidden="true">kk</span>
    <span>
        <span class="postcard__eyebrow">postcard</span>
        <span class="postcard__title">say hello</span>
        <span class="postcard__hint">{{ $email }}</span>
    </span>
</a>
