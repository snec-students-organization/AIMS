@extends('layouts.app')

@section('title', 'Gallery | GEMS')

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
{{-- ================= GALLERY GRID ================= --}}
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 text-center">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($galleries as $gallery)
            <div class="group relative overflow-hidden rounded-2xl shadow-lg aspect-w-4 aspect-h-3 bg-gray-200" data-aos="fade-up">
                <img src="{{ asset('storage/'.$gallery->image) }}"
                     class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500"
                     alt="{{ $gallery->title }}">

                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <p class="text-white font-bold text-lg">
                        {{ $gallery->title ?? $gallery->category }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

@endsection
