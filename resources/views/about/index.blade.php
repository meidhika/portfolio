@extends('layouts.apps')
@section('title', 'Your About')
@section('content')

    <div class="table-responsive">
        <div align="left" class="mb-3">
            @if (!$aboutsExists)
                <a href="{{ route('about.create') }}" class="btn btn-primary">Create About</a>
            @else
                <button class="btn btn-secondary" disabled><del>Create About</del></button>
            @endif
            @foreach ($abouts as $about => $item)
                <a href="{{ route('about.edit', $item->id) }}" class="btn btn-primary">Edit About</a>
                <form action="{{ route('about.destroy', $item->id) }}" method="POST" style="display: inline"
                    onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            @endforeach
        </div>
        <div class="mb-3">
            @foreach ($abouts as $about => $item)
                <img src="{{ asset('storage/image/' . $item->photo) }}" alt="" width="300px"
                    style="border-radius:10px;">
            @endforeach
        </div>
        <table class="table table-bordered ">
            <thead>
                <tr>

                    <th>Full Name</th>
                    <th>Birthday</th>
                    <th>Email</th>
                    <th>Phone Number</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($abouts as $about => $item)
                    <tr>
                        <td>{{ $item->full_name }}</td>
                        <td>{{ $item->birthday }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone_number }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <table class="table table-bordered  my-5">
            <thead>
                <tr>
                    <th>Age</th>
                    <th>Website</th>
                    <th>Degree</th>
                    <th>Job</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($abouts as $about => $item)
                    <tr>
                        <td>{{ $item->age }}</td>
                        <td>{{ $item->website }}</td>
                        <td>{{ $item->degree }}</td>
                        <td>{{ $item->job }}</td>
                        <td>{{ $item->address }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <table class="table table-bordered my-5">
            <thead>

                <tr>
                    <th>Facebook Link</th>
                    <th>Instagram Link</th>



                </tr>
            </thead>
            <tbody>
                @foreach ($abouts as $about => $item)
                    <tr>
                        <td>{{ $item->fb_link }}</td>
                        <td>{{ $item->ig_link }}</td>


                    </tr>
                @endforeach
            </tbody>
        </table>
        <table class="table table-bordered my-5">
            <thead>

                <tr>

                    <th>LinkedIn Link</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($abouts as $about => $item)
                    <tr>

                        <td>{{ $item->linkedin_link }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        <table class="table table-bordered my-5">
            <thead>

                <tr>

                    <th>About Description</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($abouts as $about => $item)
                    <tr>

                        <td>{{ $item->description }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        <table class="table table-bordered my-5">
            <thead>

                <tr>


                    <th>Other Description</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($abouts as $about => $item)
                    <tr>


                        <td>{{ $item->description2 }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
