@extends('layouts.apps')
@section('title', 'Create Your Education')
@section('content')
    <form action="{{ route('education.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 row">
            <div class="col-sm-6">
                <label for="university" class="form-label">School</label>
                <input type="text" id="university" class="form-control" name="university"
                    placeholder="Your School / University">
            </div>

            <div class="col-sm-6">
                <label for="faculty" class="form-label">Your Faculty</label>
                <input type="text" id="faculty" class="form-control" name="faculty" placeholder="Your Faculty">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-6">
                <label for="register_year" class="form-label">Register Year</label>
                <input type="date" id="register_year" class="form-control" name="register_year">
            </div>
            <div class="col-sm-6">
                <label for="graduate_year" class="form-label">Graduate Year</label>
                <input type="date" id="graduate_year" class="form-control" name="graduate_year">
            </div>

        </div>
        <div class="mb-3">
            <label for="activity" class="form-label">Your Activity</label>
            <textarea name="activity" id="activity" cols="30" rows="10" class="form-control" placeholder="Your Activity"></textarea>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Create Education</button>
            <a href="{{ route('education.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </form>

@endsection
