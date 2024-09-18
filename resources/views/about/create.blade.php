@extends('layouts.apps')
@section('title', 'Create Your About')
@section('content')
    <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 row">
            <div class="col-sm-6">
                <label for="full_name" class="form-label">Full Name</label>
                <input type="text" id="full_name" class="form-control" name="full_name" placeholder="Your Full Name">
            </div>
            <div class="col-sm-6">
                <label for="birthday" class="form-label">Birthday</label>
                <input type="date" id="birthday" class="form-control" name="birthday">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control" name="email" placeholder="Your Email">
            </div>
            <div class="col-sm-6">
                <label for="phone_number" class="form-label">Phone Number</label>
                <input type="number" id="phone_number" class="form-control" name="phone_number" placeholder="Phone Number">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-6">
                <label for="website" class="form-label">Website</label>
                <input type="text" id="website" class="form-control" name="website" placeholder="Your Website">
            </div>
            <div class="col-sm-6">
                <label for="age" class="form-label">Age</label>
                <input type="text" id="age" class="form-control" name="age" placeholder="Your Age">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-6">
                <label for="degree" class="form-label">Degree</label>
                <input type="text" id="degree" class="form-control" name="degree" placeholder="Your Degree">
            </div>
            <div class="col-sm-6">
                <label for="job" class="form-label">Job</label>
                <input type="text" id="job" class="form-control" name="job" placeholder="Your Job">
            </div>
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" id="photo" name="photo">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea name="address" id="address" cols="30" rows="10" class="form-control" placeholder="Your Address"></textarea>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">About Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control"
                placeholder="About Description"></textarea>
        </div>
        <div class="mb-3">
            <label for="description2" class="form-label">Other Description</label>
            <textarea name="description2" id="description2" cols="30" rows="10" class="form-control"
                placeholder="Other Description"></textarea>
        </div>
        <div class="mb-3">
            <label for="fb_link" class="form-label">Facebook Link</label>
            <input type="text" id="fb_link" class="form-control" name="fb_link" placeholder="Your Facebook Link">
        </div>
        <div class="mb-3">
            <label for="ig_link" class="form-label">Instagram Link</label>
            <input type="text" id="ig_link" class="form-control" name="ig_link" placeholder="Your Instagram Link">
        </div>
        <div class="mb-3">
            <label for="linkedin_link" class="form-label">LinkedIn Link</label>
            <input type="text" id="linkedin_link" class="form-control" name="linkedin_link"
                placeholder="Your Linkedin Link">
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Create About</button>
            <a href="{{ route('about.index') }}" class="btn btn-secondary">Back</a>
        </div>

    </form>

@endsection
