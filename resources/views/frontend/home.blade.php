@extends('layouts.app')

@section('content')

{{-- ================= HERO SECTION ================= --}}
@push('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-teal: #006684;
            --secondary-orange: #e99e5a;
            --text-dark: #1a1a1a;
            --soft-bg: #f8fafc;
        }

        body {
            font-family: 'Outfit', sans-serif;
        }

        .hero-section {
            background-color: var(--soft-bg);
            overflow: visible;
        }

        .hero-title {
            color: var(--primary-teal);
            font-weight: 800;
            line-height: 1.1;
        }

        @media (max-width: 1023px) {
            .hero-section {
                background: #f0fbff; 
                padding: 0 !important;
                min-height: 85vh;
            }
            .hero-section .swiper-slide {
                min-height: 85vh;
                position: relative;
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                padding-top: 4rem;
                overflow: hidden;
            }
            .mobile-slide-bg {
                position: absolute;
                inset: 0;
                background-size: cover;
                background-position: center 85%;
                background-repeat: no-repeat;
                z-index: 1;
            }
            .mobile-slide-overlay {
                position: absolute;
                inset: 0;
                background: linear-gradient(to bottom, #f0fbff 0%, #f0fbff 20%, rgba(240, 251, 255, 0.3) 50%, transparent 100%);
                z-index: 2;
            }
            .hero-title {
                font-size: 2.25rem !important;
                margin-bottom: 1.25rem !important;
                text-align: center;
                color: #006684 !important;
                position: relative;
                z-index: 10;
                padding: 0 1.5rem;
                line-height: 1.2;
            }
            .hero-description {
                font-size: 1rem !important;
                margin-bottom: 2.5rem !important;
                text-align: center;
                color: #4a5568 !important;
                position: relative;
                z-index: 10;
                padding: 0 2rem;
                max-width: 100%;
                line-height: 1.6;
            }
        }

        .btn-orange {
            background-color: var(--secondary-orange);
            color: white;
            padding: 1rem 2.5rem;
            border-radius: 9999px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .btn-orange:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(233, 158, 90, 0.3);
            background-color: #d88d4a;
        }

        .organic-shape-container {
            position: relative;
            z-index: 1;
        }

        .organic-image-mask {
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            overflow: hidden;
            width: 100%;
            height: 100%;
            min-height: 500px;
            object-fit: cover;
            background: #fff;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .dept-menu-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            border: 1px solid rgba(255, 255, 255, 0.5);
            width: 320px;
            position: absolute;
            top: 20px;
            left: -100px;
            z-index: 50;
        }

        @media (max-width: 1024px) {
            .dept-menu-card {
                position: static;
                width: 100%;
                margin-bottom: 2rem;
                left: 0;
            }
            .organic-image-mask {
                min-height: 350px;
                border-radius: 40px;
                margin-top: 2rem;
            }
            .organic-shape-container {
                padding: 0 10px;
            }
        }

        .dept-item {
            padding: 0.85rem 1.25rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: var(--primary-teal);
            font-size: 0.95rem;
            font-weight: 500;
            border-bottom: 1px solid #f1f5f9;
            transition: background 0.2s;
            cursor: pointer;
        }

        .dept-item:last-child {
            border-bottom: none;
        }

        .dept-item:hover {
            background: #f8fafc;
        }

        .dept-item.active {
            color: var(--secondary-orange);
        }

        .sub-menu-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            position: absolute;
            left: 102%;
            top: 0;
            width: 240px;
            padding: 1rem;
            display: none;
        }

        .dept-item:hover .sub-menu-card {
            display: block;
        }

        .sub-menu-item {
            padding: 0.5rem 0;
            color: #4b5563;
            font-size: 0.9rem;
            transition: color 0.2s;
        }

        .sub-menu-item:hover {
            color: var(--primary-teal);
        }

        .swiper-pagination-hero {
            position: absolute;
            bottom: 40px !important;
            left: 0 !important;
            text-align: left !important;
        }

        .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background: var(--primary-teal);
            opacity: 0.2;
        }

        .swiper-pagination-bullet-active {
            opacity: 1;
            width: 30px;
            border-radius: 6px;
        }

        @media (max-width: 1023px) {
            .hero-section {
                background: linear-gradient(180deg, #f0f9ff 0%, #ffffff 100%);
            }
            .swiper-pagination-hero {
                left: 0 !important;
                right: 0 !important;
                text-align: center !important;
                bottom: 20px !important;
            }
        }
        /* Feature strip modern lift */
.feature-strip {
    position: relative;
    z-index: 5;
}
/* Add to your existing styles */
.organic-image-mask-mobile {
    border-radius: 24px;
    overflow: hidden;
    width: 100%;
    height: 400px;
    object-fit: cover;
    background: #fff;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    position: relative;
}

/* Adjust pagination position for mobile */
@media (max-width: 1023px) {
    .swiper-pagination-hero {
        position: relative !important;
        margin-top: 2rem;
        bottom: 0 !important;
    }
    
    .hero-title {
        text-shadow: 0 2px 10px rgba(0,0,0,0.3);
    }
    
    .btn-orange {
        position: relative;
        z-index: 10;
    }
}

/* Ensure proper stacking */
.hero-section .swiper-slide {
    display: flex;
    align-items: center;
}

    </style>
@endpush

{{-- ================= HERO SECTION ================= --}}
<section class="hero-section pt-10 pb-20 lg:pt-32 lg:pb-56 px-4 sm:px-6 lg:px-8 relative">

    <div class="max-w-7xl mx-auto">
        <div class="swiper heroSwiper overflow-visible">
            <div class="swiper-wrapper">

                {{-- SLIDE 1 --}}
                <div class="swiper-slide">
                    {{-- Mobile Background (moved here for proper coverage) --}}
                    <div class="lg:hidden mobile-slide-bg" style="background-image: url('{{ asset('images/image2.jpg') }}');"></div>
                    <div class="lg:hidden mobile-slide-overlay"></div>

                    <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center relative z-10 w-full">

                        {{-- CONTENT - Mobile / Desktop --}}
                        <div class="z-20 text-center lg:text-left relative w-full lg:relative">
                            {{-- Mobile optimized layout content --}}
                            <div class="lg:hidden flex flex-col items-center">
                                <h1 class="hero-title">
                                    Precision Care for<br>
                                    the Human<br>
                                    Experience
                                </h1>
                                
                                <p class="hero-description">
                                    Betterly Wellness reimagines wellbeing through a thoughtful blend of
                                    advanced science and genuine emotional understanding.
                                </p>
                                
                                <a href="/contact" class="btn-orange text-lg px-10 relative z-20">
                                    Talk To Us
                                </a>
                            </div>

                            {{-- Desktop layout --}}
                            <div class="hidden lg:block">
                                <h1 class="hero-title text-5xl lg:text-7xl mb-8">
                                    Precision Care for<br>
                                    the Human<br>
                                    Experience
                                </h1>

                                <p class="hero-description text-gray-600 text-lg lg:text-xl leading-relaxed mb-10 max-w-lg">
                                    Betterly Wellness reimagines wellbeing through a thoughtful blend of
                                    advanced science and genuine emotional understanding.
                                </p>

                                <a href="/contact" class="btn-orange text-lg mx-auto lg:mx-0">
                                    Talk To Us
                                </a>
                            </div>
                        </div>

                        {{-- RIGHT IMAGE - Hidden on mobile, shown on desktop --}}
                        <div class="organic-shape-container hidden lg:block">
                            <div class="organic-image-mask">
                                <img src="{{ asset('images/image2.jpg') }}"
                                     class="w-full h-full object-cover"
                                     alt="Wellness Experience">
                            </div>
                        </div>

                    </div>
                </div>

                {{-- SLIDE 2 --}}
                <div class="swiper-slide">
                    {{-- Mobile Background --}}
                    <div class="lg:hidden mobile-slide-bg" style="background-image: url('{{ asset('images/image1.png') }}');"></div>
                    <div class="lg:hidden mobile-slide-overlay"></div>

                    <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center relative z-10 w-full">

                        <div class="z-20 text-center lg:text-left relative w-full lg:relative">
                            {{-- Mobile optimized layout content --}}
                            <div class="lg:hidden flex flex-col items-center">
                                <h1 class="hero-title">
                                    Empowering<br>
                                    Potential with<br>
                                    Expert Guidance
                                </h1>
                                
                                <p class="hero-description">
                                    Join over 1000 families who trust our certified therapists
                                    for holistic developmental care.
                                </p>
                                
                                <a href="/contact" class="btn-orange text-lg px-10 relative z-20">
                                    Book Assessment
                                </a>
                            </div>

                            {{-- Desktop layout --}}
                            <div class="hidden lg:block">
                                <h1 class="hero-title text-5xl lg:text-7xl mb-8">
                                    Empowering<br>
                                    Potential with<br>
                                    Expert Guidance
                                </h1>

                                <p class="hero-description text-gray-600 text-lg lg:text-xl leading-relaxed mb-10 max-w-lg">
                                    Join over 1000 families who trust our certified therapists
                                    for holistic developmental care.
                                </p>

                                <a href="/contact" class="btn-orange text-lg mx-auto lg:mx-0">
                                    Book Assessment
                                </a>
                            </div>
                        </div>

                        {{-- RIGHT IMAGE - Hidden on mobile --}}
                        <div class="organic-shape-container hidden lg:block">
                            <div class="organic-image-mask">
                                <img src="{{ asset('images/image1.png') }}"
                                     class="w-full h-full object-cover"
                                     alt="Expert Care">
                            </div>
                        </div>

                    </div>
                </div>

                {{-- SLIDE 3 --}}
                <div class="swiper-slide">
                    {{-- Mobile Background --}}
                    <div class="lg:hidden mobile-slide-bg" style="background-image: url('{{ asset('images/image4.jpg') }}');"></div>
                    <div class="lg:hidden mobile-slide-overlay"></div>

                    <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center relative z-10 w-full">

                        <div class="z-20 text-center lg:text-left relative w-full lg:relative">
                            {{-- Mobile optimized layout content --}}
                            <div class="lg:hidden flex flex-col items-center">
                                <h1 class="hero-title">
                                    Supporting Every<br>
                                    Child's Growth<br>
                                    Journey
                                </h1>
                                
                                <p class="hero-description">
                                    From early intervention to specialized therapies,
                                    we walk alongside families at every stage of development.
                                </p>
                                
                                <a href="/services" class="btn-orange text-lg px-10 relative z-20">
                                    Explore Services
                                </a>
                            </div>

                            {{-- Desktop layout --}}
                            <div class="hidden lg:block">
                                <h1 class="hero-title text-5xl lg:text-7xl mb-8">
                                    Supporting Every<br>
                                    Child's Growth<br>
                                    Journey
                                </h1>

                                <p class="hero-description text-gray-600 text-lg lg:text-xl leading-relaxed mb-10 max-w-lg">
                                    From early intervention to specialized therapies,
                                    we walk alongside families at every stage of development.
                                </p>

                                <a href="/services" class="btn-orange text-lg mx-auto lg:mx-0">
                                    Explore Services
                                </a>
                            </div>
                        </div>

                        {{-- RIGHT IMAGE - Hidden on mobile --}}
                        <div class="organic-shape-container hidden lg:block">
                            <div class="organic-image-mask">
                                <img src="{{ asset('images/image4.jpg') }}"
                                     class="w-full h-full object-cover"
                                     alt="Child Development Care">
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            {{-- PAGINATION --}}
            <div class="swiper-pagination-hero swiper-pagination"></div>
        </div>
    </div>
</section>



@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var swiper = new Swiper(".heroSwiper", {
                direction: "horizontal",
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                effect: "slide",
                speed: 1000,
            });
        });
    </script>
