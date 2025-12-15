@extends('layouts.app')

@section('title', 'Careers | AIMS CDC')

@section('content')
{{-- ================= HERO SECTION ================= --}}
<section class="bg-blue-900 py-24 relative overflow-hidden">
    {{-- Design elements --}}
    <div class="absolute top-0 right-0 w-1/2 h-full bg-blue-800/30 skew-x-12 transform translate-x-20"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-teal-500/10 rounded-full blur-3xl"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <span class="inline-block py-1 px-3 rounded-full bg-blue-800/50 border border-blue-700 text-blue-200 text-sm font-semibold mb-6 animate-fade-in-up">We're Hiring!</span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6" data-aos="fade-up">
            Join Our Mission
        </h1>
        <p class="text-xl text-blue-100 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="100">
            Build a rewarding career helping children reach their full potential. Work with a passionate team in a world-class environment.
        </p>
    </div>
</section>

{{-- ================= CULTURE ================= --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Why Work With Us?</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">We believe in taking care of our team so they can take the best care of our children.</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gray-50 p-8 rounded-2xl hover:bg-white hover:shadow-xl transition-all duration-300 border border-transparent hover:border-gray-100" data-aos="fade-up" data-aos-delay="100">
                <div class="w-12 h-12 bg-teal-100 text-teal-600 rounded-xl flex items-center justify-center text-2xl mb-6">🎓</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Professional Growth</h3>
                <p class="text-gray-600">Continuous learning opportunities, workshops, and certifications to keep you at the forefront of your field.</p>
            </div>
            
            <div class="bg-gray-50 p-8 rounded-2xl hover:bg-white hover:shadow-xl transition-all duration-300 border border-transparent hover:border-gray-100" data-aos="fade-up" data-aos-delay="200">
                <div class="w-12 h-12 bg-pink-100 text-pink-600 rounded-xl flex items-center justify-center text-2xl mb-6">🤝</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Supportive Culture</h3>
                <p class="text-gray-600">A collaborative, multidisciplinary team environment where every voice is heard and valued.</p>
            </div>
            
            <div class="bg-gray-50 p-8 rounded-2xl hover:bg-white hover:shadow-xl transition-all duration-300 border border-transparent hover:border-gray-100" data-aos="fade-up" data-aos-delay="300">
                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center text-2xl mb-6">⚖️</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Work-Life Balance</h3>
                <p class="text-gray-600">Flexible schedules and a supportive management team that understands the importance of personal well-being.</p>
            </div>
        </div>
    </div>
</section>

{{-- ================= OPENINGS ================= --}}
<section class="py-16 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center" data-aos="fade-up">Current Openings</h2>
        
        <div class="space-y-6">
            {{-- Job 1 --}}
            <div class="bg-white rounded-xl shadow-md p-6 sm:p-8 hover:shadow-lg transition-shadow border-l-4 border-teal-500" data-aos="fade-up">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Senior Speech Therapist</h3>
                        <div class="flex flex-wrap gap-4 text-sm text-gray-500">
                            <span class="flex items-center gap-1">📍 Kochi, Kerala</span>
                            <span class="flex items-center gap-1">🕒 Full Time</span>
                            <span class="flex items-center gap-1">💼 3+ Years Exp</span>
                        </div>
                    </div>
                    <a href="mailto:careers@aimscdc.com?subject=Application for Senior Speech Therapist" class="inline-flex items-center justify-center bg-teal-600 hover:bg-teal-700 text-white font-semibold px-6 py-2.5 rounded-lg transition-colors">
                        Apply Now
                    </a>
                </div>
            </div>
            
            {{-- Job 2 --}}
            <div class="bg-white rounded-xl shadow-md p-6 sm:p-8 hover:shadow-lg transition-shadow border-l-4 border-pink-500" data-aos="fade-up" data-aos-delay="100">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Occupational Therapist</h3>
                        <div class="flex flex-wrap gap-4 text-sm text-gray-500">
                            <span class="flex items-center gap-1">📍 Kochi, Kerala</span>
                            <span class="flex items-center gap-1">🕒 Full Time</span>
                            <span class="flex items-center gap-1">💼 1-3 Years Exp</span>
                        </div>
                    </div>
                    <a href="mailto:careers@aimscdc.com?subject=Application for Occupational Therapist" class="inline-flex items-center justify-center bg-pink-600 hover:bg-pink-700 text-white font-semibold px-6 py-2.5 rounded-lg transition-colors">
                        Apply Now
                    </a>
                </div>
            </div>
            
            {{-- Job 3 --}}
            <div class="bg-white rounded-xl shadow-md p-6 sm:p-8 hover:shadow-lg transition-shadow border-l-4 border-blue-500" data-aos="fade-up" data-aos-delay="200">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Special Educator</h3>
                        <div class="flex flex-wrap gap-4 text-sm text-gray-500">
                            <span class="flex items-center gap-1">📍 Kochi, Kerala</span>
                            <span class="flex items-center gap-1">🕒 Part Time / Full Time</span>
                            <span class="flex items-center gap-1">💼 Fresher / Experienced</span>
                        </div>
                    </div>
                    <a href="mailto:careers@aimscdc.com?subject=Application for Special Educator" class="inline-flex items-center justify-center bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2.5 rounded-lg transition-colors">
                        Apply Now
                    </a>
                </div>
            </div>
        </div>
        
        <div class="mt-12 text-center">
            <p class="text-gray-600 mb-4">Don't see a matching role? We are always looking for talent.</p>
            <a href="mailto:careers@aimscdc.com" class="text-teal-600 font-semibold hover:text-teal-700">Send your CV to careers@aimscdc.com →</a>
        </div>
    </div>
</section>
@endsection
