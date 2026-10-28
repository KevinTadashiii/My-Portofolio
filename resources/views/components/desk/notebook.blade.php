@php
    $profile = config('portfolio.profile');
    $about = config('portfolio.about');
@endphp

{{--
    The open / close label flips only once the notebook is edge-on (about
    halfway through the 620ms flip), so the text swap happens while the face
    is hidden. Under prefers-reduced-motion the CSS flip is instant, so the
    label follows immediately to avoid a lag.
--}}
<div
    class="notebook"
    x-data="{
        open: false,
        label: 'Open',
        toggle() {
            const next = !this.open;
            const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            this.open = next;
            window.setTimeout(() => { this.label = next ? 'Close' : 'Open'; }, reduced ? 0 : 310);
        },
    }"
    :class="open && 'is-open'"
>
    <div class="notebook__inner">
        <div class="notebook__page notebook__page--front">
            <span class="notebook__eyebrow">field notes</span>
            <h3 class="notebook__title">{{ $profile['name'] }}</h3>

            <p class="notebook__body">
                {{ $profile['role'] }} in {{ $profile['location'] }}.
                Usually found near a terminal, a coffee cup, or both.
            </p>

            <div class="notebook__footer">
                <button
                    type="button"
                    class="notebook__open"
                    @click="toggle()"
                    :aria-expanded="open.toString()"
                >
                    <span x-text="label">Open</span> &rarr; bio
                </button>

                <p class="notebook__meta">
                    <a href="#about">read the full bio &rarr;</a>
                </p>
            </div>
        </div>

        <div class="notebook__page notebook__page--back">
            <span class="notebook__eyebrow">about me</span>
            <h3 class="notebook__title">The long version</h3>

            <p class="notebook__body">{{ $about['paragraphs'][0] }}</p>

            <div class="notebook__footer">
                <button
                    type="button"
                    class="notebook__open"
                    @click="toggle()"
                    aria-label="Close bio"
                >
                    <span x-text="label">Close</span> &rarr; bio
                </button>

                <p class="notebook__meta">
                    @foreach ($about['links'] as $link)
                        <a href="{{ $link['url'] }}" rel="noopener noreferrer" target="_blank">
                            {{ $link['label'] }}: {{ $link['value'] }}
                        </a>
                    @endforeach
                </p>
            </div>
        </div>
    </div>
</div>
