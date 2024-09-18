@extends('layouts.apps')
@section('title', 'Your Work Experience')

@section('content')

    <div class="table-responsive">
        <div align="left" class="mb-3">
            <a href="{{ route('experience.create') }}" class="btn btn-primary">Create Experience</a>
        </div>
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Action</th>
                    <th>Job</th>
                    <th>Office</th>
                    <th>Year Of Entery</th>
                    <th>Year Out</th>
                    <th>Job Desc</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($experiences as $experience => $item)
                    <tr>
                        <td>{{ $experience + 1 }}</td>
                        <td>
                            <a href="{{ route('experience.edit', $item->id) }}" class="btn btn-primary">Edit Experience</a>
                            <form action="{{ route('experience.destroy', $item->id) }}" method="POST" style="display: inline"
                                onsubmit="return confirm('Anda yakin ingin menghapusnya ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                        <td>{{ $item->job }}</td>
                        <td>{{ $item->office }}</td>
                        <td>{{ $item->entery_year }}</td>
                        <td>{{ $item->out_year }}</td>
                        <td>{{ $item->job_desc }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
