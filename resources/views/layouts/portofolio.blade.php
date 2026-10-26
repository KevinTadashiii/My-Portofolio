<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#0B1115">
    <meta name="description" content="Portofolio Kevin Kanigara, siswa RPL yang membangun aplikasi dan mengeksplorasi sistem di baliknya.">

    <title>@yield('title', 'Kevin Kanigara — Systems Lab')</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-w-[320px] overflow-x-hidden antialiased">
    <a class="sr-only focus:not-sr-only focus:top-3 focus:left-3 focus:z-[100] focus:translate-y-0 fixed top-3 left-3 translate-y-[-150%] rounded-[6px] bg-accent px-4 py-3 text-bg font-600 focus-visible:outline-2 focus-visible:outline-accent focus-visible:outline-offset-4" href="#main-content">Langsung ke konten</a>

    <header class="sticky top-0 z-20 border-b border-border bg-bg/92 backdrop-blur-[16px]">
        <div class="flex min-h-18 items-center justify-between gap-7 px-4.5 mx-auto w-full max-w-[1200px]">
            <a class="inline-flex flex-0-0-auto items-center gap-2.5 text-inherit no-underline" href="#top" aria-label="Kevin Kanigara, kembali ke bagian atas">
                <span class="grid w-7.5 h-7.5 place-items-center border border-accent rounded-[7px] text-accent font-mono text-[0.76rem] tracking-[-0.1em]" aria-hidden="true">kk</span>
                <span class="text-text font-mono text-[0.78rem] tracking-[0.025em]">systems lab</span>
            </a>

            <nav class="flex items-center gap-[clamp(16px,3vw,36px)]" aria-label="Navigasi utama">
                <a class="relative py-2 text-muted text-[0.84rem] no-underline transition-colors hover:text-text" href="#about">Tentang</a>
                <a class="relative py-2 text-muted text-[0.84rem] no-underline transition-colors hover:text-text" href="#projects">Proyek</a>
                <a class="relative py-2 text-muted text-[0.84rem] no-underline transition-colors hover:text-text" href="#journey">Perjalanan</a>
                <a class="relative py-2 text-muted text-[0.84rem] no-underline transition-colors hover:text-text" href="#contact">Kontak</a>
            </nav>
        </div>
    </header>

    <main id="main-content">
        @yield('content')
    </main>

    <footer class="text-muted">
        <div class="flex min-h-[78px] items-center justify-between gap-5 px-4.5 mx-auto w-full max-w-[1200px] font-mono text-[0.68rem]">
            <span>&copy; {{ date('Y') }} Kevin Kanigara</span>
            <a class="text-text no-underline hover:text-accent" href="#top">Systems Lab <span aria-hidden="true">↑</span></a>
            <span>Dirangkai dengan Laravel</span>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>