@extends('layouts.apps')
@section('title', 'Edit Category Project')
@section('content')

    </style>
    <form action="{{ route('category.update', $categories->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3 row">

            <label for="category_project" class="form-label">Category Project</label>
            <input type="text" id="category_project" class="form-control" name="category_project"
                value="{{ $categories->category_project }}">

        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Edit Category</button>
            <a href="{{ route('category.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
@endsection
