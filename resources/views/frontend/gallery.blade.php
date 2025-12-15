@extends('layouts.app')

@section('title', 'Gallery | AIMS CDC')

@section('content')
{{-- ================= HERO SECTION ================= --}}
<section class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-6" data-aos="fade-up">
            Our Gallery
        </h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            Glimpses of our center, activities, and the happy smiles of our children.
        </p>
    </div>
</section>

{{-- ================= GALLERY GRID ================= --}}
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 text-center">
        
        {{-- Filter Buttons (Static for now) --}}
        <div class="flex flex-wrap justify-center gap-4 mb-12" data-aos="fade-up">
            <button class="px-6 py-2 rounded-full bg-teal-600 text-white font-medium shadow-md">All</button>
            <button class="px-6 py-2 rounded-full bg-white text-gray-600 hover:bg-gray-100 border border-gray-200 font-medium transition-colors">Therapy Rooms</button>
            <button class="px-6 py-2 rounded-full bg-white text-gray-600 hover:bg-gray-100 border border-gray-200 font-medium transition-colors">Activities</button>
            <button class="px-6 py-2 rounded-full bg-white text-gray-600 hover:bg-gray-100 border border-gray-200 font-medium transition-colors">Events</button>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            {{-- Image 1 --}}
            <div class="group relative overflow-hidden rounded-2xl shadow-lg aspect-w-4 aspect-h-3 bg-gray-200" data-aos="fade-up">
                <img src="{{ asset('images/image1.png') }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500" alt="Gallery Image">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <p class="text-white font-bold text-lg transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">Play Therapy</p>
                </div>
            </div>

            {{-- Image 2 --}}
            <div class="group relative overflow-hidden rounded-2xl shadow-lg aspect-w-4 aspect-h-3 bg-gray-200" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('images/image2.jpg') }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500" alt="Gallery Image">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <p class="text-white font-bold text-lg transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">Team</p>
                </div>
            </div>

            {{-- Image 3 --}}
            <div class="group relative overflow-hidden rounded-2xl shadow-lg aspect-w-4 aspect-h-3 bg-gray-200" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('images/image3.jpg') }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500" alt="Gallery Image">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <p class="text-white font-bold text-lg transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">Our Center</p>
                </div>
            </div>

            {{-- Placeholders for more images --}}
            @for($i = 4; $i <= 6; $i++)
            <div class="group relative overflow-hidden rounded-2xl shadow-lg aspect-w-4 aspect-h-3 bg-gray-200" data-aos="fade-up" data-aos-delay="{{ ($i-1)*100 }}">
                {{-- Using a placeholder service or just repeating images since I don't have many --}}
                <img src="{{ asset('images/image1.png') }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500" alt="Gallery Image">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <p class="text-white font-bold text-lg transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">Activity {{ $i }}</p>
                </div>
            </div>
            @endfor
        </div>
        
    </div>
</section>
@endsection
