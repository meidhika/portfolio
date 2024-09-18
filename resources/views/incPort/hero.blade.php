@extends('portfolio.app')
@section('content')
    <section id="hero" class="hero section light-background">

        <img src="{{ asset('portfolio/img/me.jpg') }}" alt="">
        @foreach ($abouts as $about => $item)
            <div class="container" data-aos="zoom-out">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <h2>{{ $item->full_name }}</h2>
                        <p>I'm <span class="typed"
                                data-typed-items="{{ $item->job }}, Web Developer, Mobile Apps Developer, Digital Marketer">{{ $item->job }}</span><span
                                class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
                        <div class="social-links">

                            <a href="{{ $item->fb_link }}"><i class="bi bi-facebook"></i></a>
                            <a href="{{ $item->ig_link }}"><i class="bi bi-instagram"></i></a>
                            <a href="{{ $item->linkedin_link }}"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
@endsection
