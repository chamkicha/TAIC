        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Registration for Conference</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item">
                                        <a href="{{ URL::to('/') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Registration for Conference</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Conference registration form</h4>
                            </div>
                            <!-- end card header -->
                            <div class="card-body">
                                <form action="#" class="form-steps" autocomplete="off">
                                    <div class="text-center pt-3 pb-4 mb-1">
                                        <!-- <h5>Signup Your Account</h5> -->
                                    </div>
                                    <div id="custom-progress-bar" class="progress-nav mb-4">
                                        <div class="progress" style="height: 1px;">
                                            <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <ul class="nav nav-pills progress-bar-tab custom-nav" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link rounded-pill active"
                                                    data-progressbar="custom-progress-bar" id="pills-gen-info-tab"
                                                    data-bs-toggle="pill" data-bs-target="#pills-gen-info"
                                                    type="button" role="tab" aria-controls="pills-gen-info"
                                                    aria-selected="true">1</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link rounded-pill"
                                                    data-progressbar="custom-progress-bar" id="pills-info-desc-tab"
                                                    data-bs-toggle="pill" data-bs-target="#pills-info-desc"
                                                    type="button" role="tab" aria-controls="pills-info-desc"
                                                    aria-selected="false">2</button>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="pills-gen-info" role="tabpanel"
                                            aria-labelledby="pills-gen-info-tab">
                                            <div>
                                                <div class="mb-4">
                                                    <div>
                                                        <h5 class="mb-1">Registration Number</h5>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">

                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="gen-info-password-input">Registration
                                                                Number</label>
                                                            <input type="text" class="form-control" id="reg_no"
                                                                value="{{ $data->reg_no }}" name="reg_no"
                                                                placeholder="Enter Registration Number" required>
                                                            <div class="invalid-feedback">Please enter a Registration
                                                                Number</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mt-4">


                                                            <button type="button" id="submitButton"
                                                                class="btn btn-success btn-load"
                                                                onclick="getRegDetails()">
                                                                <span class="d-flex align-items-center">
                                                                    <span id="loaderNew" style="display:none"
                                                                        class="spinner-border flex-shrink-0"
                                                                        role="status">
                                                                        <span class="visually-hidden">Loading...</span>
                                                                    </span>
                                                                    <span class="flex-grow-1 ms-2">
                                                                        Search
                                                                    </span>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="card" id="succcessDiv" style="display:none">
                                                        <div class="alert alert-success text-center"
                                                            style="font-size: larger" role="alert" id="successID">
      
                                                        </div>
                                                      </div>
                                                      <div class="card" id="errorDiv" style="display:none">
                                                        <div class="alert alert-danger text-center"
                                                            style="font-size: larger" role="alert" id="allertId">
      
                                                        </div>
                                                      </div>
                                                </div>
                                                
                              <div class="card" id="infoDiv" style="display:none">
                                  <div class="p-1">                            
                                    <div class="row">
                                      <div class="col-lg-6"> 
                                        <div class="row">
                                          <div class="col-lg-6">  
                                            <div class="swiper-wrapper" id="swiper-wrapper-a6ca147977931458" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                                <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 5" style="width: 654px; margin-right: 15px;">
                                                    <div class="card profile-project-card shadow-none profile-project-success mb-0">
                                                        <div class="card-body p-4">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                                    <h5 class="fs-14 text-truncate mb-1">
                                                                        <a href="#" class="text-dark" id="full_name"></a>
                                                                    </h5>                                                                    
                                                                    <table>                                                                      
                                                                      <tbody>
                                                                              <tr>
                                                                                  <td><p class="text-muted text-truncate mb-0"> Category :</p></td>
                                                                                  <td><p class="fw-semibold text-dark mb-0" id="professional_category"></p></td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td><p class="text-muted text-truncate mb-0"> Reg No :</p></td>
                                                                                  <td><p class="fw-semibold text-dark mb-0" id="reg_number"></p></td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td><p class="text-muted text-truncate mb-0"> Mobile :</p></td>
                                                                                  <td><p class="fw-semibold text-dark mb-0" id="mobile"></p></td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td><p class="text-muted text-truncate mb-0"> Institution :</p></td>
                                                                                  <td><p class="fw-semibold text-dark mb-0" id="institution"></p></td>
                                                                              </tr>
                                                                              <tr>
                                                                                <td><p class="text-muted text-truncate mb-0"> Bill Number :</p></td>
                                                                                <td><p class="fw-semibold text-dark mb-0 p-1" id="billNumber"
                                                                                        style="color:white!important;
                                                                                      background-color: #4d1313;
                                                                                      border-radius: .25rem;"></p></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><p class="text-muted text-truncate mb-0"> Payment Status :</p></td>
                                                                                <td><p class="fw-semibold text-dark mb-0" id="paymentStatus">                                                                                    
                                                                                    <img id="check" src="{{asset('assets/images/icons/check.png')}}" style="display:none" alt="check" width="16px" height="16px">
                                                                                    <img id="cross" src="{{asset('assets/images/icons/cross.png')}}" style="display:none" alt="cross" width="16px" height="16px">
                                                                                </p></td>
                                                                            </tr>
                                                                      </tbody>
                                                                    </table>
  
                                                                  
                                                                  <!-- Table Foot -->
                                                                  <p class="fw-semibold text-dark mt-3" style="margin-bottom: 0px;">Annual Fee</p>
                                                                  <table class="table table-nowrap mt-0">
                                                                      <thead class="table-light ">
                                                                          <tr>
                                                                              <th scope="col">#</th>
                                                                              <th scope="col">Year</th>
                                                                              <th scope="col">Price(TSh)</th>
                                                                          </tr>
                                                                      </thead>
                                                                      <tbody id="data_table_body">
                                                                      </tbody>
                                                                      
                                                                  </table>
  
                                                                  <p class="fw-semibold text-dark mt-3" style="margin-bottom: 0px;">Event Fee</p>
                                                                  <table class="table table-nowrap mt-0">
                                                                      <thead class="table-light ">
                                                                          <tr>
                                                                              <th scope="col">#</th>
                                                                              <th scope="col">Year</th>
                                                                              <th scope="col">Price(TSh)</th>
                                                                          </tr>
                                                                      </thead>
                                                                     
                                                                      
                                                                      <tbody>
                                                                          <tr>
                                                                              <th scope="row">1</th>
                                                                              <td>{{ date('Y') }}</td>
                                                                              <td id="event_fee"></td>
                                                                          </tr>
                                                                         
                                                                          
                                                                      </tbody>
                                                                      <tfoot class="table-light">
                                                                          <tr>
                                                                              <th colspan="2">Total</th>
                                                                              <th id="total_amount"></th>
                                                                          </tr>
                                                                      </tfoot>
                                                                  </table>  
                                                                </div> 
                                                            </div>

                                                            
                                                            
                                                            

                                                            <div id="paymentoptionDiv" class="mb-5">
                                                                <div class="row  mt-2">
                                                                    <div class="col d-flex justify-content-center">
                                                                    <div id="wapper">
                                                                        <h3>Select Payment Option</h3>
                                                                    
                                                                    </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row g-4 align-items">
                                                                    <div class="col-lg-6 col-sm-6">
                                                                    <a onclick="callSweetAlert('generateControlNoGepg')">
                                                                        <div >
                                                                            <div class="form-check card-radio" style="text-align: center;">
                                                                                <label class="form-check-label" >
                                                                                    <img class="rounded-circle avatar-md" alt="gprg" src="{{ asset('assets/images/gpeg.png') }}">
                                                                                </br>
                                                                                    <span class="fs-14 text-wrap">GePG - Control Number Payment</span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="col-lg-6 col-sm-6" id="ncardButton">
                                                                        <a onclick="callSweetAlert('generateControlNoNcard')">
                                                                        <div >
                                                                            <div class="form-check card-radio" style="text-align: center;">
                                                                                <label class="form-check-label">
                                                                                    <img class="avatar-md" style="width:50%" alt="ncard" src="{{ asset('assets/images/ncard.png') }}">
                                                                                </br>
                                                                                    <span class="fs-14 text-wrap">Ncard - Bill Number Payment</span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        </a>
                                                                    </div>


                                                                    <div class="col-lg-6 col-sm-6" id="gpegMessage" style="display:none;">
                                                                        <div >
                                                                            <div class="form-check card-radio" style="text-align: center;">
                                                                                <label class="form-check-label">
                                                                                </br>
                                                                                    <span class="fs-14 text-wrap" id="gpegTextMessage"></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>


                                                            <div class="node-card">
                                                              <p id="billGeneratedNote" style="display:none">Please! Note Down Your Bill No. For Future Reference</p>
                                                              <a id="downloadBillBtn" class="btn btn-primary" href="#">Download Bill</a>
                                                          </div>
                                                        </div>
                                                        <!-- end card body -->
                                                    </div>
                                                    <!-- end card -->
                                                </div>
                                                <!-- end slide item -->                                                
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-lg-6" style="z-index: -100;">  
                                      </div>
                                    </div>  
                                  </div><!-- end card body -->
                              </div> 
                                               
                                            </div>
                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                <button type="button" class="btn btn-success btn-label right ms-auto"
                                                    id="generateBillButton_old" style="display:none">
                                                    <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Generate Bill
                                                </button>
                                                <button type="button"
                                                    class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                                    data-nexttab="pills-info-desc-tab" id="payBillButton"
                                                    style="display:none">
                                                    <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Pay Bill
                                                </button>
                                            </div>
                                        </div>
                                        <!-- end tab pane -->
                                        @include('layout._channel')
                                        <div class="tab-pane fade" id="pills-success" role="tabpanel"
                                            aria-labelledby="pills-success-tab">
                                            <div>
                                                <div class="text-center">
                                                    <div class="mb-4">
                                                        <lord-icon src="https://cdn.lordicon.com/lupuorrc.json"
                                                            trigger="loop" colors="primary:#0ab39c,secondary:#405189"
                                                            style="width:120px;height:120px"></lord-icon>
                                                    </div>
                                                    <h5>Well Done !</h5>
                                                    <p class="text-muted">You have Successfully Signed Up</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end tab pane -->
                                    </div>
                                    <!-- end tab content -->
                                </form>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        <!-- load jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- provide the csrf token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Find the submit button element
                var submitButton = document.getElementById("submitButton");
                // Simulate a click event on the button
                submitButton.click();
            });
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const nextTabButton = document.querySelector(".nexttab");
                const targetButton = document.getElementById("pills-info-desc-tab");
                nextTabButton.addEventListener("click", function() {
                    targetButton.click(); // Trigger a click event on the target button
                });
            });
        </script>

