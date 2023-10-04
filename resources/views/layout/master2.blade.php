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

      @include('layout.notification') 
      @include('layout.header') 
      @include('layout.left_menu') 

      <div class="main-content" id="content">
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

    <script>

        function refreshData(){
            getRegDetails();
        }

        function getRegDetails() {
      
          let reg_no = document.getElementById('reg_no').value;
          var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

          var downloadBillBtn = document.getElementById("downloadBillBtn");

          downloadBillBtn.href = "{{ URL::to('/billPdf/') }}" + "/" + reg_no;

          $.ajax({
              type: 'POST',
              url: '{!!URL::to('process-regno')!!}',
              data: {_token: CSRF_TOKEN, reg_no:reg_no},
      
              beforeSend: function() {
                  $('#loaderNew').show();
                  document.getElementById('loader').style.display = 'block';
                  document.getElementById('content').style.display = 'none';
              },
      
              success: function(data){
                console.log(data);
                  if(data.statusCode == 200){
      
                    document.getElementById('full_name').textContent = data.data.first_name + ' ' + data.data.middle_name + ' ' + data.data.last_name;
                    document.getElementById('professional_category').textContent = data.data.professional_category;
                    document.getElementById('reg_number').textContent = data.data.reg_no;
                    document.getElementById('mobile').textContent = data.data.mobile;
                    document.getElementById('institution').textContent = data.data.institution;
                    if(data.data.bill_ref_no == 1){
                      document.getElementById('billNumber').textContent = null;

                    }else{
                    document.getElementById('billNumber').textContent = data.data.bill_ref_no;

                    }


                    document.getElementById('billNumberTTCL').textContent =data.data.bill_ref_no;
                    document.getElementById('billNumberTigo').textContent =data.data.bill_ref_no;
                    document.getElementById('billNumberMpesa').textContent =data.data.bill_ref_no;
                    document.getElementById('billNumberAirtel').textContent =data.data.bill_ref_no;
                    
                    document.getElementById('event_fee').textContent = data.data.event_fee.toLocaleString('en-US');
                    var annual_fee = data.data.annual_fee;
                    var event_fee = data.data.event_fee.toLocaleString('en-US');
                    document.getElementById('total_amount').textContent = data.data.total_amount.toLocaleString('en-US', {
                                            style: 'currency',
                                            currency: 'TSh'
                                        });
      
                    var tableBody = document.getElementById('data_table_body');
      
                    tableBody.innerHTML = '';
      
                    for (var i = 0; i < annual_fee.length; i++) {
                        var row = document.createElement('tr');
      
                        var idCell = document.createElement('td');
                        idCell.textContent = (i + 1).toString(); 
                        row.appendChild(idCell);
      
                        var dateCell = document.createElement('td');
                        dateCell.textContent = new Date(annual_fee[i].year).toLocaleDateString();
                        row.appendChild(dateCell);
      
                        var amountCell = document.createElement('td');
                        amountCell.textContent = annual_fee[i].amount;
                        row.appendChild(amountCell);
      
                        tableBody.appendChild(row);
                    }

                    // GePg
                    if(data.data.gepg == 1){
                      // attempet to try generate bill but fail
                      if(data.data.bill_ref_no == 1){
                        $('#paymentoptionDiv').show(200);
                        $('#ncardButton').hide(200);
                        $('#gpegMessage').show(200);
                        document.getElementById('gpegTextMessage').textContent = 'Your Controll Number is Not Generate.,please Click on GEPG to regenerate.';
                        $('#billGeneratedNote').hide(200);
                        $('#payBillButton').hide(200);
                        $('#cross').show(200);
                        $('#check').hide();
                      }
                      // Gepg bill successfull generated
                      else{
                        $('#paymentoptionDiv').hide(200);
                        $('#billGeneratedNote').show(200);

                        // check payment status fee_status=3 & 1 == PAID
                        if(data.data.fee_status == 1 || data.data.fee_status == 3){
                          $('#payBillButton').hide(200);
                          $('#cross').hide(200);
                          $('#check').show();
                        }else{
                          $('#payBillButton').show(200);
                          $('#cross').show(200);
                          $('#check').hide();

                        }

                      }

                    }else{
                      // bill is not yet generated fee_status == 2
                      if(data.data.fee_status == 2){
                        $('#paymentoptionDiv').show(200);
                        $('#ncardButton').show(200);
                        $('#gpegMessage').hide(200);
                        $('#billGeneratedNote').hide(200);
                        $('#payBillButton').hide(200);
                        $('#cross').show(200);
                        $('#check').hide();

                      // bill is PAID fee_status == 1
                      } else if (data.data.fee_status == 1){
                        $('#paymentoptionDiv').hide(200);
                        $('#billGeneratedNote').show(200);
                        $('#payBillButton').hide(200);
                        $('#cross').hide(200);
                        $('#check').show();

                      // bill was generated wait for payment fee_status == 0 
                      }else if (data.data.fee_status == 0){
                        $('#paymentoptionDiv').hide(200);
                        $('#billGeneratedNote').show(200);
                        $('#payBillButton').show(200);
                        $('#cross').show(200);
                        $('#check').hide();

                      }

                    }
                    $('#infoDiv').show();
                    $('#errorDiv').hide(200);
                    
                  }else{
                  
                  document.getElementById('allertId').textContent = data.message;
                  $('#infoDiv').hide();
                  $('#errorDiv').show(200);
                  }
              },
              error: function(){
                  console.log('failed');
              },
              
              complete: function() {
                $('#loaderNew').hide();
                document.getElementById('loader').style.display = 'none';
                document.getElementById('content').style.display = 'block';
              }
          });
        
        }


        //data when the button is clicked
        function generateControlNoGepg() {
          
            // JSON data to be sent
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            let reg_no = document.getElementById('reg_no').value;

            const jsonData = {
                _token: CSRF_TOKEN,
                reg_no: reg_no,
            };
            // const endpoint = "http://41.59.227.219/membership/process-bill";   
            $.ajax({
                type: 'POST',
                url: '{!! URL::to('memberDetails/process-bill-gepg/') !!}',
                data: {
                    _token: CSRF_TOKEN,
                    reg_no: reg_no
                },
      
                beforeSend: function() {
                    document.getElementById('loader').style.display = 'block';
                    document.getElementById('content').style.display = 'none';
                },
                success: function(data) {
                    if (data.statusCode == 200) {

                        $.ajax({
                            type: 'POST',
                            url: '{!! URL::to('memberDetails/check-control-no/') !!}',
                            data: {
                                _token: CSRF_TOKEN,
                                reg_no: reg_no
                            },
                            success: function(data) {

                              console.log(data.data.fee_status);
                                if (data.statusCode == 200) {
                                  getRegDetails();

                                }

                                
                            },
                            error: function() {
                                getRegDetails();
                            },
                        });


                        
                    }
                },
                error: function() {
                  getRegDetails();
                },
              
              
            });
        }


        //data when the button is clicked
          function generateControlNoNcard() {

            // JSON data to be sent
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            let reg_no = document.getElementById('reg_no').value;

            
            $.ajax({
                type: 'POST',
                url: '{!! URL::to('memberDetails/process-bill/') !!}',
                data: {
                    _token: CSRF_TOKEN,
                    reg_no: reg_no
                },
                beforeSend: function() {
                    document.getElementById('loader').style.display = 'block';
                    document.getElementById('content').style.display = 'none';
                },
                success: function(data) {
                  console.log(data);

                    if (data.statusCode == 200) {
                      getRegDetails();

                    }
                },
                error: function() {
                  getRegDetails()
                }
            });
          }


    </script>


    @stack('custom-scripts')

  </body>
</html>