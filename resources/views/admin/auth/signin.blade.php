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
    <!-- auth-page wrapper -->
    <div style="background-image: url({{ asset('assets/images/bg.png') }}); " class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
      <div class="bg-overlay"></div>
      <!-- auth-page content -->
      <div class="auth-page-content overflow-hidden pt-lg-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="card overflow-hidden">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div style="background-image: url({{ asset('assets/images/bg.png') }}); " class="p-lg-5 p-4 auth-one-bg h-100">
                      <div class="position-relative h-100 d-flex flex-column">
                        <div class="mb-4">
                          <a href="index-2.html" class="d-block">
                            <img src="{{ asset('assets/images/logo/ictc-logo.png') }}" alt="" height="100">
                          </a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-6">
                    <div class="p-lg-5 p-4">
                      <div>
                        <h5 class="text-primary">Welcome Back !</h5>
                        <p class="text-muted">Sign in to continue.</p>
                      </div>
                      <div class="mt-4">
                        
                        <form id="regForm" action="{{url('/login')}}" method="POST" class="form-steps" autocomplete="off">
                          @csrf

                          <div class="mb-3">
                            <label for="username" class="form-label">Email</label>
                            <input type="email"name="email" class="form-control" id="email" placeholder="Enter Email">
                          </div>
                          <div class="mb-3">
                            <div class="float-end">
                              <a href="#" class="text-muted">Forgot password?</a>
                            </div>
                            <label class="form-label" for="password-input">Password</label>
                            <div class="position-relative auth-pass-inputgroup mb-3">
                              <input name="password" type="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password-input">
                              <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon">
                                <i class="ri-eye-fill align-middle"></i>
                              </button>
                            </div>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                            <label class="form-check-label" for="auth-remember-check">Remember me</label>
                          </div>
                          <div class="mt-4">
                            <button class="btn btn-success w-100" type="submit">Sign In</button>
                          </div>
                          
                        </form>
                      </div>
                      
                    </div>
                  </div>
                  <!-- end col -->
                </div>
                <!-- end row -->
              </div>
              <!-- end card -->
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </div>
      <!-- end auth page content -->
      <!-- footer -->
      <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-center">
                <p class="mb-0">&copy; <script>
                    document.write(new Date().getFullYear())
                  </script>  © ICTC. Design & Develop by <a href="https://nidc.co.tz/">NIDC </a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->


    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- password-addon init -->
    <script src="{{ asset('assets/js/pages/password-addon.init.js') }}"></script>
  </body>
</html>