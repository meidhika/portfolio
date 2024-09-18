@extends('layouts.apps')
@section('title', 'Create Category Project')
@section('content')

</style>
    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 row">

                <label for="category_project" class="form-label">Category Project</label>
                <input type="text" id="category_project" class="form-control" name="category_project" placeholder="Category Project">

        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Create Category</button>
            <a href="{{ route('category.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
@endsection
