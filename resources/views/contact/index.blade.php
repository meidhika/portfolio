@extends('layouts.apps')
@section('title', 'Subscriber Contact info')

@section('content')

    <div class="table-responsive">

        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Action</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact => $item)
                    <tr>
                        <td>{{ $contact + 1 }}</td>
                        <td>
                            <a href="mailto:{{ $item->email }}" class="btn btn-primary">Send Email</a>
                            <form action="{{ route('contact.destroy', $item->id) }}" method="POST" style="display: inline"
                                onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->subject }}</td>
                        <td>{{ $item->message }}</td>

                    </tr>
                @endforeach
        </tbody>
        </table>
    </div>
@endsection
