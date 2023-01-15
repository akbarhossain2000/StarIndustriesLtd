@extends("layouts.master")

@section("page-title", "Business Wings")

@section("page-css")

@endsection

@section('page-content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Business Wings</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="/">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Business Wings</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Services Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            {{--<h1 class="display-5 text-uppercase mb-4">We Provide <span class="text-primary">The Best</span> Construction Services</h1>--}}
            {{--<h1 class="display-5 text-uppercase mb-4">Pictorials of Business Wings </h1>--}}
        </div>
        <div class="row g-5">
            <div class="col-lg-12 col-md-12">
                <div class="service-item bg-white d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="{{ asset('assets/img/service-1.jpg') }}" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-building text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Jute</h4>
                        <p>1-Bangladesh jute quality and contribution to global market</p>
                        <p>2-Our experience in other business areas in Bangladesh that make us eligible to expand and enter into the European jute market .</p>
                        <p>3-Pictorials.</p>
                        <a class="btn text-primary" href="{{ route('business_wing_details', 'jute') }}">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="{{ asset('assets/img/service-2.jpg') }}" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-lightbulb text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Lighting</h4>
                        <p>1-Our experience, contribution in lighting industry in Bangladesh.</p>
                        <p>2-Our manufacturing plant pictorials.</p>
                        <p>3-Our history in lighting industry and role in our country’s lighting industry.</p>
                        <a class="btn text-primary" href="{{ route('business_wing_details', 'lighting') }}">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="{{ asset('assets/img/service-3.jpg') }}" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-shopping-bag text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Leather</h4>
                        <p>1-Bangladesh leather quality and contribution to global market</p>
                        <p>2-Our experience in other business areas in Bangladesh that make us eligible to expand and enter into the European jute market .</p>
                        <p>3-Pictorials.</p>
                        <a class="btn text-primary" href="{{ route('business_wing_details','leather') }}">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="{{ asset('assets/img/service-4.jpg') }}" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-fish text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Aqua</h4>
                        <p>1-Our experience, contribution in fisheries in Bangladesh.</p>
                        <p>2-Our aqua plant pictorials.</p>
                        <p>3-Our history in fisheries and role in our country’s agriculture.</p>
                        <a class="btn text-primary" href="{{ route('business_wing_details', 'aqua') }}">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="{{ asset('assets/img/service-5.jpg') }}" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-tram text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Poultry Feed & Machineries</h4>
                        <p>1-Bangladesh feed quality and contribution to global market</p>
                        <p>2-Our experience in other business areas in Bangladesh that make us eligible to expand and enter into the European feed and machinery market .</p>
                        <p>3-Pictorials.</p>
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