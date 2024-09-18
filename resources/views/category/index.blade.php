@extends('layouts.apps')
@section('title', 'Category Project')

@section('content')

    <div class="table-responsive">
        <div align="left" class="mb-3">
            <a href="{{ route('category.create') }}" class="btn btn-primary">Create Category</a>
        </div>
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Category Project</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category => $item)
                     <tr>
                    <td>{{ $category + 1 }}</td>
                    <td>{{$item->category_project}}</td>

                    <td>
                                <a href="{{route('category.edit', $item->id )}}" class="btn btn-primary">Edit Category</a>
                            <form action="{{ route('category.destroy', $item->id) }}" method="POST"
                                        style="display: inline" onsubmit="return confirm('Anda yakin ingin menghapusnya ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
