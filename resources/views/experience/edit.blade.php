@extends('layouts.apps')
@section('title', 'Edit Your Experience')
@section('content')
    <form action="{{ route('experience.update', $experiences->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <div class="col-sm-6">
                <label for="job" class="form-label">Your Job</label>
                <input type="text" id="job" class="form-control" name="job"  value="{{$experiences->job}}">
            </div>

            <div class="col-sm-6">
                <label for="office" class="form-label">Office</label>
                <input type="text" id="office" class="form-control" name="office" value="{{$experiences->office}}">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-6">
                <label for="entery_year" class="form-label">Entery Year</label>
                <input type="date" id="entery_year" class="form-control" name="entery_year" value="{{$experiences->entery_year}}">
            </div>
            <div class="col-sm-6">
                <label for="out_year" class="form-label">Out Year</label>
                <input type="date" id="out_year" class="form-control" name="out_year" value="{{$experiences->out_year}}">
            </div>

        </div>
        <div class="mb-3">
            <label for="job_desc" class="form-label">Your Job Desc</label>
            <textarea name="job_desc" id="job_desc" cols="30" rows="10" class="form-control"
                placeholder="Your Job Desc">{{$experiences->job_desc}}</textarea>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Edit Experience</button>
            <a href="{{ route('experience.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </form>

@endsection
