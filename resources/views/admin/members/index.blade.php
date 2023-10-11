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
            <a href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Members</li>
        </ol>
        </div>
    </div>
    </div>
</div>



<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Buttons Datatables</h5>
            </div>
            <div class="card-body">
                <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            
                            <th>#</th>
                            <th>REG NO.</th>
                            <th>Name</th>
                            <th>Reg. Date</th>
                            <th>Total Bill Amount</th>
                            <th>Bill Status</th>
                            <th>Channel</th>
                            <th style="width: 150px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($members as $member)
                        <tr>
                            
                            <td>{{ $loop->iteration }}</td>
                            <td>
                            <a href="#" class="fw-medium">{{ $member->reg_no }}</a>
                            </td>
                            <td>{{ $member->first_name }} {{ $member->middle_name }} {{ $member->last_name }}</td>
                            <td>
                            {{ \Carbon\Carbon::parse($member->created_at)->format('d-m-Y') }}
                            </td>
                            <td>

                                @if(empty($member->bills)) 
                                 0
                                @else 
                                @foreach ($member->bills as $w)
                                    {{ $w->amount }} 
                                @endforeach
                                @endif
                            </td>
                            <td>


                                @if(empty($member->bills)) 
                                  <span class="badge bg-danger">No bill</span>
                                 
                                @else

                                  @foreach ($member->bills as $w)
                                    @if( $w->paid_status == 1 || $w->paid_status == 3)
                                   <span class="badge bg-success">Paid</span>
                                   @else
                                   <span class="badge bg-info">Not Paid</span>
                                   @endif
                                  @endforeach
                                @endif

                            </td>
                            <td>


                                @if(empty($member->bills)) 
                                 
                                @else

                                  @foreach ($member->bills as $w)
                                    @if( $w->paid_status == 1 || $w->paid_status == 3)
                                      @if($w->paid_status == '')
                                        <span class="badge bg-success">N-CARD</span>
                                      @else
                                       <span class="badge bg-success">GPEG</span>
                                      @endif
                                   @else
                                   @endif
                                  @endforeach
                                @endif

                            </td>
                            <td>
                            <button type="button" class="btn btn-sm btn-light">Details</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                        
                </table>
            </div>
        </div>
    </div>
</div><!--end row-->


@stop
