@extends('portfolio.app')
@section('content')
    <section id="about" class="about section">

        @foreach ($abouts as $about => $item)
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About</h2>
                <p>{{ $item->description }}</p>
            </div><!-- End Section Title -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4">
                        <img src="{{ asset('storage/image/' . $item->photo) }}" class="img-fluid rounded" alt="">
                    </div>
                    <div class="col-lg-8 content">
                        <h2>{{ $item->job }}</h2>

                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong>
                                        <span>{{ $item->birthday }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                        <span>{{ $item->website }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                        <span>{{ $item->phone_number }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                        <span>{{ $item->address }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                                        <span>{{ $item->age }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                        <span>{{ $item->degree }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>{{ $item->email }}</span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="row my-5">
                            <div class="col-sm-10">
                                <p>{{ $item->description2 }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
    <section id="skills" class="skills section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Skills</h2>
            <p>I transform
                ideas into digital realities, bridging communication and technology for impactful results.</p>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row skills-content skills-animation">
                @foreach ($firstSkills as $skill => $item)
                    <div class="col-lg-6">
                        <div class="progress mb-5">
                            <span class="skill"><span>{{ $item->skill }}</span> <i
                                    class="val">{{ $item->percent }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $item->percent }}"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->
                    </div>
                @endforeach
                @foreach ($nextSkills as $skill => $item)
                    <div class="col-lg-6">
                        <div class="progress mb-5">
                            <span class="skill"><span>{{ $item->skill }}</span> <i
                                    class="val">{{ $item->percent }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $item->percent }}"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
