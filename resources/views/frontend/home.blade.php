@extends('layouts.app')

@section('content')

@push('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-teal: #006684;
            --secondary-orange: #e99e5a;
            --text-dark: #1a1a1a;
            --soft-bg: #f8fafc;
            --gradient-1: linear-gradient(135deg, #00A79D 0%, #32A8B8 100%);
            --gradient-2: linear-gradient(135deg, #EA6F71 0%, #FF9A8B 100%);
            --gradient-3: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        body {
            font-family: 'Outfit', sans-serif;
            overflow-x: hidden;
        }

        .hero-section {
            position: relative;
            overflow: hidden;
            background: transparent;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        /* Animated Gradient Background */
        .gradient-bg {
            position: fixed;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                45deg,
                rgba(0, 167, 157, 0.08) 0%,
                rgba(50, 168, 184, 0.05) 25%,
                rgba(234, 111, 113, 0.08) 50%,
                rgba(102, 126, 234, 0.05) 75%,
                rgba(118, 75, 162, 0.08) 100%
            );
            animation: gradientShift 15s ease infinite;
            z-index: -2;
        }

        /* Fixed Global Background Image */
        .page-bg-image {
            position: fixed;
            inset: 0;
            z-index: -3;
            background-image: url('{{ asset("images/image8.jpg") }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            animation: slowZoom 20s infinite alternate ease-in-out;
        }

        /* Animated Backdrop Blobs */
        .blur-blobs {
            position: fixed;
            inset: 0;
            z-index: -2;
            overflow: hidden;
            pointer-events: none;
        }

        .blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(100px);
            opacity: 0.15;
            animation: floatBlob 25s infinite alternate ease-in-out;
        }

        .blob-1 {
            width: 600px;
            height: 600px;
            background: #32A8B8;
            top: -10%;
            left: -10%;
            animation-duration: 30s;
        }

        .blob-2 {
            width: 500px;
            height: 500px;
            background: #EA6F71;
            bottom: -5%;
            right: -5%;
            animation-duration: 35s;
            animation-delay: -5s;
        }

        .blob-3 {
            width: 400px;
            height: 400px;
            background: #E99D1D;
            top: 40%;
            left: 50%;
            animation-duration: 40s;
            animation-delay: -10s;
        }

        .page-bg-overlay {
            position: fixed;
            inset: 0;
            z-index: -2;
            background: linear-gradient(
                to bottom,
                rgba(255, 255, 255, 0.85) 0%,
                rgba(255, 255, 255, 0.75) 40%,
                rgba(255, 255, 255, 0.9) 100%
            );
        }

        /* Floating Particles */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            background: rgba(0, 102, 132, 0.05);
            border-radius: 50%;
            animation: float 15s infinite ease-in-out;
        }

        /* Content Container */
        .hero-content {
            position: relative;
            z-index: 10;
            padding: 4rem 2rem;
            max-width: 1400px;
            margin: 0 auto;
            width: 100%;
        }

        /* Modern Title with Gradient Animation */
        .hero-title {
            background: linear-gradient(45deg, 
                #00A79D 0%, 
                #32A8B8 25%, 
                #EA6F71 50%, 
                #FF9A8B 75%, 
                #667eea 100%
            );
            background-size: 300% 300%;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: 800;
            line-height: 1.1;
            animation: gradientText 8s ease infinite;
            margin-bottom: 2rem;
        }

        /* Modern Description */
        .hero-description {
            color: rgba(26, 26, 26, 0.7);
            font-size: 1.25rem;
            line-height: 1.6;
            max-width: 600px;
            margin-bottom: 3rem;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s ease forwards;
        }

        /* Modern Button with Hover Effects */
        .btn-modern {
            position: relative;
            background: linear-gradient(45deg, #e99e5a, #ff7a45);
            color: white;
            padding: 1.25rem 3rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            border: none;
            overflow: hidden;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 10px 30px rgba(233, 158, 90, 0.3);
        }

        .btn-modern::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }

        .btn-modern:hover::before {
            left: 100%;
        }

        .btn-modern:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(233, 158, 90, 0.4);
        }

        /* Modern Image Container */
        .modern-image-container {
            position: relative;
            perspective: 1000px;
        }

        .image-3d {
            width: 100%;
            height: 500px;
            border-radius: 20px;
            overflow: hidden;
            transform-style: preserve-3d;
            transform: rotateY(-10deg) rotateX(5deg);
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.3),
                0 0 0 1px rgba(255, 255, 255, 0.1);
            animation: floatImage 6s ease-in-out infinite;
            transition: transform 0.5s ease;
        }

        .image-3d:hover {
            transform: rotateY(-5deg) rotateX(0deg);
        }

        /* Glass Morphism Card */
        .glass-card {
            background: rgba(0, 102, 132, 0.03);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 2rem;
            border: 1px solid rgba(0, 102, 132, 0.1);
            box-shadow: 0 8px 32px rgba(0, 102, 132, 0.05);
            margin-top: 2rem;
            animation: slideInUp 0.8s ease forwards;
            animation-delay: 0.3s;
            opacity: 0;
        }

        /* Stats Counter */
        .stat-item {
            text-align: center;
            padding: 1rem;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            background: linear-gradient(45deg, #00A79D, #32A8B8);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        /* Animations */
        @keyframes gradientShift {
            0% {
                transform: translate(0, 0) rotate(0deg);
            }
            50% {
                transform: translate(-10%, -10%) rotate(180deg);
            }
            100% {
                transform: translate(0, 0) rotate(360deg);
            }
        }

        @keyframes floatBlob {
            0% {
                transform: translate(0, 0) scale(1) rotate(0deg);
            }
            33% {
                transform: translate(50px, 100px) scale(1.1) rotate(30deg);
            }
            66% {
                transform: translate(-50px, 50px) scale(0.9) rotate(-30deg);
            }
            100% {
                transform: translate(0, 0) scale(1) rotate(0deg);
            }
        }

        @keyframes slowZoom {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(1.08);
            }
        }

        @keyframes gradientText {
            0%, 100% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(180deg);
            }
        }

        @keyframes floatImage {
            0%, 100% {
                transform: rotateY(-10deg) rotateX(5deg) translateY(0);
            }
            50% {
                transform: rotateY(-10deg) rotateX(5deg) translateY(-20px);
            }
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Swiper Customization */
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            opacity: 0 !important;
            transition: opacity 0.5s ease;
        }

        .swiper-slide-active {
            opacity: 1 !important;
        }

        .swiper-pagination {
            bottom: 40px !important;
        }

        .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background: rgba(0, 102, 132, 0.2);
            opacity: 1;
            transition: all 0.3s ease;
        }

        .swiper-pagination-bullet-active {
            background: #e99e5a;
            width: 30px;
            border-radius: 10px;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {

    /* REMOVE GAP BETWEEN NAVBAR & HERO */
    .hero-section {
        min-height: 100vh;
        padding-top: 0 !important;
        margin-top: 0 !important;
        align-items: stretch;
    }

    /* REMOVE HERO CONTENT TOP PADDING */
    .hero-content {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }

    /* MAKE HERO TOUCH NAVBAR */
    .hero-mobile-wrapper {
        min-height: 100vh;
        margin-top: 0 !important;
    }

    /* SAFETY FIX FOR SUB-PIXEL GAPS */
    .hero-section {
        position: relative;
        top: -1px;
    }
}


        /* Loading Animation */
        .loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease;
        }

        .loader-content {
            text-align: center;
        }

        .loader-text {
            color: #1a1a1a;
            font-size: 1.5rem;
            margin-bottom: 2rem;
            opacity: 0.8;
        }

        .loader-bar {
            width: 300px;
            height: 4px;
            background: rgba(0, 0, 0, 0.05);
            border-radius: 2px;
            overflow: hidden;
        }

        .loader-progress {
            width: 0%;
            height: 100%;
            background: linear-gradient(90deg, #00A79D, #e99e5a);
            transition: width 0.3s ease;
        }
        @media (max-width: 768px) {

    /* HERO BACKGROUND IMAGE */
    .hero-mobile-wrapper {
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Hide separate image container */
    .hero-mobile-wrapper .modern-image-container {
        position: absolute;
        inset: 0;
        z-index: 1;
    }

    .hero-mobile-wrapper .image-3d {
        height: 100%;
        width: 100%;
        border-radius: 0;
        transform: none !important;
        animation: none;
    }

    .hero-mobile-wrapper .image-3d img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Dark overlay for readability */
    .hero-mobile-wrapper::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(
            to bottom,
            rgba(255,255,255,0.85) 0%,
            rgba(255,255,255,0.65) 40%,
            rgba(255,255,255,0.35) 100%
        );
        z-index: 2;
    }

    /* TEXT CONTENT */
    .hero-mobile-wrapper > div:first-child {
        position: relative;
        z-index: 3;
        text-align: center;
        padding: 0 1.25rem;
    }

    .hero-title {
        font-size: 2.3rem;
        line-height: 1.15;
        color: #0d9488;
        background: none;
    }

    .hero-description {
        font-size: 1rem;
        margin: 1rem auto 1.75rem;
        color: #374151;
        max-width: 90%;
    }

    /* CTA BUTTON */
    .btn-modern {
        padding: 0.9rem 2.5rem;
        font-size: 1rem;
        border-radius: 999px;
        margin: 0 auto;
    }

    /* Disable background effects */
    .particles,
    .gradient-bg {
        display: none;
    }
}
/* Loader Logo */
.loader-logo {
    width: 110px;
    height: 110px;
    margin: 0 auto 1.25rem;
    display: flex;
    align-items: center;
    justify-content: center;
    animation: logoFloat 2.5s ease-in-out infinite;
}

.loader-logo img {
    width: 100%;
    height: auto;
    object-fit: contain;
    filter: drop-shadow(0 10px 25px rgba(0,0,0,0.15));
}

/* Subtle floating animation */
@keyframes logoFloat {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}
.loader-logo::before {
    content: "";
    position: absolute;
    width: 140px;
    height: 140px;
    background: radial-gradient(circle, rgba(50,168,184,0.25), transparent 70%);
    filter: blur(20px);
    z-index: -1;
}


    </style>
@endpush

{{-- Loading Screen --}}
{{-- Loading Screen --}}
<div class="loader" id="loader">
    <div class="loader-content">
        
        {{-- Logo --}}
        <div class="loader-logo">
            <img 
                src="{{ asset('images/Logo.png') }}" 
                alt="GEMS Logo"
            >
        </div>

        

        {{-- Progress Bar --}}
        <div class="loader-bar">
            <div class="loader-progress"></div>
        </div>

    </div>
</div>


{{-- Global Background --}}
<div class="page-bg-image"></div>
<div class="page-bg-overlay"></div>
<div class="gradient-bg"></div>
<div class="blur-blobs">
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    <div class="blob blob-3"></div>
</div>
<div class="particles" id="particles"></div>

{{-- ================= MODERN HERO SECTION ================= --}}
<section class="hero-section">
    {{-- Main Content --}}
    <div class="hero-content">
        <div class="swiper modernSwiper">
            <div class="swiper-wrapper">
                
                {{-- SLIDE 1 --}}
                <div class="swiper-slide">
                   <div class="hero-mobile-wrapper grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                        {{-- Left Content --}}
                        <div>
                            <h1 class="hero-title text-5xl lg:text-7xl xl:text-8xl">
                                Precision Care for<br>
                                the <span class="text-gray-900">Human</span><br>
                                Experience
                            </h1>
                            
                            <p class="hero-description">
                                Betterly Wellness reimagines wellbeing through a thoughtful blend 
                                of advanced science and genuine emotional understanding.
                            </p>
                            
                            <a href="/contact" class="btn-modern">
                                <span>Talk To Us</span>
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M5 12h14M12 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>

                        {{-- Right Image --}}
                        <div class="modern-image-container">
                            <div class="image-3d">
                                <img src="{{ asset('images/image7.jpg') }}" 
                                     alt="Wellness Experience"
                                     class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- SLIDE 2 --}}
                <div class="swiper-slide">
                    <div class="hero-mobile-wrapper grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                        {{-- Left Content --}}
                        <div>
                            <h1 class="hero-title text-5xl lg:text-7xl xl:text-8xl">
                                Expert-Led<br>
                                <span class="text-gray-900">Growth</span><br>
                                Journeys
                            </h1>
                            
                            <p class="hero-description">
                                Join thousands of families who trust our certified specialists 
                                for personalized developmental pathways and lasting progress.
                            </p>
                            
                            <a href="/contact" class="btn-modern">
                                <span>Talk To Us</span>
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M5 12h14M12 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>

                        {{-- Right Image --}}
                        <div class="modern-image-container">
                            <div class="image-3d">
                                <img src="{{ asset('images/image6.jpg') }}" 
                                     alt="Expert Care"
                                     class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- SLIDE 3 --}}
                <div class="swiper-slide">
                    <div class="hero-mobile-wrapper grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                        {{-- Left Content --}}
                        <div>
                            <h1 class="hero-title text-5xl lg:text-7xl xl:text-8xl">
                                Holistic<br>
                                <span class="text-gray-900">Support</span><br>
                                Systems
                            </h1>
                            
                            <p class="hero-description">
                                From early interventions to specialized therapies, we provide 
                                comprehensive care that evolves with your family's needs.
                            </p>
                            
                            <a href="/services" class="btn-modern">
                                <span>Talk To Us</span>
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M5 12h14M12 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>

                        {{-- Right Image --}}
                        <div class="modern-image-container">
                            <div class="image-3d">
                                <img src="{{ asset('images/image4.jpg') }}" 
                                     alt="Child Development"
                                     class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Pagination --}}
            <div class="swiper-pagination"></div>
        </div>

        
    </div>
