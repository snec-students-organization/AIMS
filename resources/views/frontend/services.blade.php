@extends('layouts.app')

@section('title', 'Our Services | GEMS')

@section('content')

{{-- ================= HERO SECTION ================= --}}
<section class="relative overflow-hidden py-20 lg:py-28" style="background-color: #32A8B8;">
    {{-- Background elements --}}
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-96 h-96 rounded-full bg-white/10 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-full h-full bg-gradient-to-t from-[#32A8B8] to-transparent"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6" data-aos="fade-up">
            Our Services
        </h1>
        <p class="text-xl text-teal-100 max-w-3xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="100">
            Comprehensive, evidence-based therapies designed to maximize your child’s potential
            in a supportive and nurturing environment.
        </p>
    </div>
</section>

{{-- ================= SERVICES GRID ================= --}}
<section class="py-16 lg:py-24 bg-gray-50 -mt-10 rounded-t-[3rem] relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            {{-- Psychological Assessment --}}
            <div class="p-8 text-white shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" style="background:#32A8B8; border-radius: 20px 60px 20px 60px;" data-aos="fade-up">
                <div class="w-16 h-16 bg-white/20 rounded-xl flex items-center justify-center text-4xl mb-6">🗣️</div>
                <h3 class="text-2xl font-bold mb-4 uppercase">PSYCHOLOGICAL ASSESSMENT</h3>
                <p class="text-white/90 leading-relaxed">
                    Our licensed psychologists conduct IQ assessments, learning disability evaluations,
                    personality assessments, and cognitive and behavioural assessments to create
                    tailored intervention strategies based on individual needs.
                </p>
            </div>

            {{-- Behavioural Therapy --}}
            <div class="p-8 text-white shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" style="background:#97B41A; border-radius: 60px 20px 60px 20px;" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-white/20 rounded-xl flex items-center justify-center text-4xl mb-6">🧩</div>
                <h3 class="text-2xl font-bold mb-4 uppercase">BEHAVIOURAL THERAPY</h3>
                <p class="text-white/90 leading-relaxed">
                    Behavioural therapy supports children in improving intellectual and socio-adaptive
                    functioning by strengthening cognitive, social, and emotional skills while reducing
                    challenging behaviours using scientifically validated techniques.
                </p>
            </div>

            {{-- Speech Therapy --}}
            <div class="p-8 text-white shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" style="background:#EA6F71; border-radius: 20px 60px 20px 60px;" data-aos="fade-up">
                <div class="w-16 h-16 bg-white/20 rounded-xl flex items-center justify-center text-4xl mb-6">🎭</div>
                <h3 class="text-2xl font-bold mb-4 uppercase">SPEECH THERAPY</h3>
                <p class="text-white/90 leading-relaxed">
                    Speech and language therapy focuses on improving communication skills,
                    including speech sounds, language development, fluency, social communication,
                    and expressive abilities.
                </p>
            </div>

            {{-- Occupational Therapy --}}
            <div class="p-8 text-white shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" style="background:#E99D1D; border-radius: 60px 20px 60px 20px;" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-white/20 rounded-xl flex items-center justify-center text-4xl mb-6">📚</div>
                <h3 class="text-2xl font-bold mb-4 uppercase">OCCUPATIONAL THERAPY</h3>
                <p class="text-white/90 leading-relaxed">
                    Occupational therapy helps children develop independence in daily activities by
                    strengthening fine motor, gross motor, sensory integration, visual-motor coordination,
                    self-care, and self-regulation skills.
                </p>
            </div>

            {{-- Special Education --}}
            <div class="p-8 text-white shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" style="background:#32A8B8; border-radius: 20px 60px 20px 60px;" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-white/20 rounded-xl flex items-center justify-center text-4xl mb-6">🧠</div>
                <h3 class="text-2xl font-bold mb-4 uppercase">SPECIAL EDUCATION</h3>
                <p class="text-white/90 leading-relaxed">
                    We support children with academic difficulties in reading, writing, and mathematics
                    through Individualized Education Plans (IEPs), customized teaching strategies,
                    and the VAKT approach for inclusive learning outcomes.
                </p>
            </div>

            {{-- Psychotherapy & Counselling --}}
            <div class="p-8 text-white shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" style="background:#97B41A; border-radius: 60px 20px 60px 20px;" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-white/20 rounded-xl flex items-center justify-center text-4xl mb-6">💬</div>
                <h3 class="text-2xl font-bold mb-4 uppercase">PSYCHOTHERAPY & COUNSELLING</h3>
                <p class="text-white/90 leading-relaxed">
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
