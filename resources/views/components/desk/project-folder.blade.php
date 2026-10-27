@php
    $projectCount = count(config('portfolio.projects'));
@endphp

<a class="folder" href="#projects">
    <span class="folder__tab">projects</span>
    <span class="folder__count">{{ $projectCount }}</span>
    <span class="folder__label">verified entries</span>
    <span class="folder__hint">
        {{ $projectCount > 0 ? 'open the folder' : 'the folder is still empty' }}
    </span>
</a>
