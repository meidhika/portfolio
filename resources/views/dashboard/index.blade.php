@extends('layouts.apps')
@section('user')
    Welcome, {{ Auth::user()->full_name }}
@endsection
@section('content')
    <style>
        .icon-box {
            display: flex;
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            background-color: #f9f9f9;
            margin-bottom: 20px;
        }

        .icon-box .icon {
            font-size: 40px;
            color: #007bff;
            margin-right: 15px;
        }

        .icon-box .content {
            flex: 1;
        }

        .icon-box h3 {
            margin: 0 0 10px;
            font-size: 18px;
        }

        .icon-box p {
            margin: 0;
            color: #555;
        }

        .tabs {
            display: flex;
            flex-wrap: wrap;
            font-family: sans-serif;
        }

        .tabs_name {
            padding: 10px 16px;
            cursor: pointer;
        }

        .tabs_item {
            display: none;
        }

        .tabs_content {
            order: 1;
            width: 100%;
            line-height: 1.5;
            font-size: 0.9em;
            display: none;
        }

        .tabs_item:checked+.tabs_name {
            color: white;
            border-bottom: 2px solid white;
        }

        .tabs_item:checked+.tabs_name+.tabs_content {
            display: initial;
        }
    </style>
    <div class="row my-3">
        <h2 class="text-center">This is Your Portfolio Summary</h2>
    </div>
    <div class="row justify-content-evenly">
        <div class="col-sm-3 bg-dark rounded m-2">
            <div class="my-5 text-center">
                <h4 class="mb-4">Profile Picture</h4>
                @foreach ($abouts as $about => $item)
                    <img src="{{ asset('storage/image/' . $item->photo) }}" alt="" width="70%"
                        class="img-fluid rounded-circle">
                @endforeach
            </div>
            @foreach ($abouts as $about => $item)
                <div class="row my-5 justify-content-center">
                    <div class="col-sm-10 text-center">
                        <a href="{{ $item->fb_link }}"><i class="bi bi-facebook"></i></a>
                        <a href="{{ $item->ig_link }}"><i class="bi bi-instagram"></i></a>
                        <a href="{{ $item->linkedin_link }}"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="row mb-5">
                        <div class="col-sm-3 text-end">
                            <i class="fs-3 bi bi-person-arms-up"></i>
                        </div>
                        <div class="col-sm-9">
                            <h5 class="m-0 p-0">Full Name</h5>
                            <small>{{ $item->full_name }}</small>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-sm-3 text-end">
                            <i class="fs-3 bi bi-envelope-at"></i>
                        </div>
                        <div class="col-sm-9">
                            <h5 class="m-0 p-0">Email</h5>
                            <small>{{ $item->email }}</small>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-sm-3 text-end">
                            <i class="fs-3 bi bi-phone-vibrate"></i>
                        </div>
                        <div class="col-sm-9">
                            <h5 class="m-0 p-0">Phone Number</h5>
                            <small>{{ $item->phone_number }}</small>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
    <div class="col-sm-8 bg-dark rounded m-2">
        <div class="tabs justify-content-center">
            <input type="radio" class="tabs_item" name="tabs-example" id="about_tab" checked>
            <label for="about_tab" class="tabs_name"><i class="bi bi-file-earmark-person me-2"></i>About</label>
            <div class="tabs_content mt-5">
                @foreach ($abouts as $about => $item)
                    <div class="card p-3 mb-3">
                        <h3 class="mb-3">About</h3>
                        <p>{{ $item->description2 }}</p>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <div class="card p-3">
                                <div class="row">
                                    <div class="col-sm-4 text-end">
                                        <i class="fs-3 bi bi-cake2"></i>
                                    </div>
                                    <div class="col-sm-8 mb-3">
                                        <h5 class="m-0 p-0">Birthday</h5>
                                        <small>{{ $item->birthday }}</small>
                                    </div>
                                    <div class="col-sm-4 text-end">
                                        <i class="fs-3 bi bi-browser-chrome"></i>
                                    </div>
                                    <div class="col-sm-8 mb-3">
                                        <h5 class="m-0 p-0">Website</h5>
                                        <small>{{ $item->website }}</small>
                                    </div>
                                    <div class="col-sm-4 text-end">
                                        <i class="fs-3 bi bi-geo-alt"></i>
                                    </div>
                                    <div class="col-sm-8 mb-3">
                                        <h5 class="m-0 p-0">Address</h5>
                                        <small>{{ $item->address }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card p-3">
                                <div class="row">
                                    <div class="col-sm-4 text-end">
                                        <i class="fs-3 bi bi-moon-stars"></i>
                                    </div>
                                    <div class="col-sm-8 mb-3">
                                        <h5 class="m-0 p-0">Age</h5>
                                        <small>{{ $item->age }}</small>
                                    </div>
                                    <div class="col-sm-4 text-end">
                                        <i class="fs-3 bi bi-mortarboard"></i>
                                    </div>
                                    <div class="col-sm-8 mb-3">
                                        <h5 class="m-0 p-0">Degree</h5>
                                        <small>{{ $item->degree }}</small>
                                    </div>
                                    <div class="col-sm-4 text-end">
                                        <i class="fs-3 bi bi-alarm"></i>
                                    </div>
                                    <div class="col-sm-8 mb-3">
                                        <h5 class="m-0 p-0">Job</h5>
                                        <small>{{ $item->job }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
            <div class="card p-3 mb-3">
                <h3 class="mb-3">Skill</h3>
                <div class="row">
                    @foreach ($firstSkills as $skill1)
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <span>{{ $skill1->skill }}</span><span class="mx-3">{{ $skill1->percent }}%</span>
                                <div class="progress" role="progressbar" aria-label="Basic example"
                                    aria-valuenow="{{ $skill1->percent }}" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: {{ $skill1->percent }}%"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @foreach ($nextSkills as $skill2)
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <span>{{ $skill2->skill }}</span><span class="mx-3">{{ $skill2->percent }}%</span>
                                <div class="progress" role="progressbar" aria-label="Basic example"
                                    aria-valuenow="{{ $skill2->percent }}" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: {{ $skill2->percent }}%"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <input type="radio" class="tabs_item" name="tabs-example" id="resume_tab">
        <label for="resume_tab" class="tabs_name"><i class="bi bi-card-checklist m-2"></i>Resume</label>
        <div class="tabs_content mt-5">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card p-3 mb-3">
                        <h3 class="mb-3">Education</h3>
                        @foreach ($educations as $education)
                            <div class="row">
                                <div class="col-sm-1">
                                    <i class="bi bi-mortarboard"></i>
                                </div>
                                <div class="col-sm-11 mb-5">
                                    <p>{{ $education->university }}</p>
                                    <small>{{ $education->faculty }}</small><br>
                                    <small>{{ $education->register_year }} --
                                        {{ $education->graduate_year }}</small>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card p-3 mb-3">
                        <h3 class="mb-3">Experience</h3>
                        @foreach ($experiences as $experience)
                            <div class="row">
                                <div class="col-sm-1">
                                    <i class="bi bi-building-check"></i>
                                </div>
                                <div class="col-sm-11 mb-5">
                                    <p>{{ $experience->office }}</p>
                                    <small>{{ $experience->job }}</small>
                                    <small>{{ $experience->faculty }}</small><br>
                                    <small>{{ $experience->entery_year }} --
                                        {{ $experience->out_year }}</small>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <input type="radio" class="tabs_item" name="tabs-example" id="project_tab">
        <label for="project_tab" class="tabs_name"><i class="bi bi-stars m-2"></i>Project</label>
        <div class="tabs_content mt-5">
            
                <h3 class="m-3">My Portfolio</h3>
                <div class="row">
                    <div class="col-sm-6">
                        @foreach ($firstsrojects as $project1)
                        <div class="my-3">
                            <img src="{{ asset('storage/image/' . $project1->project_photo) }}" alt="" width="50%"
                                class="rounded">
                            <h4 class="mt-2 mb-0">{{ $project1->project_title }}</h4>
                            <small>{{ $project1->sub_title }}</small>
                        </div>
                         @endforeach
                    </div>
                    <div class="col-sm-6">
                        @foreach ($secondprojects as $project2)
                        <div class="my-5">
                            <img src="{{ asset('storage/image/' . $project2->project_photo) }}" alt="" width="50%"
                                class="rounded">
                            <h4 class="mt-2 mb-0">{{ $project2->project_title }}</h4>
                            <small>{{ $project2->sub_title }}</small>
                        </div>
                         @endforeach
                    </div>
                </div>
                
            
            
        </div>
    </div>
    </div>
@endsection
