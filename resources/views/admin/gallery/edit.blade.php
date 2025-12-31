{{-- resources/views/admin/gallery/edit.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-8">
    <h2 class="text-2xl font-bold mb-6">Edit Gallery Image</h2>

    <form method="POST" action="{{ route('admin.gallery.update',$gallery) }}" enctype="multipart/form-data"
          class="space-y-6">
        @csrf
        @method('PUT')

        <img src="{{ asset('storage/'.$gallery->image) }}"
             class="h-48 w-full object-cover rounded-lg shadow">

        <input type="text" name="title" value="{{ $gallery->title }}"
               class="w-full border rounded-lg px-4 py-2" placeholder="Image Title">

        <select name="category" class="w-full border rounded-lg px-4 py-2">
            <option value="">Select Category</option>
            <option {{ $gallery->category=='Therapy Rooms'?'selected':'' }}>Therapy Rooms</option>
            <option {{ $gallery->category=='Activities'?'selected':'' }}>Activities</option>
            <option {{ $gallery->category=='Events'?'selected':'' }}>Events</option>
        </select>

        <input type="file" name="image" class="w-full">

        <div class="flex gap-4">
            <button class="bg-teal-600 text-white px-6 py-2 rounded-lg">
                Update
            </button>
            <a href="{{ route('admin.gallery.index') }}"
               class="px-6 py-2 border rounded-lg">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
