@extends('layouts.portofolio')

@section('title', 'Kevin Kanigara — Full-Stack Engineer')

@section('content')

{{-- ===================== HERO ===================== --}}
<section id="hero" class="min-h-screen relative overflow-hidden px-6 py-24">

    {{-- grid background --}}
    <div class="pointer-events-none absolute inset-0 opacity-[0.5]" aria-hidden="true">
        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="grid" width="60" height="60" patternUnits="userSpaceOnUse">
                    <path d="M 60 0 L 0 0 0 60" fill="none" stroke="var(--color-border)" stroke-width="0.5"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#grid)"/>
        </svg>
    </div>

    {{-- Diagonal light streaks --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">
        <div class="absolute top-0 left-1/4 w-px h-[140vh] opacity-[0.06]"
             style="background: linear-gradient(to bottom, transparent, var(--color-accent), transparent); transform: rotate(25deg);"></div>
        <div class="absolute top-1/4 left-1/2 w-px h-[120vh] opacity-[0.04]"
             style="background: linear-gradient(to bottom, transparent, #a855f7, transparent); transform: rotate(25deg);"></div>
        <div class="absolute top-1/3 left-[70%] w-px h-[100vh] opacity-[0.05]"
             style="background: linear-gradient(to bottom, transparent, #38bdf8, transparent); transform: rotate(25deg);"></div>
    </div>

    {{-- Cursor-reactive gradient orbs --}}
    <div id="orb-1" class="pointer-events-none absolute top-[10%] left-[5%] w-[420px] h-[420px] rounded-full opacity-[0.22] blur-[100px]"
         style="background: radial-gradient(circle, var(--color-accent), transparent 70%);"></div>
    <div id="orb-2" class="pointer-events-none absolute bottom-[5%] right-[10%] w-[360px] h-[360px] rounded-full opacity-[0.18] blur-[80px]"
         style="background: radial-gradient(circle, #a855f7, transparent 70%);"></div>
    <div id="orb-3" class="pointer-events-none absolute top-[40%] right-[30%] w-[280px] h-[280px] rounded-full opacity-[0.16] blur-[60px]"
         style="background: radial-gradient(circle, #38bdf8, transparent 70%);"></div>

    {{-- Grain overlay --}}
    <div class="pointer-events-none absolute inset-0 opacity-[0.03]"
         style="background-image: url(&quot;data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E&quot;);">
    </div>

    {{-- Main content --}}
    <div class="relative z-10 w-full max-w-7xl mx-auto flex flex-col gap-10">

        {{-- Top bar: badge + nav dots --}}
        <div class="flex items-center justify-between opacity-0" style="animation: fadeUp 0.5s ease forwards 0.1s;">
            <div class="flex items-center gap-3">
                <span class="inline-flex items-center gap-2 font-mono text-xs text-muted border border-border px-3 py-1.5 rounded-full">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                    </span>
                    Available for work
                </span>
            </div>
            <div class="flex items-center gap-2">
                @foreach(['Top','Left','Right','Bottom'] as $dot)
                    <span class="w-1.5 h-1.5 rounded-full bg-border"></span>
                @endforeach
            </div>
        </div>

        {{-- Hero headline: staggered kinetic typography --}}
        <div class="relative">
            {{-- Giant ghost initials behind text --}}
            <div class="absolute -top-12 -left-6 font-mono text-[10rem] md:text-[14rem] leading-none text-transparent pointer-events-none select-none"
                 style="-webkit-text-stroke: 1px var(--color-border); opacity: 0.3;" aria-hidden="true">
                KK
            </div>

            <h1 class="font-mono font-bold tracking-tighter leading-[0.88] text-[clamp(3.2rem,10vw,9rem)] text-text">
                <span class="block overflow-hidden">
                    <span class="inline-block" style="animation: slideRight 0.7s cubic-bezier(0.16,1,0.3,1) forwards 0.2s; opacity:0; transform:translateX(-105%);">
                        Kevin
                    </span>
                </span>
                <span class="block overflow-hidden">
                    <span class="inline-block" style="animation: slideRight 0.7s cubic-bezier(0.16,1,0.3,1) forwards 0.35s; opacity:0; transform:translateX(-105%);">
                        <span class="text-transparent" style="-webkit-text-stroke: 2px var(--color-text);">Kanigara</span>
                    </span>
                </span>
            </h1>

            {{-- Role tagline with highlight --}}
            <div class="mt-6 flex flex-wrap items-center gap-3 opacity-0" style="animation: fadeUp 0.5s ease forwards 0.6s;">
                <span class="font-mono text-sm text-muted">Full-Stack Engineer ·</span>
                <span class="font-mono text-sm text-accent bg-accent/10 border border-accent/20 px-3 py-1 rounded-full">Laravel</span>
                <span class="font-mono text-sm text-muted">·</span>
                <span class="font-mono text-sm text-accent bg-accent/10 border border-accent/20 px-3 py-1 rounded-full">TypeScript</span>
                <span class="font-mono text-sm text-muted">·</span>
                <span class="font-mono text-sm text-accent bg-accent/10 border border-accent/20 px-3 py-1 rounded-full">Kubernetes</span>
                <span class="font-mono text-sm text-muted">·</span>
                <span class="font-mono text-sm text-muted">Building at the edge of scale.</span>
            </div>
        </div>

        {{-- Middle row: rotating ring badge + short bio --}}
        <div class="flex flex-col md:flex-row items-start gap-10 opacity-0" style="animation: fadeUp 0.6s ease forwards 0.75s;">

            {{-- Rotating ring --}}
            <div class="relative shrink-0">
                <div class="w-28 h-28 md:w-32 md:h-32 rounded-full border border-border flex items-center justify-center relative"
                     style="animation: spin 20s linear infinite;">
                    <svg class="absolute inset-0 w-full h-full" viewBox="0 0 100 100">
                        <path id="circlePath" d="M 50, 50 m -38, 0 a 38,38 0 1,1 76,0 a 38,38 0 1,1 -76,0" fill="none"/>
                        <text font-family="ui-monospace, monospace" font-size="9" fill="var(--color-muted)" letter-spacing="3">
                            <textPath href="#circlePath">✦ FULL-STACK ENGINEER · KEVIN KANIGARA · </textPath>
                        </text>
                    </svg>
                </div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <span class="font-mono text-2xl text-accent font-bold">KK</span>
                </div>
            </div>

            {{-- Bio paragraph --}}
            <div class="max-w-lg">
                <p class="font-mono text-sm text-muted leading-relaxed">
                    <span class="text-accent">›</span> I engineer distributed systems and developer tooling
                    that people actually enjoy using. Currently obsessed with
                    <span class="text-text">edge computing</span>,
                    <span class="text-text">observability</span>, and making
                    <span class="text-text">complex things simple</span>.
                </p>
                <p class="font-mono text-sm text-muted leading-relaxed mt-3">
                    <span class="text-accent">›</span> 5+ years shipping production code.
                    30+ projects. 12k+ commits. No fear of hard problems.
                </p>
            </div>
        </div>

        {{-- Horizontal scrolling tech rail --}}
        <div class="overflow-hidden border-y border-border py-3 opacity-0" style="animation: fadeUp 0.5s ease forwards 0.9s;">
            <div class="flex whitespace-nowrap" id="tech-rail">
                @php
                    $techItems = ['Laravel', 'PHP', 'TypeScript', 'Node.js', 'Vue.js', 'PostgreSQL', 'Redis', 'Docker', 'Kubernetes', 'AWS', 'Tailwind', 'Alpine.js', 'Python', 'Kafka', 'REST', 'GraphQL', 'Git', 'Linux'];
                @endphp
                @for($i = 0; $i < 3; $i++)
                    @foreach($techItems as $tech)
                        <span class="mx-5 font-mono text-xs text-muted inline-flex items-center gap-2">
                            <span class="w-1 h-1 rounded-full bg-accent/60"></span>{{ $tech }}
                        </span>
                    @endforeach
                @endfor
            </div>
        </div>

        {{-- Bottom row: CTAs + stats --}}
        <div class="flex flex-col sm:flex-row items-start sm:items-end justify-between gap-8 opacity-0" style="animation: fadeUp 0.5s ease forwards 1.0s;">

            {{-- CTA buttons --}}
            <div class="flex flex-wrap items-center gap-3">
                <a href="#projects"
                   class="group relative inline-flex items-center gap-2.5 px-7 py-3.5 bg-accent text-white font-mono text-sm font-medium overflow-hidden transition-all hover:shadow-[0_0_30px_-5px_var(--color-accent)]">
                    <span class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 transition-opacity"></span>
                    <span>View Projects</span>
                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-1 group-hover:-translate-y-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7v10"/>
                    </svg>
                </a>
                <a href="#contact"
                   class="group inline-flex items-center gap-2.5 px-7 py-3.5 border border-border text-text font-mono text-sm hover:border-accent hover:text-accent transition-colors">
                    <span>Contact</span>
                    <span class="text-muted group-hover:text-accent transition-colors">↗</span>
                </a>
                <a href="https://github.com" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 px-4 py-3.5 text-muted font-mono text-sm hover:text-text transition-colors">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                    GitHub
                </a>
            </div>

            {{-- Stats: asymmetrical layout --}}
            <div class="flex items-end gap-8">
                <div>
                    <div class="font-mono text-4xl md:text-5xl text-text font-bold leading-none">
                        5<span class="text-accent">+</span>
                    </div>
                    <div class="text-[10px] text-muted uppercase tracking-[0.2em] mt-1">Years EXP</div>
                </div>
                <div class="w-px h-10 bg-border"></div>
                <div>
                    <div class="font-mono text-4xl md:text-5xl text-text font-bold leading-none">
                        30<span class="text-accent">+</span>
                    </div>
                    <div class="text-[10px] text-muted uppercase tracking-[0.2em] mt-1">Projects</div>
                </div>
                <div class="w-px h-10 bg-border"></div>
                <div>
                    <div class="font-mono text-4xl md:text-5xl text-text font-bold leading-none">
                        12<span class="text-accent">k</span>
                    </div>
                    <div class="text-[10px] text-muted uppercase tracking-[0.2em] mt-1">Commits</div>
                </div>
            </div>
        </div>
    </div>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-8 left-6 flex items-center gap-3 opacity-0" style="animation: fadeUp 0.5s ease forwards 1.2s;">
        <div class="w-px h-10 bg-gradient-to-b from-accent to-transparent"></div>
        <span class="font-mono text-[10px] uppercase tracking-[0.3em] text-muted">Scroll</span>
    </div>
</section>

<style>
    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(24px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes slideRight {
        from { opacity: 0; transform: translateX(-105%); }
        to   { opacity: 1; transform: translateX(0); }
    }
    @keyframes spin {
        from { transform: rotate(0deg); }
        to   { transform: rotate(360deg); }
    }
    @keyframes scrollRail {
        from { transform: translateX(0); }
        to   { transform: translateX(-33.333%); }
    }
    #tech-rail {
        animation: scrollRail 30s linear infinite;
    }
    #tech-rail:hover {
        animation-play-state: paused;
    }
    /* Cursor-reactive orb parallax */
    #orb-1 { transition: transform 0.4s cubic-bezier(0.25,0.46,0.45,0.94); }
    #orb-2 { transition: transform 0.5s cubic-bezier(0.25,0.46,0.45,0.94); }
    #orb-3 { transition: transform 0.6s cubic-bezier(0.25,0.46,0.45,0.94); }
</style>

{{-- Animated divider --}}
<div class="relative h-px bg-border mx-6">
    <span class="absolute top-1/2 -translate-y-1/2 left-0 text-accent text-lg"
          style="animation: blink 1s step-end infinite;">&#9608;</span>
</div>

{{-- ===================== ABOUT ===================== --}}
<section id="about" class="py-20 px-6">
    <div class="max-w-2xl mx-auto">
        <h2 class="font-mono text-2xl text-accent mb-8">&gt; about</h2>

        {{-- Terminal intro --}}
        <div class="rounded-lg border border-border bg-surface p-4 font-mono text-sm mb-8">
            <div class="text-accent">$ cat about.md</div>
            <div class="text-muted mt-2">I build things that break (then fix them).</div>
            <div class="text-muted">Current focus: distributed systems + developer tooling.</div>
            <div class="text-accent mt-2">$ exit</div>
        </div>

        {{-- Bio --}}
        <div class="space-y-4 text-text leading-relaxed text-[15px]">
            <p>
                I'm a full-stack engineer with deep experience in Laravel, TypeScript, and cloud-native architectures.
                I enjoy turning complex problems into clean, maintainable systems.
            </p>
            <p>
                When I'm not shipping code, I'm exploring distributed systems, contributing to open-source tooling,
                or writing about engineering practices.
            </p>
        </div>

        {{-- Skills matrix --}}
        <div class="mt-12">
            <h3 class="font-mono text-lg text-text mb-4">&gt; skills</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach([
                    ['label' => 'Backend',   'skills' => ['Laravel', 'PHP', 'Node.js', 'Python', 'REST APIs']],
                    ['label' => 'Frontend',  'skills' => ['TypeScript', 'Vue.js', 'Tailwind', 'Alpine.js']],
                    ['label' => 'DevOps',    'skills' => ['Docker', 'Kubernetes', 'CI/CD', 'AWS', 'PostgreSQL']],
                ] as $group)
                    <div>
                        <div class="font-mono text-sm text-accent mb-2">&gt; {{ $group['label'] }}</div>
                        <div class="flex flex-wrap gap-2">
                            @foreach($group['skills'] as $skill)
                                <code class="text-xs bg-surface border border-border px-2 py-1 rounded-sm text-muted">{{ $skill }}</code>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- Divider --}}
