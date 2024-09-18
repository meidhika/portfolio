<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\About;
use App\Models\Contact;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutsExists = About::exists();
        $abouts = About::all();
        $contacts = Contact::all();
        return view('about.index', compact('abouts', 'aboutsExists', 'contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        $aboutsExists = About::exists();
        $contacts = Contact::all();
        if($aboutsExists) {
            Alert::info('Your About Profile Exists', 'Sorry, You Cant Create Profile more than one');
            return redirect()->route('about.index')->with('error', 'About already exists.');
        }
        return view('about.create',compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            'full_name'=> 'nullable|string',
            'birthday'=> 'nullable|date',
            'email' => 'nullable|string|email',
            'phone_number' => 'nullable|string',
            'website'=> 'nullable|string',
            'age' => 'nullable|string',
            'degree'=> 'nullable|string',
            'job' => 'nullable|string',
            'photo' =>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address' => 'nullable|string',
            'description'=> 'nullable|string',
            'description2'=> 'nullable|string',
            'fb_link'=> 'nullable|string',
            'ig_link'=> 'nullable|string',
            'linkedin_link'=> 'nullable|string',
        ]);

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $path = $image->store('public/image');
            $photo = basename($path); //menyimpan nama filenya saja
        }

        About::create([
            'full_name'=> $request->full_name,
            'birthday'=> $request->birthday,
            'email' => $request->email,
            'phone_number' => $request->phone_number ,
            'website'=> $request->website,
            'age' => $request->age,
            'degree'=> $request->degree,
            'job' => $request->job,
            'photo' => $photo,
            'address' => $request->address,
            'description'=> $request->description,
            'description2'=> $request->description2,
            'fb_link'=> $request->fb_link,
            'ig_link'=> $request->ig_link,
            'linkedin_link'=> $request->linkedin_link,
        ]);

        Alert::success('Yeaaay About Created', 'Your About info successfuly created');
        return redirect()->route('about.index')->with('success', 'Data berhasil ditambah');
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
        $abouts = About::findOrFail($id);
        return view('about.edit', compact('abouts','contacts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $abouts = About::findOrFail($id);
        $request->validate([
            'full_name'=> 'required|string',
            'birthday'=> 'required|date',
            'email' => 'required|string|email',
            'phone_number' => 'nullable|string',
            'website'=> 'nullable|string',
            'age' => 'nullable|string',
            'degree'=> 'nullable|string',
            'job' => 'nullable|string',
            'photo' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address' => 'nullable|string',
            'description'=> 'nullable|string',
            'description2'=> 'nullable|string',
            'fb_link'=> 'nullable|string',
            'ig_link'=> 'nullable|string',
            'linkedin_link'=> 'nullable|string',
        ]);
        $abouts->full_name = $request->full_name;
        $abouts->birthday = $request->birthday;
        $abouts->email = $request->email;
        $abouts->phone_number = $request->phone_number;
        $abouts->website = $request->website;
        $abouts->age = $request->age;
        $abouts->degree = $request->degree;
        $abouts->job = $request->job;
        $abouts->address = $request->address;
        $abouts->description = $request->description;
        $abouts->description2 = $request->description2;
        $abouts->fb_link = $request->fb_link;
        $abouts->ig_link = $request->ig_link;
        $abouts->linkedin_link = $request->linkedin_link;
        $abouts->save();
        toast('About Info Edited!','success');
        return redirect()->route('about.index')->with('success', 'Update About Berhasil');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $abouts = About::findOrFail($id);
        $abouts->delete();
        Alert::info('About Deleted', 'Your About Info Was Deleted');
        return redirect()->route('about.index')->with('success', 'Data Berhasil Dihapus Permanen');
    }



}
