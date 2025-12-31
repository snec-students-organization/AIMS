{{-- resources/views/admin/gallery/index.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto py-8">

    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Gallery Images</h2>

        <a href="{{ route('admin.gallery.create') }}"
           class="px-5 py-2 bg-teal-600 text-white rounded-lg">
            + Add Image
        </a>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        @foreach($galleries as $item)
            <div class="relative group">

                <img src="{{ asset('storage/'.$item->image) }}"
                     class="rounded-lg shadow h-40 w-full object-cover">

                {{-- ACTION BUTTONS --}}
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100
                            transition-opacity flex items-center justify-center gap-3">

                    {{-- EDIT --}}
                    <a href="{{ route('admin.gallery.edit',$item) }}"
                       class="bg-blue-600 text-white px-3 py-1 rounded text-sm">
                        Edit
                    </a>

                    {{-- DELETE --}}
                    <form method="POST" action="{{ route('admin.gallery.destroy',$item) }}">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Delete this image?')"
                                class="bg-red-600 text-white px-3 py-1 rounded text-sm">
                            Delete
                        </button>
                    </form>

                </div>

            </div>
        @endforeach
    </div>
</div>
@endsection
