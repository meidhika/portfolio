@extends('layouts.apps')
@section('title', 'Your Education')

@section('content')

    <div class="table-responsive">
        <div align="left" class="mb-3">
            <a href="{{ route('education.create') }}" class="btn btn-primary">Create Education</a>
        </div>
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Action</th>
                    <th>School</th>
                    <th>Register Year</th>
                    <th>Graduate Year</th>
                    <th>faculty</th>
                    <th>Activity</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($educations as $education => $item)
                    <tr>
                        <td>{{ $education + 1 }}</td>
                        <td>
                            <a href="{{ route('education.edit', $item->id) }}" class="btn btn-primary">Edit Education</a>
                            <form action="{{ route('education.destroy', $item->id) }}" method="POST" style="display: inline"
                                onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                        <td>{{ $item->university }}</td>
                        <td>{{ $item->register_year }}</td>
                        <td>{{ $item->graduate_year }}</td>
                        <td>{{ $item->faculty }}</td>
                        <td>{{ $item->activity }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
