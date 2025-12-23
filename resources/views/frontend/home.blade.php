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
                min-height: 400px;
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
    </style>
@endpush

{{-- ================= HERO SECTION ================= --}}
<section class="hero-section pt-20 pb-32 lg:pt-32 lg:pb-48 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="swiper heroSwiper overflow-visible">
            <div class="swiper-wrapper">

                {{-- SLIDE 1 --}}
                <div class="swiper-slide">
                    <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                        {{-- LEFT CONTENT --}}
                        <div class="z-20">
                            <h1 class="hero-title text-5xl lg:text-7xl mb-8">
                                Precision Care for<br>
                                the Human<br>
                                Experience
                            </h1>

                            <p class="text-gray-600 text-lg lg:text-xl leading-relaxed mb-10 max-w-lg">
                                Betterly Wellness reimagines wellbeing through a thoughtful blend of
                                advanced science and genuine emotional understanding.
                            </p>

                            <a href="/contact" class="btn-orange text-lg">
                                Talk To Us
                            </a>
                        </div>

                        {{-- RIGHT IMAGE --}}
                        <div class="organic-shape-container">
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
                    <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                        <div class="z-20">
                            <h1 class="hero-title text-5xl lg:text-7xl mb-8">
                                Empowering<br>
                                Potential with<br>
                                Expert Guidance
                            </h1>

                            <p class="text-gray-600 text-lg lg:text-xl leading-relaxed mb-10 max-w-lg">
                                Join over 1000 families who trust our certified therapists
                                for holistic developmental care.
                            </p>

                            <a href="/contact" class="btn-orange text-lg">
                                Book Assessment
                            </a>
                        </div>

                        <div class="organic-shape-container">
                            <div class="organic-image-mask">
                                <img src="{{ asset('images/image1.png') }}"
                                     class="w-full h-full object-cover"
                                     alt="Expert Care">
                            </div>
                        </div>

                    </div>
                </div>

                {{-- ✅ SLIDE 3 (NEW) --}}
                <div class="swiper-slide">
                    <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                        <div class="z-20">
                            <h1 class="hero-title text-5xl lg:text-7xl mb-8">
                                Supporting Every<br>
                                Child’s Growth<br>
                                Journey
                            </h1>

                            <p class="text-gray-600 text-lg lg:text-xl leading-relaxed mb-10 max-w-lg">
                                From early intervention to specialized therapies,
                                we walk alongside families at every stage of development.
                            </p>

                            <a href="/services" class="btn-orange text-lg">
                                Explore Services
                            </a>
                        </div>

                        <div class="organic-shape-container">
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
<section class="bg-white py-14 border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-10 text-center">

            {{-- Item 1 --}}
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/icons/sleep.svg') }}"
                     alt="Sleep & Wellbeing Care"
                     class="w-14 h-14 mb-4">
                <p class="text-gray-700 font-medium text-sm">
                    Sleep & Wellbeing Care
                </p>
            </div>

            {{-- Item 2 --}}
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/icons/remedial.svg') }}"
                     alt="Remedial Education"
                     class="w-14 h-14 mb-4">
                <p class="text-gray-700 font-medium text-sm">
                    Remedial Education
                </p>
            </div>

            {{-- Item 3 --}}
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/icons/adhd.svg') }}"
                     alt="ADHD Care"
                     class="w-14 h-14 mb-4">
                <p class="text-gray-700 font-medium text-sm">
                    ADHD Care
                </p>
            </div>

            {{-- Item 4 --}}
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/icons/skill.svg') }}"
                     alt="Skill Training"
                     class="w-14 h-14 mb-4">
                <p class="text-gray-700 font-medium text-sm">
                    Skill Training
                </p>
            </div>

            {{-- Item 5 --}}
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/icons/mental.svg') }}"
                     alt="Child & Adolescent Mental Health"
                     class="w-14 h-14 mb-4">
                <p class="text-gray-700 font-medium text-sm">
                    Child & Adolescent<br> Mental Health
                </p>
            </div>

        </div>

    </div>
</section>

