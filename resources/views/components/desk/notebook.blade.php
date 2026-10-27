@php
    $profile = config('portfolio.profile');
    $about = config('portfolio.about');
@endphp

<div class="notebook" x-data="{ open: false }" :class="open && 'is-open'">
    <div class="notebook__inner">
        <div class="notebook__page notebook__page--front">
            <span class="notebook__eyebrow">field notes</span>
            <h3 class="notebook__title">{{ $profile['name'] }}</h3>

            <p class="notebook__body">
                {{ $profile['role'] }} in {{ $profile['location'] }}.
                Usually found near a terminal, a coffee cup, or both.
            </p>

            <button
                type="button"
                class="notebook__open"
                @click="open = !open"
                :aria-expanded="open.toString()"
            >
                <span x-text="open ? 'Close' : 'Open'">Open</span> &rarr; bio
            </button>

            <p class="notebook__meta">
                <a href="#about">read the full bio &rarr;</a>
            </p>
        </div>

        <div class="notebook__page notebook__page--back">
            <span class="notebook__eyebrow">about me</span>
            <h3 class="notebook__title">The long version</h3>

            <p class="notebook__body">{{ $about['paragraphs'][0] }}</p>

            <p class="notebook__meta">
                @foreach ($about['links'] as $link)
                    <a href="{{ $link['url'] }}" rel="noopener noreferrer" target="_blank">
                        {{ $link['label'] }}: {{ $link['value'] }}
                    </a><br>
                @endforeach
            </p>
        </div>
    </div>
</div>
