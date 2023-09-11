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

                                                <div class="card" id="infoDiv" style="display:none">
                                                    <div class="p-1">

                                                        <div class="row">
                                                            <div class="col-lg-6">


                                                                <div class="row">
                                                                    <div class="col-lg-6">

                                                                        <div class="swiper-wrapper"
                                                                            id="swiper-wrapper-a6ca147977931458"
                                                                            aria-live="polite"
                                                                            style="transform: translate3d(0px, 0px, 0px);">
                                                                            <div class="swiper-slide swiper-slide-active"
                                                                                role="group" aria-label="1 / 5"
                                                                                style="width: 654px; margin-right: 15px;">
                                                                                <div
                                                                                    class="card profile-project-card shadow-none profile-project-success mb-0">
                                                                                    <div class="card-body p-4">
                                                                                        <div class="d-flex">
                                                                                            <div
                                                                                                class="flex-grow-1 text-muted overflow-hidden">
                                                                                                <h5
                                                                                                    class="fs-14 text-truncate mb-1">
                                                                                                    <a href="#"
                                                                                                        class="text-dark"
                                                                                                        id="full_name"></a>
                                                                                                </h5>
                                                                                                <table>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td>
                                                                                                                <p
                                                                                                                    class="text-muted text-truncate mb-0">
                                                                                                                    Category
                                                                                                                    :
                                                                                                                </p>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <p class="fw-semibold text-dark mb-0"
                                                                                                                    id="professional_category">
                                                                                                                </p>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>
                                                                                                                <p
                                                                                                                    class="text-muted text-truncate mb-0">
                                                                                                                    Reg
                                                                                                                    No :
                                                                                                                </p>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <p class="fw-semibold text-dark mb-0"
                                                                                                                    id="reg_number">
                                                                                                                </p>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>
                                                                                                                <p
                                                                                                                    class="text-muted text-truncate mb-0">
                                                                                                                    Mobile
                                                                                                                    :
                                                                                                                </p>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <p class="fw-semibold text-dark mb-0"
                                                                                                                    id="mobile">
                                                                                                                </p>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>
                                                                                                                <p
                                                                                                                    class="text-muted text-truncate mb-0">
                                                                                                                    Institution
                                                                                                                    :
                                                                                                                </p>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <p class="fw-semibold text-dark mb-0"
                                                                                                                    id="institution">
                                                                                                                </p>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>
                                                                                                                <p
                                                                                                                    class="text-muted text-truncate mb-0">
                                                                                                                    Bill
                                                                                                                    Number
                                                                                                                    :
                                                                                                                </p>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <p class="fw-semibold text-dark mb-0 p-1"
                                                                                                                    id="billNumber"
                                                                                                                    style="color:white!important;
                                                                                      background-color: #4d1313;
                                                                                      border-radius: .25rem;">
                                                                                                                </p>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>


                                                                                                <!-- Table Foot -->
                                                                                                <p class="fw-semibold text-dark mt-3"
                                                                                                    style="margin-bottom: 0px;">
                                                                                                    Annual Fee</p>
                                                                                                <table
                                                                                                    class="table table-nowrap mt-0">
                                                                                                    <thead
                                                                                                        class="table-light ">
                                                                                                        <tr>
                                                                                                            <th
                                                                                                                scope="col">
                                                                                                                #</th>
                                                                                                            <th
                                                                                                                scope="col">
                                                                                                                Year
                                                                                                            </th>
                                                                                                            <th
                                                                                                                scope="col">
                                                                                                                Price(Tsh)
                                                                                                            </th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody
                                                                                                        id="data_table_body">
                                                                                                    </tbody>

                                                                                                </table>

                                                                                                <p class="fw-semibold text-dark mt-3"
                                                                                                    style="margin-bottom: 0px;">
                                                                                                    Event Fee</p>
                                                                                                <table
                                                                                                    class="table table-nowrap mt-0">
                                                                                                    <thead
                                                                                                        class="table-light ">
                                                                                                        <tr>
                                                                                                            <th
                                                                                                                scope="col">
                                                                                                                #</th>
                                                                                                            <th
                                                                                                                scope="col">
                                                                                                                Year
                                                                                                            </th>
                                                                                                            <th
                                                                                                                scope="col">
                                                                                                                Price(Tsh)
                                                                                                            </th>
                                                                                                        </tr>
                                                                                                    </thead>


                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <th
                                                                                                                scope="row">
                                                                                                                1</th>
                                                                                                            <td>{{ date('Y') }}
                                                                                                            </td>
                                                                                                            <td
                                                                                                                id="event_fee">
                                                                                                            </td>
                                                                                                        </tr>


                                                                                                    </tbody>
                                                                                                    <tfoot
                                                                                                        class="table-light">
                                                                                                        <tr>
                                                                                                            <th
                                                                                                                colspan="2">
                                                                                                                Total
                                                                                                            </th>
                                                                                                            <th
                                                                                                                id="total_amount">
                                                                                                            </th>
                                                                                                        </tr>
                                                                                                    </tfoot>
                                                                                                </table>

                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="node-card">
                                                                                            <p>Please! Note Down Your
                                                                                                Registration ID. For
                                                                                                Future Reference</p>
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
                                                            <div class="col-lg-6">

                                                            </div>
                                                        </div>

                                                    </div><!-- end card body -->
                                                </div>
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
                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                <button type="button" class="btn btn-success btn-label right ms-auto"
                                                    id="generateBillButton" style="display:none">
                                                    <i
                                                        class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Generate
                                                    Bill
                                                </button>
                                                <button type="button"
                                                    class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                                    data-nexttab="pills-info-desc-tab" id="payBillButton"
                                                    style="display:none">
                                                    <i
                                                        class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Pay
                                                    Bill
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
        <script>
            function getRegDetails() {
                let reg_no = document.getElementById('reg_no').value;
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: 'POST',
                    url: '{!! URL::to('process-regno') !!}',
                    data: {
                        _token: CSRF_TOKEN,
                        reg_no: reg_no
                    },
                    beforeSend: function() {
                        $('#loaderNew').show();
                    },
                    success: function(data) {
                        if (data.statusCode == 200) {
                            document.getElementById('full_name').textContent = data.data.first_name + ' ' + data
                                .data.middle_name + ' ' + data.data.last_name;
                            document.getElementById('professional_category').textContent = data.data
                                .professional_category;
                            document.getElementById('reg_number').textContent = data.data.reg_no;
                            document.getElementById('mobile').textContent = data.data.mobile;
                            document.getElementById('institution').textContent = data.data.institution;
                            document.getElementById('billNumber').textContent = data.data.bill_ref_no;
                            document.getElementById('event_fee').textContent = data.data.event_fee.toLocaleString(
                                'en-US');
                            var annual_fee = data.data.annual_fee;
                            var event_fee = data.data.event_fee.toLocaleString('en-US');
                            document.getElementById('total_amount').textContent = data.data.total_amount
                                .toLocaleString('en-US', {
                                    style: 'currency',
                                    currency: 'TZS'
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

                            if (data.data.bill_ref_no == "") {
                                $('#generateBillButton').show(200);
                            } else {
                                $('#payBillButton').show(200);
                                $('#generateBillButton').hide();
                            }
                            $('#infoDiv').show(200);
                            $('#errorDiv').hide();
                        } else {
                            document.getElementById('allertId').textContent = data.message;
                            $('#generateBillButton').hide(200);
                            $('#infoDiv').hide();
                            $('#errorDiv').show(200);
                        }
                        console.log(data);
                    },
                    error: function() {
                        console.log('failed');
                    },
                    complete: function() {
                        $('#loaderNew').hide();
                    }
                });

            }
        </script>
        <script>
            //data when the button is clicked
            document.getElementById("generateBillButton").addEventListener("click", function() {
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
                    url: '{!! URL::to('memberDetails/process-bill/') !!}',
                    data: {
                        _token: CSRF_TOKEN,
                        reg_no: reg_no
                    },
                    beforeSend: function() {
                        $('#loaderNew').show();
                    },
                    success: function(data) {
                        if (data.statusCode == 200) {
                            if (data.data.error == 0) {
                                document.getElementById('successID').textContent =
                                    "Bill Generated Successful!";
                                $('#succcessDiv').show();
                                $('#payBillButton').show(200);
                                $('#generateBillButton').hide();
                            }
                            if (data.data.error == 1) {
                                document.getElementById('allertId').textContent = "Your Bill is Ready!. Refresh";
                                $('#errorDiv').show();
                            }
                        }
                    },
                    error: function() {
                        console.log('Server Error')
                    },
                    complete: function() {
                        $('#loaderNew').hide();
                    }
                });
                window.location.href = window.location.href;
            });
        </script>
