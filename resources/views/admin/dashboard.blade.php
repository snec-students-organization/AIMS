@extends('layouts.app')

@section('title', 'Admin Dashboard | AIMS CDC')

@section('content')
<div class="bg-gray-100 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Admin Dashboard</h1>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-colors">
                    Logout
                </button>
            </form>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            {{-- Contact Submissions Card --}}
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-teal-100 text-teal-600 rounded-xl flex items-center justify-center text-2xl mb-4">✉️</div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Contact Submissions</h3>
                <p class="text-gray-600 mb-4">View and manage messages from the Contact Us page.</p>
                <a href="{{ route('admin.contacts.index') }}" class="text-teal-600 font-semibold hover:text-teal-700 inline-flex items-center">
                    Manage Submissions
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>

            {{-- Placeholder for other admin features --}}
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 opacity-60">
                <div class="w-12 h-12 bg-gray-100 text-gray-400 rounded-xl flex items-center justify-center text-2xl mb-4">👥</div>
                <h3 class="text-xl font-bold text-gray-400 mb-2">Users (Coming Soon)</h3>
                <p class="text-gray-400">Management of user accounts and permissions.</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 opacity-60">
                <div class="w-12 h-12 bg-gray-100 text-gray-400 rounded-xl flex items-center justify-center text-2xl mb-4">⚙️</div>
                <h3 class="text-xl font-bold text-gray-400 mb-2">Settings (Coming Soon)</h3>
                <p class="text-gray-400">Configure site settings and parameters.</p>
            </div>
        </div>
    </div>
</div>
@endsection
