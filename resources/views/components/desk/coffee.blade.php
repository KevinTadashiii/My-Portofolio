<div class="coffee" x-data="{ joke: false }">
    <button
        type="button"
        class="coffee__cup"
        @click="joke = !joke"
        :aria-expanded="joke.toString()"
        aria-describedby="coffee-joke"
        aria-label="Coffee cup — reveal the caffeine reading"
    >
        <svg viewBox="0 0 120 120" role="presentation" aria-hidden="true" focusable="false">
            <g class="coffee__steam" fill="none" stroke="#C75B39" stroke-width="2.4" stroke-linecap="round" opacity="0.55">
                <path d="M44 26c5-5 0-9 5-14"/>
                <path d="M58 24c5-5 0-9 5-14"/>
                <path d="M72 26c5-5 0-9 5-14"/>
            </g>

            <circle cx="58" cy="68" r="44" fill="#E7DCC7" stroke="#2C1810" stroke-width="2"/>
            <circle cx="58" cy="68" r="34" fill="#F4ECDC" stroke="#2C1810" stroke-width="2"/>
            <circle cx="58" cy="68" r="28" fill="#3B2517"/>
            <circle cx="58" cy="68" r="28" fill="none" stroke="#7A5334" stroke-width="2.5" opacity="0.7"/>
            <path d="M92 58c9 0 13 5 13 10s-4 10-13 10" fill="none" stroke="#2C1810" stroke-width="5" stroke-linecap="round"/>
            <path d="M92 58c9 0 13 5 13 10s-4 10-13 10" fill="none" stroke="#F4ECDC" stroke-width="2" stroke-linecap="round"/>
        </svg>
    </button>

    <p class="coffee__meter">
        <span class="coffee__meter-track" aria-hidden="true">
            <span class="coffee__meter-fill" style="width: 73%"></span>
        </span>
        <span>caffeine 73%</span>
    </p>

    <p class="coffee__joke" id="coffee-joke" :class="joke && 'is-visible'">
        caffeine_level: nominal
    </p>
</div>
