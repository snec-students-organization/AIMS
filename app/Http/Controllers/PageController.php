<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery; 

class PageController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function gallery()
{
    $galleries = Gallery::latest()->get(); // ✅ FETCH DATA
    return view('frontend.gallery', compact('galleries')); // ✅ PASS TO VIEW
}

    public function blog()
    {
        return view('frontend.blog');
    }

    public function career()
    {
        return view('frontend.career');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'service' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        $validated['ip_address'] = $request->ip();

        \App\Models\ContactSubmission::create($validated);

        return back()->with('success', 'Your message has been sent successfully! We will get back to you soon.');
    }
}