</section>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Loader
            const loader = document.getElementById('loader');
            const progressBar = document.querySelector('.loader-progress');
            
            // Simulate loading progress
            let progress = 0;
            const loadInterval = setInterval(() => {
                progress += Math.random() * 20;
                if (progress >= 100) {
                    progress = 100;
                    clearInterval(loadInterval);
                    setTimeout(() => {
                        loader.style.opacity = '0';
                        setTimeout(() => {
                            loader.style.display = 'none';
                        }, 500);
                    }, 300);
                }
                progressBar.style.width = `${progress}%`;
            }, 150);

            // Create Particles
            const particlesContainer = document.getElementById('particles');
            const particleCount = window.innerWidth < 768 ? 20 : 50;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                
                // Random properties
                const size = Math.random() * 10 + 5;
                const x = Math.random() * 100;
                const y = Math.random() * 100;
                const duration = Math.random() * 20 + 10;
                const delay = Math.random() * 5;
                
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.left = `${x}%`;
                particle.style.top = `${y}%`;
                particle.style.animationDelay = `${delay}s`;
                particle.style.animationDuration = `${duration}s`;
                
                // Random gradient
                const gradients = [
                    'radial-gradient(circle at 30% 30%, rgba(0, 167, 157, 0.3), transparent)',
                    'radial-gradient(circle at 30% 30%, rgba(234, 111, 113, 0.3), transparent)',
                    'radial-gradient(circle at 30% 30%, rgba(233, 158, 90, 0.3), transparent)'
                ];
                particle.style.background = gradients[Math.floor(Math.random() * gradients.length)];
                
                particlesContainer.appendChild(particle);
            }

            // Initialize Swiper
            const swiper = new Swiper('.modernSwiper', {
                direction: 'horizontal',
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 6000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                speed: 1000,
                on: {
                    slideChange: function() {
                        // Change background gradient on slide change
                        const gradients = [
                            'linear-gradient(135deg, rgba(0, 167, 157, 0.08) 0%, rgba(50, 168, 184, 0.05) 100%)',
                            'linear-gradient(135deg, rgba(234, 111, 113, 0.08) 0%, rgba(255, 154, 139, 0.05) 100%)',
                            'linear-gradient(135deg, rgba(102, 126, 234, 0.08) 0%, rgba(118, 75, 162, 0.05) 100%)'
                        ];
                        
                        const gradientBg = document.querySelector('.gradient-bg');
                        gradientBg.style.background = gradients[this.realIndex % gradients.length];
                    }
                }
            });

            // Animate Stats Counter
            function animateStats() {
                const stats = document.querySelectorAll('.stat-number');
                stats.forEach(stat => {
                    const target = parseInt(stat.getAttribute('data-count'));
                    const duration = 2000;
                    const steps = 60;
                    const increment = target / steps;
                    let current = 0;
                    
                    const timer = setInterval(() => {
                        current += increment;
                        if (current >= target) {
                            current = target;
                            clearInterval(timer);
                        }
                        stat.textContent = Math.floor(current);
                    }, duration / steps);
                });
            }

            // Intersection Observer for stats animation
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateStats();
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });

            observer.observe(document.querySelector('.glass-card'));

            // Parallax effect on scroll
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const particles = document.querySelector('.particles');
                particles.style.transform = `translateY(${scrolled * 0.5}px)`;
            });

            // Interactive image tilt effect
            if (window.innerWidth > 768) {
    const image3d = document.querySelector('.image-3d');
    if (image3d) {
        image3d.addEventListener('mousemove', () => {});
    }
}

            if (image3d) {
                image3d.addEventListener('mousemove', (e) => {
                    const rect = image3d.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    
                    const rotateY = ((x - centerX) / centerX) * 5;
                    const rotateX = ((centerY - y) / centerY) * 5;
                    
                    image3d.style.transform = `
                        rotateY(${-10 + rotateY}deg)
                        rotateX(${5 + rotateX}deg)
                        translateY(${Math.sin(Date.now() / 1000) * 10}px)
                    `;
                });
                
                image3d.addEventListener('mouseleave', () => {
                    image3d.style.transform = `
                        rotateY(-10deg)
                        rotateX(5deg)
                        translateY(0)
                    `;
                });
            }
        });
    </script>
