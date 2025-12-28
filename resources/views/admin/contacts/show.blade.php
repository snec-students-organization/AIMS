@extends('layouts.app')

@section('title', 'View Submission | Admin')

@section('content')
<div class="bg-gray-50 min-h-screen py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Breadcrumbs --}}
        <nav class="flex mb-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('admin.dashboard') }}" class="text-gray-500 hover:text-teal-600 font-medium">Dashboard</a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <a href="{{ route('admin.contacts.index') }}" class="ml-1 text-gray-500 hover:text-teal-600 font-medium md:ml-2">Contact Submissions</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="ml-1 text-gray-900 font-bold md:ml-2">View Details</span>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100">
            <div class="p-8 border-b border-gray-100 flex justify-between items-center bg-white">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900">Message from {{ $contact->name }}</h2>
                    <p class="text-gray-500 mt-1">Submitted on {{ $contact->created_at->format('F d, Y \a\t h:i A') }}</p>
                </div>
                <div class="flex gap-3">
                    <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this submission?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-pink-50 text-pink-600 px-4 py-2 rounded-xl border border-pink-100 font-bold text-sm hover:bg-pink-600 hover:text-white transition-all">
                            Delete
                        </button>
                    </form>
                    <a href="mailto:{{ $contact->email }}" class="bg-teal-600 text-white px-6 py-2 rounded-xl font-bold text-sm hover:bg-teal-700 shadow-lg shadow-teal-200 transition-all flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        Reply via Email
                    </a>
                </div>
            </div>

            <div class="p-8 lg:p-12">
                <div class="grid md:grid-cols-2 gap-8 mb-12">
                    {{-- Contact Info Section --}}
                    <div class="space-y-6">
                        <div>
                            <h4 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-3">Sender Details</h4>
                            <div class="bg-gray-50 rounded-2xl p-5 border border-gray-100">
                                <div class="flex items-center gap-4 mb-4">
                                    <div class="w-12 h-12 bg-teal-100 text-teal-600 rounded-full flex items-center justify-center font-bold text-xl uppercase">
                                        {{ substr($contact->name, 0, 1) }}
                                    </div>
                                    <div>
                                        <div class="font-bold text-gray-900">{{ $contact->name }}</div>
                                        <div class="text-teal-600 text-sm">{{ $contact->email }}</div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 text-gray-600">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    <span class="font-medium">{{ $contact->phone }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Inquiry Info Section --}}
                    <div class="space-y-6">
                        <div>
                            <h4 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-3">Inquiry Info</h4>
                            <div class="bg-gray-50 rounded-2xl p-5 border border-gray-100">
                                <div class="mb-4">
                                    <span class="text-sm font-medium text-gray-500 block mb-1">Service Requested</span>
                                    <span class="inline-flex px-3 py-1 rounded-full text-xs font-bold bg-blue-100 text-blue-800 capitalize">
                                        {{ str_replace('_', ' ', $contact->service ?: 'General Inquiry') }}
                                    </span>
                                </div>
                                <div>
                                    <span class="text-sm font-medium text-gray-500 block mb-1">IP Address</span>
                                    <code class="text-xs text-gray-400 bg-white px-2 py-1 rounded border border-gray-100 font-mono">{{ $contact->ip_address ?: 'N/A' }}</code>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Message Section --}}
                <div>
                    <h4 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-3">Message Content</h4>
                    <div class="bg-teal-50/30 rounded-3xl p-8 border border-teal-100 relative quote-style">
                        <svg class="absolute top-6 left-6 w-12 h-12 text-teal-100 -z-0" fill="currentColor" viewBox="0 0 32 32">
                            <path d="M10 8c-3.3 0-6 2.7-6 6v10h10V14H8c0-2.2 1.8-4 4-4V8zM24 8c-3.3 0-6 2.7-6 6v10h10V14h-6c0-2.2 1.8-4 4-4V8z"></path>
                        </svg>
                        <p class="text-lg text-gray-700 leading-relaxed relative z-10 whitespace-pre-line">
                            {{ $contact->message }}
                        </p>
                    </div>
                </div>

                <div class="mt-12 flex justify-center">
                    <a href="{{ route('admin.contacts.index') }}" class="text-gray-500 font-bold hover:text-teal-600 transition-colors flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                        Back to all submissions
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .quote-style::after {
        content: '"';
        position: absolute;
        bottom: -20px;
        right: 40px;
        font-size: 120px;
        line-height: 1;
        color: rgba(13, 148, 136, 0.05);
        font-family: serif;
    }
</style>
@endsection
