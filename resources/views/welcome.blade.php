@extends('layout/master')

@section('content')


<!-- Begin page -->
    <div class="layout-wrapper landing">
    <nav class="navbar navbar-expand-lg navbar-landing navbar-light fixed-top" id="navbar" style="background-color: white">
    <div class="container">
        <!-- Left Logo -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('assets/images/logo/ictc-logo.png') }}" class="card-logo card-logo-dark" alt="logo dark" height="80">
            <img src="{{ asset('assets/images/logo/ictc-logo.png') }}" class="card-logo card-logo-light" alt="logo light" height="80">
        </a>
        
        <!-- Center Heading -->
        <div class="text-center d-none d-sm-block">
            <h2 class="fw-semibold lh-base">THE UNITED REPUBLIC OF TANZANIA</h2>
            <p class="text-muted">INFORMATION AND COMMUNICATION TECHNOLOGIES COMMISSION</p>
        </div>

        <!-- Right Logo -->
        <div class="text-right d-none d-sm-block">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/logo/tanzania-logo.png') }}" class="card-logo card-logo-dark" alt="logo dark" height="80">
                <img src="{{ asset('assets/images/logo/tanzania-logo.png') }}" class="card-logo card-logo-light" alt="logo light" height="80">
            </a>
        </div>
    </div>
</nav>


        <div class="bg-overlay bg-overlay-pattern"></div>
        <!-- end navbar -->

        <!-- start hero section -->
        <section class="section nft-hero" id="hero" style="background-image: url('{{ asset('assets/images/logo/bg.png') }}'); height: 300px;">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-sm-10">
                        <div class="text-center">
                            <h3 class="display-6 fw-medium mt-1 lh-base text-white">ONLINE TAIC 2023 REGISTRATION</h3>
                            <p class="lead text-white lh-base mb-4 pb-2">Unleashing emerging technologies in the digital transformation for job creation and socio-economic development</p>

                            {{-- <div class="hstack gap-2 justify-content-center">
                                <a href="#register" class="btn btn-primary">Register Here <i class="ri-arrow-right-line align-middle ms-1"></i></a>
                                <!-- <a href="apps-nft-explore.html" class="btn btn-danger">Explore Now <i class="ri-arrow-right-line align-middle ms-1"></i></a> -->
                            </div> --}}
                        </div>
                    </div><!--end col-->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <!-- end hero section -->

        <!-- start wallet -->
        <section class="section" id="register">
            <div class="container">
                <div class="row">
                    <!-- Button trigger modal -->
                    <div class="modal fade" 
                        id="nonprof" tabindex="-1" 
                        aria-labelledby="nonprofLabel" aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">7<sup>th</sup> TAIC Online Registration Guide</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                    <div class="modal-body">
                                        @include('howToRegister2')
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" 
                                        data-bs-dismiss="modal">Close</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Modal -->
                    <div class="modal fade" 
                        id="regprof" tabindex="-1" 
                        aria-labelledby="regprofLabel" aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">7<sup>th</sup> TAIC Online Registration Guide</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                    <div class="modal-body">
                                        @include('howToRegister')
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" 
                                        data-bs-dismiss="modal">Close</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4 mt-2">
                    <div class="col-lg-6">
                        <div class="card text-center border shadow-none">
                            <div class="card-body py-5 px-4">
                                <img src="{{ asset('assets/images/logo/registered.png') }}" alt="" height="80" class="pb-2">
                                <h5>REGISTERED ICT PROFESSIONAL.</h5>
                                <p class="text-muted pb-1">If youre ICTC registered click button below and follow the pocedures.</p>
                                <a href="{{  URL::to('register/1') }}" class="btn btn-soft-info" style="font-size:medium">Click Here to Proceed</a>
                                <button type="button" class="btn btn-warning"  style="font-size:large"
                                        data-bs-toggle="modal" data-bs-target="#regprof">
                                        ?
                                </button>  
                            </div>
                        </div>
                    </div><!-- end col -->
                    <div class="col-lg-6">
                        <div class="card text-center border shadow-none">
                            <div class="card-body py-5 px-4">
                                <img src="{{ asset('assets/images/logo/ntrg.png') }}" alt="" height="55" class="mb-3 pb-2">
                                <h5>NON-REGISTERED AND OTHERS.</h5>
                                <p class="text-muted pb-1">If you're not registered as ICT Professional and you want to attend Conference, please click button below and follow the pocedures.</p>
                                <a href="{{  URL::to('register/2') }}" class="btn btn-info" style="font-size:medium">Click Here to Proceed</a>
                                <button type="button" class="btn btn-warning"  style="font-size:large"
                                        data-bs-toggle="modal" data-bs-target="#nonprof">
                                        ?
                                </button>  
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end wallet -->

        

        <!-- Start footer -->
        <footer class="custom-footer bg-dark py-5 position-relative">
            <div class="container">      
            

                <div class="row text-center text-sm-start align-items-center mt-5">
                    <div class="col-sm-6">

                        <div>
                            <p class="copy-rights mb-0">
                                <script> document.write(new Date().getFullYear()) </script> © Copyright ICTC. All Rights Reserved
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-3 mt-sm-0">
                            <ul class="list-inline mb-0 footer-social-link">
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-facebook-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-github-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-linkedin-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-google-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-dribbble-line"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->

        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon landing-back-top" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

    </div>
<!-- end layout wrapper -->


@stop