@endpush


{{-- ================= FEATURE STRIP (UNDER HERO) ================= --}}
<section class="feature-strip bg-transparent py-16 mt-16 lg:mt-20 border-t border-gray-100/30">

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        {{-- SECTION HEADING --}}
        <div class="text-center mb-12">
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 tracking-tight">
                Our Services
            </h2>
            <p class="mt-3 text-gray-500 max-w-2xl mx-auto text-sm sm:text-base">
                Comprehensive care and support designed for children, adolescents, and families.
            </p>
        </div>

        {{-- SERVICES GRID --}}
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-3 xl:grid-cols-6 gap-10 text-center">


            {{-- Psychological Assessment --}}
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/icons/psychological-assessment.svg') }}"
                     alt="Psychological Assessment"
                     class="w-14 h-14 mb-4">
                <p class="text-gray-700 font-medium text-sm">
                    PSYCHOLOGICAL ASSESSMENT
                </p>
            </div>

            {{-- Behavioural Therapy --}}
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/icons/behavioural-therapy.svg') }}"
                     alt="Behavioural Therapy"
                     class="w-14 h-14 mb-4">
                <p class="text-gray-700 font-medium text-sm">
                    BEHAVIOURAL THERAPY
                </p>
            </div>

            {{-- Speech Therapy --}}
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/icons/speech-therapy.svg') }}"
                     alt="Speech Therapy"
                     class="w-14 h-14 mb-4">
                <p class="text-gray-700 font-medium text-sm">
                    SPEECH THERAPY
                </p>
            </div>

            {{-- Special Education --}}
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/icons/special-education.svg') }}"
                     alt="Special Education"
                     class="w-14 h-14 mb-4">
                <p class="text-gray-700 font-medium text-sm">
                    SPECIAL EDUCATION
                </p>
            </div>

            {{-- Occupational Therapy --}}
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/icons/occupational-therapy.svg') }}"
                     alt="Occupational Therapy"
                     class="w-14 h-14 mb-4">
                <p class="text-gray-700 font-medium text-sm">
                    OCCUPATIONAL THERAPY
                </p>
            </div>

            {{-- Psychotherapy & Counselling --}}
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/icons/psychotherapy-counselling.svg') }}"
                     alt="Psychotherapy and Counselling"
                     class="w-14 h-14 mb-4">
                <p class="text-gray-700 font-medium text-sm">
                    PSYCHOTHERAPY & COUNSELLING
                </p>
            </div>

        </div>

    </div>
