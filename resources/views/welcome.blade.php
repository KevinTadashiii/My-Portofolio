@extends('layouts.portofolio')

@section('title', 'Kevin Kanigara — Portofolio Systems Lab')

@section('content')
    <section class="relative mx-auto w-full max-w-[1200px] px-4.5 min-h-[min(820px,calc(100svh-72px))] grid place-items-center pt-[clamp(76px,9vw,124px)] pb-[74px]" id="top" aria-labelledby="hero-title">
        <div class="grid grid-cols-[minmax(0,1.04fr)_minmax(360px,0.96fr)] items-center gap-[clamp(44px,7vw,96px)] w-full">
            <div class="hero__copy">
                <p class="flex items-center gap-2.5 text-accent font-mono text-[0.72rem] font-500 tracking-[0.12em] uppercase">
                    <span class="w-6.5 h-px bg-accent" aria-hidden="true"></span>
                    Software Engineering <span aria-hidden="true">·</span> RPL
                </p>

                <h1 class="mt-7 text-text text-[clamp(4.2rem,8vw,7.2rem)] font-600 tracking-[-0.075em] leading-[0.88]" id="hero-title">
                    Kevin
                    <span class="block mt-2.5">Kanigara<span class="text-accent">.</span></span>
                </h1>

                <p class="mt-4 max-w-[570px] text-muted text-[clamp(1.1rem,1.8vw,1.35rem)] leading-[1.65]">
                    Saya membangun aplikasi dan memahami sistem di baliknya—dari web hingga Linux dan jaringan.
                </p>

                <p class="flex items-center gap-2.5 mt-6 text-text text-[0.9rem]">
                    <span class="w-1.75 h-1.75 flex-0-0-auto rounded-full bg-positive" aria-hidden="true"></span>
                    Siswa RPL <span aria-hidden="true">·</span> SMKN 2 Bandung
                </p>

                <div class="flex flex-wrap items-center gap-[26px] mt-[34px]">
                    <a class="inline-flex min-h-12 items-center justify-center gap-4 rounded-[6px] bg-accent px-[18px] text-bg text-[0.9rem] font-600 no-underline transition-all hover:-translate-y-[2px] hover:bg-[#7be5da]" href="#projects">
                        Lihat proyek <span aria-hidden="true">↘</span>
                    </a>
                    <a class="inline-flex items-center gap-2.5 text-text text-[0.9rem] font-500 underline underline-offset-[5px] decoration-accent/65 no-underline hover:text-accent transition-colors" href="#contact">
                        Hubungi saya <span aria-hidden="true">↗</span>
                    </a>
                </div>
            </div>

            <figure class="relative overflow-hidden m-0 p-[18px_20px_20px] border border-border rounded-[10px] bg-surface" aria-labelledby="topology-caption">
                <div class="relative z-10 flex items-center justify-between gap-3">
                    <span class="font-mono text-[0.67rem] text-muted">Peta minat</span>
                    <span class="font-mono text-[0.67rem] text-muted"><span class="text-accent" aria-hidden="true">○</span> Ilustrasi</span>
                </div>

                <svg class="block w-full h-auto mt-3" viewBox="0 0 620 360" role="img" aria-labelledby="topology-title topology-description">
                    <title id="topology-title">Peta minat Kevin: Server, Software, dan Web</title>
                    <desc id="topology-description">Tiga titik yang saling terhubung menggambarkan fondasi server, logika software, dan pengalaman web.</desc>
                    <defs>
                        <pattern id="topology-grid" width="30" height="30" patternUnits="userSpaceOnUse">
                            <path d="M 30 0 L 0 0 0 30" fill="none" stroke="#29383F" stroke-width="1" />
                        </pattern>
                        <marker id="topology-arrow" markerWidth="8" markerHeight="8" refX="6" refY="4" orient="auto">
                            <path d="M0,0 L8,4 L0,8" fill="none" stroke="#62D8CC" stroke-width="1.2" />
                        </marker>
                    </defs>
                    <rect class="opacity-[0.38]" width="620" height="360" fill="url(#topology-grid)" />
                    <path class="fill-none stroke-accent stroke-[1.5] opacity-[0.85]" d="M116 222 L294 112 L502 222" marker-end="url(#topology-arrow)" />
                    <circle class="fill-bg stroke-border stroke-[1.5]" cx="116" cy="222" r="25" />
                    <circle class="fill-surface-raised stroke-accent stroke-[1.5]" cx="294" cy="112" r="25" />
                    <circle class="fill-bg stroke-border stroke-[1.5]" cx="502" cy="222" r="25" />
                    <text class="fill-muted font-mono" x="116" y="226" text-anchor="middle" style="font-size: 10px">01</text>
                    <text class="fill-muted font-mono" x="294" y="116" text-anchor="middle" style="font-size: 10px">02</text>
                    <text class="fill-muted font-mono" x="502" y="226" text-anchor="middle" style="font-size: 10px">03</text>
                    <text class="fill-text font-sans font-600" x="116" y="278" text-anchor="middle" style="font-size: 17px">Server</text>
                    <text class="fill-muted font-mono" x="116" y="299" text-anchor="middle" style="font-size: 10px; letter-spacing: 0.08em">fondasi</text>
                    <text class="fill-text font-sans font-600" x="294" y="168" text-anchor="middle" style="font-size: 17px">Software</text>
                    <text class="fill-muted font-mono" x="294" y="189" text-anchor="middle" style="font-size: 10px; letter-spacing: 0.08em">logika</text>
                    <text class="fill-text font-sans font-600" x="502" y="278" text-anchor="middle" style="font-size: 17px">Web</text>
                    <text class="fill-muted font-mono" x="502" y="299" text-anchor="middle" style="font-size: 10px; letter-spacing: 0.08em">pengalaman</text>
                </svg>

                <figcaption class="max-w-[430px] mx-auto mt-0 text-muted text-[0.82rem] leading-[1.55] text-center" id="topology-caption">
                    Tiga bagian yang saling terhubung: fondasi, logika, dan pengalaman manusia.
                </figcaption>
            </figure>
        </div>

        <a class="absolute right-0 bottom-[25px] inline-flex items-center gap-[11px] text-muted font-mono text-[0.65rem] tracking-[0.08em] no-underline uppercase hidden lg:flex" href="#projects">
            <span class="w-[34px] h-px bg-border" aria-hidden="true"></span>
            Gulir untuk melihat karya
        </a>
    </section>

    <section class="py-[clamp(78px,9vw,116px)] border-t border-border px-4.5 mx-auto w-full max-w-[1200px] scroll-mt-22.5" id="projects" aria-labelledby="projects-title">
        <div class="mb-[42px]">
            <p class="mb-4 text-accent font-mono text-[0.72rem] font-500 tracking-[0.12em] uppercase">01 / Proyek terpilih</p>
            <div class="grid grid-cols-[minmax(0,1.2fr)_minmax(220px,0.55fr)] items-end gap-[34px]">
                <h2 class="max-w-[780px] m-0 text-text text-[clamp(2.1rem,4vw,3.45rem)] font-500 tracking-[-0.055em] leading-[1.08]" id="projects-title">Satu ruang untuk merangkai semuanya.</h2>
                <p class="max-w-[360px] mb-1 text-muted text-[0.96rem] leading-[1.65]">Proyek yang bisa ditelusuri langsung dari kode dan proses pembuatannya.</p>
            </div>
        </div>

        <article class="grid grid-cols-[minmax(0,1fr)_minmax(0,0.87fr)] overflow-hidden border border-border rounded-[10px] bg-surface">
            <div class="p-[clamp(28px,4.5vw,54px)]">
                <p class="mb-[18px] text-accent font-mono text-[0.72rem] tracking-[0.04em]">Proyek personal <span aria-hidden="true">·</span> Laravel</p>
                <h3 class="m-0 text-text text-[clamp(1.8rem,3.2vw,2.55rem)] font-500 tracking-[-0.05em] leading-[1.1]">Portofolio Systems Lab</h3>
                <p class="max-w-[540px] mt-5 text-muted text-base leading-[1.72]">
                    Portofolio ini merangkum karya dan perjalanan belajar saya, sekaligus menunjukkan hubungan antara fondasi server, logika software, dan antarmuka web.
                </p>

                <div class="mt-[30px] pl-4 border-l border-accent">
                    <p class="text-muted font-mono text-[0.72rem] font-500 tracking-[0.12em] uppercase">Fokus proyek</p>
                    <p class="mt-2 text-text text-[0.9rem] leading-[1.55]">Merancang struktur halaman dan antarmuka yang membuat karya serta proses belajar mudah dipahami.</p>
                </div>

                <div class="flex flex-wrap gap-2 mt-[26px]" aria-label="Teknologi yang digunakan">
                    <span class="px-2.5 py-1.5 border border-border rounded-[4px] text-muted font-mono text-[0.7rem]">Laravel</span>
                    <span class="px-2.5 py-1.5 border border-border rounded-[4px] text-muted font-mono text-[0.7rem]">Blade</span>
                    <span class="px-2.5 py-1.5 border border-border rounded-[4px] text-muted font-mono text-[0.7rem]">Vite</span>
                </div>

                <a class="inline-flex items-center gap-2.5 mt-7 text-text text-[0.9rem] font-500 underline underline-offset-[5px] decoration-accent/65 hover:text-accent transition-colors" href="https://github.com/KevinTadashiii/portofolio" target="_blank" rel="noopener noreferrer">
                    Lihat repositori <span aria-hidden="true">↗</span>
                </a>
            </div>

            <figure class="flex min-h-0 flex-col justify-center m-0 p-[clamp(28px,4vw,46px)] border-l border-border bg-surface-raised" aria-labelledby="project-flow-caption">
                <p class="text-muted font-mono text-[0.72rem] font-500 tracking-[0.12em] uppercase">Alur halaman <span aria-hidden="true">/</span> dari repo ini</p>
                <ol class="grid gap-0 mt-[30px] mb-6 p-0 list-none" style="font-size: 10px">
                    <li class="relative grid min-h-[74px] grid-cols-[36px_minmax(0,1fr)_auto] items-center gap-[13px]">
                        <span class="relative z-10 grid w-[35px] h-[35px] place-items-center border border-accent rounded-full bg-surface-raised text-accent font-mono text-[0.63rem]">01</span>
                        <span class="text-text text-[0.9rem] font-500">Route</span>
                        <code class="text-muted font-mono text-[0.67rem] text-right">GET /</code>
                    </li>
                    <li class="relative grid min-h-[74px] grid-cols-[36px_minmax(0,1fr)_auto] items-center gap-[13px]">
                        <span class="relative z-10 grid w-[35px] h-[35px] place-items-center border border-border rounded-full bg-surface-raised text-accent font-mono text-[0.63rem]">02</span>
                        <span class="text-text text-[0.9rem] font-500">Blade view</span>
                        <code class="text-muted font-mono text-[0.67rem] text-right">welcome</code>
                    </li>
                    <li class="relative grid min-h-[74px] grid-cols-[36px_minmax(0,1fr)_auto] items-center gap-[13px]">
                        <span class="relative z-10 grid w-[35px] h-[35px] place-items-center border border-border rounded-full bg-surface-raised text-accent font-mono text-[0.63rem]">03</span>
                        <span class="text-text text-[0.9rem] font-500">Halaman web</span>
                        <code class="text-muted font-mono text-[0.67rem] text-right">untuk pengunjung</code>
                    </li>
                </ol>
                <figcaption class="max-w-[340px] text-muted text-[0.8rem] leading-[1.6]" id="project-flow-caption">
                    Ilustrasi alur nyata halaman utama: route Laravel merender tampilan Blade untuk pengunjung.
                </figcaption>
            </figure>
        </article>
    </section>

    <section class="py-[clamp(78px,9vw,116px)] border-t border-border px-4.5 mx-auto w-full max-w-[1200px] scroll-mt-22.5 bg-[#0E161A]" id="about" aria-labelledby="about-title">
        <div class="mb-[42px]">
            <p class="mb-4 text-accent font-mono text-[0.72rem] font-500 tracking-[0.12em] uppercase">02 / Tentang</p>
            <div class="grid grid-cols-[minmax(0,1.2fr)_minmax(220px,0.55fr)] items-end gap-[34px]">
                <h2 class="max-w-[780px] m-0 text-text text-[clamp(2.1rem,4vw,3.45rem)] font-500 tracking-[-0.055em] leading-[1.08]" id="about-title">Belajar dengan memahami hubungan antarbagian.</h2>
                <p class="max-w-[360px] mb-1 text-muted text-[0.96rem] leading-[1.65]">Dari fondasi sistem sampai pengalaman yang dipakai orang.</p>
            </div>
        </div>

        <div class="grid grid-cols-[minmax(0,1.05fr)_minmax(280px,0.75fr)] gap-[clamp(44px,9vw,130px)]">
            <div class="max-w-[650px]">
                <p class="m-0 text-text text-[clamp(1rem,1.4vw,1.12rem)] leading-[1.8]">
                    Saya siswa Rekayasa Perangkat Lunak (RPL) di SMKN 2 Bandung. Saya tertarik pada bagaimana sebuah pengalaman web disusun, bagaimana software menghubungkan bagian-bagiannya, dan apa yang membuatnya berjalan.
                </p>
                <p class="mt-[18px] text-muted text-[clamp(1rem,1.4vw,1.12rem)] leading-[1.8]">
                    Saya belajar dengan membangun proyek, lalu menelusuri keputusan di baliknya. Web menjadi titik temu yang menarik antara antarmuka, kode, dan infrastruktur.
                </p>
            </div>

            <div class="grid gap-[26px]">
                <div class="focus-group">
                    <p class="mb-3 font-mono text-[0.72rem] font-500 tracking-[0.12em] uppercase text-accent">Yang saya gunakan</p>
                    <ul class="flex flex-wrap gap-[7px] m-0 p-0 list-none" aria-label="Teknologi yang digunakan dalam proyek web">
                        <li class="px-2.5 py-1.5 border border-border rounded-[4px] text-text font-mono text-[0.7rem]">Laravel</li>
                        <li class="px-2.5 py-1.5 border border-border rounded-[4px] text-text font-mono text-[0.7rem]">PHP</li>
                        <li class="px-2.5 py-1.5 border border-border rounded-[4px] text-text font-mono text-[0.7rem]">Blade</li>
                        <li class="px-2.5 py-1.5 border border-border rounded-[4px] text-text font-mono text-[0.7rem]">Alpine.js</li>
                        <li class="px-2.5 py-1.5 border border-border rounded-[4px] text-text font-mono text-[0.7rem]">Vite</li>
                    </ul>
                </div>

                <div class="focus-group pt-5 border-t border-border">
                    <p class="mb-3 font-mono text-[0.72rem] font-500 tracking-[0.12em] uppercase text-accent">Yang sedang saya eksplorasi</p>
                    <ul class="flex flex-wrap gap-[7px] m-0 p-0 list-none" aria-label="Area yang sedang dieksplorasi">
                        <li class="px-2.5 py-1.5 border border-border rounded-[4px] text-muted font-mono text-[0.7rem]">Linux</li>
                        <li class="px-2.5 py-1.5 border border-border rounded-[4px] text-muted font-mono text-[0.7rem]">Jaringan</li>
                        <li class="px-2.5 py-1.5 border border-border rounded-[4px] text-muted font-mono text-[0.7rem]">Home lab</li>
                        <li class="px-2.5 py-1.5 border border-border rounded-[4px] text-muted font-mono text-[0.7rem]">Pemrograman low-level</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-[clamp(78px,9vw,116px)] border-t border-border px-4.5 mx-auto w-full max-w-[1200px] scroll-mt-22.5" id="journey" aria-labelledby="journey-title">
        <div class="mb-[42px]">
            <p class="mb-4 text-accent font-mono text-[0.72rem] font-500 tracking-[0.12em] uppercase">03 / Perjalanan</p>
            <div class="grid grid-cols-[minmax(0,1.2fr)_minmax(220px,0.55fr)] items-end gap-[34px]">
                <h2 class="max-w-[780px] m-0 text-text text-[clamp(2.1rem,4vw,3.45rem)] font-500 tracking-[-0.055em] leading-[1.08]" id="journey-title">Terus belajar, satu proyek demi satu.</h2>
                <p class="max-w-[360px] mb-1 text-muted text-[0.96rem] leading-[1.65]">Perjalanan saya saat ini berpusat pada belajar lewat praktik.</p>
            </div>
        </div>

        <ol class="relative m-0 pl-[26px] border-l border-border list-none">
            <li class="relative grid grid-cols-[minmax(200px,0.72fr)_minmax(0,1fr)] gap-[38px] py-[3px] pl-6">
                <span class="absolute top-[5px] left-[-31px] w-[10px] h-[10px] border-2 border-accent rounded-full bg-bg" aria-hidden="true"></span>
                <div class="journey-item__meta">
                    <p class="mb-[9px] font-mono text-[0.72rem] font-500 tracking-[0.12em] uppercase text-accent">Saat ini</p>
                    <h3 class="m-0 text-text text-[1.16rem] font-500">Rekayasa Perangkat Lunak</h3>
                    <p class="mt-[7px] text-muted text-[0.9rem]">SMKN 2 Bandung</p>
                </div>
                <p class="max-w-[540px] m-0 text-muted text-[0.94rem] leading-[1.7]">
                    Mengembangkan dasar pengembangan software dan menerapkannya lewat proyek pribadi, sambil mengeksplorasi sistem yang mendukung aplikasi.
                </p>
            </li>
        </ol>
    </section>

    <section class="border-t border-border border-b border-border bg-surface px-4.5 mx-auto w-full max-w-[1200px] scroll-mt-22.5" id="contact" aria-labelledby="contact-title">
        <div class="flex min-h-[300px] items-center justify-between gap-[44px] py-[70px]">
            <div class="contact-section__copy">
                <p class="mb-[15px] font-mono text-[0.72rem] font-500 tracking-[0.12em] uppercase text-accent">04 / Kontak</p>
                <h2 class="m-0 text-text text-[clamp(2.25rem,4.4vw,3.65rem)] font-500 tracking-[-0.055em] leading-[1.08]" id="contact-title">Mari mulai percakapan.</h2>
                <p class="max-w-[510px] mt-4 text-muted text-[0.96rem] leading-[1.65]">Saya terbuka untuk bertukar pikiran tentang web, software, dan hal-hal yang sedang saya pelajari.</p>
            </div>

            <a class="flex-0-0-auto inline-flex min-h-12 items-center justify-center gap-4 rounded-[6px] bg-accent px-[18px] text-bg text-[0.9rem] font-600 no-underline transition-all hover:-translate-y-[2px] hover:bg-[#7be5da]" href="https://github.com/KevinTadashiii" target="_blank" rel="noopener noreferrer">
                Temukan saya di GitHub <span aria-hidden="true">↗</span>
            </a>
        </div>
    </section>
@endsection