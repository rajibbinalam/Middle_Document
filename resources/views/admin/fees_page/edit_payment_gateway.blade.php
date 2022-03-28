@extends('layout.admin.master')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Edit Payment Gateway</h5>
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
            <div class="col-md-12">
                <h6><strong>Real Time Payment Process Setup</strong></h6>
                <div class="edit-payment row">
                    <div class="col-md-6 mt-4">
                        <label for="paymentMathod">Payment Processor : </label>
                        <select style="width: 177px; display: inline-block;" class="form-control" name="" id="paymentMathod">
                            <option value="">31 - Paypal</option>
                            <option value="">31 - Bank</option>
                            <option value="">31 - Debit Cart</option>
                            <option value="">31 - Online Payment</option>
                        </select>
                    </div>
                    <div class="col-md-4 mt-4">
                        <button class="btn btn-primary">Set Payment Processor</button>
                        <button class="btn btn-danger">Reset</button>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-10">
                <h6><strong>Configure Payment Processor</strong></h6>
                <div class="all-item mt-5">
                    <label>Select Processor : </label>
                    <select style="width: 225px; display: inline-block;" class="form-control" name="">
                        <option value="">01 - AthurizedNet</option>
                        <option value="">02 - AthurizedNet</option>
                        <option value="">03 - AthurizedNet</option>
                        <option value="">04 - Online Payment</option>
                    </select>
                </div>
                <div class="all-item mt-3">
                    <label>Processor Name : Athurized Net</label>
                </div>
                <div class="all-item mt-3">
                    <label>Processor Website : <a href="http://www.athueized.net">www.athueized.net</a></label>
                </div>
                <div class="all-item mt-3">
                    <label>Processor Details : Athurized Net Payment gateway </label>
                </div>
                <div class="all-item mt-3">
                    <label for="merchantLog">Merchant Login :</label>
                    <input type="text" class="form-control" name="" id="merchantLog" style="width: 425px; display: inline-block;" placeholder="Merchant Login">
                </div>
                <div class="all-item mt-3">
                    <label for="merchantPass">Merchant Password :</label>
                    <input type="password" class="form-control" name="" id="merchantPass" style="width: 425px; display: inline-block;" placeholder="Merchant Password">
                </div>
                <div class="all-item mt-3">
                    <button class="btn btn-primary">Save Payment Settings</button>
                    <button class="btn btn-danger">Reset</button>
                </div>

            </div>
        </div>
    </div>
    <!--end::Entry-->
</div>
@endsection