@extends('layouts.apps')
@section('title', 'Your Skill')

@section('content')

    <div class="table-responsive">
        <div align="left" class="mb-3">
            <a href="{{ route('skill.create') }}" class="btn btn-primary">Create Skill</a>
        </div>
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Skill</th>
                    <th>Percent</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($skills as $skill => $item)
                    <tr>
                        <td>{{ $skill + 1 }}</td>
                        <td>{{ $item->skill }}</td>
                        <td>{{ $item->percent }} %</td>
                        <td>
                            <a href="{{ route('skill.edit', $item->id) }}" class="btn btn-primary">Edit Skill</a>
                            <form action="{{ route('skill.destroy', $item->id) }}" method="POST" style="display: inline"
                                onsubmit="return confirm('Anda yakin ingin menghapusnya ?')">
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
