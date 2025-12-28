@extends('layouts.app')

@section('title', 'Our Services | AIMS CDC')

@section('content')

{{-- ================= HERO SECTION ================= --}}
<section class="relative bg-teal-900 overflow-hidden py-20 lg:py-28">
    {{-- Background elements --}}
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-96 h-96 rounded-full bg-teal-800/50 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-full h-full bg-gradient-to-t from-teal-900 to-transparent"></div>
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
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-b-4 border-teal-500" data-aos="fade-up">
                <div class="w-16 h-16 bg-teal-100 rounded-xl flex items-center justify-center text-4xl mb-6">🗣️</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">PSYCHOLOGICAL ASSESSMENT</h3>
                <p class="text-gray-600 leading-relaxed">
                    Our licensed psychologists conduct IQ assessments, learning disability evaluations,
                    personality assessments, and cognitive and behavioural assessments to create
                    tailored intervention strategies based on individual needs.
                </p>
            </div>

            {{-- Behavioural Therapy --}}
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-b-4 border-pink-500" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-pink-100 rounded-xl flex items-center justify-center text-4xl mb-6">🧩</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">BEHAVIOURAL THERAPY</h3>
                <p class="text-gray-600 leading-relaxed">
                    Behavioural therapy supports children in improving intellectual and socio-adaptive
                    functioning by strengthening cognitive, social, and emotional skills while reducing
                    challenging behaviours using scientifically validated techniques.
                </p>
            </div>

            {{-- Speech Therapy --}}
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-b-4 border-orange-500" data-aos="fade-up">
                <div class="w-16 h-16 bg-orange-100 rounded-xl flex items-center justify-center text-4xl mb-6">🎭</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">SPEECH THERAPY</h3>
                <p class="text-gray-600 leading-relaxed">
                    Speech and language therapy focuses on improving communication skills,
                    including speech sounds, language development, fluency, social communication,
                    and expressive abilities.
                </p>
            </div>

            {{-- Occupational Therapy --}}
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-b-4 border-blue-500" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center text-4xl mb-6">📚</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">OCCUPATIONAL THERAPY</h3>
                <p class="text-gray-600 leading-relaxed">
                    Occupational therapy helps children develop independence in daily activities by
                    strengthening fine motor, gross motor, sensory integration, visual-motor coordination,
                    self-care, and self-regulation skills.
                </p>
            </div>

            {{-- Special Education --}}
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-b-4 border-purple-500" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center text-4xl mb-6">🧠</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">SPECIAL EDUCATION</h3>
                <p class="text-gray-600 leading-relaxed">
                    We support children with academic difficulties in reading, writing, and mathematics
                    through Individualized Education Plans (IEPs), customized teaching strategies,
                    and the VAKT approach for inclusive learning outcomes.
                </p>
            </div>

            {{-- Psychotherapy & Counselling --}}
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-b-4 border-green-500" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center text-4xl mb-6">💬</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">PSYCHOTHERAPY & COUNSELLING</h3>
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
                ['1','Initial Consultation','Discuss concerns and developmental history.','teal'],
                ['2','Assessment','Comprehensive evaluation to identify needs.','pink'],
                ['3','Therapy Plan','Personalized intervention strategy.','blue'],
                ['4','Progress Review','Continuous monitoring and goal updates.','green']
            ] as [$step,$title,$desc,$color])
            <div class="text-center" data-aos="fade-up">
                <div class="w-20 h-20 mx-auto bg-{{ $color }}-500 text-white rounded-full flex items-center justify-center text-3xl font-bold mb-6 shadow-xl border-4 border-white">
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
<section class="py-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <div class="bg-white rounded-3xl p-8 md:p-12 shadow-2xl border border-teal-100">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">
                Not sure which service you need?
            </h2>
            <p class="text-gray-600 text-lg mb-8">
                Our specialists will guide you after a preliminary assessment.
            </p>
            <a href="/contact"
               aria-label="Schedule an assessment"
               class="inline-block bg-teal-600 text-white px-8 py-4 rounded-xl font-bold hover:bg-teal-700 transition-colors shadow-lg">
                Schedule an Assessment
            </a>
        </div>
    </div>
</section>

@endsection
