@extends("layouts.master")

@section("page-title", "Home")

@section("page-css")

@endsection

@section('page-content')


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            {{--<i class="fa fa-lightbulb fa-4x text-primary mb-4 d-none d-sm-block"></i>--}}
                            <img src="{{ asset('assets/logo_star200X100.png') }}" alt="">
                            <h1 class="display-2 text-uppercase text-white mb-md-4">Star Industries Limited</h1>
                            {{--<a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Get A Quote</a>--}}
                        </div>
                    </div>
                </div>
                {{--<div class="carousel-item">--}}
                    {{--<img class="w-100" src="{{ asset('assets/img/carousel-2.jpg') }}" alt="Image">--}}
                    {{--<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">--}}
                        {{--<div class="p-3" style="max-width: 900px;">--}}
                            {{--<i class="fa fa-tools fa-4x text-primary mb-4 d-none d-sm-block"></i>--}}
                            {{--<h1 class="display-2 text-uppercase text-white mb-md-4">We Are Trusted For Your Product</h1>--}}
                            {{--<a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Contact Us</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
            {{--<button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"--}}
                    {{--data-bs-slide="prev">--}}
                {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
                {{--<span class="visually-hidden">Previous</span>--}}
            {{--</button>--}}
            {{--<button class="carousel-control-next" type="button" data-bs-target="#header-carousel"--}}
                    {{--data-bs-slide="next">--}}
                {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
                {{--<span class="visually-hidden">Next</span>--}}
            {{--</button>--}}
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    {{--<div class="container-fluid py-6 px-5">--}}
        {{--<div class="row g-5">--}}
            {{--<div class="col-lg-7">--}}
                {{--<h1 class="display-5 text-uppercase mb-4">We are <span class="text-primary">the Leader</span> in Construction Industry</h1>--}}
                {{--<h4 class="text-uppercase mb-3 text-body">Tempor erat elitr at rebum at at clita. Diam dolor diam ipsum tempor sit diam amet diam et eos labore</h4>--}}
                {{--<p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor</p>--}}
                {{--<div class="row gx-5 py-2">--}}
                    {{--<div class="col-sm-6 mb-2">--}}
                        {{--<p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Perfect Planning</p>--}}
                        {{--<p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Professional Workers</p>--}}
                        {{--<p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>First Working Process</p>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-6 mb-2">--}}
                        {{--<p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Perfect Planning</p>--}}
                        {{--<p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Professional Workers</p>--}}
                        {{--<p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>First Working Process</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<p class="mb-4">Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos labore</p>--}}
                {{--<img src="{{ asset('assets/img/signature.jpg') }}" alt="">--}}
            {{--</div>--}}
            {{--<div class="col-lg-5 pb-5" style="min-height: 400px;">--}}
                {{--<div class="position-relative bg-dark-radial h-100 ms-5">--}}
                    {{--<img class="position-absolute w-100 h-100 mt-5 ms-n5" src="{{ asset('assets/img/about.jpg') }}" style="object-fit: cover;">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            {{--<h1 class="display-5 text-uppercase mb-4">We Provide <span class="text-primary">The Best</span> Construction Services</h1>--}}
            {{--<h1 class="display-5 text-uppercase mb-4">Pictorials of Business Wings </h1>--}}
            <h1 class="display-5 text-uppercase mb-4">Business Wings </h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-12 col-md-12">
                <div class="service-item bg-white d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="{{ asset('assets/img/service-1-1.jpg') }}" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-building text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Jute</h4>
                        <p>Bangladesh jute quality and contribution to global market </p>
                        <a class="btn text-primary" href="{{ route('business_wing_details', 'jute') }}">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="{{ asset('assets/img/service-1-2.jpg') }}" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-lightbulb text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Lighting</h4>
                        <p>Our experience, contribution in lighting industry in Bangladesh.</p>
                        <a class="btn text-primary" href="{{ route('business_wing_details', 'lighting') }}">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="{{ asset('assets/img/service-1-3.jpg') }}" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-shopping-bag text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Leather</h4>
                        <p>Bangladesh leather quality and contribution to global market .</p>
                        <a class="btn text-primary" href="{{ route('business_wing_details', 'leather') }}">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="{{ asset('assets/img/service-1-4.jpg') }}" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-fish text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Aqua</h4>
                        <p>Our experience, contribution in Agriculture in Bangladesh.</p>
                        <a class="btn text-primary" href="{{ route('business_wing_details', 'aqua') }}">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="{{ asset('assets/img/service-1-5.jpg') }}" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-tram text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Poultry Feed & Machineries</h4>
                        <p>Bangladesh feed quality and contribution to global market .</p>
                        <a class="btn text-primary" href="{{ route('business_wing_details', 'poultry-feed-and-machineries') }}">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


@endsection

@section("page-script")

@endsection