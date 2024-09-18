<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Project;
use App\Models\About;
use App\Models\Contact;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        $abouts = About::all();
        $projects = Project::with('category')->orderBy('id', 'desc')->get();
        return view('project.index', compact('projects', 'abouts','contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $contacts = Contact::all();
        $categories = Category::get();
        return view('project.create', compact('categories','contacts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'project_photo' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'project_title'=>'nullable|string',
            'sub_title'=>'nullable|string'
        ]);
        if ($request->hasFile('project_photo')) {
            $image = $request->file('project_photo');
            $path = $image->store('public/image');
            $project_photo = basename($path); //menyimpan nama filenya saja
        }
        Project::create([
            'category_id'=>$request->category_id,
            'category_project'=>$request->category_project,
            'project_photo'=>$project_photo,
            'project_title'=>$request->project_title,
            'sub_title'=>$request->sub_title,
        ]);

        Alert::success('Yeaaay Project Created', 'Your Project successfuly created');
        return redirect()->to('project')->with('message', 'Data Berhasil di simpan');
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
        $categories = Category::get();
        $projects = Project::find($id);
        return view('project.edit', compact('categories', 'projects','contacts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project = Project::findOrFail($id);
        if ($request->hasFile('project_photo')) {

            if ($project->project_photo) {
                Storage::delete('public/image/' . $project->project_photo);
            }
            $image = $request->file('project_photo');
            $path = $image->store('public/image');
            $project_photo = basename($path); //menyimpan nama filenya saja
        }

        Project::where('id', $id)->update([
            'category_id'=>$request->category_id,
            'project_photo'=>$request->project_photo,
            'project_title'=>$request->project_title,
            'sub_title'=>$request->sub_title,
        ]);
        toast('Project Edited!','success');
        return redirect()->to('project')->with('message', 'Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Project::where('id', $id)->delete();
        Alert::info('Project Deleted', 'Your Project Info Was Deleted');
        return redirect()->to('project')->with('message', 'Data Berhasil di Update');
    }
}
