<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Category;
use App\Models\About;
use App\Models\Contact;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $abouts = About::all();
        $contacts = Contact::all();
        return view('category.index', compact('categories', 'abouts','contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contacts = Contact::all();
        return view('category.create', compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_project' => 'nullable|string',

        ]);
        Category::create([
            'category_project'=>$request->category_project,

        ]);
        Alert::success('Yeaaay Category Created', 'Your Category Project successfuly created');
        return redirect()->route('category.index')->with('success', 'Data berhasil ditambah');

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
        $categories = Category::findOrFail($id);
        return view('category.edit', compact('categories','contacts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categories = Category::findOrFail($id);
        $request->validate([
            'category_project' => 'nullable|string',

        ]);
        $categories->category_project = $request->category_project;
        $categories->save();
        toast('Category Project Edited!','success');
        return redirect()->route('category.index')->with('success', 'Update Category Berhasil');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();
        Alert::info('Category Deleted', 'Your Category Info Was Deleted');
        return redirect()->route('category.index')->with('success', 'Data Berhasil Dihapus Permanen');

    }
}
