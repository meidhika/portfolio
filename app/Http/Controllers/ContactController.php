<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Contact;
use App\Models\About;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::all();
        $contacts = Contact::all();
        return view('contact.index', compact('contacts', 'abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string',
            'email' => 'nullable|string',
            'subject' => 'nullable|string',
            'message' => 'nullable|string',
        ]);
        Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message,
        ]);

        Alert::success('Thanks For Contact Me', 'I Will Response Soon');
        return redirect()->route('portfolio.contact')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contacts = Contact::findOrFail($id);
        $contacts->delete();
        Alert::info('Contact Deleted', 'Your Subscriber Contact Was Deleted');
        return redirect()->route('contact.index')->with('success', 'Data Berhasil Dihapus Permanen');

    }
}
