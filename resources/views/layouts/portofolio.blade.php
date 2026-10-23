<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Kevin Kanigara — Engineer')</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-bg dark:bg-bg text-text antialiased">

{{-- Header --}}
<header class="fixed top-0 left-0 right-0 z-50 h-14 flex items-center justify-between px-6 border-b border-border bg-bg/80 dark:bg-bg/80 backdrop-blur-md">
    <div class="flex items-center gap-8">
        <a href="/" class="font-mono text-sm text-text hover:text-accent transition-colors">&gt; kevin_</a>
        <nav class="hidden md:flex items-center gap-6 text-sm">
            <a href="#about" class="text-muted hover:text-text transition-colors">About</a>
            <a href="#projects" class="text-muted hover:text-text transition-colors">Projects</a>
            <a href="#experience" class="text-muted hover:text-text transition-colors">Experience</a>
            <a href="#contact" class="text-muted hover:text-text transition-colors">Contact</a>
        </nav>
    </div>
    <button id="theme-toggle" class="text-muted hover:text-accent transition-colors" aria-label="Toggle theme">
        <svg id="icon-sun" class="w-5 h-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1M4.22 4.22l.707.707m12.728 12.728l.707.707M3 12h1m16 0h1M4.22 19.78l.707-.707M16.07 4.22l.707-.707M12 7a5 5 0 100 10A5 5 0 0012 7z"/>
        </svg>
        <svg id="icon-moon" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
        </svg>
    </button>
</header>

<main class="pt-14">
    @yield('content')
</main>

<footer class="border-t border-border py-3 px-6 flex items-center justify-between text-[11px] tracking-widest uppercase opacity-50 text-muted">
    <span>&copy; {{ date('Y') }} Kevin Kanigara</span>
    <span>e7f4a80</span>
    <span>Laravel 11 + Tailwind 4</span>
</footer>

<script>
    // Theme toggle
    const btn = document.getElementById('theme-toggle');
    const sun = document.getElementById('icon-sun');
    const moon = document.getElementById('icon-moon');

    function setTheme(light) {
        document.documentElement.setAttribute('data-theme', light ? 'light' : 'dark');
        sun.classList.toggle('hidden', !light);
        moon.classList.toggle('hidden', light);
    }

    btn.addEventListener('click', () => {
        const isLight = document.documentElement.getAttribute('data-theme') === 'light';
        setTheme(!isLight);
    });

    // Check system preference
    if (window.matchMedia('(prefers-color-scheme: light)').matches) setTheme(true);
</script>

@stack('scripts')
</body>
</html>
