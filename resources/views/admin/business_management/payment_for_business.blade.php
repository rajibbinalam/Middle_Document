@extends('layout.admin.master')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-2">
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Admin</h5>
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                <span class="text-muted font-weight-bold mr-4">{{$title}}</span>
            </div>
            <div class="d-flex align-items-center">
            </div>
        </div>
    </div>
    <div class="card card-custom gutter-b">
        <div class="container mt-10">
            <div class="card-title">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <h4>{{$table}}</h4>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <button value="" class=" btn btn-secondary form-control">Period From</button>
                        </div>
                        <div class="form-group col-md-3">
                            <button value="" class=" btn btn-secondary form-control">To</button>
                        </div>
                        <div class="form-group col-md-3">
                            <button type="submit" value="" class=" btn btn-warning form-control">Search</button>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <input type="text" class="form-control" name="home_page_banner_3_upload" id="kt_datepicker_1" readonly="readonly" />
                        </div>
                        <div class="form-group col-md-3">
                            <input type="text" class="form-control" name="home_page_banner_3_upload" id="kt_datepicker_1" readonly="readonly" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-body row">
            <div class="dtae-table col-md-6">
                <table class="table table-separate table-head-custom table-checkable">
                    <thead>
                        <tr class="table-head text-center">
                            <th>03-05-2021</th>
                            <th>05-06-2021</th>
                            <th><strong>$7603</strong></th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="container mt-20">
            <h4>{{$table}}</h4>
            <div class="card-title row" style="margin-bottom:60px">
                <div class="col-md-9">
                    <table class="table" style="width: 100%; margin:0 !important;">
                        <thead>
                            <th>ID</th>
                            <th>Period From</th>
                            <th>To</th>
                            <th>Username</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>03-02-2020</td>
                                <td>30-01-2021</td>
                                <td>Jhon Doe</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-3">
                    <a href="" class="btn btn-danger">Search</a>
                </div>
            </div>

            <div class="col-md-12">
                <table style="width: 100%;border: 1px solid #d5d5d5; margin: 0 0 35px 0px;">
                    <thead style="border: 1px solid #d5d5d5; background-color: #eceef6;">
                        <th>ID</th>
                        <th>Txn</th>
                        <th>Ad Type</th>
                        <th>Peyer Email</th>
                        <th>UserName</th>
                        <th>Date</th>
                    </thead>
                    <tbody>
                        <tr style="border: 1px solid #d5d5d5;">
                            <td>1</td>
                            <td>TWuJ654fdgd5</td>
                            <td>galary + Business Page</td>
                            <td>Doe@gmail.com</td>
                            <td>Omesh Khan</td>
                            <td>2012-12-06 12:42</td>
                        </tr>
                        <tr style="border: 1px solid #d5d5d5;">
                            <td>1</td>
                            <td>TWuJ654fdgd5</td>
                            <td>galary + Business Page</td>
                            <td>Doe@gmail.com</td>
                            <td>Omesh Khan</td>
                            <td>2012-12-06 12:42</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection