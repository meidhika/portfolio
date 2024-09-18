@extends('layouts.apps')
@section('title', 'Edit Your Education')
@section('content')
    <form action="{{ route('education.update', $educations->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <div class="col-sm-6">
                <label for="university" class="form-label">School</label>
                <input type="text" id="university" class="form-control" name="university" value="{{$educations->university}}">
            </div>

            <div class="col-sm-6">
                <label for="faculty" class="form-label">Your Faculty</label>
                <input type="text" id="faculty" class="form-control" name="faculty" value="{{$educations->faculty}}">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-6">
                <label for="register_year" class="form-label">Register Year</label>
                <input type="date" id="register_year" class="form-control" name="register_year" value="{{$educations->register_year}}">
            </div>
            <div class="col-sm-6">
                <label for="graduate_year" class="form-label">Graduate Year</label>
                <input type="date" id="graduate_year" class="form-control" name="graduate_year" value="{{$educations->graduate_year}}">
            </div>
        </div>
        <div class="mb-3">
            <label for="activity" class="form-label">Your Activity</label>
            <textarea name="activity" id="activity" cols="30" rows="10" class="form-control"
                >{{$educations->activity}}</textarea>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Edit Education</button>
            <a href="{{ route('education.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </form>

@endsection
