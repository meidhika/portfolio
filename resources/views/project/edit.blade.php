@extends('layouts.apps')
@section('title', 'Edit Your Project')
@section('content')

    <form action="{{ route('project.update', $projects->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <label for="category_project" class="form-label">Category Project</label>
            <select class="form-control" name="category_id" id="category_project">
                <option value="">Pilih Category Project</option>
                @foreach ($categories as $category)
                    <option {{ $category->id == $projects->category_id ? 'selected' : '' }} value="{{ $category->id }}">
                        {{ $category->category_project }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="project_photo" class="form-label">Project Photo</label><br>
            <input type="file" id="project_photo" name="project_photo" value="{{ $projects->project_photo }}">
        </div>
        <div class="mb-3">
            <label for="project_title" class="form-label">Project Title</label>
            <input type="text" id="project_title" class="form-control" name="project_title"
                value="{{ $projects->project_title }}">
        </div>
        <div class="mb-3">
            <label for="sub_title" class="form-label">Sub Project Title</label>
            <input type="text" id="sub_title" class="form-control" name="sub_title" value="{{ $projects->sub_title }}">
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Edi Project</button>
            <a href="{{ route('project.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </form>

    <script>
        var range = document.querySelector(".form-range");
        var rangeValue = document.querySelector(".range-value");

        rangeValue.textContent = range.value;
        range.oninput = function() {
            rangeValue.textContent = this.value;
        }
    </script>

@endsection
