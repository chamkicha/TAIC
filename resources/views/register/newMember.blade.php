    
       <div class="page-content">
          <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
              <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">Conference Registration</h4>
                  <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item">
                        <a href="{{route('/')}}">Home</a>
                      </li>
                      <li class="breadcrumb-item active">Conference Registration</li>
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
                    <h4 class="card-title mb-0">Register Now</h4>
                  </div>
                  <!-- end card header -->
                  <div class="card-body">
                    <form id="regForm" action="{{url('/submitRegForm')}}" method="POST" class="form-steps" autocomplete="off">
                      @csrf
                      
                      <div id="custom-progress-bar" class="progress-nav mb-4">
                        <div class="progress" style="height: 1px;">
                          <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <ul class="nav nav-pills progress-bar-tab custom-nav" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-pill active" data-progressbar="custom-progress-bar" id="pills-gen-info-tab" data-bs-toggle="pill" data-bs-target="#pills-gen-info" type="button" role="tab" aria-controls="pills-gen-info" aria-selected="true">1</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-pill" data-progressbar="custom-progress-bar" id="pills-info-desc-tab" data-bs-toggle="pill" data-bs-target="#pills-info-desc" type="button" role="tab" aria-controls="pills-info-desc" aria-selected="false">2</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-pill" data-progressbar="custom-progress-bar" id="pills-success-tab" data-bs-toggle="pill" data-bs-target="#pills-success" type="button" role="tab" aria-controls="pills-success" aria-selected="false">3</button>
                          </li>
                        </ul>
                      </div>
                      <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-gen-info" role="tabpanel" aria-labelledby="pills-gen-info-tab">
                          <div>
                            <div class="mb-4">
                              <div>
                                <h5 class="mb-1">General Information</h5>
                                <p class="text-muted">Fill all Information as below</p>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-4">
                                <div class="mb-3">
                                  <label class="form-label" for="gen-info-first_name-input">First Name</label>
                                  <input type="text" value="{{ old('first_name') }}" name="first_name" class="form-control" id="gen-info-first_name-input" placeholder="Enter First Name" required>
                                  <div class="invalid-feedback">Please enter a First Name</div>
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="mb-3">
                                  <label class="form-label" for="gen-info-username-input">Middle Name</label>
                                  <input type="text" value="{{ old('middle_name') }}" name="middle_name" class="form-control" id="gen-info-middle_name-input" placeholder="Enter Middle name">
                                  <div class="invalid-feedback">Please enter a Middle name</div>
                                </div>
                              </div>

                              <div class="col-lg-4">
                                <div class="mb-3">
                                  <label class="form-label" for="gen-info-last_name-input">Last Name</label>
                                  <input type="text" value="{{ old('last_name') }}" name="last_name" class="form-control" id="gen-info-last_name-input" placeholder="Enter Last name" required>
                                  <div class="invalid-feedback">Please enter a Last name</div>
                                </div>
                              </div>

                              <div class="col-lg-4">
                                <div class="mb-3">
                                  <label class="form-label" for="gen-info-gender-input">Gender</label>

                                    <select class="form-select" id="gender" name="gender">
                                        <option value="">Choose Gender</option>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                    </select>
                                  <div class="invalid-feedback">Please enter a Last name</div>
                                </div>
                              </div>

                              <div class="col-lg-4">
                                <div class="mb-3">
                                  <label class="form-label" for="gen-info-institution-input">Institution Name</label>
                                  <input type="text" value="{{ old('institution') }}" name="institution" class="form-control" id="gen-info-institution-input" placeholder="Enter Institution name" required>
                                  <div class="invalid-feedback">Please enter a institution name</div>
                                </div>
                              </div>

                              <div class="col-lg-4">
                                <div class="mb-3">
                                  <label class="form-label" for="gen-info-sector_id-input">Sector</label>

                                    <select class="js-example-basic-single" id="sector_id" name="sector_id">
                                        <option value="">Choose Sector</option>
                                        @foreach($sectors as $sector)
                                        <option value="{{ $sector->id }}">{{ $sector->name }}</option>
                                        @endforeach
                                    </select>
                                  <div class="invalid-feedback">Please enter a Sector</div>
                                </div>
                              </div>

                              {{-- <div class="col-lg-4">
                                <div class="mb-3">
                                  <label class="form-label" for="gen-info-professional_category_id-input">Professional Category</label>

                                    <select class="js-example-basic-single" id="professional_category_id" name="professional_category_id">
                                        <option value="">Choose Professional Category</option>
                                        @foreach($professional_categories as $professional_category)
                                        <option value="{{ $professional_category->id }}">{{ $professional_category->name }}</option>
                                        @endforeach
                                    </select>
                                  <div class="invalid-feedback">Please enter a Professional Category</div>
                                </div>
                              </div> --}}

                              <div class="col-lg-6">
                                <div class="mb-3">
                                  <label class="form-label" for="gen-info-nationality-input">Residence Country</label>

                                    <select class="js-example-basic-single" id="residence_country_id" name="residence_country_id">
                                        <option value="">Residence Country</option>
                                        @foreach($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                  <div class="invalid-feedback">Please enter a Residence Country</div>
                                </div>
                              </div>

                              <div class="col-lg-6">
                                <div class="mb-3">
                                  <label class="form-label" for="gen-info-nationality-input">Nationality</label>

                                    <select class="js-example-basic-single" id="nationality_id" name="nationality_id" onchange="checkNationality(this.value)">
                                        <option value="">Choose Nationality</option>
                                        @foreach($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                  <div class="invalid-feedback">Please enter a Nationality</div>
                                </div>
                              </div>
                             
                              <div class="col-lg-4" id="region_id_div">
                                <div class="mb-3">
                                  <label class="form-label" for="gen-info-region_id-input">Region</label>

                                    <select class="js-example-basic-single" id="region_id" name="region_id" onchange="getdistricts(this.value)">
                                        <option value="">Choose Region</option>
                                        @foreach($regions as $region)
                                        <option value="{{ $region->id }}">{{ $region->name }}</option>
                                        @endforeach
                                    </select>
                                  <div class="invalid-feedback">Please select a Region</div>
                                </div>
                              </div>

                              <div class="col-lg-4" id="district_id_div">
                                <div class="mb-3">
                                  <label class="form-label" for="gen-info-district_id-input">District</label>

                                    <select class="js-example-basic-single" id="district_id" name="district_id" onchange="getwards(this.value)">
                                        <option value="">Choose District</option>
                                    </select>
                                  <div class="invalid-feedback">Please select a Professional District</div>
                                </div>
                              </div>

                              <div class="col-lg-4" id="ward_id_div">
                                <div class="mb-3">
                                  <label class="form-label" for="gen-info-ward_id-input">Ward</label>

                                    <select class="js-example-basic-single" id="ward_id" name="ward_id">
                                        <option value="">Choose Ward</option>
                                    </select>
                                  <div class="invalid-feedback">Please enter a Professional Ward</div>
                                </div>
                              </div>

                              <div class="col-lg-4" id="street_div">
                                <div class="mb-3">
                                  <label class="form-label" for="gen-info-street-input">Street</label>
                                  <input type="text" value="{{ old('street') }}" name="street" class="form-control" id="gen-info-street-input" placeholder="Enter Street name" required>
                                  <div class="invalid-feedback">Please enter a Street name</div>
                                </div>
                              </div>

                              <div class="col-lg-4">
                                <div class="mb-3">
                                  <label class="form-label" for="gen-info-mobile-input">Mobile</label>
                                  <input type="number" value="{{ old('mobile') }}" name="mobile" class="form-control" id="gen-info-mobile-input" placeholder="255*********" required>
                                  <div class="invalid-feedback">Please enter a Mobile</div>
                                </div>
                              </div>

                              <div class="col-lg-4">
                                <div class="mb-3">
                                  <label class="form-label" for="gen-info-email-input">Email</label>
                                  <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="gen-info-email-input" placeholder="Enter email" required>
                                  <div class="invalid-feedback">Please enter an email address</div>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">

                                  <button type="button" id="submitButton"  class="btn btn-success btn-load">
                                      <span class="d-flex align-items-center">
                                          <span id="loaderNew" style="display:none" class="spinner-border flex-shrink-0" role="status">
                                              <span class="visually-hidden">Loading...</span>
                                          </span>
                                          <span class="flex-grow-1 ms-2">
                                              Submit
                                          </span>
                                      </span>
                                  </button>
                                </div>
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
    document.addEventListener('DOMContentLoaded', function() {
        const submitButton = document.getElementById('submitButton');
        
        submitButton.addEventListener('click', function() {
            submitForm();
        });
    });
</script>


<script>
function getdistricts(value) {

  const selectElement = document.getElementById('district_id');
  selectElement.innerHTML = '';
  const emptyOptionElement = document.createElement('option');
  emptyOptionElement.value = ''; 
  emptyOptionElement.textContent = 'Select a District'; 
  selectElement.appendChild(emptyOptionElement); 

    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    
    $.ajax({
        type: 'POST',
        url: '{!!URL::to('districts')!!}',
        data: {_token: CSRF_TOKEN, region_id:value},

        beforeSend: function() {
            $('#loaderNew').show();
                },

        success: function(data){
            if(data.statusCode == 200){

             

            data.data.forEach(district => {
                const optionElement = document.createElement('option');
                optionElement.value = district.id; 
                optionElement.textContent = district.name; 
                selectElement.appendChild(optionElement); 
            });

            
            }else{

            }
        },
        error: function(){
            console.log('failed');
        },
        
        complete: function() {
          $('#loaderNew').hide();
          }
    });
}



function getwards(value) {

  const selectElement = document.getElementById('ward_id');
  selectElement.innerHTML = '';
  const emptyOptionElement = document.createElement('option');
  emptyOptionElement.value = ''; 
  emptyOptionElement.textContent = 'Select a Ward'; 
  selectElement.appendChild(emptyOptionElement); 


  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  
  $.ajax({
      type: 'POST',
      url: '{!!URL::to('wards')!!}',
      data: {_token: CSRF_TOKEN, district_id:value},

      beforeSend: function() {
          $('#loaderNew').show();
              },

      success: function(data){
          if(data.statusCode == 200){

          data.data.forEach(wards => {
              const optionElement = document.createElement('option');
              optionElement.value = wards.id; 
              optionElement.textContent = wards.name; 
              selectElement.appendChild(optionElement); 
          });

          
          }else{

          }
      },
      error: function(){
          console.log('failed');
      },
      
      complete: function() {
        $('#loaderNew').hide();
        }
  });
}

function checkNationality(value){
  console.log(value);
  if(value == '223'){

    $('#region_id_div').show(100);
    $('#district_id_div').show(125);
    $('#ward_id_div').show(150);
    $('#street_div').show(200);
  }else{
    $('#region_id_div').hide();
    $('#district_id_div').hide();
    $('#ward_id_div').hide();
    $('#street_div').hide();

  }
}
</script>

<script>
   
   
    function submitForm() {
      
      var confirmation = confirm('Are you sure you want to proceed ?');

      if (confirmation) {
          document.getElementById('regForm').submit();
      }else{
          document.getElementById("regForm").addEventListener("submit", function(event) {
                        event.preventDefault();
                      });

      }

    }

</script>