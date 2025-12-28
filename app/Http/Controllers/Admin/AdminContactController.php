<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function index()
    {
        $contacts = ContactSubmission::latest()->paginate(10);
        return view('admin.contacts.index', compact('contacts'));
    }

    public function show(ContactSubmission $contact)
    {
        if ($contact->status === 'pending') {
            $contact->update(['status' => 'read']);
        }
        return view('admin.contacts.show', compact('contact'));
    }

    public function destroy(ContactSubmission $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contacts.index')->with('success', 'Contact submission deleted successfully.');
    }
}
