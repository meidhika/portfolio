@extends('portfolio.app')
@section('content')
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <p>Explore my portfolio, where diverse projects showcase my expertise in web development, mobile apps, and
                design. From crafting responsive websites to developing intuitive mobile applications, my work highlights a
                commitment to quality and innovation, reflecting a blend of technical skills and creative vision.</p>
        </div><!-- End Section Title -->
        <div class="container">
            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
            </ul>
            <div class="row">
                <div class="col-sm-12 d-flex flex-wrap justify-content-center">
                    @foreach ($projects as $project)
                        <div class="m-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <img src="{{ asset('storage/image/' . $project->project_photo) }}" class="img-fluid rounded"
                                alt="">
                            <div class="portfolio-info">
                                <h4>{{ $project->project_title }}</h4>
                                <p>{{ $project->sub_title }}</p>
                                <a href="{{ asset('storage/image/' . $project->project_photo) }}"
                                    title="{{ $project->project_title }}"
                                    data-gallery="portfolio-gallery-{{ $project->project_title }}"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="{{ asset('storage/image/' . $project->project_photo) }}" title="More Details"
                                    class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