</section>




<section class="py-16 lg:py-28 bg-transparent relative overflow-hidden">
    {{-- Background decorative elements --}}
    <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
    <div class="absolute top-10 left-10 w-72 h-72 bg-gradient-to-br from-teal-200/20 to-teal-400/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-10 right-10 w-96 h-96 bg-gradient-to-tr from-pink-200/20 to-pink-400/10 rounded-full blur-3xl"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-start">
            {{-- LEFT IMAGE SECTION --}}
            <div class="relative" data-aos="fade-right" data-aos-delay="100">
                <div class="relative group">
                    {{-- Main image container --}}
                    <div class="relative overflow-hidden rounded-3xl shadow-2xl shadow-teal-500/10">
                        <div class="aspect-[4/5] overflow-hidden">
                            <img src="{{ asset('images/image5.jpg') }}" 
                                 alt="AIMS CDC Therapy Services"
                                 class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent"></div>
                        
                        {{-- Floating badges --}}
                        <div class="absolute top-6 left-6">
                            <div class="inline-flex items-center gap-2 bg-white/90 backdrop-blur-sm text-teal-600 px-4 py-2 rounded-full font-semibold text-sm shadow-lg">
                                <span class="w-2 h-2 bg-teal-500 rounded-full animate-pulse"></span>
                                Expert Care Team
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                
                
                {{-- FOUNDER TESTIMONIAL --}}
                <div class="mt-16 bg-gradient-to-br from-white to-gray-50 p-6 rounded-2xl shadow-lg border border-gray-200/50" data-aos="fade-up" data-aos-delay="700">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="relative">
                            <div class="w-16 h-16 rounded-full bg-gradient-to-br from-teal-500 to-teal-600 p-0.5">
                                <img src="{{ asset('images/image.jpg') }}" 
                                     class="w-full h-full rounded-full object-cover border-2 border-white"
                                     alt="Mushtaq - Founder & CEO">
                            </div>
                            <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-gradient-to-br from-pink-500 to-pink-600 rounded-full flex items-center justify-center border border-white">
                                <span class="text-white text-xs">✓</span>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div>
                                <p class="font-bold text-gray-900 text-lg">Mushtaq</p>
                                <p class="text-teal-600 font-medium text-sm">Founder & CEO</p>
                            </div>
                        </div>
                        <div class="text-3xl text-yellow-400 opacity-80">"</div>
                    </div>
                    <p class="text-gray-700 italic pl-2 border-l-2 border-teal-500">
                        "Our mission is to create a world where every child, regardless of their challenges, 
                        can discover their strengths and shine brightly. We believe in personalized care 
                        that addresses the unique needs of each child."
                    </p>
                </div>

                {{-- CTA BUTTONS --}}
                <div class="mt-10 flex flex-col sm:flex-row gap-4" data-aos="fade-up" data-aos-delay="800">
                    <a href="/services" 
                       class="group inline-flex items-center justify-center gap-3 bg-gradient-to-r from-teal-500 to-teal-600 hover:from-teal-600 hover:to-teal-700 text-white px-8 py-4 rounded-xl font-semibold text-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-300 flex-1">
                        <span>View All Services</span>
                        <span class="group-hover:translate-x-1 transition-transform duration-300">→</span>
                    </a>
                    <a href="/contact" 
                       class="inline-flex items-center justify-center gap-3 border-2 border-teal-500 text-teal-600 hover:bg-teal-50 px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 flex-1">
                        <span>Book Consultation</span>
                    </a>
                </div>
            </div>
            

            {{-- RIGHT CONTENT --}}
            <div class="lg:sticky lg:top-24" data-aos="fade-left" data-aos-delay="200">
                {{-- Section header --}}
                <div class="mb-10">
                    <div class="inline-flex items-center gap-2 text-teal-600 font-semibold mb-4">
                        <div class="w-8 h-0.5 bg-teal-500"></div>
                        Our Comprehensive Services
                    </div>
                    
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                        Specialized Therapies
                        <span class="text-transparent bg-clip-text block" style="background: linear-gradient(to right, #32A8B8, #EA6F71); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                            For Holistic Development
                        </span>
                    </h2>
                    
                    <p class="text-lg text-gray-600 leading-relaxed">
                        We offer a complete range of evidence-based therapies and interventions designed to 
                        address every aspect of your child's developmental needs.
                    </p>
                </div>

                {{-- SERVICES GRID --}}
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                    @php
                        $services = [
                            [
                                'title' => 'PSYCHOLOGICAL ASSESSMENT',
                                'description' => 'IQ assessment, learning disability assessment, personality assessment, cognitive and behavioral assessment.',
                                'icon' => 'public/images/icons/services/psychological-assessment.svg',
                                'color' => 'bg-teal-400',
                                'blob' => 'rounded-[30%_70%_70%_30%/30%_30%_70%_70%]',
                                'delay' => 100
                            ],
                            [
                                'title' => 'BEHAVIOURAL THERAPY',
                                'description' => 'Scientific techniques to improve socio-adaptive functioning and manage behavior.',
                                'icon' => 'public/images/icons/services/behavioural-therapy.svg',
                                'color' => 'bg-pink-400',
                                'blob' => 'rounded-[60%_40%_30%_70%/60%_30%_70%_40%]',
                                'delay' => 200
                            ],
                            [
                                'title' => 'SPEECH THERAPY',
                                'description' => 'Improving speech sounds, fluency, language development, and communication.',
                                'icon' => 'public/images/icons/services/speech-therapy.svg',
                                'color' => 'bg-sky-400',
                                'blob' => 'rounded-[40%_60%_60%_40%/70%_30%_70%_30%]',
                                'delay' => 100
                            ],
                            [
                                'title' => 'SPECIAL EDUCATION',
                                'description' => 'Individualized education plans using VAKT methodology.',
                                'icon' => 'public/images/icons/services/special-education.svg',
                                'color' => 'bg-red-400',
                                'blob' => 'rounded-[50%_50%_20%_80%/25%_80%_20%_75%]',
                                'delay' => 200
                            ],
                            [
                                'title' => 'OCCUPATIONAL THERAPY',
                                'description' => 'Developing fine motor, gross motor, and sensory integration skills.',
                                'icon' => 'public/images/icons/services/occupational-therapy.svg',
                                'color' => 'bg-orange-400',
                                'blob' => 'rounded-[30%_70%_40%_60%/50%_60%_40%_50%]',
                                'delay' => 300
                            ],
                            [
                                'title' => 'PSYCHOTHERAPY & COUNSELLING',
                                'description' => 'Evidence-based psychotherapy by licensed professionals.',
                                'icon' => 'public/images/icons/services/psychotherapy.svg',
                                'color' => 'bg-yellow-400',
                                'blob' => 'rounded-[70%_30%_50%_50%/30%_30%_70%_70%]',
                                'delay' => 400
                            ],
                        ];
                    @endphp

                    @foreach($services as $service)
                        <a href="/services" class="glass-card p-6 rounded-[2rem] group hover:bg-white/60 transition-all duration-500 relative flex flex-col h-full shadow-lg border-white/50 block hover:no-underline text-center" data-aos="fade-up" data-aos-delay="{{ $service['delay'] }}">
                            <div class="space-y-4 flex-grow flex flex-col items-center">
                                <div class="w-12 h-12 {{ $service['color'] }} {{ $service['blob'] }} flex items-center justify-center p-3 shadow-lg transform group-hover:scale-110 transition-transform duration-500">
                                    <img src="{{ asset(str_replace('public/', '', $service['icon'])) }}" 
                                         alt="{{ $service['title'] }}" 
                                         class="w-full h-full brightness-0 invert object-contain">
                                </div>
                                <div class="space-y-2">
                                    <h3 class="text-xl font-bold text-gray-800 tracking-tight leading-snug group-hover:text-teal-600 transition-colors">{{ $service['title'] }}</h3>
                                    <p class="text-gray-600 leading-relaxed text-sm">{{ $service['description'] }}</p>
                                </div>
                            </div>
                            
                            <div class="mt-8 pt-4 border-t border-gray-100/50 flex justify-center items-center text-gray-500 font-bold text-xs tracking-wide group/link transition-colors">
                                <div class="flex items-center gap-2">
                                    <span>Learn more</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform group-hover/link:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    @endforeach


                </div>

                
            </div>
        </div>
    </div>
