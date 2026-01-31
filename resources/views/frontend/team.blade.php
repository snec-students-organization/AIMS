@extends('layouts.app')

@section('title', 'Our Team | GEMS Child Development Centre')

@section('content')
    {{-- HERO SECTION --}}
    <section class="relative pt-20 pb-16 lg:pt-32 lg:pb-24 overflow-hidden" style="background-color: #32A8B8;">
        <div class="absolute inset-0 z-0">
            <div
                class="absolute top-0 right-0 w-[500px] h-[500px] bg-white/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 animate-pulse">
            </div>
            <div
                class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-black/5 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2 animation-delay-2000 animate-pulse">
            </div>
        </div>

        <div class="container mx-auto px-4 relative z-10 text-center">
            <span
                class="inline-block px-4 py-1.5 mb-6 text-sm font-bold tracking-wider text-teal-600 uppercase bg-white/90 rounded-full"
                data-aos="fade-up">
                Dedicated Professionals
            </span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-tight" data-aos="fade-up"
                data-aos-delay="100">
                Meet Our Exceptional <span class="text-white/80">Team</span>
            </h1>
            <p class="text-lg md:text-xl text-white/90 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up"
                data-aos-delay="200">
                A diverse group of passionate experts dedicated to unlocking every child's potential through compassion,
                patience, and evidence-based care.
            </p>
        </div>
    </section>

    {{-- LEADERSHIP SECTION --}}
    <section class="py-16 lg:py-24 bg-white relative">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4" data-aos="fade-up">Our Leadership</h2>
                <div class="w-16 h-1 bg-[#32A8B8] mx-auto rounded-full" data-aos="fade-up" data-aos-delay="100"></div>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="glass-card rounded-[2.5rem] p-8 lg:p-12 shadow-xl border-white/50 flex flex-col md:flex-row items-center gap-10"
                    data-aos="fade-up">
                    <div
                        class="w-48 h-48 lg:w-64 lg:h-64 rounded-[2rem] overflow-hidden flex-shrink-0 shadow-lg transform rotate-3 hover:rotate-0 transition-transform duration-500">
                        <img src="{{ asset('images/image2.jpg') }}" alt="Mushtaq" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1 space-y-6">
                        <div>
                            <h3 class="text-3xl font-bold text-gray-900 mb-1">Mushtaq</h3>
                            <p class="text-teal-600 font-bold uppercase tracking-wider text-sm">Founder & CEO</p>
                        </div>
                        <p class="text-gray-600 leading-relaxed text-lg italic">
                            "Our mission is to create a world where every child, regardless of their challenges, can
                            discover their strengths and shine brightly. We believe in personalized care that addresses the
                            unique needs of each child."
                        </p>
                        <div class="flex gap-4">
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-teal-50 flex items-center justify-center text-teal-600 hover:bg-teal-600 hover:text-white transition-all shadow-sm">
                                <span class="text-lg">in</span>
                            </a>
                            <a href="mailto:ceo@gemscdc.com"
                                class="w-10 h-10 rounded-full bg-pink-50 flex items-center justify-center text-pink-600 hover:bg-pink-600 hover:text-white transition-all shadow-sm">
                                <span class="text-lg">✉</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SPECIALISTS GRID --}}
    <section class="py-16 lg:py-24 bg-gray-50/50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4" data-aos="fade-up">Expert Specialists</h2>
                <p class="text-gray-600" data-aos="fade-up" data-aos-delay="100">Highly qualified clinicians providing
                    specialized care in every domain.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                {{-- Specialist 1 --}}
                <div class="group" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="glass-card p-4 rounded-[2rem] h-full shadow-md hover:shadow-xl transition-all duration-500 group-hover:-translate-y-2 border-white/40">
                        <div class="aspect-square rounded-[1.5rem] overflow-hidden mb-6 relative">
                            <img src="{{ asset('images/image3.jpg') }}" alt="Specialist"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                onerror="this.src='https://ui-avatars.com/api/?name=Psychologist&background=EA6F71&color=fff&size=300'">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-teal-600/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                            </div>
                        </div>
                        <div class="text-center space-y-2">
                            <h4 class="text-xl font-bold text-gray-900">Expert Psychologist</h4>
                            <p class="text-teal-600 text-sm font-semibold uppercase tracking-wide">Psychological Assessment
                            </p>
                            <p class="text-gray-500 text-xs leading-relaxed">M.Phil in Clinical Psychology</p>
                        </div>
                    </div>
                </div>

                {{-- Specialist 2 --}}
                <div class="group" data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="glass-card p-4 rounded-[2rem] h-full shadow-md hover:shadow-xl transition-all duration-500 group-hover:-translate-y-2 border-white/40">
                        <div class="aspect-square rounded-[1.5rem] overflow-hidden mb-6 relative">
                            <img src="{{ asset('images/image4.jpg') }}" alt="Specialist"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                onerror="this.src='https://ui-avatars.com/api/?name=Therapist&background=32A8B8&color=fff&size=300'">
                        </div>
                        <div class="text-center space-y-2">
                            <h4 class="text-xl font-bold text-gray-900">Speech Language Pathologist</h4>
                            <p class="text-teal-600 text-sm font-semibold uppercase tracking-wide">Speech Therapy</p>
                            <p class="text-gray-500 text-xs leading-relaxed">BASLP Registered Clinician</p>
                        </div>
                    </div>
                </div>

                {{-- Specialist 3 --}}
                <div class="group" data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="glass-card p-4 rounded-[2rem] h-full shadow-md hover:shadow-xl transition-all duration-500 group-hover:-translate-y-2 border-white/40">
                        <div class="aspect-square rounded-[1.5rem] overflow-hidden mb-6 relative">
                            <img src="{{ asset('images/image5.jpg') }}" alt="Specialist"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                onerror="this.src='https://ui-avatars.com/api/?name=Educator&background=E99D1D&color=fff&size=300'">
                        </div>
                        <div class="text-center space-y-2">
                            <h4 class="text-xl font-bold text-gray-900">Special Educator</h4>
                            <p class="text-teal-600 text-sm font-semibold uppercase tracking-wide">Special Education</p>
                            <p class="text-gray-500 text-xs leading-relaxed">B.Ed Special Education (LD/ID)</p>
                        </div>
                    </div>
                </div>

                {{-- Specialist 4 --}}
                <div class="group" data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="glass-card p-4 rounded-[2rem] h-full shadow-md hover:shadow-xl transition-all duration-500 group-hover:-translate-y-2 border-white/40">
                        <div class="aspect-square rounded-[1.5rem] overflow-hidden mb-6 relative">
                            <img src="{{ asset('images/image6.jpg') }}" alt="Specialist"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                onerror="this.src='https://ui-avatars.com/api/?name=OT&background=EA6F71&color=fff&size=300'">
                        </div>
                        <div class="text-center space-y-2">
                            <h4 class="text-xl font-bold text-gray-900">Occupational Therapist</h4>
                            <p class="text-teal-600 text-sm font-semibold uppercase tracking-wide">Occupational Therapy</p>
                            <p class="text-gray-500 text-xs leading-relaxed">BOT, Sensory Integration Certified</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-20 text-center">
                <p class="mb-8 text-gray-600">Want to join our amazing team of professionals?</p>
                <a href="/career"
                    class="inline-flex items-center gap-2 bg-[#32A8B8] text-white px-8 py-4 rounded-xl font-bold shadow-lg hover:shadow-[#32A8B8]/20 transition-all hover:-translate-y-1">
                    View Career Opportunities
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- JOIN US SECTION --}}
    <section class="py-20 bg-white overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="rounded-[3rem] bg-[#32A8B8] p-8 md:p-16 text-white relative overflow-hidden text-center shadow-2xl"
                data-aos="zoom-in">
                <div
                    class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2">
                </div>
                <div
                    class="absolute bottom-0 left-0 w-64 h-64 bg-black/10 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2">
                </div>

                <div class="relative z-10 max-w-3xl mx-auto space-y-8">
                    <h2 class="text-4xl font-bold">Growing Together for a Better Future</h2>
                    <p class="text-white/90 text-lg leading-relaxed">
                        Our team is always looking for compassionate individuals who share our vision. If you have a passion
                        for helping children, we'd love to hear from you.
                    </p>
                    <div class="flex flex-wrap justify-center gap-4">
                        <a href="/contact"
                            class="bg-white text-teal-600 px-8 py-3 rounded-full font-bold hover:bg-teal-50 transition-all">Contact
                            Us Today</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection