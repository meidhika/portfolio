<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Category;
use App\Models\Project;
class portfolioViewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::all();
        return view('incPort.hero', compact('abouts'));
    }
    public function about()
    {
        $skills = Skill::all();
        $firstSkills = $skills->slice(0,3);
        $nextSkills = $skills->slice(3,3);
        $abouts = About::all();
        return view('incPort.about', compact('abouts','firstSkills','nextSkills'));
    }
    public function resume()
    {
        $experiences = Experience::all();
        $educations = Education::all();
        return view('incPort.resume', compact('experiences','educations'));
    }
    public function skill()
    {
        $skills = Skill::all();
        $firstSkills = $skills->slice(0,3);
        $nextSkills = $skills->slice(3,3);
        return view('incPort.skills', compact('skills'));
    }
    public function project()
    {
        $projects = Project::with('category')->get();
        return view('incPort.portfolio', compact('projects'));
    }
    public function contact()
    { 
        $abouts = About::all();
        return view('incPort.contact', compact('abouts'));
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