{{-- ================= ABOUT US SECTION ================= --}}
<section class="py-16 lg:py-24 bg-gradient-to-b from-white to-gray-50 relative overflow-hidden">
    {{-- Background pattern --}}
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-1/4 w-64 h-64 bg-teal-300 rounded-full"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-pink-300 rounded-full"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            {{-- LEFT IMAGE SECTION --}}
            <div class="relative" data-aos="fade-right">
                <div class="relative">
                    {{-- Main image --}}
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/image5.jpg') }}" 
                             alt="AIMS CDC Team"
                             class="w-full h-auto object-cover transform hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    </div>
                    
                    {{-- Experience badge --}}
                    <div class="absolute -bottom-6 -right-6 bg-gradient-to-r from-teal-500 to-teal-600 text-white p-6 rounded-2xl shadow-xl">
                        <div class="text-center">
                            <div class="text-4xl font-bold">10+</div>
                            <div class="text-sm font-medium">Years of Excellence</div>
                        </div>
                    </div>
                    
                    {{-- Floating shape --}}
                    <div class="absolute -top-6 -left-6 w-40 h-40 bg-gradient-to-br from-pink-400/20 to-pink-500/10 rounded-3xl -z-10 animate-pulse"></div>
                </div>
                
                {{-- Stats overlay --}}
                <div class="mt-10 grid grid-cols-3 gap-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-white p-4 rounded-xl shadow-lg text-center border border-gray-100">
                        <div class="text-2xl font-bold text-teal-600">15+</div>
                        <div class="text-sm text-gray-600">Expert Therapists</div>
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow-lg text-center border border-gray-100">
                        <div class="text-2xl font-bold text-pink-600">10+</div>
                        <div class="text-sm text-gray-600">Therapies</div>
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow-lg text-center border border-gray-100">
                        <div class="text-2xl font-bold text-blue-600">24/7</div>
                        <div class="text-sm text-gray-600">Support</div>
                    </div>
                </div>
            </div>

            {{-- RIGHT CONTENT --}}
            <div data-aos="fade-left">
                <div class="inline-flex items-center gap-2 text-pink-600 font-semibold mb-4">
                    <span class="w-8 h-0.5 bg-pink-500"></span>
                    About us
                </div>
                
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-8">
                    Creating Brighter Futures,
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-500 to-pink-500">One Child at a Time</span>
                </h2>
                
                <p class="text-lg text-gray-600 leading-relaxed mb-10">
                    At AIMS CDC, we believe every child deserves the opportunity to shine. 
                    Our holistic approach combines cutting-edge therapies with compassionate 
                    care, creating an environment where children with developmental needs 
                    can thrive and reach their full potential.
                </p>

                {{-- FEATURES --}}
                <div class="space-y-6 mb-12">
                    <div class="flex gap-4 group hover:bg-gradient-to-r hover:from-white hover:to-teal-50 p-4 rounded-2xl transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-teal-500 to-teal-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <span class="text-white text-xl">✓</span>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 text-lg mb-2">Comprehensive Care</h3>
                            <p class="text-gray-600">All therapies, learning programs, and support services under one roof.</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-4 group hover:bg-gradient-to-r hover:from-white hover:to-pink-50 p-4 rounded-2xl transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-pink-500 to-pink-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <span class="text-white text-xl">❤</span>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 text-lg mb-2">Personalized Approach</h3>
                            <p class="text-gray-600">Customized programs designed for each child's unique needs and abilities.</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-4 group hover:bg-gradient-to-r hover:from-white hover:to-blue-50 p-4 rounded-2xl transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <span class="text-white text-xl">🏠</span>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 text-lg mb-2">Safe & Nurturing Environment</h3>
                            <p class="text-gray-600">A warm, secure space where children feel loved, valued, and supported.</p>
                        </div>
                    </div>
                </div>

                {{-- FOUNDER SECTION --}}
                <div class="bg-gradient-to-r from-white to-gray-50 p-6 rounded-2xl shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-center gap-4">
                        <div class="relative">
                            <img src="{{ asset('images/image.jpg') }}" 
                                 class="w-20 h-20 rounded-full object-cover border-4 border-white shadow-lg"
                                 alt="mushtaq">
                            <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-gradient-to-br from-teal-500 to-teal-600 rounded-full flex items-center justify-center">
                                <span class="text-white text-sm">👑</span>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex justify-between items-start">
                                <div>
                                    <p class="font-bold text-gray-900 text-xl">Mushtaq</p>
                                    <p class="text-teal-600 font-medium">Founder & CEO</p>
                                </div>
                                <span class="text-2xl text-yellow-500">"</span>
                            </div>
                            <p class="text-gray-600 mt-2 italic">
                                "Our mission is to create a world where every child, regardless of their challenges, 
                                can discover their strengths and shine brightly."
                            </p>
                        </div>
                    </div>
                </div>

                {{-- CTA BUTTON --}}
                <div class="mt-10" data-aos="fade-up" data-aos-delay="500">
                    <a href="/about" 
                       class="group inline-flex items-center gap-3 bg-gradient-to-r from-teal-500 to-teal-600 hover:from-teal-600 hover:to-teal-700 text-white px-8 py-4 rounded-xl font-semibold text-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                        Discover Our Programs
                        <span class="group-hover:translate-x-2 transition-transform duration-300">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


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
                    Helping children improve communication, language skills,
                    and confidence through personalized speech therapy programs.
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
                    Supporting children in developing motor skills, coordination,
                    and independence in daily activities.
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
                    Special Education
                </h3>

                <p class="text-gray-600 leading-relaxed mb-6">
                    Customized learning programs that focus on academic,
                    behavioral, and social development.
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