<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
  <!-- Mirrored from themesbrand.com/velzon/html/default/forms-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Apr 2023 09:45:21 GMT -->
  <head>
    <meta charset="utf-8" />
    <title>ICTC | Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="INFORMATION AND COMMUNICATION TECHNOLOGIES COMMISSION" name="description" />
    <meta content="chamnet (t) limited" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/ictc-logo.png') }}">
    <!-- Layout config Js -->
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />



    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    
    
    
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
    


  </head>
  <body>
    <!-- Begin page -->
    <div id="layout-wrapper"> 
      @include('layout.notification') 
      @include('layout.header') 
      @include('layout.left_menu') 

      <div class="main-content">
      @yield('content') 

      <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <script>
                  document.write(new Date().getFullYear())
                </script> © ICTC.
              </div>
              <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block"> Design & Develop by n-card and ICTC Team </div>
              </div>
            </div>
          </div>
        </footer>
      </div>

    </div>
    <!-- END layout-wrapper -->
    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
      <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->
    <!--preloader-->
    <div id="preloader">
      <div id="status">
        <div class="spinner-border text-primary avatar-sm" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
    </div>
   
    
    <!-- Theme Settings -->



    <!--jquery cdn-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--select2 cdn-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="{{ asset('assets/js/pages/select2.init.js') }}"></script>

   
    
    <!-- JAVASCRIPT --> 
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script> 
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script> 
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
     <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
      <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- form wizard init --> 
    <script src="{{ asset('assets/js/pages/form-wizard.init.js') }}"></script>
    <!-- App js -->
     <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/CustomJs.js') }}"></script>


    @stack('custom-scripts')

  </body>
</html>