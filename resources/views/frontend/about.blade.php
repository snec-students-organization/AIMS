@extends('layouts.app')

@section('title', 'About Us | GEMS')

@section('content')
    {{-- ================= HERO SECTION ================= --}}
    <section class="relative overflow-hidden" style="background-color: #32A8B8;">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-[#32A8B8] opacity-90"></div>
            {{-- Pattern/Texture can go here --}}
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
            <div class="text-center" data-aos="fade-up">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6">
                    About GEMS
                </h1>
                <p class="text-xl text-white/90 max-w-3xl mx-auto leading-relaxed">
                    Dedicated to empowering children with developmental needs through holistic,
                    evidence-based care and unwavering support.
                </p>
            </div>
        </div>

        {{-- Curve divider --}}
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-[60px] sm:h-[100px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="fill-white"></path>
            </svg>
        </div>
    </section>

    {{-- ================= VISION & MISSION ================= --}}
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                {{-- Image --}}
                <div data-aos="fade-right">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/image2.jpg') }}" alt="Vision and Mission"
                            class="w-full h-auto object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                    </div>
                </div>

                {{-- Content --}}
                <div data-aos="fade-left">
                    <div class="mb-12">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="w-12 h-1 bg-[#32A8B8] rounded-full"></span>
                            <h2 class="text-3xl font-bold text-gray-900">Our Vision</h2>
                        </div>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            To be a beacon of hope and excellence in child development, creating a world where every child
                            is understood,
                            valued, and empowered to reach their fullest potential, regardless of their developmental
                            challenges.
                        </p>
                    </div>

                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <span class="w-12 h-1 bg-[#EA6F71] rounded-full"></span>
                            <h2 class="text-3xl font-bold text-gray-900">Our Mission</h2>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex gap-4">
                                <span
                                    class="flex-shrink-0 w-8 h-8 rounded-full bg-[#EA6F711a] flex items-center justify-center text-[#EA6F71] font-bold">1</span>
                                <p class="text-gray-600">Provide comprehensive, multidisciplinary therapeutic services
                                    tailored to each child's unique needs.</p>
                            </li>
                            <li class="flex gap-4">
                                <span
                                    class="flex-shrink-0 w-8 h-8 rounded-full bg-[#EA6F711a] flex items-center justify-center text-[#EA6F71] font-bold">2</span>
                                <p class="text-gray-600">Empower parents and caregivers through education, training, and
                                    emotional support.</p>
                            </li>
                            <li class="flex gap-4">
                                <span
                                    class="flex-shrink-0 w-8 h-8 rounded-full bg-[#EA6F711a] flex items-center justify-center text-[#EA6F71] font-bold">3</span>
                                <p class="text-gray-600">Foster an inclusive community that advocates for the rights and
                                    acceptance of children with special needs.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= VALUES SECTION ================= --}}
    <section class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                    Core Values
                </h2>
                <p class="text-gray-600 text-lg">
                    Our work is guided by a set of principles that ensure the highest quality of care for every child.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">

                {{-- Value 1 --}}
                <div class="p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border group"
                    style="background-color: rgba(50, 168, 184, 0.05); border-color: rgba(50, 168, 184, 0.2);"
                    data-aos="fade-up" data-aos-delay="100">

                    <div
                        class="w-14 h-14 bg-[#32A8B8] text-white rounded-xl flex items-center justify-center text-3xl mb-6 shadow-sm group-hover:scale-110 transition-transform">
                        ❤️
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 uppercase">Compassion</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We approach every child and family with empathy, kindness, and understanding.
                    </p>
                </div>

                {{-- Value 2 --}}
                <div class="p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border group"
                    style="background-color: rgba(151, 180, 26, 0.05); border-color: rgba(151, 180, 26, 0.2);"
                    data-aos="fade-up" data-aos-delay="200">

                    <div
                        class="w-14 h-14 bg-[#97B41A] text-white rounded-xl flex items-center justify-center text-3xl mb-6 shadow-sm group-hover:scale-110 transition-transform">
                        🌟
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 uppercase">Excellence</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We are committed to the highest standards of clinical practice and continuous learning.
                    </p>
                </div>

                {{-- Value 3 --}}
                <div class="p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border group"
                    style="background-color: rgba(234, 111, 113, 0.05); border-color: rgba(234, 111, 113, 0.2);"
                    data-aos="fade-up" data-aos-delay="300">

                    <div
                        class="w-14 h-14 bg-[#EA6F71] text-white rounded-xl flex items-center justify-center text-3xl mb-6 shadow-sm group-hover:scale-110 transition-transform">
                        🤝
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 uppercase">Integrity</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We operate with honesty, transparency, and ethical responsibility in all we do.
                    </p>
                </div>

                {{-- Value 4 --}}
                <div class="p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border group"
                    style="background-color: rgba(233, 157, 29, 0.05); border-color: rgba(233, 157, 29, 0.2);"
                    data-aos="fade-up" data-aos-delay="400">

                    <div
                        class="w-14 h-14 bg-[#E99D1D] text-white rounded-xl flex items-center justify-center text-3xl mb-6 shadow-sm group-hover:scale-110 transition-transform">
                        👨‍👩‍👧‍👦
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 uppercase">Collaboration</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We work as a team with families, schools, and other professionals for the child's benefit.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- ================= WHY CHOOSE GEMS ================= --}}
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#32A8B8] font-bold tracking-widest uppercase text-sm mb-3 block">Our Strengths</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                    Why Choose GEMS?
                </h2>
                <p class="text-gray-600 text-lg">
                    We combine clinical expertise with a heart-centered approach to ensure the best possible start for your
                    child.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
                {{-- Point 1: Licensed Therapist --}}
                <div class="p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border group"
                    style="background-color: rgba(50, 168, 184, 0.05); border-color: rgba(50, 168, 184, 0.2);"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-16 h-16 bg-[#32A8B8] text-white rounded-2xl flex items-center justify-center text-3xl mx-auto mb-6 shadow-sm group-hover:scale-110 transition-transform">
                        👨‍⚕️
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 uppercase">Licensed Therapist</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Expert care from certified professionals dedicated to pediatric excellence.
                    </p>
                </div>

                {{-- Point 2: Precision in Diagnosis --}}
                <div class="p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border group"
                    style="background-color: rgba(233, 157, 29, 0.05); border-color: rgba(233, 157, 29, 0.2);"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-16 h-16 bg-[#E99D1D] text-white rounded-2xl flex items-center justify-center text-3xl mx-auto mb-6 shadow-sm group-hover:scale-110 transition-transform">
                        🎯
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 uppercase">Precision in Diagnosis</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Accurate assessments that form the foundation for highly tailored interventions.
                    </p>
                </div>

                {{-- Point 3: Multidisciplinary Team Care --}}
                <div class="p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border group"
                    style="background-color: rgba(151, 180, 26, 0.05); border-color: rgba(151, 180, 26, 0.2);"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-16 h-16 bg-[#97B41A] text-white rounded-2xl flex items-center justify-center text-3xl mx-auto mb-6 shadow-sm group-hover:scale-110 transition-transform">
                        🤝
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 uppercase">Multidisciplinary Team Care</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        A collaborative approach involving specialists across multiple therapeutic disciplines.
                    </p>
                </div>

                {{-- Point 4: Parent Support --}}
                <div class="p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border group"
                    style="background-color: rgba(234, 111, 113, 0.05); border-color: rgba(234, 111, 113, 0.2);"
                    data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="w-16 h-16 bg-[#EA6F71] text-white rounded-2xl flex items-center justify-center text-3xl mx-auto mb-6 shadow-sm group-hover:scale-110 transition-transform">
                        👪
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 uppercase">Parent Support</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Empowering families with tools, education, and emotional guidance throughout the journey.
                    </p>
                </div>

                {{-- Point 5: Assured Result --}}
                <div class="p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border group"
                    style="background-color: rgba(50, 168, 184, 0.05); border-color: rgba(50, 168, 184, 0.2);"
                    data-aos="fade-up" data-aos-delay="500">
                    <div
                        class="w-16 h-16 bg-[#32A8B8] text-white rounded-2xl flex items-center justify-center text-3xl mx-auto mb-6 shadow-sm group-hover:scale-110 transition-transform">
                        🏆
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 uppercase">Assured Result</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Committed to measurable progress and positive functional outcomes for every child.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= FOUNDER'S MESSAGE ================= --}}
    <section class="py-16 lg:py-24 bg-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-teal-50/50 -skew-x-12 transform translate-x-20"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row gap-12 items-center">
                <div class="lg:w-1/3 text-center lg:text-left" data-aos="fade-right">
                    <div class="relative inline-block">
                        <img src="{{ asset('images/image2.jpg') }}" alt="Founder"
                            class="w-64 h-64 lg:w-80 lg:h-80 object-cover rounded-full border-8 border-white shadow-2xl">
                        <div class="absolute bottom-4 right-4 bg-[#32A8B8] text-white p-3 rounded-full shadow-lg">
                            <span class="text-2xl">❝</span>
                        </div>
                    </div>
                    <div class="mt-6">
                        <h3 class="text-2xl font-bold text-gray-900">Mushtaq</h3>
                        <p class="text-[#32A8B8] font-medium text-lg">Founder & Director</p>
                    </div>
                </div>

                <div class="lg:w-2/3" data-aos="fade-left">
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-8">A Message from the Founder</h2>
                    <div class="space-y-6 text-lg text-gray-600 leading-relaxed">
                        <p>
                            "Welcome to GEMS Child Development Centre. Our journey began with a simple yet profound belief:
                            that every child is unique and capable of amazing things when given the right support."
                        </p>
                        <p>
                            "Over the past decade, we have had the privilege of walking alongside hundreds of families,
                            witnessing the incredible resilience of children and the transforming power of early
                            intervention. We understand that navigating developmental challenges can be overwhelming, which
                            is why we've built a center that isn't just a clinic, but a supportive community."
                        </p>
                        <p>
                            "Our team is not just highly skilled; they are passionate advocates for your child. We promise
                            to listen, to care, and to work tirelessly to help your child shine."
                        </p>
                    </div>
                    <div class="mt-8">
                        <img src="{{ asset('images/signature.png') }}" alt="Signature" class="h-16 opacity-60">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="relative overflow-hidden py-24 lg:py-32" style="background-color: #32A8B8;">
        {{-- Background Decor --}}
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-[#32A8B8] opacity-90"></div>
            <div class="absolute top-0 right-0 w-1/2 h-full bg-white/5 skew-x-12 transform translate-x-20"></div>
            <div class="absolute bottom-0 left-0 w-1/2 h-full bg-black/5 -skew-x-12 transform -translate-x-20"></div>
        </div>

        {{-- Top Curve --}}
        <div class="absolute top-0 left-0 w-full overflow-hidden leading-none transform rotate-180">
            <svg class="relative block w-full h-[60px] sm:h-[100px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="fill-white"></path>
            </svg>
        </div>

        {{-- Content --}}
        <div class="relative max-w-4xl mx-auto px-4 text-center z-10" data-aos="zoom-in">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-8 tracking-tight">
                Ready to Start Your Journey?
            </h2>
            <p class="text-xl text-white/90 mb-12 max-w-2xl mx-auto leading-relaxed">
                Book a consultation with our experts today and let's discuss how we can
                support your child's growth.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <a href="/contact"
                    class="bg-white text-[#32A8B8] px-10 py-5 rounded-2xl font-bold text-lg hover:bg-gray-50 transition-all shadow-2xl hover:-translate-y-1">
                    Contact Us Now
                </a>
                <a href="/services"
                    class="border-2 border-white/30 backdrop-blur-sm text-white px-10 py-5 rounded-2xl font-bold text-lg hover:bg-white/10 transition-all hover:-translate-y-1">
                    View Services
                </a>
            </div>
        </div>

        {{-- Bottom Curve --}}
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-[60px] sm:h-[100px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="fill-white"></path>
            </svg>
        </div>
    </section>
@endsection