@extends("layouts.master")

@section("page-title", "About US")

@section("page-css")
<style>
    .text-white {
        color: #ffffff !important;
    }

    .bg-dark-radial.business {
        background-image: -webkit-repeating-radial-gradient(center center, rgba(240, 240, 240, 0.3), rgba(240, 240, 240, 0.3) 1px, transparent 1px, transparent 100%);
        background-image: -moz-repeating-radial-gradient(center center, rgba(, 0, 0, 0.3), rgba(0, 0, 0, 0.3) 1px, transparent 1px, transparent 100%);
        background-image: -ms-repeating-radial-gradient(center center, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) 1px, transparent 1px, transparent 100%);
        background-image: -o-repeating-radial-gradient(center center, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) 1px, transparent 1px, transparent 100%);
        background-image: repeating-radial-gradient(center center, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) 1px, transparent 1px, transparent 100%);
        background-size: 3px 3px;
    }
</style>
@endsection

@section('page-content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">About Us</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">About Us</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- About Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">Our Story</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-7">

                <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor</p>

                <p class="mb-4">Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos labore</p>
{{--                <img src="{{ asset('assets/img/signature.jpg') }}" alt="">--}}
            </div>
            <div class="col-lg-5 pb-5" style="min-height: 400px;">
                <div class="position-relative bg-dark-radial h-100 ms-5">
                    <img class="position-absolute w-100 h-100 mt-5 ms-n5" src="{{ asset('assets/img/about.jpg') }}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Business History -->
    <div class="container-fluid py-6 px-5 bg-dark">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4 text-white">Business History</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-5 pb-5" style="min-height: 400px;">
                <div class="position-relative bg-dark-radial business h-100 ms-5">
                    <img class="position-absolute w-100 h-100 mt-5 ms-n5" src="{{ asset('assets/img/history-ebusiness.jpg') }}" style="object-fit: cover;">
                </div>
            </div>

            <div class="col-lg-7 text-white">

                <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor</p>

                <p class="mb-4">Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos labore</p>
                {{--                <img src="{{ asset('assets/img/signature.jpg') }}" alt="">--}}
            </div>

        </div>
    </div>
    <!-- Business History End -->


    <!-- Team Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            {{--<h1 class="display-5 text-uppercase mb-4">We Are <span class="text-primary">Professional & Expert</span> Workers</h1>--}}
            <h1 class="display-5 text-uppercase mb-4">Management</h1>
        </div>
        <div class="row g-5">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="row g-0">
                    <div class="col-10" style="min-height: 300px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="{{ asset('assets/img/team-1.jpg') }}" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="h-100 d-flex flex-column align-items-center justify-content-between bg-light">
                            <a class="btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-light p-4">
                            <h4 class="text-uppercase">Adam Phillips</h4>
                            <span>CEO & Founder</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="row g-0">
                    <div class="col-10" style="min-height: 300px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="{{ asset('assets/img/team-2.jpg') }}" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="h-100 d-flex flex-column align-items-center justify-content-between bg-light">
                            <a class="btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-light p-4">
                            <h4 class="text-uppercase">Dylan Adams</h4>
                            <span>Civil Engineer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="row g-0">
                    <div class="col-10" style="min-height: 300px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="{{ asset('assets/img/team-3.jpg') }}" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="h-100 d-flex flex-column align-items-center justify-content-between bg-light">
                            <a class="btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-light p-4">
                            <h4 class="text-uppercase">Jhon Doe</h4>
                            <span>Interior Designer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="row g-0">
                    <div class="col-10" style="min-height: 300px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="{{ asset('assets/img/team-4.jpg') }}" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="h-100 d-flex flex-column align-items-center justify-content-between bg-light">
                            <a class="btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-light p-4">
                            <h4 class="text-uppercase">Josh Dunn</h4>
                            <span>Painter</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

@endsection

@section("page-script")

@endsection