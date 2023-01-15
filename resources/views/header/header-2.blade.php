<div id="home">
    <div id="overlay"></div>
    <div id="top">
        <div id="top2-sticky-wrapper" class="sticky-wrapper">
            <div class="top2_wrapper" id="top2" style="">
                <div class="container-fluid px-5 pe-lg-0">
                    <div class="top2 clearfix">

                        <nav class="navbar navbar-expand-lg bg-light-radial navbar-dark py-3 py-lg-0">
                            <header>
                                <div class="logo_wrapper">
                                    <a href="/" class="logo scroll-to">
                                        <img src="{{ asset('assets/logo200X100.jpg') }}" alt="" class="img-responsive">
                                    </a>
                                </div>
                            </header>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarCollapse">
                                <div class="navbar-nav ms-auto py-0">
                                    <a href="/" class="nav-item nav-link">Home</a>
                                    <a href="/about-us" class="nav-item nav-link">About Us</a>
                                    <a href="/business-wings" class="nav-item nav-link">Business Wings</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid page-header">
            <h1 class="display-3 text-uppercase text-white mb-3">{{ $title }}</h1>
            <div class="d-inline-flex text-white">
                <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
                <h6 class="text-white m-0 px-3">/</h6>
                <h6 class="text-uppercase text-white m-0">{{ $breadcrumb_title }}</h6>
            </div>
        </div>

    </div>
</div>