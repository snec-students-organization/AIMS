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
            <div class="p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border" 
                 style="background-color: rgba(50, 168, 184, 0.05); border-color: rgba(50, 168, 184, 0.2);"
                 data-aos="fade-up">
                <div class="w-16 h-16 bg-[#32A8B8] text-white rounded-2xl flex items-center justify-center text-4xl mb-6 shadow-sm">🗣️</div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900 uppercase">PSYCHOLOGICAL ASSESSMENT</h3>
                <p class="text-gray-600 leading-relaxed">
                    Our licensed psychologists conduct IQ assessments, learning disability evaluations,
                    personality assessments, and cognitive and behavioural assessments to create
                    tailored intervention strategies based on individual needs.
                </p>
            </div>

            {{-- Behavioural Therapy --}}
            <div class="p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border" 
                 style="background-color: rgba(151, 180, 26, 0.05); border-color: rgba(151, 180, 26, 0.2);"
                 data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-[#97B41A] text-white rounded-2xl flex items-center justify-center text-4xl mb-6 shadow-sm">🧩</div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900 uppercase">BEHAVIOURAL THERAPY</h3>
                <p class="text-gray-600 leading-relaxed">
                    Behavioural therapy supports children in improving intellectual and socio-adaptive
                    functioning by strengthening cognitive, social, and emotional skills while reducing
                    challenging behaviours using scientifically validated techniques.
                </p>
            </div>

            {{-- Speech Therapy --}}
            <div class="p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border" 
                 style="background-color: rgba(234, 111, 113, 0.05); border-color: rgba(234, 111, 113, 0.2);"
                 data-aos="fade-up">
                <div class="w-16 h-16 bg-[#EA6F71] text-white rounded-2xl flex items-center justify-center text-4xl mb-6 shadow-sm">🎭</div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900 uppercase">SPEECH THERAPY</h3>
                <p class="text-gray-600 leading-relaxed">
                    Speech and language therapy focuses on improving communication skills,
                    including speech sounds, language development, fluency, social communication,
                    and expressive abilities.
                </p>
            </div>

            {{-- Occupational Therapy --}}
            <div class="p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border" 
                 style="background-color: rgba(233, 157, 29, 0.05); border-color: rgba(233, 157, 29, 0.2);"
                 data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-[#E99D1D] text-white rounded-2xl flex items-center justify-center text-4xl mb-6 shadow-sm">📚</div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900 uppercase">OCCUPATIONAL THERAPY</h3>
                <p class="text-gray-600 leading-relaxed">
                    Occupational therapy helps children develop independence in daily activities by
                    strengthening fine motor, gross motor, sensory integration, visual-motor coordination,
                    self-care, and self-regulation skills.
                </p>
            </div>

            {{-- Special Education --}}
            <div class="p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border" 
                 style="background-color: rgba(50, 168, 184, 0.05); border-color: rgba(50, 168, 184, 0.2);"
                 data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-[#32A8B8] text-white rounded-2xl flex items-center justify-center text-4xl mb-6 shadow-sm">🧠</div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900 uppercase">SPECIAL EDUCATION</h3>
                <p class="text-gray-600 leading-relaxed">
                    We support children with academic difficulties in reading, writing, and mathematics
                    through Individualized Education Plans (IEPs), customized teaching strategies,
                    and the VAKT approach for inclusive learning outcomes.
                </p>
            </div>

            {{-- Psychotherapy & Counselling --}}
            <div class="p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border" 
                 style="background-color: rgba(151, 180, 26, 0.05); border-color: rgba(151, 180, 26, 0.2);"
                 data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-[#97B41A] text-white rounded-2xl flex items-center justify-center text-4xl mb-6 shadow-sm">💬</div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900 uppercase">PSYCHOTHERAPY & COUNSELLING</h3>
                <p class="text-gray-600 leading-relaxed">
                    Our RCI-licensed psychologists provide individual and group psychotherapy
                    and counselling services using evidence-based practices for a wide range
                    of mental health concerns.
                </p>
            </div>

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
