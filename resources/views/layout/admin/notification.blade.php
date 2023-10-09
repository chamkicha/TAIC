@if (isset($success) && $success)
<div style="z-index: 11">
    <div id="borderedToast1" class="toast toast-border-primary overflow-hidden mt-3" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body">
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-2">
                    <i class="ri-user-smile-line align-middle"></i>
                </div>
                <div class="flex-grow-1">
                    <h6 class="mb-0">Your application was successfully sent.</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
