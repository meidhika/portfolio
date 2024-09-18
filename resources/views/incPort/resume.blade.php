@extends('portfolio.app')
@section('content')
    <section id="resume" class="resume section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Resume</h2>
            <p>Here is a resume about my education history and work experience</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">Education</h3>
                    @foreach ($educations as $education => $item)
                        <div class="resume-item">
                            <h4>{{ $item->university }}</h4>
                            <p><em>{{ $item->faculty }}</em></p>
                            <h5>{{ $item->register_year }} - {{ $item->graduate_year }}</h5>
                            <p>{{ $item->activity }}</p>
                        </div><!-- Edn Resume Item -->
                    @endforeach
                </div>


                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="resume-title">Professional Experience</h3>
                    @foreach ($experiences as $experience => $item)
                        <div class="resume-item">
                            <h4>{{ $item->office }}</h4>
                            <p><em>{{ $item->job }} </em></p>
                            <h5>{{ $item->entery_year }} - {{ $item->out_year }}</h5>
                            <p>{{ $item->job_desc }}</p>
                        </div><!-- Edn Resume Item -->
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