@endpush

{{-- ================= FEATURE STRIP (UNDER HERO) ================= --}}
<section class="feature-strip bg-white py-16 mt-16 lg:mt-20 border-t border-gray-100">

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




<section class="py-16 lg:py-28 bg-gradient-to-b from-white to-gray-50/30 relative overflow-hidden">
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
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-500 to-pink-500 block">
                            For Holistic Development
                        </span>
                    </h2>
                    
                    <p class="text-lg text-gray-600 leading-relaxed">
                        We offer a complete range of evidence-based therapies and interventions designed to 
                        address every aspect of your child's developmental needs.
                    </p>
                </div>

                {{-- SERVICES GRID --}}
                <div class="grid sm:grid-cols-2 gap-4 mb-12">
                    @php
                        $services = [
                            [
                                'title' => 'PSYCHOLOGICAL ASSESSMENT',
                                'description' => 'IQ assessment, learning disability assessment, personality assessment, cognitive and behavioral assessment for tailored intervention strategies.',
                                'icon' => '🧠',
                                'color' => 'teal',
                                'delay' => 100
                            ],
                            [
                                'title' => 'BEHAVIOURAL THERAPY',
                                'description' => 'Improving intellectual and socio-adaptive functioning using scientific psychological techniques to manage behavioral problems.',
                                'icon' => '🌟',
                                'color' => 'pink',
                                'delay' => 200
                            ],
                            [
                                'title' => 'SPEECH THERAPY',
                                'description' => 'Addressing challenges with speech sounds, language development, fluency, and social communication skills.',
                                'icon' => '🗣️',
                                'color' => 'blue',
                                'delay' => 300
                            ],
                            [
                                'title' => 'SPECIAL EDUCATION',
                                'description' => 'Individualized educational plans using VAKT approach for children with academic skill deficits in reading, writing, and mathematics.',
                                'icon' => '📚',
                                'color' => 'purple',
                                'delay' => 400
                            ],
                            [
                                'title' => 'OCCUPATIONAL THERAPY',
                                'description' => 'Strengthening fine motor, gross motor, sensory motor skills and overcoming sensory challenges for daily living activities.',
                                'icon' => '👐',
                                'color' => 'orange',
                                'delay' => 500
                            ],
                            [
                                'title' => 'PSYCHOTHERAPY & COUNSELLING',
                                'description' => 'RCI licensed psychologists providing individual/group psychotherapy using evidence-based practices.',
                                'icon' => '💭',
                                'color' => 'indigo',
                                'delay' => 600
                            ],
                        ];
                    @endphp

                    @foreach($services as $service)
    <a href="/services"
       class="group relative block focus:outline-none"
       data-aos="fade-up"
       data-aos-delay="{{ $service['delay'] }}">

        <div class="absolute inset-0 bg-gradient-to-br from-{{ $service['color'] }}-50 to-white rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

        <div class="relative bg-white p-5 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 group-hover:-translate-y-1">
            <div class="flex items-start gap-4">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-{{ $service['color'] }}-500 to-{{ $service['color'] }}-600 flex items-center justify-center text-white text-xl">
                        {{ $service['icon'] }}
                    </div>
                </div>

                <div class="flex-1">
                    <h3 class="font-bold text-gray-900 text-base mb-2">
                        {{ $service['title'] }}
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        {{ $service['description'] }}
                    </p>
                </div>
            </div>

            <div class="mt-4 pt-4 border-t border-gray-100 flex justify-between items-center">
                <span class="text-xs text-gray-500 group-hover:text-{{ $service['color'] }}-600 transition-colors">
                    Learn more
                </span>
                <span class="text-gray-400 group-hover:text-{{ $service['color'] }}-500 transform group-hover:translate-x-1 transition-transform">
                    →
                </span>
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


