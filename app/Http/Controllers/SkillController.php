<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Skill;
use App\Models\About;
use App\Models\Contact;
class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::all();
        $abouts = About::all();
        $contacts = Contact::all();
        return view('skill.index', compact('skills','abouts', 'contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contacts = Contact::all();
        return view('skill.create', compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'skill' => 'nullable|string',
            'percent' => 'nullable|string',
        ]);
        Skill::create([
            'skill'=>$request->skill,
            'percent'=>$request->percent,
        ]);
         Alert::success('Yeaaay Skill Created', 'Your Skill info successfuly created');
        return redirect()->route('skill.index')->with('success', 'Data berhasil ditambah');

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
        $skills = Skill::findOrFail($id);
        return view('skill.edit', compact('skills','contacts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $skills = Skill::findOrFail($id);
        $request->validate([
            'skill' => 'nullable|string',
            'percent' => 'nullable|string',
        ]);
        $skills->skill = $request->skill;
        $skills->percent = $request->percent;
        $skills->save();
         toast('Skill Info Edited!','success');
        return redirect()->route('skill.index')->with('success', 'Update Skill Berhasil');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skills = Skill::findOrFail($id);
        $skills->delete();
        Alert::info('Skill Deleted', 'Your Skill Info Was Deleted');
        return redirect()->route('skill.index')->with('success', 'Data Berhasil Dihapus Permanen');

    }
}
