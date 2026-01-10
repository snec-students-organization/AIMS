<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1FA7A3">

    <title>@yield('title', 'GEMS | Best Child Development Centre in Kerala')</title>

    {{-- SEO --}}
    <meta name="description" content="@yield('meta_description', 'GEMS Child Development Centre – Kerala’s trusted center for child development therapies and holistic care.')">
    <meta name="author" content="GEMS Child Development Centre">

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('og_title', 'GEMS | Best Child Development Centre in Kerala')">
    <meta property="og:description" content="@yield('og_description', 'Comprehensive child development therapies in Kerala.')">
    <meta property="og:image" content="@yield('og_image', asset('images/og-image.jpg'))">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('images/Logo.png') }}">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- GLOBAL BRAND STYLES --}}
    <style>
        :root {
            --brand-teal: #1FA7A3;
            --brand-teal-light: #2CB6B3;
            --brand-green: #8BC53F;

            --primary: var(--brand-teal);
            --secondary: #33B98A;
            --accent: var(--brand-green);
            --dark: #0f172a;
            --light: #f0fdfa;
        }

        body {
            font-family: 'Inter', system-ui, sans-serif;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
        }

        /* BRAND GRADIENT */
        .brand-gradient {
            background: linear-gradient(
                135deg,
                #1FA7A3 0%,
                #33B98A 50%,
                #8BC53F 100%
            );
        }

        /* SCROLLBAR */
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, #1FA7A3, #33B98A, #8BC53F);
            border-radius: 5px;
        }

        /* LOADER */
        .loading-spinner {
            width: 80px;
            height: 80px;
        }
        .loading-spinner:after {
            content: "";
            display: block;
            width: 64px;
            height: 64px;
            margin: 8px;
            border-radius: 50%;
            border: 6px solid #1FA7A3;
            border-color: #1FA7A3 transparent #8BC53F transparent;
            animation: spin 1.2s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>

    @stack('head')
</head>

<body class="bg-white text-gray-800 antialiased">

{{-- LOADING OVERLAY --}}
<div id="loading-overlay" class="fixed inset-0 bg-white z-50 flex items-center justify-center transition-opacity duration-300">
    <div class="text-center">
        <div class="loading-spinner"></div>
        <p class="mt-4 text-[#1FA7A3] font-semibold">Loading GEMS…</p>
    </div>
</div>

{{-- SCROLL PROGRESS --}}
<div id="progress-bar"
     class="fixed top-0 left-0 w-full h-1 brand-gradient z-50 transform origin-left scale-x-0 transition-transform"></div>

{{-- NAVBAR --}}
@include('partials.navbar')

{{-- PAGE CONTENT --}}
<main id="main-content" class="min-h-screen">
    @yield('content')
</main>

{{-- FOOTER --}}
@include('partials.footer')

{{-- FLOATING ACTION BUTTONS --}}
<div class="fixed bottom-6 right-6 z-40 flex flex-col gap-3">

    {{-- WhatsApp --}}
    <a href="https://wa.me/917994502501"
   target="_blank"
   aria-label="Chat on WhatsApp"
   class="bg-[#33B98A] hover:bg-[#2FA97F] text-white p-4 rounded-full shadow-xl transition-all hover:scale-105 flex items-center justify-center">
    
    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.149-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.52.149-.174.198-.298.297-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.263.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347M12.051 21.785h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.76.982.998-3.675-.236-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.9 6.994c-.004 5.45-4.438 9.88-9.888 9.88"/>
    </svg>
</a>


    {{-- Phone --}}
    <a href="tel:+917994502501"
       class="bg-[#1FA7A3] hover:bg-[#179B97] text-white p-4 rounded-full shadow-xl transition-all hover:scale-105">
        📞
    </a>

    {{-- Back to Top --}}
    <button onclick="scrollToTop()"
            id="back-to-top"
            class="brand-gradient text-white p-4 rounded-full shadow-xl opacity-0 translate-y-4 transition-all">
        ↑
    </button>
</div>

{{-- AOS --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init({ duration: 800, once: true });

    document.addEventListener('DOMContentLoaded', () => {
        setTimeout(() => {
            const loader = document.getElementById('loading-overlay');
            loader.style.opacity = '0';
            setTimeout(() => loader.remove(), 300);
        }, 700);

        const progress = document.getElementById('progress-bar');
        const backTop = document.getElementById('back-to-top');

        window.addEventListener('scroll', () => {
            const scrolled = window.scrollY / (document.body.scrollHeight - window.innerHeight);
            progress.style.transform = `scaleX(${scrolled})`;

            backTop.style.opacity = window.scrollY > 300 ? '1' : '0';
            backTop.style.transform = window.scrollY > 300 ? 'translateY(0)' : 'translateY(4px)';
        });
    });

    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
</script>

@stack('scripts')

</body>
</html>
