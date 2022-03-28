@extends('layout.admin.master')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Maintenence</h5>
                <!--end::Page Title-->
                <!--begin::Actions-->

                <!--end::Actions-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->

            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="card card-custom gutter-b">



        <div class="card-body row">
            @include('error.message')
            <div class="col-md-6">
                <form method="get" route="?">
                    <div class="form-row" style="width: 150%;">
                        <div class="form-group col-md-3">
                            <button value="" class=" btn btn-secondary form-control">Period From</button>
                        </div>
                        <div class="form-group col-md-3">
                            <button value="" class=" btn btn-secondary form-control">To</button>
                        </div>
                    </div>
                    <div class="form-row" style="width: 150%;">
                        <div class="form-group col-md-3">
                            <input type="date" class="form-control" name="from" value="{{ request()->input('from') }}" />
                        </div>
                        <div class="form-group col-md-3">
                            <input type="date" class="form-control" name="to" value="{{ request()->input('to') }}" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <h6><strong>Expired Adds</strong></h6>
                <select name="" id="">
                    <option value="">Expired by 60 Days</option>
                    <option value="">Expired by 90 Days</option>
                </select>
                <button class=""> Search</button>
            </div>
            <div class="col-md-12">
                <p><strong>Listing ID</strong></p>
                <table style="width: 80%;display: inline-table;">
                    <tbody style="border: 1px solid;">
                        <tr>
                            <td style="width: 48 !important ;border: 1px solid;">1236</td>
                            <td style="border: 1px solid;">BMW 118 for sale in perth</td>
                            <td style="border: 1px solid;"><a href="">View</a></td>
                        </tr>
                        <tr>
                            <td style="width: 48 !important ;border: 1px solid;">1236</td>
                            <td style="border: 1px solid;">BMW 118 for sale in perth</td>
                            <td style="border: 1px solid;"><a href="">View</a></td>
                        </tr>
                        <tr>
                            <td style="width: 48 !important ;border: 1px solid;">1236</td>
                            <td style="border: 1px solid;">BMW 118 for sale in perth</td>
                            <td style="border: 1px solid;"><a href="">View</a></td>
                        </tr>
                        <tr>
                            <td style="width: 48 !important ;border: 1px solid;">1236</td>
                            <td style="border: 1px solid;">BMW 118 for sale in perth</td>
                            <td style="border: 1px solid;"><a href="">View</a></td>
                        </tr>
                        <tr>
                            <td style="width: 48 !important ;border: 1px solid;">1236</td>
                            <td style="border: 1px solid;">BMW 118 for sale in perth</td>
                            <td style="border: 1px solid;"><a href="">View</a></td>
                        </tr>>
                    </tbody>
                </table>
                <a href="" class="btn btn-danger" style="float: inherit;">Delete</a>
            </div>

            <div class="col-md-2">
            </div>

            <div class="col-md-8">
                <div class="ip-block">
                    <p>No internet Checking the network cables, modem, and router Reconnecting to Wi-Fi</p>
                    <label for=""><strong>Ip Address</strong></label>
                    <input type="text" class="form-control" name="" id="" style="width: 400px;">
                    <p>Enter A valid Ip Address</p>
                    <button class="btn btn-primary">Add</button>
                    <div class="card-head mt-5" style="background-color: #e5e5e5;padding: 15px 0px 0px 20px;border-radius: 10px;">
                        BLOCKED IP ADDRESS
                        <div class="card-body">
                            <input type="text" class="form-control" readonly disabled name="" id="" value="123.3434.13212" style="    display: inline-block; width: 90%;"><a href="#"><i class="fa fa-times"></i></i></a>
                            <input type="text" class="form-control" readonly disabled name="" id="" value="123.3434.13212" style="    display: inline-block; width: 90%;"><a href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
            </div>

        </div>
    </div>
    <!--end::Entry-->
</div>
@endsection