@extends("layouts.master-2")

@section("page-title", "Home")

@section("page-css")

@endsection

@section('page-content')

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