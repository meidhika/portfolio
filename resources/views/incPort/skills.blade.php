@extends('portfolio.app')
@section('content')
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
