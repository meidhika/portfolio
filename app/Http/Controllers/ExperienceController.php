<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Experience;
use App\Models\About;
use App\Models\Contact;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::all();
        $abouts = About::all();
        $contacts = Contact::all();
        return view('experience.index', compact('experiences', 'abouts','contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contacts = Contact::all();
        return view('experience.create',compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'job' => 'nullable|string',
            'office' => 'nullable|string',
            'job_desc' => 'nullable|string',
            'entery_year' => 'nullable|date',
            'out_year' => 'nullable|date',
        ]);
        Experience::create([
            'job' => $request->job,
            'office' => $request->office,
            'job_desc' => $request->job_desc,
            'entery_year' => $request->entery_year,
            'out_year' => $request->out_year,
        ]);
        Alert::success('Yeaaay Experience Created', 'Your Experience info successfuly created');
        return redirect()->route('experience.index')->with('success', 'Data berhasil ditambah');

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
        $experiences = Experience::findOrFail($id);
        return view('experience.edit', compact('experiences','contacts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $experiences = Experience::findOrFail($id);
        $request->validate([
            'job' => 'nullable|string',
            'office' => 'nullable|string',
            'job_desc' => 'nullable|string',
            'entery_year' => 'nullable|date',
            'out_year' => 'nullable|date',
        ]);
        $experiences->job = $request->job;
        $experiences->office = $request->office;
        $experiences->job_desc = $request->job_desc;
        $experiences->entery_year = $request->entery_year;
        $experiences->out_year = $request->out_year;
        $experiences->save();
        toast('Experience Info Edited!','success');
        return redirect()->route('experience.index')->with('success', 'Update experience Berhasil');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $experiences = Experience::findOrFail($id);
        $experiences->delete();
        Alert::info('Experience Deleted', 'Your Experience Info Was Deleted');
        return redirect()->route('experience.index')->with('success', 'Data Berhasil Dihapus Permanen');

    }
}
