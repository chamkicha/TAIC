<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
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


    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">



    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    

    <style>
        /* Styles for the loader container */
        .loader-container {
        display: none; /* Initially hidden */
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.7); /* Semi-transparent background */
        z-index: 1000; /* Higher z-index to overlay content */
        text-align: center;
        }

        /* Styles for the loader animation */
        .loader {
        border: 4px solid #f3f3f3;
        border-top: 4px solid #3498db;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        animation: spin 2s linear infinite;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -20px;
        margin-left: -20px;
        }

        /* Animation keyframes for the loader */
        @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
        }


    </style>
    
    


  </head>
  <body>
    <!-- Begin page -->
    <div id="layout-wrapper"> 

<div class="loader-container" id="loader">
  <div class="loader"></div>
</div>

      @include('layout.admin.notification') 
      @include('layout.admin.header') 
      @include('layout.admin.left_menu') 

      <div class="main-content" id="content">

        <div class="page-content">
            <div class="container-fluid">
              @yield('content') 
            </div>
        </div>
      </div>

      <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <script>
                  document.write(new Date().getFullYear())
                </script> © ICTC.
              </div>
              <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block"> Design & Develop by <a href="https://nidc.co.tz/">NIDC </a></div>
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

    <!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>

   
    
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

      function callSweetAlert(calledFunction){
        console.log(calledFunction);


        Swal.fire({
            title: 'Do you want to proceed?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes',
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
              if(calledFunction == 'generateControlNoGepg'){

                generateControlNoGepg()

              }else if(calledFunction == 'generateControlNoNcard'){

                generateControlNoNcard()

              }
            } 
          })

      }

    </script>

   


    @stack('custom-scripts')

  </body>
</html>