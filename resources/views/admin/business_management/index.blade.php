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
                            <h3 class="card-title">{{$add_title}}</h3>
                            <!-- <div class="container">


                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-4"></div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 text-center">Link Upload</div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 text-center">File Upload</div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 text-center">Date uploaded</div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 text-center">Paid Until</div>
                                </div>
                            </div> -->

                        </div>
                        <!--begin::Form-->
                        <!-- <form class="form" method="post" action="{{route('admin.business_management.banner.insert')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                            



                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-2     col-sm-12"> Banner
                                        1</label>
                                    <div class="col-lg-3 col-md-3 col-sm-4">
                                        <input type="link" class="form-control" name="banner_1_link" value="" />
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <input type="file" class="form-control" name="banner_1_image" value="" />

                                    </div>


                                    <div class="col-lg-2 col-md-2 col-sm-3">
                                        <input type="text" class="form-control" name="banner_1_upload" id="kt_datepicker_1" readonly="readonly" value="" />
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3">

                                        <input type="text" class="form-control" name="banner_1_expired" id="kt_datepicker_1" readonly="readonly" value="" />
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-2     col-sm-12"> Banner
                                        2</label>
                                    <div class="col-lg-3 col-md-3 col-sm-4">
                                        <input type="link" class="form-control" name="banner_2_link" value="" />
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <input type="file" class="form-control" name="banner_2_image" value="" />

                                    </div>


                                    <div class="col-lg-2 col-md-2 col-sm-3">
                                        <input type="text" class="form-control" name="banner_2_upload" id="kt_datepicker_1" readonly="readonly" value="" />
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3">

                                        <input type="text" class="form-control" name="banner_2_expired" id="kt_datepicker_1" readonly="readonly" value="" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-2     col-sm-12"> Banner
                                        3</label>
                                    <div class="col-lg-3 col-md-3 col-sm-4">
                                        <input type="link" class="form-control" name="banner_3_link" value="" />
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <input type="file" class="form-control" name="banner_3_image" value="" />

                                    </div>


                                    <div class="col-lg-2 col-md-2 col-sm-3">
                                        <input type="text" class="form-control" name="banner_3_upload" id="kt_datepicker_1" readonly="readonly" value="" />
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3">

                                        <input type="text" class="form-control" name="banner_3_expired" id="kt_datepicker_1" readonly="readonly" value="" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-2     col-sm-12"> Banner
                                        4</label>
                                    <div class="col-lg-3 col-md-3 col-sm-4">
                                        <input type="link" class="form-control" name="banner_4_link" value="" />
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <input type="file" class="form-control" name="banner_4_image" value="" />

                                    </div>


                                    <div class="col-lg-2 col-md-2 col-sm-3">
                                        <input type="text" class="form-control" name="banner_4_upload" id="kt_datepicker_1" readonly="readonly" value="" />
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3">

                                        <input type="text" class="form-control" name="banner_4_expired" id="kt_datepicker_1" readonly="readonly" value="" />
                                    </div>


                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-2     col-sm-12"> Banner
                                        5</label>
                                    <div class="col-lg-3 col-md-3 col-sm-4">
                                        <input type="link" class="form-control" name="banner_5_link" value="" />
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <input type="file" class="form-control" name="banner_5_image" value="" />

                                    </div>


                                    <div class="col-lg-2 col-md-2 col-sm-3">
                                        <input type="text" class="form-control" name="banner_5_upload" id="kt_datepicker_1" readonly="readonly" value="" />
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3">

                                        <input type="text" class="form-control" name="banner_5_expired" id="kt_datepicker_1" readonly="readonly" value="" />
                                    </div>


                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-2     col-sm-12"> Banner
                                        6</label>
                                    <div class="col-lg-3 col-md-3 col-sm-4">
                                        <input type="link" class="form-control" name="banner_6_link" value="" />
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <input type="file" class="form-control" name="banner_6_image" value="" />

                                    </div>


                                    <div class="col-lg-2 col-md-2 col-sm-3">
                                        <input type="text" class="form-control" name="banner_6_upload" id="kt_datepicker_1" readonly="readonly" value="" />
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3">

                                        <input type="text" class="form-control" name="banner_6_expired" id="kt_datepicker_1" readonly="readonly" value="" />
                                    </div>


                                </div>

                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-9 ml-lg-auto">
                                        <button type="submit" class="btn btn-primary font-weight-bold mr-2">save</button>
                                        <button type="reset" class="btn btn-light-primary font-weight-bold">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form> -->
                        <div class="card-body">
                            <!--begin: Datatable-->
                            <table class="table table-separate table-head-custom table-checkable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Adsense Code</th>
                                        <th>Banner</th>
                                        <th>Date Uploaded</th>
                                        <th>Paid Until</th>


                                        <th>Action</th>



                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach($banner as $row)
                                    @php
                                    $js = json_decode($row->key_words);


                                    @endphp



                                    <tr>

                                        <td>{{$loop->index+1}} </td>
                                        <td><a href="{{$row->banner_1_link}}">{{$row->banner_1_link}}</a></td>

                                        <td><img src="{{asset('assets/images/backend_images/banner/listing/'.$row['banner_1_image'])}}" height="100px" width="150px" alt="Banner Image"></td>

                                        <td>{{$row->banner_1_upload}}</td>
                                        <td> {{$row->banner_1_expired}}</td>

                                        <td><a href="javascript:void(0)" data-toggle="modal" data-target="#editModal{{$row->id}}">Banner Edit</a></td>



                                    </tr>
                                    @include('admin.modal.business_listing.banner_edit')
                                    @endforeach


                                    <!-- //edit modal strnatcasecmp -->

                                    <!-- edit modal end -->


                                </tbody>
                            </table>

                            <div class="row mt-20">
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-5 float-right mt-3">
                                            <label style="float: right;" for="">Slider Speed</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="" id="" style="width: 100px; display: inline-block;" placeholder="1500">
                                            ms
                                        </div>
                                    </div> <br>
                                    <div class="row">
                                        <div class="col-md-5 float-right mt-3">
                                            <label style="float: right;" for="">Pause</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="" id="" style="width: 100px; display: inline-block;" placeholder="1500">
                                            ms
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-8 float-right mt-3">
                                            <label for="">Worm Slider visible</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="checkbox" checked data-toggle="toggle" data-style="android" data-onstyle="info" data-offstyle="danger">
                                        </div>
                                    </div> <br>
                                    <div class="row">
                                        <div class="col-md-8 float-right mt-3">
                                            <label for="">Auto Play</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="checkbox" checked data-toggle="toggle" data-style="android" data-onstyle="info" data-offstyle="danger">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-8 float-right mt-3">
                                            <label for="">Pause on Mouse Hover</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="checkbox" checked data-toggle="toggle" data-style="android" data-onstyle="info" data-offstyle="danger">
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <!--end: Datatable-->
                        </div>

                    </div>
                </div>
                <!--end::Card-->

                <div class="col-lg-12">
                    <div class="card card-custom example example-compact">
                        <div class="card-header">
                        </div>
                        <div class="card-body row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class=" business-manage row">
                                    <div class="col-md-3 float-right">
                                        <label style="float: right;" for="">Business Name<sup class="sup">*</sup> </label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="" id="" style="width: 500px; display: inline-block;" placeholder="Business Name">
                                    </div>
                                </div>
                                <div class="business-manage mt-5 row">
                                    <div class="col-md-3">
                                        <label style="float: right;" for="">Industry<sup class="sup">*</sup> </label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control" name="" id="" style="width: 300px; display: inline-block;">
                                            <option value="">Plumbers</option>
                                            <option value="">Plumbers</option>
                                            <option value="">Plumbers</option>
                                        </select>
                                        <a href="" class="business_directory_edit">Edit</a>
                                    </div>
                                </div>
                                <div class="business-manage mt-5 row">
                                    <div class="col-md-3">
                                        <label style="float: right;" for="">City<sup class="sup">*</sup> </label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control" name="" id="" style="width: 300px; display: inline-block;">
                                            <option value="">Perth</option>
                                            <option value="">Dhaka</option>
                                            <option value="">Khulna</option>
                                        </select>
                                        <a href="" class="business_directory_edit">Edit</a>
                                    </div>
                                </div>
                                <div class="business-manage mt-5 row">
                                    <div class="col-md-3">
                                        <label style="float: right;" for="">SUburbs<sup class="sup">*</sup> </label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control" name="" id="" style="width: 300px; display: inline-block;">
                                            <option value="">New York</option>
                                            <option value="">Dhaka</option>
                                            <option value="">Khulna</option>
                                        </select>
                                        <a href="" class="business_directory_edit">Edit</a>
                                    </div>
                                </div>
                                <div class="business-manage mt-5 row">
                                    <div class="col-md-3">
                                        <label style="float: right;" for="">Mobile: </label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="tel" class="form-control" name="" id="" style="width: 300px; display: inline-block;" placeholder="Phone: 123-324-3453">
                                    </div>
                                </div>
                                <div class="business-manage mt-5 row">
                                    <div class="col-md-3">
                                        <label style="float: right;" for="">Landline: </label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="" id="" style="width: 300px; display: inline-block;" placeholder="Landline Number">
                                    </div>
                                </div>
                                <div class="business-manage mt-5 row">
                                    <div class="col-md-3">
                                        <label style="float: right;" for="">WEb Site: </label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="" id="" style="width: 300px; display: inline-block;" placeholder="www.google.com">
                                    </div>
                                </div>
                                <div class="business-manage mt-5 row">
                                    <div class="col-md-3">
                                        <label style="float: right;" for="">Description: </label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea name="" class="form-control" style="width: 500px; display: inline-block;" id="" cols="10" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="business-manage mt-5 row">
                                    <div class="col-md-3">
                                        <label style="float: right;" for="">Payment Method: </label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="" id="" style="width: 500px; display: inline-block;" placeholder="Payment Methods">
                                    </div>
                                </div>
                                <div class="business-manage mt-5 row">
                                    <div class="col-md-3">
                                        <label style="float: right;" for="">Address: </label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="" id="" style="width: 500px; display: inline-block;" placeholder="Address">
                                    </div>
                                </div>
                                <div class="business-manage mt-5 row">
                                    <div class="col-md-3">
                                        <label style="float: right;" for="">Tags: </label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="" id="" style="width: 500px; display: inline-block;" placeholder="Tags">
                                    </div>
                                </div>

                                <div class="card card-custom example example-compact">
                                    <div class="card-body">
                                        <table class="table table-separate table-head-custom table-checkable business_management_table">
                                            <thead>
                                                <tr>
                                                    <th>Period</th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($fees as $row)
                                                <tr>
                                                    <td>{{$row->page_title}}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">{{$gs->website_currency}}</span>
                                                            </div>
                                                            <input type="text" class="form-control listing_fees_price" data-id="{{$row->id}}" aria-label="Text input with checkbox" value="{{$row->price}}" style="width:30px;" />
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="input-group" style="float: right; width: 145px;">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">{{$gs->website_currency}}</span>
                                            </div>
                                            <input type="text" class="form-control listing_fees_price" data-id="" aria-label="Text input with checkbox" value="{{App\Models\LisitngFees::get()->sum('price')}}.00" style="width:30px;" />
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-lg-9 ml-lg-auto">
                                                <button type="submit" class="btn btn-primary font-weight-bold mr-2">save</button>
                                                <button type="reset" class="btn btn-light-primary font-weight-bold">Cancel</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!--end::Form-->
                                </div>


                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12">

                </div>



            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>


@endsection