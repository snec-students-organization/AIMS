@extends('layouts.app')

@section('content')

{{-- ================= HERO SECTION ================= --}}
<section class="relative overflow-hidden bg-gradient-to-br from-white via-blue-50 to-teal-50 pt-8 lg:pt-12">
    {{-- Background decorative elements --}}
    <div class="absolute top-0 left-0 w-64 h-64 bg-gradient-to-br from-pink-100/30 to-transparent rounded-full -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-tl from-teal-100/20 to-transparent rounded-full translate-x-1/3 translate-y-1/3"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-24 grid lg:grid-cols-2 gap-8 lg:gap-16 items-center relative z-10">
        {{-- LEFT CONTENT --}}
        <div class="order-2 lg:order-1" data-aos="fade-right">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-pink-500 to-pink-600 text-white px-4 py-2 rounded-full text-sm font-medium mb-6" data-aos="fade-up" data-aos-delay="100">
                <span class="w-2 h-2 bg-white rounded-full"></span>
                Trusted by 1000+ Families
            </div>
            
            <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-gray-900 leading-tight tracking-tight" data-aos="fade-up" data-aos-delay="200">
                Nurturing <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-500 to-pink-500">Every Child's</span> Unique Journey
            </h1>
            
            <p class="mt-6 text-lg sm:text-xl text-gray-600 leading-relaxed max-w-2xl" data-aos="fade-up" data-aos-delay="300">
                Kerala's premier child development center offering comprehensive therapies, personalized care, and evidence-based programs for children's holistic growth.
            </p>
            
            <div class="mt-10 flex flex-col sm:flex-row gap-4" data-aos="fade-up" data-aos-delay="400">
                <a href="/contact" class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-teal-500 to-teal-600 rounded-xl blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                    <button class="relative bg-gradient-to-r from-teal-500 to-teal-600 text-white px-8 py-4 rounded-xl font-semibold text-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                        Book Free Consultation
                    </button>
                </a>
                <a href="/about" class="relative group border-2 border-teal-500 text-teal-600 px-8 py-4 rounded-xl font-semibold text-lg hover:bg-teal-50 transition-all duration-300">
                    <span class="relative z-10">Learn More</span>
                </a>
            </div>
            
            {{-- Stats --}}
            <div class="mt-16 grid grid-cols-2 md:grid-cols-3 gap-6" data-aos="fade-up" data-aos-delay="500">
                <div class="text-center">
                    <div class="text-3xl font-bold text-teal-600">10+</div>
                    <div class="text-sm text-gray-500 mt-1">Years Experience</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-pink-600">5000+</div>
                    <div class="text-sm text-gray-500 mt-1">Children Helped</div>
                </div>
                <div class="text-center md:col-span-1 col-span-2">
                    <div class="text-3xl font-bold text-blue-600">98%</div>
                    <div class="text-sm text-gray-500 mt-1">Parent Satisfaction</div>
                </div>
            </div>
        </div>

        {{-- RIGHT IMAGE WITH FLOATING ELEMENTS --}}
        <div class="order-1 lg:order-2 relative min-h-[400px] lg:min-h-[500px]">
            {{-- Main image container --}}
            <div class="relative z-10" data-aos="fade-left" data-aos-delay="300">
                <div class="relative w-full max-w-md lg:max-w-lg mx-auto">
                    <img src="{{ asset('images/image1.png') }}" 
                         alt="Happy child at AIMS CDC"
                         class="rounded-3xl shadow-2xl w-full h-auto object-cover">
                    
                    {{-- Floating badge --}}
                    <div class="absolute -top-4 -right-4 bg-white p-4 rounded-2xl shadow-xl">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center">
                                <span class="text-white text-2xl">★</span>
                            </div>
                            <div>
                                <div class="font-bold text-gray-900">4.9/5</div>
                                <div class="text-xs text-gray-500">Rating</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Floating elements --}}
            <div class="absolute -bottom-6 -left-6 w-72 h-72 bg-gradient-to-br from-pink-300/30 to-pink-400/20 rounded-[40%] animate-float"></div>
            <div class="absolute top-10 -right-6 w-64 h-64 bg-gradient-to-tr from-teal-300/30 to-blue-400/20 rounded-[45%] animate-float-delayed"></div>
            
            {{-- Small floating dots --}}
            <div class="absolute top-20 left-4 w-4 h-4 bg-yellow-400 rounded-full animate-bounce"></div>
            <div class="absolute bottom-20 right-8 w-3 h-3 bg-blue-400 rounded-full animate-bounce-delayed"></div>
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
                        <img src="{{ asset('images/image2.jpg') }}" 
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
                    Our Story
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
                            <img src="{{ asset('images/image2.jpg') }}" 
                                 class="w-20 h-20 rounded-full object-cover border-4 border-white shadow-lg"
                                 alt="Smitha K">
                            <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-gradient-to-br from-teal-500 to-teal-600 rounded-full flex items-center justify-center">
                                <span class="text-white text-sm">👑</span>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex justify-between items-start">
                                <div>
                                    <p class="font-bold text-gray-900 text-xl">Smitha K</p>
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




@endsection