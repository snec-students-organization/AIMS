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
            Comprehensive, evidence-based therapies designed to maximize your child's potential 
            in a supportive and nurturing environment.
        </p>
    </div>
</section>

{{-- ================= SERVICES GRID ================= --}}
<section class="py-16 lg:py-24 bg-gray-50 -mt-10 rounded-t-[3rem] relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- Service 1: Speech Therapy --}}
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-b-4 border-teal-500" data-aos="fade-up">
                <div class="w-16 h-16 bg-teal-100 rounded-xl flex items-center justify-center text-4xl mb-6">
                    🗣️
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Speech Therapy</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Targeted therapy to improve speech, language, communication, and articulation skills for effective expression and understanding.
                </p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <span class="text-teal-500">✓</span> Articulation Disorders
                    </li>
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <span class="text-teal-500">✓</span> Language Delays
                    </li>
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <span class="text-teal-500">✓</span> Stuttering/Fluency
                    </li>
                </ul>
            </div>

            {{-- Service 2: Occupational Therapy --}}
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-b-4 border-pink-500" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-pink-100 rounded-xl flex items-center justify-center text-4xl mb-6">
                    🧩
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Occupational Therapy</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Therapeutic support to enhance motor skills, sensory integration, and daily living abilities, promoting independence and functional growth.
                </p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <span class="text-pink-500">✓</span> Sensory Processing
                    </li>
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <span class="text-pink-500">✓</span> Fine Motor Steps
                    </li>
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <span class="text-pink-500">✓</span> Handwriting
                    </li>
                </ul>
            </div>

            

            {{-- Service 4: Behavioral Therapy --}}
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-b-4 border-orange-500" data-aos="fade-up">
                <div class="w-16 h-16 bg-orange-100 rounded-xl flex items-center justify-center text-4xl mb-6">
                    🎭
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Behavioral Therapy</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Structured and evidence-based interventions to support positive behaviour, emotional regulation, and social skills, helping individuals adapt and thrive in daily life.
                </p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <span class="text-orange-500">✓</span> Behavior Modification
                    </li>
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <span class="text-orange-500">✓</span> Social Skills Training
                    </li>
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <span class="text-orange-500">✓</span> Parent Guidance
                    </li>
                </ul>
            </div>

            {{-- Service 5: Psychology --}}
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-b-4 border-purple-500" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center text-4xl mb-6">
                    🧠
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Counselling</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    A safe and supportive space to address emotional, psychological, and personal challenges, promoting mental wellbeing and healthy coping skills.
                </p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <span class="text-purple-500">✓</span> IQ Testing
                    </li>
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <span class="text-purple-500">✓</span> Counseling
                    </li>
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <span class="text-purple-500">✓</span> Emotional Support
                    </li>
                </ul>
            </div>

            {{-- Service 3: Special Education --}}
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-b-4 border-blue-500" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center text-4xl mb-6">
                    📚
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Remedial Training</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Individualized academic support to strengthen learning skills, attention, and comprehension, enabling children to overcome learning difficulties.
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
            <p class="mt-4 text-gray-600">Our systematic approach ensures your child gets the right care at the right time.</p>
        </div>
        
        <div class="relative">
            {{-- Line for connection (Desktop) --}}
            <div class="hidden lg:block absolute top-1/2 left-0 w-full h-1 bg-gray-200 -z-10 transform -translate-y-1/2"></div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                {{-- Step 1 --}}
                <div class="bg-white p-6 text-center" data-aos="fade-up">
                    <div class="w-20 h-20 mx-auto bg-teal-500 text-white rounded-full flex items-center justify-center text-3xl font-bold mb-6 shadow-xl border-4 border-white">
                        1
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Initial Consultation</h3>
                    <p class="text-gray-600 text-sm">Meet with our experts to discuss your concerns and history.</p>
                </div>
                
                {{-- Step 2 --}}
                <div class="bg-white p-6 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-20 h-20 mx-auto bg-pink-500 text-white rounded-full flex items-center justify-center text-3xl font-bold mb-6 shadow-xl border-4 border-white">
                        2
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Assessment</h3>
                    <p class="text-gray-600 text-sm">Comprehensive evaluation to identify strengths and areas of need.</p>
                </div>
                
                {{-- Step 3 --}}
                <div class="bg-white p-6 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-20 h-20 mx-auto bg-blue-500 text-white rounded-full flex items-center justify-center text-3xl font-bold mb-6 shadow-xl border-4 border-white">
                        3
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Therapy Plan</h3>
                    <p class="text-gray-600 text-sm">Customized intervention plan designed specifically for your child.</p>
                </div>
                
                {{-- Step 4 --}}
                <div class="bg-white p-6 text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-20 h-20 mx-auto bg-green-500 text-white rounded-full flex items-center justify-center text-3xl font-bold mb-6 shadow-xl border-4 border-white">
                        4
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Progress Review</h3>
                    <p class="text-gray-600 text-sm">Regular monitoring and adjustment of goals to ensure progress.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <div class="bg-white rounded-3xl p-8 md:p-12 shadow-2xl relative overflow-hidden border border-teal-100">
            <div class="absolute top-0 right-0 w-32 h-32 bg-teal-50 rounded-bl-full -z-0"></div>
            
            <h2 class="text-3xl font-bold text-gray-900 mb-4 relative z-10">Not sure which service you need?</h2>
            <p class="text-gray-600 text-lg mb-8 relative z-10">
                Our specialists can help guide you to the right program for your child after a preliminary assessment.
            </p>
            <a href="/contact" class="inline-block bg-teal-600 text-white px-8 py-4 rounded-xl font-bold hover:bg-teal-700 transition-colors shadow-lg relative z-10">
                Schedule an Assessment
            </a>
        </div>
    </div>
</section>
@endsection