<div class="relative h-px bg-border mx-6">
    <span class="absolute top-1/2 -translate-y-1/2 left-0 text-accent text-lg"
          style="animation: blink 1s step-end infinite;">&#9608;</span>
</div>

{{-- ===================== PROJECTS ===================== --}}
<section id="projects" class="py-20 px-6">
    <div class="max-w-4xl mx-auto">
        <h2 class="font-mono text-2xl text-accent mb-8">&gt; projects</h2>

        {{-- Filters --}}
        <div class="flex flex-wrap items-center gap-3 mb-8">
            <input type="text" placeholder="&gt; search projects..."
                   class="bg-transparent border-b border-border text-text text-sm px-1 py-1 outline-none focus:border-accent transition-colors w-52">
            <div class="flex gap-2">
                @foreach(['All','Featured','Open Source'] as $chip)
                    <button class="text-xs bg-surface border border-border px-3 py-1.5 rounded-sm text-muted hover:border-accent hover:text-accent transition-colors">{{ $chip }}</button>
                @endforeach
            </div>
        </div>

        {{-- Cards grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @php
                $projects = [
                    [
                        'name' => 'Portfolio v2',
                        'desc' => 'Personal portfolio with dark theme, animations, and Breeze auth.',
                        'tech' => ['Laravel','Tailwind','Alpine.js'],
                        'status' => 'Live',
                        'links' => [['Docs','#'],['GitHub','#'],['Demo','#']],
                    ],
                    [
                        'name' => 'API Gateway',
                        'desc' => 'Node-based API gateway with rate limiting and auth middleware.',
                        'tech' => ['Node','Redis','TypeScript'],
                        'status' => 'In Dev',
                        'links' => [['Docs','#'],['GitHub','#'],['Demo','#']],
                    ],
                    [
                        'name' => 'Task Manager',
                        'desc' => 'Full CRUD app with real-time updates via WebSockets.',
                        'tech' => ['Laravel','PostgreSQL','Vue.js'],
                        'status' => 'Live',
                        'links' => [['Docs','#'],['GitHub','#'],['Demo','#']],
                    ],
                    [
                        'name' => 'Log Aggregator',
                        'desc' => 'Centralised logging pipeline for microservices.',
                        'tech' => ['Python','Kafka','Docker'],
                        'status' => 'Archive',
                        'links' => [['Docs','#'],['GitHub','#'],['Demo','#']],
                    ],
                ];
            @endphp

            @foreach($projects as $p)
                <div class="group bg-surface border border-border rounded-sm p-4 hover:-translate-y-[2px] hover:shadow-lg hover:border-l-2 hover:border-l-accent transition-all duration-200">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center gap-2 text-muted">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                            <span class="font-medium text-text">{{ $p['name'] }}</span>
                        </div>
                        <span class="text-[11px] px-2 py-0.5 rounded-sm {{ $p['status'] === 'Live' ? 'bg-green-900/40 text-green-400' : ($p['status'] === 'In Dev' ? 'bg-yellow-900/40 text-yellow-400' : 'bg-border text-muted') }}">
                            {{ $p['status'] }}
                        </span>
                    </div>
                    <p class="text-sm text-muted mb-3 leading-relaxed">{{ $p['desc'] }}</p>
                    <div class="flex flex-wrap gap-1.5 mb-4">
                        @foreach($p['tech'] as $t)
                            <span class="text-xs bg-bg border border-border px-2 py-0.5 rounded-sm text-muted">{{ $t }}</span>
                        @endforeach
                    </div>
                    <div class="flex items-center gap-4 text-xs text-muted">
                        @foreach($p['links'] as $link)
                            <a href="{{ $link[1] }}" class="hover:text-accent transition-colors">{{ $link[0] }}</a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Divider --}}
