<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Education;
use App\Models\About;
use App\Models\Contact;
class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = Education::all();
        $abouts = About::all();
        $contacts = Contact::all();
        return view('education.index', compact('educations', 'abouts', 'contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contacts = Contact::all();
        return view('education.create',compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'university' => 'nullable|string',
            'faculty' => 'nullable|string',
            'activity' => 'nullable|string',
            'register_year' => 'nullable|date',
            'graduate_year' => 'nullable|date',
        ]);
        Education::create([
            'university' => $request->university,
            'faculty' => $request->faculty,
            'activity' => $request->activity,
            'register_year' => $request->register_year,
            'graduate_year' => $request->graduate_year,
        ]);
        Alert::success('Yeaaay Education Created', 'Your Education info successfuly created');
        return redirect()->route('education.index')->with('success', 'Data berhasil ditambah');
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
        $contacts = Contact::all();
        $educations = Education::findOrFail($id);
        return view('education.edit', compact('educations','contacts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $educations = Education::findOrFail($id);
        $request->validate([
            'university' => 'nullable|string',
            'faculty' => 'nullable|string',
            'activity' => 'nullable|string',
            'register_year' => 'nullable|date',
            'graduate_year' => 'nullable|date',
        ]);
        $educations->university = $request->university;
        $educations->faculty = $request->faculty;
        $educations->activity = $request->activity;
        $educations->register_year = $request->register_year;
        $educations->graduate_year = $request->graduate_year;
        $educations->save();
        toast('Education Info Edited!','success');
        return redirect()->route('education.index')->with('success', 'Update Education Berhasil');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $educations = Education::findOrFail($id);
        $educations->delete();
        Alert::info('Education Deleted', 'Your Education Info Was Deleted');
        return redirect()->route('education.index')->with('success', 'Data Berhasil Dihapus Permanen');

    }
}
