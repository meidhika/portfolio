<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::all();
        $contacts = Contact::all();
        $educations = Education::all();
        $experiences = Experience::all();
        $projects = Project::all();
        $firstsrojects = $projects->slice(0,3);
        $secondprojects = $projects->slice(3,3);

        $skills = Skill::all();
        $firstSkills = $skills->slice(0,3);
        $nextSkills = $skills->slice(3,3);

        return view('dashboard.index', compact('abouts', 'contacts','firstSkills','nextSkills','educations','experiences','firstsrojects','secondprojects'));
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
        //
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
        //
    }
}
