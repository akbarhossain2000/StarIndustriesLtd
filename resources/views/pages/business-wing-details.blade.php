@extends("layouts.master")

@section("page-title", $title)

@section("page-css")

@endsection

@section('page-content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">{{ $title }}</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">{{ $breadcrumb_title }}</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Blog Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-12">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="{{ $image_link }}" alt="">
                    {!! $content !!}
                </div>
                <!-- Bing Detail End -->


            </div>
        </div>
    </div>
    <!-- Blog End -->


@endsection

@section("page-script")

@endsection