{{-- ================= SERVICES SECTION ================= --}}
<section class="py-16 lg:py-24 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">

    {{-- Decorative background --}}
    <div class="absolute inset-0 -z-10">
        <div class="absolute top-20 left-0 w-72 h-72 bg-teal-200/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-0 w-96 h-96 bg-pink-200/20 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- SECTION HEADER --}}
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 text-teal-600 font-semibold mb-4"
                 data-aos="fade-up">
                <span class="w-10 h-0.5 bg-teal-500"></span>
                Our Services
                <span class="w-10 h-0.5 bg-teal-500"></span>
            </div>

            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6"
                data-aos="fade-up" data-aos-delay="100">
                Specialized Care for
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-500 to-pink-500">
                    Every Child
                </span>
            </h2>

            <p class="text-lg text-gray-600 leading-relaxed"
               data-aos="fade-up" data-aos-delay="200">
                We offer a wide range of evidence-based therapies and programs designed
                to support children’s development in a safe, nurturing, and joyful environment.
            </p>
        </div>

        {{-- SERVICES GRID --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

            {{-- SERVICE CARD --}}
            <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl
                        transition-all duration-300 transform hover:-translate-y-2"
                 data-aos="fade-up" data-aos-delay="100">

                <div class="w-16 h-16 mb-6 rounded-2xl bg-gradient-to-br from-teal-500 to-teal-600
                            flex items-center justify-center text-white text-2xl
                            group-hover:scale-110 transition-transform duration-300">
                    🧠
                </div>

                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    Speech Therapy
                </h3>

                <p class="text-gray-600 leading-relaxed mb-6">
                  Targeted therapy to improve speech, language, communication, and articulation skills for effective expression and understanding.
                </p>

                <a href="/services"
                   class="inline-flex items-center gap-2 text-teal-600 font-semibold
                          group-hover:gap-3 transition-all duration-300">
                    Learn More →
                </a>
            </div>

            {{-- SERVICE CARD --}}
            <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl
                        transition-all duration-300 transform hover:-translate-y-2"
                 data-aos="fade-up" data-aos-delay="200">

                <div class="w-16 h-16 mb-6 rounded-2xl bg-gradient-to-br from-pink-500 to-pink-600
                            flex items-center justify-center text-white text-2xl
                            group-hover:scale-110 transition-transform duration-300">
                    🎯
                </div>

                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    Occupational Therapy
                </h3>

                <p class="text-gray-600 leading-relaxed mb-6">
                    Therapeutic support to enhance motor skills, sensory integration, and daily living abilities, promoting independence and functional growth.
                </p>

                <a href="/services"
                   class="inline-flex items-center gap-2 text-pink-600 font-semibold
                          group-hover:gap-3 transition-all duration-300">
                    Learn More →
                </a>
            </div>

            {{-- SERVICE CARD --}}
            <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl
                        transition-all duration-300 transform hover:-translate-y-2"
                 data-aos="fade-up" data-aos-delay="300">

                <div class="w-16 h-16 mb-6 rounded-2xl bg-gradient-to-br from-blue-500 to-blue-600
                            flex items-center justify-center text-white text-2xl
                            group-hover:scale-110 transition-transform duration-300">
                    📘
                </div>

                <h3 class="text-xl font-bold text-gray-900 mb-4">
                   Counselling
                </h3>

                <p class="text-gray-600 leading-relaxed mb-6">
                    A safe and supportive space to address emotional, psychological, and personal challenges, promoting mental wellbeing and healthy coping skills.
                </p>

                <a href="/services"
                   class="inline-flex items-center gap-2 text-blue-600 font-semibold
                          group-hover:gap-3 transition-all duration-300">
                    Learn More →
                </a>
            </div>

        </div>

        {{-- CTA --}}
        <div class="text-center mt-16" data-aos="fade-up" data-aos-delay="400">
            <a href="/services"
               class="inline-flex items-center gap-3 bg-gradient-to-r from-teal-500 to-teal-600
                      hover:from-teal-600 hover:to-teal-700 text-white
                      px-10 py-4 rounded-xl font-semibold text-lg
                      shadow-lg hover:shadow-xl transform hover:-translate-y-1
                      transition-all duration-300">
                View All Services
                <span class="text-xl">→</span>
            </a>
        </div>

    </div>
</section>




{{-- ================= WHY CHOOSE US ================= --}}
<section class="py-16 lg:py-24 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6" data-aos="fade-up">
                Why Parents Trust AIMS CDC
            </h2>
            <p class="text-lg text-gray-600" data-aos="fade-up" data-aos-delay="100">
                We go beyond traditional therapy to provide a holistic ecosystem for your child's growth.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="p-6 bg-teal-50 rounded-2xl border border-teal-100" data-aos="fade-up" data-aos-delay="100">
                <div class="w-12 h-12 bg-teal-500 text-white rounded-lg flex items-center justify-center text-2xl mb-4">🏆</div>
                <h3 class="font-bold text-lg mb-2 text-gray-900">Expert Team</h3>
                <p class="text-gray-600 text-sm">Highly qualified and RCI certified professionals dedicated to your child.</p>
            </div>
            <div class="p-6 bg-pink-50 rounded-2xl border border-pink-100" data-aos="fade-up" data-aos-delay="200">
                <div class="w-12 h-12 bg-pink-500 text-white rounded-lg flex items-center justify-center text-2xl mb-4">🔬</div>
                <h3 class="font-bold text-lg mb-2 text-gray-900">Evidence Based</h3>
                <p class="text-gray-600 text-sm">Scientific approach to therapy with proven methodologies and tracking.</p>
            </div>
            <div class="p-6 bg-blue-50 rounded-2xl border border-blue-100" data-aos="fade-up" data-aos-delay="300">
                <div class="w-12 h-12 bg-blue-500 text-white rounded-lg flex items-center justify-center text-2xl mb-4">🏰</div>
                <h3 class="font-bold text-lg mb-2 text-gray-900">World Class Facility</h3>
                <p class="text-gray-600 text-sm">Child-friendly, safe, and stimulating environment for optimal learning.</p>
            </div>
            <div class="p-6 bg-orange-50 rounded-2xl border border-orange-100" data-aos="fade-up" data-aos-delay="400">
                <div class="w-12 h-12 bg-orange-500 text-white rounded-lg flex items-center justify-center text-2xl mb-4">🤝</div>
                <h3 class="font-bold text-lg mb-2 text-gray-900">Parent Support</h3>
                <p class="text-gray-600 text-sm">Regular counseling, training workships, and support groups for families.</p>
            </div>
        </div>
    </div>
</section>

{{-- ================= TESTIMONIALS ================= --}}
<section class="py-16 lg:py-24 bg-gradient-to-br from-teal-900 to-slate-900 text-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-teal-500/20 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <h2 class="text-3xl sm:text-4xl font-bold text-center mb-16" data-aos="fade-up">Stories of Hope & Success</h2>
        
        <div class="grid md:grid-cols-3 gap-8">
            {{-- Testimonial 1 --}}
            <div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/10" data-aos="fade-up" data-aos-delay="100">
                <div class="flex gap-1 text-yellow-400 mb-4">★★★★★</div>
                <p class="text-gray-200 italic mb-6">
                    "The change we've seen in our son is miraculous. The therapists here are not just professionals; they are angels. Highly recommended!"
                </p>
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-teal-500 rounded-full flex items-center justify-center font-bold">JD</div>
                    <div>
                        <div class="font-semibold">John Doe</div>
                        <div class="text-xs text-gray-400">Parent of Ryan, 5 yrs</div>
                    </div>
                </div>
            </div>

            {{-- Testimonial 2 --}}
            <div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/10" data-aos="fade-up" data-aos-delay="200">
                <div class="flex gap-1 text-yellow-400 mb-4">★★★★★</div>
                <p class="text-gray-200 italic mb-6">
                    "AIMS CDC provided us with the guidance we desperately needed. Their early intervention program is top-notch."
                </p>
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-pink-500 rounded-full flex items-center justify-center font-bold">SM</div>
                    <div>
                        <div class="font-semibold">Sarah M.</div>
                        <div class="text-xs text-gray-400">Mother of 3 yr old</div>
                    </div>
                </div>
            </div>

            {{-- Testimonial 3 --}}
            <div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/10" data-aos="fade-up" data-aos-delay="300">
                <div class="flex gap-1 text-yellow-400 mb-4">★★★★★</div>
                <p class="text-gray-200 italic mb-6">
                    "Professional, caring, and result-oriented. We travel 50km just to come here because it's worth it."
                </p>
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center font-bold">RK</div>
                    <div>
                        <div class="font-semibold">Rajesh K.</div>
                        <div class="text-xs text-gray-400">Father</div>
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
        <div class="bg-gradient-to-r from-teal-500 to-pink-500 rounded-3xl p-8 sm:p-16 text-center text-white relative overflow-hidden shadow-2xl" data-aos="zoom-in">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-40 h-40 bg-white/10 rounded-full translate-y-1/2 -translate-x-1/2"></div>
            
            <div class="relative z-10">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Take the First Step Today</h2>
                <p class="text-lg text-white/90 mb-10 max-w-2xl mx-auto">
                    Your child's potential is limitless. Let us help them unlock it. Schedule an assessment with our experts.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/contact" class="bg-white text-teal-600 font-bold px-8 py-4 rounded-xl hover:bg-gray-100 transition-colors shadow-lg">
                        Book Appointment
                    </a>
                    <a href="tel:+918891810022" class="bg-transparent border-2 border-white text-white font-bold px-8 py-4 rounded-xl hover:bg-white/10 transition-colors">
                        Call +91 88918 10022
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection