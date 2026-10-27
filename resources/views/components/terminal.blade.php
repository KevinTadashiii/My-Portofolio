@php
    $prompt = config('portfolio.terminal.prompt');
@endphp

<div class="terminal" data-terminal data-placement="panel">
    <div class="terminal__chrome">
        <span class="terminal__dots" aria-hidden="true"><i></i><i></i><i></i></span>
        <span class="terminal__title">{{ config('portfolio.profile.handle') }} &mdash; /home/kevin</span>
        <span class="terminal__badge">bash 5.2</span>
    </div>

    <div
        class="terminal__screen"
        data-terminal-output
        role="log"
        aria-live="polite"
        aria-label="Terminal output"
    ></div>

    <form class="terminal__form" data-terminal-form autocomplete="off">
        <label class="sr-only" for="terminal-input">Type a terminal command</label>
        <span class="terminal__prompt" aria-hidden="true">{{ $prompt }}</span>
        <span class="terminal__field" data-terminal-field>
            <span class="terminal__mirror" data-terminal-mirror aria-hidden="true"></span>
            <input
                class="terminal__input"
                id="terminal-input"
                data-terminal-input
                type="text"
                name="command"
                autocomplete="off"
                autocapitalize="none"
                autocorrect="off"
                spellcheck="false"
                enterkeyhint="go"
            >
            <span class="terminal__caret" aria-hidden="true"></span>
        </span>
    </form>

    <div class="terminal__suggestions" data-terminal-suggestions aria-label="Suggested commands">
        @foreach (config('portfolio.terminal.suggestions') as $suggestion)
            <button type="button" class="terminal__chip" data-terminal-command="{{ $suggestion }}">{{ $suggestion }}</button>
        @endforeach
    </div>
</div>
