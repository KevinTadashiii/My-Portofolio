@php
    $tools = config('portfolio.tools');

    /*
    | Three tools hang from each rail, so the board reads as a mounted pegboard
    | with rows of hooks instead of a single strip of badges.
    */
    $rails = array_chunk($tools, 3);
@endphp

<div class="rack" x-data="{ active: null }">
    <div class="rack__back" aria-hidden="true"></div>

    <span class="rack__screw rack__screw--tl" aria-hidden="true"></span>
    <span class="rack__screw rack__screw--tr" aria-hidden="true"></span>
    <span class="rack__screw rack__screw--bl" aria-hidden="true"></span>
    <span class="rack__screw rack__screw--br" aria-hidden="true"></span>

    <p class="rack__plaque">
        <span>tool rack</span>
        <span class="rack__plaque-count">{{ count($tools) }} tools</span>
    </p>

    <div class="rack__rails">
        @foreach ($rails as $rail)
            <div class="rack__rail">
                <span class="rack__bar" aria-hidden="true"></span>

                <ul class="rack__tools">
                    @foreach ($rail as $tool)
                        <li>
                            {{-- The hook stays bolted to the rail; only the tool below it moves. --}}
                            <span class="rack__hook" aria-hidden="true"></span>

                            <button
                                type="button"
                                class="rack__tool"
                                @click="active = active === '{{ $tool['key'] }}' ? null : '{{ $tool['key'] }}'"
                                :aria-expanded="(active === '{{ $tool['key'] }}').toString()"
                                aria-controls="rack-detail-{{ $tool['key'] }}"
                            >
                                <span class="rack__icon">
                                    @foreach ($tool['icons'] as $icon)
                                        <x-desk.icon :name="$icon" />
                                    @endforeach
                                </span>
                                {{-- A slash is not a reliable break point, so give it a space and let the plate wrap there. --}}
                                <span class="rack__label">{{ str_replace('/', ' / ', $tool['label']) }}</span>
                            </button>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>

    <div class="rack__details">
        {{-- The tag slot is always there, so the rack never changes height --}}
        <p class="rack__hint" x-show="!active">
            pick a tool to read its skills
        </p>

        @foreach ($tools as $tool)
            <div
                class="rack__detail"
                id="rack-detail-{{ $tool['key'] }}"
                x-show="active === '{{ $tool['key'] }}'"
                x-cloak
            >
                <p class="rack__detail-title">{{ $tool['label'] }}</p>
                <ul class="rack__skill-list">
                    @foreach ($tool['skills'] as $skill)
                        <li>{{ $skill }}</li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</div>
