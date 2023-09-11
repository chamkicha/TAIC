 <div class="tab-pane fade" id="pills-info-desc" role="tabpanel" aria-labelledby="pills-info-desc-tab">
                          
    <div class="mb-4">
        <div>
            <h5 class="mb-1">Payments Instruction</h5>
            <p class="text-muted">Please choose your desired service provider and follow the payment instructions provided.</p>
        </div>
    </div>

    <div class="accordion" id="default-accordion-example">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#t-pesa" aria-expanded="true" aria-controls="collapseOne">
                    T-PESA
                </button>
            </h2>
            <div id="t-pesa" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#default-accordion-example">
                <div class="accordion-body">

                  <div class="d-flex justify-content-center">
                      <img class="img-thumbnail rounded-circle avatar-xl" alt="200x200" src="{{ asset('assets/images/logo/tpesa.jpeg') }}">
                  </div>

                  <ol class="list-group list-group-numbered">
                      <li class="list-group-item">PIGA *150*71#</li>
                      <li class="list-group-item">CHAGUA 4 ›LIPA BILL</li>
                      <li class="list-group-item">CHAGUA 2 ›NAMBA YA KAMPUNI</li>
                      <li class="list-group-item">INGIZA NAMBA YA KAMPUNI 009009</li>
                      <li class="list-group-item">INGIZA KUMBUKUMBU NAMBA mf(ICTC*********)</li>
                      <li class="list-group-item">INGIZA KIASI</li>
                      <li class="list-group-item">INGIZA NAMBA YA SIRI</li>
                      <li class="list-group-item">THIBITISHA</li>
                  </ol>

                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tigopesa" aria-expanded="false" aria-controls="collapseTwo">
                    TIGOPESA
                </button>
            </h2>
            <div id="tigopesa" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#default-accordion-example">
                <div class="accordion-body">

                <div class="d-flex justify-content-center">
                    <img class="img-thumbnail rounded-circle avatar-xl" alt="200x200" src="{{ asset('assets/images/logo/tigopesa.jpeg') }}">
                </div>

                <ol class="list-group list-group-numbered">
                      <li class="list-group-item">PIGA *150*01#</li>
                      <li class="list-group-item">CHAGUA 4 ›LIPA BILL</li>
                      <li class="list-group-item">CHAGUA 3 ›NAMBA YA KAMPUNI</li>
                      <li class="list-group-item">CHAGUA 4 ›009009</li>
                      <li class="list-group-item">CHAGUA 1 >WEKA KUMBUKUMBU NAMBA mfn(ICTC********) </li>
                      <li class="list-group-item">WEKA KIASI</li>
                      <li class="list-group-item">INGIZA NAMBA YA SIRI</li>
                      <li class="list-group-item">THIBITISHA</li>
                  </ol>

                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="mpesa">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mpesa" aria-expanded="false" aria-controls="collapseThree">
                    M-PESA
                </button>
            </h2>
            <div id="mpesa" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#default-accordion-example">
                <div class="accordion-body">
                  

                <div class="d-flex justify-content-center">
                    <img class="img-thumbnail rounded-circle avatar-xl" alt="200x200" src="{{ asset('assets/images/logo/mpesa.jpg') }}">
                </div>

                <ol class="list-group list-group-numbered">
                      <li class="list-group-item">PIGA *150*00#</li>
                      <li class="list-group-item">CHAGUA 4 ›LIPA KWA M-PESA</li>
                      <li class="list-group-item">CHAGUA 4 ›NAMBA YA KAMPUNI</li>
                      <li class="list-group-item">CHAGUA 1› WEKA NAMBA YA KAMPUNI 009009</li>
                      <li class="list-group-item">WEKA KUMBUKUMBU NAMBA mf(ICTC********)</li>
                      <li class="list-group-item">WEKA KIASI</li>
                      <li class="list-group-item">INGIZA NAMBA YA SIRI</li>
                      <li class="list-group-item">THIBITISHA</li>
                  </ol>


              </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="airtel">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#airtel" aria-expanded="false" aria-controls="collapseThree">
                    AIRTEL MONEY
                </button>
            </h2>
            <div id="airtel" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#default-accordion-example">
                <div class="accordion-body">
                  
                <div class="d-flex justify-content-center">
                    <img class="img-thumbnail rounded-circle avatar-xl" alt="200x200" src="{{ asset('assets/images/logo/airtel.jpeg') }}">
                </div>

                <ol class="list-group list-group-numbered">
                      <li class="list-group-item">PIGA *150*60#</li>
                      <li class="list-group-item">CHAGUA 5 ›LIPA BILL </li>
                      <li class="list-group-item">CHAGUA 3 › INGIZA NAMBA YA KAMPUNI </li>
                      <li class="list-group-item">NAMBA YA KAMPUNI 009009</li>
                      <li class="list-group-item">INGIZA › KUMBUKUMBU NAMBA mf(ICTC*********)</li>
                      <li class="list-group-item">INGIZA KIASI </li>
                      <li class="list-group-item">INGIZA NAMBA YA SIRI</li>
                      <li class="list-group-item">THIBITISHA</li>
                  </ol>


              </div>
            </div>
        </div>
    </div>
    <div class="d-flex align-items-start gap-3 mt-4">
      <button type="button" id="backButton" class="btn btn-link text-decoration-none btn-label previestab" data-previous="pills-gen-info-tab">
        <i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back </button>
      
    </div>
  </div>
  <!-- end tab pane -->