</section>

<style>
    /* Custom background pattern */
    .bg-grid-pattern {
        background-image: 
            linear-gradient(to right, #f0f9ff 1px, transparent 1px),
            linear-gradient(to bottom, #f0f9ff 1px, transparent 1px);
        background-size: 40px 40px;
    }
    
    /* Smooth hover effects */
    .group-hover\:-translate-y-1:hover {
        transform: translateY(-4px);
    }
    
    /* Aspect ratio for image */
    .aspect-\[4\/5\] {
        aspect-ratio: 4 / 5;
    }
    
    /* Gradient text for all color variations */
    .text-teal-600 { color: #0d9488; }
    .text-pink-600 { color: #db2777; }
    .text-blue-600 { color: #2563eb; }
    .text-purple-600 { color: #7c3aed; }
    .text-orange-600 { color: #ea580c; }
    .text-indigo-600 { color: #4f46e5; }
    
    .from-teal-500 { --tw-gradient-from: #0d9488; }
    .to-teal-600 { --tw-gradient-to: #0f766e; }
    
    .from-pink-500 { --tw-gradient-from: #ec4899; }
    .to-pink-600 { --tw-gradient-to: #db2777; }
    
    .from-blue-500 { --tw-gradient-from: #3b82f6; }
    .to-blue-600 { --tw-gradient-to: #2563eb; }
    
    .from-purple-500 { --tw-gradient-from: #8b5cf6; }
    .to-purple-600 { --tw-gradient-to: #7c3aed; }
    
    .from-orange-500 { --tw-gradient-from: #f97316; }
    .to-orange-600 { --tw-gradient-to: #ea580c; }
    
    .from-indigo-500 { --tw-gradient-from: #6366f1; }
    .to-indigo-600 { --tw-gradient-to: #4f46e5; }
</style>







{{-- ================= WHY CHOOSE US ================= --}}
<section class="py-16 lg:py-24 bg-transparent relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6" data-aos="fade-up">
                Why Parents Trust GEMS
            </h2>
            <p class="text-lg text-gray-600" data-aos="fade-up" data-aos-delay="100">
                We go beyond traditional therapy to provide a holistic ecosystem for your child's growth.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="p-6 rounded-2xl border" style="background-color: rgba(50, 168, 184, 0.05); border-color: rgba(50, 168, 184, 0.2);" data-aos="fade-up" data-aos-delay="100">
                <div class="w-12 h-12 text-white rounded-lg flex items-center justify-center text-2xl mb-4" style="background-color: #32A8B8;">🏆</div>
                <h3 class="font-bold text-lg mb-2 text-gray-900">Expert Team</h3>
                <p class="text-gray-600 text-sm">Highly qualified and RCI certified professionals dedicated to your child.</p>
            </div>
            <div class="p-6 rounded-2xl border" style="background-color: rgba(234, 111, 113, 0.05); border-color: rgba(234, 111, 113, 0.2);" data-aos="fade-up" data-aos-delay="200">
                <div class="w-12 h-12 text-white rounded-lg flex items-center justify-center text-2xl mb-4" style="background-color: #EA6F71;">🔬</div>
                <h3 class="font-bold text-lg mb-2 text-gray-900">Evidence Based</h3>
                <p class="text-gray-600 text-sm">Scientific approach to therapy with proven methodologies and tracking.</p>
            </div>
            <div class="p-6 rounded-2xl border" style="background-color: rgba(50, 168, 184, 0.05); border-color: rgba(50, 168, 184, 0.2);" data-aos="fade-up" data-aos-delay="300">
                <div class="w-12 h-12 text-white rounded-lg flex items-center justify-center text-2xl mb-4" style="background-color: #32A8B8;">🏰</div>
                <h3 class="font-bold text-lg mb-2 text-gray-900">World Class Facility</h3>
                <p class="text-gray-600 text-sm">Child-friendly, safe, and stimulating environment for optimal learning.</p>
            </div>
            <div class="p-6 rounded-2xl border" style="background-color: rgba(233, 157, 29, 0.05); border-color: rgba(233, 157, 29, 0.2);" data-aos="fade-up" data-aos-delay="400">
                <div class="w-12 h-12 text-white rounded-lg flex items-center justify-center text-2xl mb-4" style="background-color: #E99D1D;">🤝</div>
                <h3 class="font-bold text-lg mb-2 text-gray-900">Parent Support</h3>
                <p class="text-gray-600 text-sm">Regular counseling, training workships, and support groups for families.</p>
            </div>
        </div>
    </div>
</section>

{{-- ================= TESTIMONIALS ================= --}}
<section class="py-24 lg:py-32 text-white relative overflow-hidden" style="background: linear-gradient(135deg, rgba(50, 168, 184, 0.95), rgba(0, 167, 157, 0.95), rgba(151, 180, 26, 0.95));">
    {{-- Modern Deco Blobs --}}
    <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-[#EA6F71]/30 rounded-full blur-[120px] -translate-x-1/2 -translate-y-1/2 animate-pulse"></div>
    <div class="absolute bottom-0 right-1/4 w-[600px] h-[600px] bg-[#E99D1D]/20 rounded-full blur-[150px] translate-x-1/2 translate-y-1/2"></div>
    <div class="absolute top-1/2 left-1/2 w-[800px] h-[800px] bg-[#32A8B8]/10 rounded-full blur-[180px] -translate-x-1/2 -translate-y-1/2"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20" data-aos="fade-up">
            <h2 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight mb-4">Stories of Hope & Success</h2>
            <div class="h-1.5 w-24 bg-white/30 mx-auto rounded-full"></div>
        </div>
        
        <div class="grid md:grid-cols-3 gap-10">
            {{-- Testimonial 1 --}}
            <div class="group h-full" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-white/10 backdrop-blur-xl p-10 rounded-[2.5rem] border border-white/20 shadow-[0_20px_50px_rgba(0,0,0,0.1)] hover:shadow-[0_20px_80px_rgba(255,255,255,0.1)] transition-all duration-500 hover:-translate-y-2 h-full flex flex-col">
                    <div class="flex gap-1 text-yellow-300 mb-6 scale-110 origin-left">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </div>
                    <p class="text-lg lg:text-xl leading-relaxed font-medium mb-10 flex-grow">
                        "We are extremely happy with the therapy services provide by gems clinic. We have seen a remarkable improvement in our child over time. He has started trying to speak, his hyperactivity has reduced significantly, and his eye contact with people has improved a lot"
                    </p>
                    <div class="flex items-center gap-5 pt-8 border-t border-white/10 mt-auto">
                        <div class="w-14 h-14 bg-gradient-to-br from-[#32A8B8] to-teal-100/30 backdrop-blur-sm rounded-2xl flex items-center justify-center font-bold text-xl shadow-lg border border-white/20 transform group-hover:rotate-6 transition-transform">HS</div>
                        <div>
                            <div class="font-bold text-lg text-white">Hasna Kp</div>
                            <div class="text-white/60 text-sm font-medium uppercase tracking-wider">Happy Parent</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Testimonial 2 --}}
            <div class="group h-full" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-white/10 backdrop-blur-xl p-10 rounded-[2.5rem] border border-white/20 shadow-[0_20px_50px_rgba(0,0,0,0.1)] hover:shadow-[0_20px_80px_rgba(255,255,255,0.1)] transition-all duration-500 hover:-translate-y-2 h-full flex flex-col">
                    <div class="flex gap-1 text-yellow-300 mb-6 scale-110 origin-left">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </div>
                    <p class="text-lg lg:text-xl leading-relaxed font-medium mb-10 flex-grow">
                        "One of the best child development centres in Calicut! Only after reaching here did I truly feel that my son has received the right guidance and support. The staff are very professional, caring, and patient."
                    </p>
                    <div class="flex items-center gap-5 pt-8 border-t border-white/10 mt-auto">
                        <div class="w-14 h-14 bg-gradient-to-br from-[#EA6F71] to-pink-100/30 backdrop-blur-sm rounded-2xl flex items-center justify-center font-bold text-xl shadow-lg border border-white/20 transform group-hover:-rotate-6 transition-transform">FA</div>
                        <div>
                            <div class="font-bold text-lg text-white">Fathima va.</div>
                            <div class="text-white/60 text-sm font-medium uppercase tracking-wider">Grateful Parent</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Testimonial 3 --}}
            <div class="group h-full" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-white/10 backdrop-blur-xl p-10 rounded-[2.5rem] border border-white/20 shadow-[0_20px_50px_rgba(0,0,0,0.1)] hover:shadow-[0_20px_80px_rgba(255,255,255,0.1)] transition-all duration-500 hover:-translate-y-2 h-full flex flex-col">
                    <div class="flex gap-1 text-yellow-300 mb-6 scale-110 origin-left">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </div>
                    <p class="text-lg lg:text-xl leading-relaxed font-medium mb-10 flex-grow">
                        "The best therapy centre for developmental delayed kids. Excellent teaching and skill development methods using Kids are very happy because of friendly atmosphere."
                    </p>
                    <div class="flex items-center gap-5 pt-8 border-t border-white/10 mt-auto">
                        <div class="w-14 h-14 bg-gradient-to-br from-[#E99D1D] to-orange-100/30 backdrop-blur-sm rounded-2xl flex items-center justify-center font-bold text-xl shadow-lg border border-white/20 transform group-hover:rotate-12 transition-transform">AM</div>
                        <div>
                            <div class="font-bold text-lg text-white">Aneesh meladath.</div>
                            <div class="text-white/60 text-sm font-medium uppercase tracking-wider">Satisfied Parent</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ================= FAQ SECTION ================= --}}
<section class="py-16 lg:py-24 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-900 mb-12" data-aos="fade-up">Frequently Asked Questions</h2>
        
        <div class="space-y-4" data-aos="fade-up">
            <details class="bg-white rounded-xl shadow-sm overflow-hidden group">
                <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                    <h3 class="font-semibold text-lg text-gray-900">How do I know if my child needs therapy?</h3>
                    <span class="text-teal-500 text-2xl group-open:rotate-45 transition-transform duration-300">+</span>
                </summary>
                <div class="px-6 pb-6 text-gray-600">
                    If you notice delays in speech, motor skills, social interaction, or behavior compared to other children of the same age, it's best to consult a professional. Early intervention yields the best results.
                </div>
            </details>
            
            <details class="bg-white rounded-xl shadow-sm overflow-hidden group">
                <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                    <h3 class="font-semibold text-lg text-gray-900">Do you offer online consultations?</h3>
                    <span class="text-teal-500 text-2xl group-open:rotate-45 transition-transform duration-300">+</span>
                </summary>
                <div class="px-6 pb-6 text-gray-600">
                    Yes, we offer tele-therapy and online parent counseling sessions for families who cannot visit our center physically.
                </div>
            </details>
            
            <details class="bg-white rounded-xl shadow-sm overflow-hidden group">
                <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                    <h3 class="font-semibold text-lg text-gray-900">What ages do you treat?</h3>
                    <span class="text-teal-500 text-2xl group-open:rotate-45 transition-transform duration-300">+</span>
                </summary>
                <div class="px-6 pb-6 text-gray-600">
                    We work with children from infancy (Early Intervention) up to adolescence (18 years), providing age-appropriate therapies and support.
                </div>
            </details>
        </div>
    </div>
</section>

{{-- ================= FINAL CTA ================= --}}
<section class="py-20 bg-white relative">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div 
            class="rounded-[2.5rem] p-8 sm:p-16 text-center text-white relative overflow-hidden 
                   bg-white/10 backdrop-blur-xl 
                   border border-white/20 
                   shadow-[0_20px_80px_rgba(0,0,0,0.15)]"
            data-aos="zoom-in"
            style="background: linear-gradient(135deg, rgba(50,168,184,0.95), rgba(0,167,157,0.95), rgba(151,180,26,0.95));"
        >

            {{-- Glow blobs (same language as testimonials) --}}
            <div class="absolute -top-24 -left-24 w-96 h-96 bg-[#EA6F71]/30 rounded-full blur-[120px]"></div>
            <div class="absolute -bottom-24 -right-24 w-[500px] h-[500px] bg-[#E99D1D]/25 rounded-full blur-[150px]"></div>

            <div class="relative z-10">
                <h2 class="text-3xl sm:text-4xl font-extrabold mb-6 tracking-tight">
                    Take the First Step Today
                </h2>

                <p class="text-lg text-white/90 mb-10 max-w-2xl mx-auto">
                    Your child's potential is limitless. Let us help them unlock it.
                    Schedule an assessment with our experts.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a 
                        href="/contact"
                        class="bg-white text-teal-600 font-bold px-8 py-4 rounded-xl 
                               hover:bg-gray-100 transition-all duration-300 
                               shadow-lg hover:shadow-xl hover:-translate-y-0.5"
                    >
                        Book Appointment
                    </a>

                    <a 
                        href="tel:+917994502501"
                        class="border-2 border-white/80 text-white font-bold px-8 py-4 rounded-xl 
                               hover:bg-white/10 transition-all duration-300"
                    >
                        Call +91 7994502501
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection