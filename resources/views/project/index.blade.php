@extends('layouts.apps')
@section('title', 'Your Project')
@section('content')

    <div class="table-responsive">
        <div align="left" class="mb-3">
            <a href="{{ route('project.create') }}" class="btn btn-primary">Create Project</a>
        </div>

        @foreach ($projects as $project => $item)
            <table class="table table-bordered my-3">
                <img src="{{ asset('storage/image/' . $item->project_photo) }}" alt="" width="300px"
                    style="border-radius:10px;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Category Project</th>
                        <th>Project Title</th>
                        <th>Sub Title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>{{ $project + 1 }}</td>
                        <td>{{ $item->category->category_project }}</td>
                        <td>{{ $item->project_title }}</td>
                        <td>{{ $item->sub_title }}</td>

                        <td><a href="{{ route('project.edit', $item->id) }}" class="btn btn-primary">Edit Project</a>
                            <form action="{{ route('project.destroy', $item->id) }}" method="POST" style="display: inline"
                                onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
        @endforeach
        </table>
    </div>
@endsection
