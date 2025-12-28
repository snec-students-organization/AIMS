@extends('layouts.app')

@section('title', 'Contact Submissions | Admin')

@section('content')
<div class="bg-gray-50 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Breadcrumbs --}}
        <nav class="flex mb-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('admin.dashboard') }}" class="text-gray-500 hover:text-teal-600 font-medium">Dashboard</a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="ml-1 text-gray-900 font-bold md:ml-2">Contact Submissions</span>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100">
            <div class="p-8 border-b border-gray-100 flex justify-between items-center bg-white">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900">Message Submissions</h2>
                    <p class="text-gray-500 mt-1">Manage inquiries received from the website contact form.</p>
                </div>
                <div class="flex gap-4">
                    <span class="bg-teal-100 text-teal-800 text-xs font-semibold px-2.5 py-0.5 rounded-full uppercase tracking-wider">
                        {{ $contacts->total() }} Total
                    </span>
                </div>
            </div>

            @if(session('success'))
                <div class="mx-8 mt-6 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl flex items-center gap-3">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    {{ session('success') }}
                </div>
            @endif

            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="bg-gray-50 text-gray-500 uppercase text-xs font-bold tracking-wider">
                        <tr>
                            <th class="px-8 py-4">Name & Contact</th>
                            <th class="px-8 py-4">Service</th>
                            <th class="px-8 py-4">Message Preview</th>
                            <th class="px-8 py-4">Status</th>
                            <th class="px-8 py-4">Date</th>
                            <th class="px-8 py-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($contacts as $contact)
                            <tr class="hover:bg-gray-50 transition-colors group">
                                <td class="px-8 py-5">
                                    <div class="font-bold text-gray-900">{{ $contact->name }}</div>
                                    <div class="text-sm text-gray-500">{{ $contact->email }}</div>
                                    <div class="text-sm text-gray-400 font-medium">{{ $contact->phone }}</div>
                                </td>
                                <td class="px-8 py-5">
                                    <span class="inline-flex px-3 py-1 rounded-full text-xs font-bold bg-blue-50 text-blue-700 capitalize">
                                        {{ str_replace('_', ' ', $contact->service ?: 'General') }}
                                    </span>
                                </td>
                                <td class="px-8 py-5">
                                    <p class="text-sm text-gray-600 line-clamp-2 max-w-xs">
                                        {{ $contact->message }}
                                    </p>
                                </td>
                                <td class="px-8 py-5">
                                    @if($contact->status === 'pending')
                                        <span class="flex items-center gap-1.5 text-pink-600 font-bold text-xs uppercase tracking-widest">
                                            <span class="w-2 h-2 rounded-full bg-pink-500 animate-pulse"></span>
                                            New
                                        </span>
                                    @else
                                        <span class="flex items-center gap-1.5 text-gray-400 font-bold text-xs uppercase tracking-widest">
                                            Read
                                        </span>
                                    @endif
                                </td>
                                <td class="px-8 py-5 text-sm text-gray-500 whitespace-nowrap">
                                    {{ $contact->created_at->format('M d, Y') }}<br>
                                    <span class="text-xs opacity-60">{{ $contact->created_at->format('h:i A') }}</span>
                                </td>
                                <td class="px-8 py-5 text-right whitespace-nowrap">
                                    <div class="flex justify-end gap-2">
                                        <a href="{{ route('admin.contacts.show', $contact) }}" 
                                           class="p-2 bg-teal-50 text-teal-600 rounded-lg hover:bg-teal-600 hover:text-white transition-all duration-300"
                                           title="View Details">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                        </a>
                                        <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this submission?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="p-2 bg-pink-50 text-pink-600 rounded-lg hover:bg-pink-600 hover:text-white transition-all duration-300"
                                                    title="Delete">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-8 py-16 text-center text-gray-500">
                                    <div class="flex flex-col items-center">
                                        <svg class="w-16 h-16 text-gray-200 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4a2 2 0 012-2m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                                        <p class="text-xl font-bold text-gray-400">No submissions yet</p>
                                        <p class="text-gray-400">Inquiries from the contact page will appear here.</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($contacts->hasPages())
                <div class="px-8 py-6 bg-gray-50 border-t border-gray-100">
                    {{ $contacts->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
