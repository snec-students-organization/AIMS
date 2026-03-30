@extends('layouts.app')

@section('title', 'Our Services | GEMS')

@section('content')

{{-- ================= HERO SECTION ================= --}}
<section class="relative overflow-hidden" style="background-color: #32A8B8;">
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-[#32A8B8] opacity-90"></div>
        {{-- Design elements --}}
        <div class="absolute top-0 right-0 w-1/2 h-full bg-white/5 skew-x-12 transform translate-x-20"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32 text-center">
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6" data-aos="fade-up">
            Our Services
        </h1>
        <p class="text-xl text-white/90 max-w-3xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="100">
            Comprehensive, evidence-based therapies designed to maximize your child’s potential
            in a supportive and nurturing environment.
        </p>
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

{{-- ================= SERVICES GRID ================= --}}
<section class="py-16 lg:py-24 bg-white relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            {{-- Psychological Assessment --}}
            <a href="/contact" class="group block bg-white rounded-[2.5rem] shadow-[0_8px_30px_rgb(0,0,0,0.08)] overflow-hidden text-center relative flex flex-col items-center pb-8 transform transition-all duration-500 ease-out hover:-translate-y-3 hover:shadow-[0_20px_50px_rgba(0,0,0,0.15)] active:scale-[0.97] active:shadow-md cursor-pointer" data-aos="fade-up">
                <div class="relative w-full h-[220px] overflow-hidden">
                    <img src="{{ asset('images/image12.jpg') }}" alt="Psychological Assessment" class="w-full h-full object-cover transform transition-transform duration-700 ease-in-out group-hover:scale-110">
                    <div class="absolute bottom-[-1px] left-0 w-full overflow-hidden leading-none z-10 transition-transform duration-500 group-hover:translate-y-1">
                        <svg class="relative block w-full h-[50px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M0,120 V60 C300,-20 900,140 1200,60 V120 Z" class="fill-white"></path>
                        </svg>
                    </div>
                    <div class="w-16 h-16 rounded-full border-[5px] border-white text-white flex items-center justify-center text-3xl absolute -bottom-8 left-1/2 transform -translate-x-1/2 z-20 shadow-sm transition-transform duration-500 ease-out group-hover:-translate-y-2 group-hover:scale-110" style="background-color: #32A8B8;">
                        🧠
                    </div>
                </div>
                <div class="px-6 pt-12 flex-grow flex flex-col items-center">
                    <h3 class="text-xl font-bold mb-3 text-gray-900 transition-colors duration-300 group-hover:text-[#32A8B8]" style="font-family: 'Fredoka', sans-serif;">Psychological Assessment</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6 font-medium transition-colors duration-300 group-hover:text-gray-600">
                        Our licensed psychologists conduct IQ assessments, learning disability evaluations,
                        personality assessments, and cognitive and behavioural assessments to create
                        tailored intervention strategies based on individual needs.
                    </p>
                    <div class="w-10 h-10 rounded-full text-white flex items-center justify-center mt-auto shadow-md transition-all duration-500 ease-out group-hover:scale-110 group-hover:rotate-12 group-active:-rotate-12" style="background-color: #32A8B8;">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>
                </div>
            </a>

            {{-- Behavioural Therapy --}}
            <a href="/contact" class="group block bg-white rounded-[2.5rem] shadow-[0_8px_30px_rgb(0,0,0,0.08)] overflow-hidden text-center relative flex flex-col items-center pb-8 transform transition-all duration-500 ease-out hover:-translate-y-3 hover:shadow-[0_20px_50px_rgba(0,0,0,0.15)] active:scale-[0.97] active:shadow-md cursor-pointer" data-aos="fade-up" data-aos-delay="100">
                <div class="relative w-full h-[220px] overflow-hidden">
                    <img src="{{ asset('images/image6.jpg') }}" alt="Behavioural Therapy" class="w-full h-full object-cover transform transition-transform duration-700 ease-in-out group-hover:scale-110">
                    <div class="absolute bottom-[-1px] left-0 w-full overflow-hidden leading-none z-10 transition-transform duration-500 group-hover:translate-y-1">
                        <svg class="relative block w-full h-[50px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M0,120 V60 C300,-20 900,140 1200,60 V120 Z" class="fill-white"></path>
                        </svg>
                    </div>
                    <div class="w-16 h-16 rounded-full border-[5px] border-white text-white flex items-center justify-center text-3xl absolute -bottom-8 left-1/2 transform -translate-x-1/2 z-20 shadow-sm transition-transform duration-500 ease-out group-hover:-translate-y-2 group-hover:scale-110" style="background-color: #97B41A;">
                        🧩
                    </div>
                </div>
                <div class="px-6 pt-12 flex-grow flex flex-col items-center">
                    <h3 class="text-xl font-bold mb-3 text-gray-900 transition-colors duration-300 group-hover:text-[#97B41A]" style="font-family: 'Fredoka', sans-serif;">Behavioural Therapy</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6 font-medium transition-colors duration-300 group-hover:text-gray-600">
                        Behavioural therapy supports children in improving intellectual and socio-adaptive
                        functioning by strengthening cognitive, social, and emotional skills while reducing
                        challenging behaviours using scientifically validated techniques.
                    </p>
                    <div class="w-10 h-10 rounded-full text-white flex items-center justify-center mt-auto shadow-md transition-all duration-500 ease-out group-hover:scale-110 group-hover:rotate-12 group-active:-rotate-12" style="background-color: #97B41A;">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>
                </div>
            </a>

            {{-- Speech Therapy --}}
            <a href="/contact" class="group block bg-white rounded-[2.5rem] shadow-[0_8px_30px_rgb(0,0,0,0.08)] overflow-hidden text-center relative flex flex-col items-center pb-8 transform transition-all duration-500 ease-out hover:-translate-y-3 hover:shadow-[0_20px_50px_rgba(0,0,0,0.15)] active:scale-[0.97] active:shadow-md cursor-pointer" data-aos="fade-up" data-aos-delay="200">
                <div class="relative w-full h-[220px] overflow-hidden">
                    <img src="{{ asset('images/image15.jpg') }}" alt="Speech Therapy" class="w-full h-full object-cover transform transition-transform duration-700 ease-in-out group-hover:scale-110">
                    <div class="absolute bottom-[-1px] left-0 w-full overflow-hidden leading-none z-10 transition-transform duration-500 group-hover:translate-y-1">
                        <svg class="relative block w-full h-[50px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M0,120 V60 C300,-20 900,140 1200,60 V120 Z" class="fill-white"></path>
                        </svg>
                    </div>
                    <div class="w-16 h-16 rounded-full border-[5px] border-white text-white flex items-center justify-center text-3xl absolute -bottom-8 left-1/2 transform -translate-x-1/2 z-20 shadow-sm transition-transform duration-500 ease-out group-hover:-translate-y-2 group-hover:scale-110" style="background-color: #32A8B8;">
                        🗣️
                    </div>
                </div>
                <div class="px-6 pt-12 flex-grow flex flex-col items-center">
                    <h3 class="text-xl font-bold mb-3 text-gray-900 transition-colors duration-300 group-hover:text-[#32A8B8]" style="font-family: 'Fredoka', sans-serif;">Speech Therapy</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6 font-medium transition-colors duration-300 group-hover:text-gray-600">
                        Speech and language therapy focuses on improving communication skills,
                        including speech sounds, language development, fluency, social communication,
                        and expressive abilities.
                    </p>
                    <div class="w-10 h-10 rounded-full text-white flex items-center justify-center mt-auto shadow-md transition-all duration-500 ease-out group-hover:scale-110 group-hover:rotate-12 group-active:-rotate-12" style="background-color: #32A8B8;">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>
                </div>
            </a>

            {{-- Occupational Therapy --}}
            <a href="/contact" class="group block bg-white rounded-[2.5rem] shadow-[0_8px_30px_rgb(0,0,0,0.08)] overflow-hidden text-center relative flex flex-col items-center pb-8 transform transition-all duration-500 ease-out hover:-translate-y-3 hover:shadow-[0_20px_50px_rgba(0,0,0,0.15)] active:scale-[0.97] active:shadow-md cursor-pointer" data-aos="fade-up">
                <div class="relative w-full h-[220px] overflow-hidden">
                    <img src="{{ asset('images/image14.jpg') }}" alt="Occupational Therapy" class="w-full h-full object-cover transform transition-transform duration-700 ease-in-out group-hover:scale-110">
                    <div class="absolute bottom-[-1px] left-0 w-full overflow-hidden leading-none z-10 transition-transform duration-500 group-hover:translate-y-1">
                        <svg class="relative block w-full h-[50px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M0,120 V60 C300,-20 900,140 1200,60 V120 Z" class="fill-white"></path>
                        </svg>
                    </div>
                    <div class="w-16 h-16 rounded-full border-[5px] border-white text-white flex items-center justify-center text-3xl absolute -bottom-8 left-1/2 transform -translate-x-1/2 z-20 shadow-sm transition-transform duration-500 ease-out group-hover:-translate-y-2 group-hover:scale-110" style="background-color: #97B41A;">
                        🤲
                    </div>
                </div>
                <div class="px-6 pt-12 flex-grow flex flex-col items-center">
                    <h3 class="text-xl font-bold mb-3 text-gray-900 transition-colors duration-300 group-hover:text-[#97B41A]" style="font-family: 'Fredoka', sans-serif;">Occupational Therapy</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6 font-medium transition-colors duration-300 group-hover:text-gray-600">
                        Occupational therapy helps children develop independence in daily activities by
                        strengthening fine motor, gross motor, sensory integration, visual-motor coordination,
                        self-care, and self-regulation skills.
                    </p>
                    <div class="w-10 h-10 rounded-full text-white flex items-center justify-center mt-auto shadow-md transition-all duration-500 ease-out group-hover:scale-110 group-hover:rotate-12 group-active:-rotate-12" style="background-color: #97B41A;">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>
                </div>
            </a>

            {{-- Special Education --}}
            <a href="/contact" class="group block bg-white rounded-[2.5rem] shadow-[0_8px_30px_rgb(0,0,0,0.08)] overflow-hidden text-center relative flex flex-col items-center pb-8 transform transition-all duration-500 ease-out hover:-translate-y-3 hover:shadow-[0_20px_50px_rgba(0,0,0,0.15)] active:scale-[0.97] active:shadow-md cursor-pointer" data-aos="fade-up" data-aos-delay="100">
                <div class="relative w-full h-[220px] overflow-hidden">
                    <img src="{{ asset('images/image4.jpg') }}" alt="Special Education" class="w-full h-full object-cover transform transition-transform duration-700 ease-in-out group-hover:scale-110">
                    <div class="absolute bottom-[-1px] left-0 w-full overflow-hidden leading-none z-10 transition-transform duration-500 group-hover:translate-y-1">
                        <svg class="relative block w-full h-[50px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M0,120 V60 C300,-20 900,140 1200,60 V120 Z" class="fill-white"></path>
                        </svg>
                    </div>
                    <div class="w-16 h-16 rounded-full border-[5px] border-white text-white flex items-center justify-center text-3xl absolute -bottom-8 left-1/2 transform -translate-x-1/2 z-20 shadow-sm transition-transform duration-500 ease-out group-hover:-translate-y-2 group-hover:scale-110" style="background-color: #EA6F71;">
                        📚
                    </div>
                </div>
                <div class="px-6 pt-12 flex-grow flex flex-col items-center">
                    <h3 class="text-xl font-bold mb-3 text-gray-900 transition-colors duration-300 group-hover:text-[#EA6F71]" style="font-family: 'Fredoka', sans-serif;">Special Education</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6 font-medium transition-colors duration-300 group-hover:text-gray-600">
                        We support children with academic difficulties in reading, writing, and mathematics
                        through Individualized Education Plans (IEPs), customized teaching strategies,
                        and the VAKT approach for inclusive learning outcomes.
                    </p>
                    <div class="w-10 h-10 rounded-full text-white flex items-center justify-center mt-auto shadow-md transition-all duration-500 ease-out group-hover:scale-110 group-hover:rotate-12 group-active:-rotate-12" style="background-color: #EA6F71;">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>
                </div>
            </a>

            {{-- Psychotherapy & Counselling --}}
            <a href="/contact" class="group block bg-white rounded-[2.5rem] shadow-[0_8px_30px_rgb(0,0,0,0.08)] overflow-hidden text-center relative flex flex-col items-center pb-8 transform transition-all duration-500 ease-out hover:-translate-y-3 hover:shadow-[0_20px_50px_rgba(0,0,0,0.15)] active:scale-[0.97] active:shadow-md cursor-pointer" data-aos="fade-up" data-aos-delay="200">
                <div class="relative w-full h-[220px] overflow-hidden">
                    <img src="{{ asset('images/image13.jpg') }}" alt="Psychotherapy & Counselling" class="w-full h-full object-cover transform transition-transform duration-700 ease-in-out group-hover:scale-110" onerror="this.src='{{ asset('images/image2.jpg') }}'">
                    <div class="absolute bottom-[-1px] left-0 w-full overflow-hidden leading-none z-10 transition-transform duration-500 group-hover:translate-y-1">
                        <svg class="relative block w-full h-[50px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M0,120 V60 C300,-20 900,140 1200,60 V120 Z" class="fill-white"></path>
                        </svg>
                    </div>
                    <div class="w-16 h-16 rounded-full border-[5px] border-white text-white flex items-center justify-center text-3xl absolute -bottom-8 left-1/2 transform -translate-x-1/2 z-20 shadow-sm transition-transform duration-500 ease-out group-hover:-translate-y-2 group-hover:scale-110" style="background-color: #E99D1D;">
                        💬
                    </div>
                </div>
                <div class="px-6 pt-12 flex-grow flex flex-col items-center">
                    <h3 class="text-xl font-bold mb-3 text-gray-900 transition-colors duration-300 group-hover:text-[#E99D1D]" style="font-family: 'Fredoka', sans-serif;">Psychotherapy & Counselling</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6 font-medium transition-colors duration-300 group-hover:text-gray-600">
                        Our RCI-licensed psychologists provide individual and group psychotherapy
                        and counselling services using evidence-based practices for a wide range
                        of mental health concerns.
                    </p>
                    <div class="w-10 h-10 rounded-full text-white flex items-center justify-center mt-auto shadow-md transition-all duration-500 ease-out group-hover:scale-110 group-hover:rotate-12 group-active:-rotate-12" style="background-color: #E99D1D;">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>
                </div>
            </a>

        </div>
    </div>
</section>

{{-- ================= PROCESS SECTION ================= --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-900">How It Works</h2>
            <p class="mt-4 text-gray-600">A structured approach to ensure the right care at the right time.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach ([
                ['1','Initial Consultation','Discuss concerns and developmental history.','#32A8B8'],
                ['2','Assessment','Comprehensive evaluation to identify needs.','#97B41A'],
                ['3','Therapy Plan','Personalized intervention strategy.','#EA6F71'],
                ['4','Progress Review','Continuous monitoring and goal updates.','#E99D1D']
            ] as [$step,$title,$desc,$color])
            <div class="text-center" data-aos="fade-up">
                <div class="w-20 h-20 mx-auto text-white rounded-full flex items-center justify-center text-3xl font-bold mb-6 shadow-xl border-4 border-white" style="background: {{ $color }};">
                    {{ $step }}
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $title }}</h3>
                <p class="text-gray-600 text-sm">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ================= CTA ================= --}}
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <div class="rounded-3xl p-8 md:p-12 shadow-2xl text-white" style="background: #32A8B8;">
            <h2 class="text-3xl font-bold mb-4">
                Not sure which service you need?
            </h2>
            <p class="text-white/90 text-lg mb-8">
                Our specialists will guide you after a preliminary assessment.
            </p>
            <a href="/contact"
               aria-label="Schedule an assessment"
               class="inline-block bg-white text-[#32A8B8] px-8 py-4 rounded-xl font-bold hover:bg-gray-100 transition-colors shadow-lg">
                Schedule an Assessment
            </a>
        </div>
    </div>
</section>

@endsection