<div class="relative h-px bg-border mx-6">
    <span class="absolute top-1/2 -translate-y-1/2 left-0 text-accent text-lg"
          style="animation: blink 1s step-end infinite;">&#9608;</span>
</div>

{{-- ===================== EXPERIENCE ===================== --}}
<section id="experience" class="py-20 px-6">
    <div class="max-w-2xl mx-auto">
        <h2 class="font-mono text-2xl text-accent mb-8">&gt; experience</h2>

        <div class="space-y-8">
            @php
                $jobs = [
                    [
                        'company' => 'TechCorp Inc.',
                        'period' => '2023 — Present',
                        'role' => 'Senior Full-Stack Engineer',
                        'bullets' => [
                            'Led migration of monolith to microservices architecture using Laravel + Kubernetes.',
                            'Built real-time analytics dashboard serving 50K+ daily users.',
                            'Reduced API latency by 40% through Redis caching and query optimisation.',
                        ],
                    ],
                    [
                        'company' => 'StartupXYZ',
                        'period' => '2021 — 2023',
                        'role' => 'Full-Stack Developer',
                        'bullets' => [
                            'Developed and shipped 3 customer-facing SaaS products from scratch.',
                            'Implemented CI/CD pipelines reducing deploy time from hours to minutes.',
                            'Mentored 4 junior developers through code reviews and pair programming.',
                        ],
                    ],
                    [
                        'company' => 'Freelance',
                        'period' => '2019 — 2021',
                        'role' => 'Web Developer',
                        'bullets' => [
                            'Delivered 20+ custom Laravel applications for SME clients.',
                            'Built headless CMS solutions with Vue.js frontends.',
                            'Specialised in performance tuning and accessibility compliance.',
                        ],
                    ],
                ];
            @endphp

            @foreach($jobs as $index => $job)
                <div>
                    <div class="flex items-baseline justify-between mb-1">
                        <span class="font-medium text-text">{{ $job['company'] }}</span>
                        <span class="text-sm text-muted">{{ $job['period'] }}</span>
                    </div>
                    <div class="text-accent font-medium mb-3">{{ $job['role'] }}</div>
                    <ul class="space-y-2">
                        @foreach($job['bullets'] as $bullet)
                            <li class="flex items-start gap-2 text-sm text-muted leading-relaxed">
                                <span class="text-accent mt-0.5 shrink-0">&gt;</span>
                                <span>{{ $bullet }}</span>
                            </li>
                        @endforeach
                    </ul>
                    @if($index < count($jobs) - 1)
                        <div class="flex items-center gap-2 my-6">
                            <div class="h-px flex-1 bg-border"></div>
                            <span class="text-accent text-xs">&#9662;</span>
                            <div class="h-px flex-1 bg-border"></div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Divider --}}
