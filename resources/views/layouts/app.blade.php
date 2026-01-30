<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#32A8B8">

    <title>@yield('title', 'GEMS | Best Child Development Centre in Kerala')</title>

    {{-- SEO Meta Tags --}}
    <meta name="description"
        content="@yield('meta_description', 'GEMS Child Development Centre – Kerala\'s premier center for child development therapies, special education, and holistic care. 10+ years of experience helping children thrive.')">
    <meta name="keywords"
        content="child development, autism therapy, speech therapy, occupational therapy, special education, Kerala, Kochi">
    <meta name="author" content="GEMS Child Development Centre">

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('og_title', 'GEMS  | Best Child Development Centre in Kerala')">
    <meta property="og:description"
        content="@yield('og_description', 'Comprehensive child development therapies and special education programs in Kerala.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', asset('images/og-image.jpg'))">
    <meta property="og:site_name" content="GEMS Child Development Centre">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'GEMS | Best Child Development Centre in Kerala')">
    <meta name="twitter:description" content="Kerala's premier child development center with 10+ years of experience.">

    {{-- Favicon & Apple Touch Icons --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/Logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/Logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/Logo.png') }}">
    <link rel="manifest" href="{{ asset('images/Logo.png') }}">

    {{-- Preload critical assets --}}
    <link rel="preload" href="https://unpkg.com/aos@2.3.1/dist/aos.css" as="style">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    {{-- Fonts --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@400;500;600;700&family=Dancing+Script:wght@600&display=swap"
        rel="stylesheet">

    {{-- VITE --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- AOS Animation --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Custom Styles --}}
    <style>
        :root {
            --primary: #32A8B8;
            --secondary: #EA6F71;
            --accent: #E99D1D;
            --success: #A8CF45;
            --light: #f0fdfa;
            --dark: #0f172a;
        }

        body {
            font-feature-settings: "ss01", "ss02", "cv01", "cv02";
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .font-display {
            font-family: 'Poppins', system-ui, -apple-system, sans-serif;
        }

        .font-handwriting {
            font-family: 'Dancing Script', cursive;
        }

        .font-body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, var(--primary), var(--secondary));
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(to bottom, var(--primary), #ec4899);
        }

        /* Loading animation */
        .loading-spinner {
            display: inline-block;
            width: 80px;
            height: 80px;
        }

        .loading-spinner:after {
            content: " ";
            display: block;
            width: 64px;
            height: 64px;
            margin: 8px;
            border-radius: 50%;
            border: 6px solid var(--primary);
            border-color: var(--primary) transparent var(--primary) transparent;
            animation: loading-spinner 1.2s linear infinite;
        }

        @keyframes loading-spinner {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>

    @stack('head')
</head>

<body class="bg-white text-gray-800 font-body antialiased overflow-x-hidden">

    {{-- Loading overlay --}}
    <div id="loading-overlay"
        class="fixed inset-0 bg-white z-50 flex items-center justify-center transition-opacity duration-300">
        <div class="text-center">
            <div class="loading-spinner"></div>
            <p class="mt-4 text-gray-600 font-medium">Loading GEMS...</p>
        </div>
    </div>

    {{-- Skip to main content --}}
    <a href="#main-content"
        class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-primary text-white px-4 py-2 rounded-lg z-50">
        Skip to main content
    </a>

    {{-- Progress bar --}}
    <div class="fixed top-0 left-0 w-full h-1 bg-gradient-to-r from-[#32A8B8] to-[#EA6F71] z-50 transform origin-left scale-x-0 transition-transform duration-300"
        id="progress-bar"></div>

    {{-- NAVBAR --}}
    @include('partials.navbar')

    {{-- PAGE CONTENT --}}
    <main id="main-content" class="overflow-x-hidden min-h-screen">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('partials.footer')

    {{-- Floating Action Buttons --}}
    <div class="fixed bottom-6 right-6 z-40 flex flex-col items-end gap-3">
        {{-- WhatsApp --}}
        <a href="https://wa.me/917994502501?text=Hello%20GEMS%2C%20I%20need%20information%20about%20your%20services"
            target="_blank" rel="noopener noreferrer" style="background-color:#EA6F71"
            class="group flex items-center gap-3 text-white p-4 rounded-full shadow-xl transition-all duration-300 hover:shadow-2xl hover:scale-105"
            aria-label="Chat on WhatsApp">

            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.149-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.52.149-.174.198-.298.297-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.263.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347" />
            </svg>

            <span class="hidden group-hover:inline-block font-medium pr-2">
                Chat Now
            </span>
        </a>



        {{-- Phone Call --}}
        <a href="tel:+917994502501" style="background-color:#97B41A"
            class="group flex items-center gap-3 hover:bg-[#e45f62] text-white p-4 rounded-full shadow-xl transition-all duration-300 hover:shadow-2xl hover:scale-105"
            aria-label="Call AIMS CDC">


            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>

            <span class="hidden group-hover:inline-block font-medium pr-2">Call Us</span>
        </a>


        {{-- Back to top --}}
        <button onclick="scrollToTop()" id="back-to-top" style="background-color:#32A8B8"
            class="hover:opacity-100 text-white p-4 rounded-full shadow-xl transition-all duration-300 opacity-0 translate-y-4 hover:shadow-2xl hover:scale-105"
            aria-label="Back to top">

            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
            </svg>
        </button>

    </div>

    {{-- AOS Animation --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 100,
            delay: 100,
            mirror: false,
            anchorPlacement: 'top-bottom',
        });

        // DOM ready
        document.addEventListener('DOMContentLoaded', function () {
            // Hide loading overlay
            setTimeout(() => {
                document.getElementById('loading-overlay').style.opacity = '0';
                setTimeout(() => {
                    document.getElementById('loading-overlay').style.display = 'none';
                }, 300);
            }, 800);

            // Scroll progress bar
            const progressBar = document.getElementById('progress-bar');
            const backToTop = document.getElementById('back-to-top');

            window.addEventListener('scroll', () => {
                const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
                const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                const scrolled = (winScroll / height) * 100;

                progressBar.style.transform = `scaleX(${scrolled / 100})`;

                // Show/hide back to top button
                if (winScroll > 300) {
                    backToTop.style.opacity = '1';
                    backToTop.style.transform = 'translateY(0)';
                } else {
                    backToTop.style.opacity = '0';
                    backToTop.style.transform = 'translateY(4px)';
                }
            });

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    const href = this.getAttribute('href');
                    if (href !== '#') {
                        e.preventDefault();
                        const target = document.querySelector(href);
                        if (target) {
                            target.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                    }
                });
            });
        });

        // Scroll to top function
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // Service worker registration for PWA (optional)
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js').catch(error => {
                    console.log('Service Worker registration failed:', error);
                });
            });
        }
    </script>

    {{-- Additional scripts --}}
    @stack('scripts')

    {{-- Analytics (example) --}}
    @if(env('APP_ENV') === 'production')
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXX-X"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() { dataLayer.push(arguments); }
            gtag('js', new Date());
            gtag('config', 'UA-XXXXXXX-X');
        </script>
    @endif
</body>

</html>