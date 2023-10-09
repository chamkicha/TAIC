@extends('layout/admin/master')

@section('content')

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Projects</h4>
                <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">
                    <a href="javascript: void(0);">Dashboards</a>
                    </li>
                    <li class="breadcrumb-item active">Projects</li>
                </ol>
                </div>
            </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row project-wrapper">
            <div class="col-xxl-8">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card card-animate">
                            <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden ms-3">
                                <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Registered Member</p>
                                <div class="d-flex align-items-center mb-3">
                                    <h4 class="fs-4 flex-grow-1 mb-0">
                                    <span class="counter-value" data-target="{{ countMembers() }}">0</span>
                                    </h4>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- end card body -->
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-medium text-muted mb-3">Total Billed Amount</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <h4 class="fs-4 flex-grow-1 mb-0">
                                        <span class="counter-value" data-target="{{ billedAmount() }}">0</span>
                                        </h4>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden ms-3">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Total Payment Amount</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <h4 class="fs-4 flex-grow-1 mb-0">
                                        <span class="counter-value" data-target="{{ totalPaid() }}">0</span>
                                        </h4>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


@stop
