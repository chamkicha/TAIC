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
        <section class="section nft-hero" id="hero" style="background-image: url('{{ asset('assets/images/logo/bg.png') }}'); height: 710px; display:none;">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-sm-10">
                        <div class="text-center">
                            <h3 class="display-6 fw-medium mb-1 mt-5 lh-base text-white">ONLINE TAIC 2023 REGISTRATION</h3>
                            <p class="lead text-white-50 lh-base mb-4 pb-2">Unleashing emerging technologies in the digital transformation for job creation and socio-economic development</p>

                            <div class="hstack gap-2 justify-content-center">
                                <a href="#register" class="btn btn-primary">Register Here <i class="ri-arrow-right-line align-middle ms-1"></i></a>
                                <!-- <a href="apps-nft-explore.html" class="btn btn-danger">Explore Now <i class="ri-arrow-right-line align-middle ms-1"></i></a> -->
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <!-- end hero section -->

        <!-- start wallet -->
        <section class="section" id="register">
            <div class="container">
                <div class="row justify-content-center" style="display:none;">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h2 class="mb-3 fw-semibold lh-base">ABOUT CONFERENCE</h2>
                            <p class="text-muted">The Tanzania Annual ICT Conference (TAIC) is the biggest ICT sector event in Tanzania organised annually by the ICT Commission (ICTC). As for the last six conferences, TAIC brings together stakeholders including academia, researchers, development partners, business industry, investors and youth in digital innovation spaces and practitioners in the ICT Industry. The conference aims to call the attention of all stakeholders through discussion and knowledge sharing on matters related to policy, research, innovation and business aspects of the digital economy and ICT sector contribution to Tanzania’s economic growth and global digital presence. The 07th Tanzania Annual ICT Conference 2023 (TAIC 2023) will be held at the Julius Nyerere International Conference Centre (JNICC). TAIC 2023 will have pre-conference events of Women and Youth in ICT open to the public and will be held on 16th and 17th October 2023 respectively. The main TAIC 2023 will be held from 18th to 20th October 2023.</p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row g-4 mt-5">
                    <div class="col-lg-6">
                        <div class="card text-center border shadow-none">
                            <div class="card-body py-5 px-4">
                                <img src="{{ asset('assets/images/logo/registered.png') }}" alt="" height="80" class="pb-2">
                                <h5>REGISTERED ICT PROFESSIONAL</h5>
                                <p class="text-muted pb-1">If youre ICTC registered click button below and follow the pocedures.</p>
                                <a href="{{  URL::to('register/1') }}" class="btn btn-soft-info">Click Here to Proceed</a>
                            </div>
                        </div>
                    </div><!-- end col -->
                    <div class="col-lg-6">
                        <div class="card text-center border shadow-none">
                            <div class="card-body py-5 px-4">
                                <img src="{{ asset('assets/images/logo/ntrg.png') }}" alt="" height="55" class="mb-3 pb-2">
                                <h5>NOT REGISTERED ICT PROFESSIONAL</h5>
                                <p class="text-muted pb-1">If youre not registered at ICTC and you want to attend Conference, please click button below and follow the pocedures.</p>
                                <a href="{{  URL::to('register/2') }}" class="btn btn-info">Click Here to Proceed</a>
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


