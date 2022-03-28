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
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--begin::Card-->
                    <div class="card card-custom example example-compact">
                        <div class="card-header">
                            <h3 class="card-title">{{$table}}</h3>

                        </div>
                        <!--begin::Form-->
                        <table class="table table-separate table-head-custom table-checkable">
                            <thead>
                                <tr>
                                    <th>For Price at or Above</th>
                                    <th>Increment</th>
                                    <th>Delete</th>




                                </tr>
                            </thead>
                            <tbody>


                                @foreach($bid as $row)

                                <tr>
                                    <td><input type="text" class="form-control price_above"
                                            value="{{$row->for_price_at_or_above}}" data-id="{{$row->id}}"/></td>
                                    <td><input type="text" class="form-control price_increment" data-id="{{$row->id}}" value="{{$row->increment}}" /></td>
                                    <td><a href="javascript:void(0)" class="confirmDelete " record="bid"
                                recordid="{{ $row->id }}"><i class="fa fa-trash"></i></a></td>


                                </tr>
                                @endforeach


                            </tbody>

                            <tr>
                                <form method="post" action="{{route('admin.general.auction_bid')}}">
                                    @csrf
                                    <th><input type="text" class="form-control" name="for_price_at_or_above" placeholder="Price Level" /></th>
                                    <th><input type="text" class="form-control" name="increment" placeholder="Enter New Increment" /></th>
                                    <th><input type="submit" class="form-control" value="New" /></th>

                                </form>


                            </tr>
                        </table>

                        <!--end::Form-->
                    </div>
                    <!--end::Card-->
                </div>

            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection
