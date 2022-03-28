@extends('layout.admin.master')
@section('content')


<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Admin</h5>
                <!--end::Page Title-->
                <!--begin::Actions-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                <span class="text-muted font-weight-bold mr-4">{{$title}}</span>


                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add Page
                </button> -->
                <!--end::Actions-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Actions-->

                <!--end::Daterange-->
                <!--begin::Dropdowns-->

                <!--end::Dropdowns-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>

    <!-- //add modal -->

    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="card card-custom gutter-b">
      <div class="container mt-10">
            <div class="card-title">
                <form>
                <div class="form-row">
                        <div class="form-group col-md-3">
                        <button  value="" class=" btn btn-secondary form-control" style="border:none";>{{$table}}</button>

                        </div>
                        
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                        <button  value="" class=" btn btn-secondary form-control">Period From</button>

                        </div>
                        <div class="form-group col-md-3">
                        <button  value="" class=" btn btn-secondary form-control">To</button>

                        </div>
                        <div class="form-group col-md-3">
                            <button type="submit" value="" class=" btn btn-warning form-control">Search</button>

                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">

                            <input type="date" class="form-control" name="to"
                                />
                        </div>

                        <div class="form-group col-md-3">
                            <input type="date" class="form-control" name="from"
                                />
                        </div>
                    </div>

                </form>

            </div>
</div>
           
          
        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tax</th>
                        <th>Ad Type</th>
                        <th>Payer Email</th>
                        <th>Username</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Action</th>



                    </tr>
                </thead>
                <tbody>
                    @foreach($business as $row)
                    @php 
                    $userDetails = App\Models\User::find($row->user_id);
              
                    @endphp
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>Tax</td>
                        <td>
                        @foreach($row['listingid'] as $addPage)
                        @php  
                     
                        
                   
                    $pageName = App\Models\LisitngFees::where('id',$addPage->page_id)->get();
                 
                 
                        @endphp
                        @foreach($pageName as $name)
                       
                      {{ $name->page_title.' ' .'+'.' '}}
                  @endforeach
                        @endforeach
                      </td>
                        <td>@if(!empty($userDetails)) {{$userDetails->email}} @else @endif</td>
                        <td> @if(!empty($userDetails)){{$userDetails->username}} @else @endif</td>
                        <td>{{$row->created_at}}</td>
                        <td>{{$gs->website_currency}} &nbsp;{{$row->total}}</td>
                        <td><a href="{{route('admin.sales_transcation.view_payment',$row->id)}}">View Payment</a></td>



                    </tr>
                    @endforeach

                </tbody>
            </table>
            <!--end: Datatable-->
        </div>
    </div>
    <!--end::Entry-->
</div>
@endsection
