{{-- resources/views/admin/gallery/create.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-8">
    <h2 class="text-2xl font-bold mb-6">Add Gallery Image</h2>

    <form method="POST" action="{{ route('admin.gallery.store') }}" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <input type="text" name="title" placeholder="Image Title (optional)"
               class="w-full border rounded-lg px-4 py-2">

        <select name="category" class="w-full border rounded-lg px-4 py-2">
            <option value="">Select Category</option>
            <option>Therapy</option>
            <option>Education</option>
            <option>counseling</option>
            <option>Activities</option>
            <option>Events</option>
        </select>

        <input type="file" name="image" required class="w-full">

        <button class="px-6 py-2 bg-teal-600 text-white rounded-lg">
            Upload Image
        </button>
    </form>
</div>
@endsection