<div class="relative h-px bg-border mx-6">
    <span class="absolute top-1/2 -translate-y-1/2 left-0 text-accent text-lg"
          style="animation: blink 1s step-end infinite;">&#9608;</span>
</div>

{{-- ===================== CONTACT ===================== --}}
<section id="contact" class="py-20 px-6">
    <div class="max-w-4xl mx-auto">
        <h2 class="font-mono text-2xl text-accent mb-8">&gt; contact</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            {{-- Left: contact info --}}
            <div class="space-y-5">
                <p class="text-muted text-sm leading-relaxed">
                    Interested in working together? Reach out through any of the channels below.
                </p>
                <div class="space-y-3">
                    @foreach([
                        ['icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'label' => 'Email',   'value' => 'hello@kevin.dev'],
                        ['icon' => 'M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z',              'label' => 'LinkedIn','value' => 'linkedin.com/in/kevin'],
                        ['icon' => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4',                                       'label' => 'GitHub',  'value' => 'github.com/kevin'],
                        ['icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z', 'label' => 'Location','value' => 'Riyadh, SA'],
                    ] as $item)
                        <a href="#" class="flex items-center gap-3 group">
                            <span class="text-accent group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}"/></svg>
                            </span>
                            <div>
                                <div class="text-xs text-muted">{{ $item['label'] }}</div>
                                <div class="font-mono text-sm text-text group-hover:text-accent transition-colors">{{ $item['value'] }}</div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- Right: form --}}
            <form class="space-y-6" onsubmit="event.preventDefault(); this.innerHTML='<div class=\'py-12 text-center\'><div class=\'text-green-400 text-4xl mb-3\'>&#10004;</div><p class=\'text-text\'>Thanks &mdash; I\'ll reply within 24 hours.</p></div>';">
                <div>
                    <input type="text" name="name" placeholder="Name" required
                           class="w-full bg-transparent border-b border-border text-text text-sm px-1 py-2 outline-none focus:border-accent transition-colors placeholder-border">
                </div>
                <div>
                    <input type="email" name="email" placeholder="Email" required
                           class="w-full bg-transparent border-b border-border text-text text-sm px-1 py-2 outline-none focus:border-accent transition-colors placeholder-border">
                </div>
                <div>
                    <textarea name="message" rows="4" placeholder="Message" required
                              class="w-full bg-transparent border-b border-border text-text text-sm px-1 py-2 outline-none focus:border-accent transition-colors resize-none placeholder-border"></textarea>
                </div>
                <button type="submit"
                        class="w-full bg-accent text-white font-medium py-2.5 rounded-sm hover:bg-opacity-90 transition-colors">
                    &gt; Send Message
                </button>
            </form>
        </div>
    </div>
</section>

<style>
    @keyframes blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0; }
    }
</style>

<script>
(function() {
    // === Cursor-reactive gradient orbs (rAF for zero-lag tracking) ===
    const orbs = [
        { el: document.getElementById('orb-1'), factor: 40 },
        { el: document.getElementById('orb-2'), factor: 28 },
        { el: document.getElementById('orb-3'), factor: 18 },
    ];

    let rafId = null;
    let targetX = 0, targetY = 0;

    document.addEventListener('mousemove', (e) => {
        targetX = (e.clientX / window.innerWidth - 0.5) * 2;
        targetY = (e.clientY / window.innerHeight - 0.5) * 2;
        if (!rafId) rafId = requestAnimationFrame(updateOrbs);
    });

    function updateOrbs() {
        orbs.forEach(({ el, factor }) => {
            if (el) el.style.transform = `translate(${targetX * factor}px, ${targetY * factor}px)`;
        });
        rafId = null;
    }
})();
</script>

@endsection
