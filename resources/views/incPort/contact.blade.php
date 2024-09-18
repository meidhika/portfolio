@extends('portfolio.app')
@section('content')
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Get in touch to discuss how we can collaborate on your next project. Whether you need expert advice, a
                tailored solution, or just want to connect, I’m here to help.</p>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-4">
                    @foreach ($abouts as $about => $item)
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>{{ $item->address }}</p>
                            </div>
                        </div><!-- End Info Item -->
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>{{ $item->phone_number }}</p>
                            </div>
                        </div><!-- End Info Item -->
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>{{ $item->email }}</p>
                            </div>
                        </div><!-- End Info Item -->
                    @endforeach
                </div>
                <div class="col-lg-7">
                    <form action="{{ route('contact.store') }}" method="post" class="php-email-form">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required="">
                            </div>
                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required="">
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required="">
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                {{-- <div class="loading">Loading</div> --}}
                                {{-- <div class="sent-message">Your message has been sent. Thank you!</div> --}}
                                <button type="submit" class="btn btn-primary">Message Me</button>
                            </div>
                        </div>
                    </form>
                </div><!-- End Contact Form -->
            </div>
        </div>
    </section>

    <footer id="footer" class="footer position-relative light-background">
        <div class="container">
            @foreach ($abouts as $about => $item)
                <h3 class="sitename">{{ $item->full_name }}</h3>
                <p>Stay connected and follow me on social media for updates on my latest projects, insights, and industry
                    trends.</p>
                <div class="social-links d-flex justify-content-center">
                    <a href="{{ $item->fb_link }}"><i class="bi bi-facebook"></i></a>
                    <a href="{{ $item->ig_link }}"><i class="bi bi-instagram"></i></a>
                    <a href="{{ $item->linkedin_link }}"><i class="bi bi-linkedin"></i></a>
                </div>
                <div class="container">
                    <div class="copyright">
                        <span>&copy;Copyright</span> <strong class="px-1 sitename">{{ $item->full_name }}</strong> <span>All
                            Rights
                            Reserved</span>
                    </div>
                </div>
            @endforeach
        </div>
    </footer>
@endsection
