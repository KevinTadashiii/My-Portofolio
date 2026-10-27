@php
    $tools = config('portfolio.tools');
@endphp

<div class="rack" x-data="{ active: null }">
    <div class="rack__rail" aria-hidden="true"></div>

    <ul class="rack__tools">
        @foreach ($tools as $tool)
            <li>
                <button
                    type="button"
                    class="rack__tool"
                    @click="active = active === '{{ $tool['key'] }}' ? null : '{{ $tool['key'] }}'"
                    :aria-expanded="(active === '{{ $tool['key'] }}').toString()"
                    aria-controls="rack-detail-{{ $tool['key'] }}"
                >
                    <span class="rack__icon"><x-desk.icon :name="$tool['icon']" /></span>
                    <span class="rack__label">{{ $tool['label'] }}</span>
                </button>
            </li>
        @endforeach
    </ul>

    <div class="rack__details">
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
