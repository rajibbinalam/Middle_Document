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
                            <div class="container">


                                <!-- <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-4"></div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 text-center">Link Upload</div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 text-center">File Upload</div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 text-center">Date uploaded</div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 text-center">Paid Until</div>
                                </div> -->
                            </div>

                        </div>

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




                                @foreach($page['banner'] as $row)




                                <tr>

                                    <td>{{$loop->index+1}} </td>
                                    <td><a href="{{$row->banner_1_link}}">{{$row->banner_1_link}}</a></td>

                                    <td><img src="{{asset('assets/images/backend_images/banner/'.$row['banner_1_image'])}}" height="100px" width="150px" alt="Banner Image"></td>

                                    <td>{{$row->banner_1_upload}}</td>
                                    <td> {{$row->banner_1_expired}}</td>

                                    <td><a href="javascript:void(0)" data-toggle="modal" data-target="#editModal{{$row->id}}">Banner Edit</a></td>



                                </tr>
                                @include('admin.modal.category_page.banner_edit')
                                @endforeach


                                <!-- //edit modal strnatcasecmp -->

                                <!-- edit modal end -->


                            </tbody>
                        </table>

                        <div class="row mt-20 mb-20">
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



                        <!--begin::Form-->
                        <!-- <form class="form" method="post" action="{{route('admin.banner.page.insert',$page->id)}}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                             

                                <input type="hidden" class="form-control" name="page_id" value="{{$page->id}}" />


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
                                        <input type="text" class="form-control" name="banner_1_upload"
                                            id="kt_datepicker_1" readonly="readonly" value="" />
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3">

                                        <input type="text" class="form-control" name="banner_1_expired"
                                            id="kt_datepicker_1" readonly="readonly" value="" />
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
                                        <input type="text" class="form-control" name="banner_2_upload"
                                            id="kt_datepicker_1" readonly="readonly" value="" />
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3">

                                        <input type="text" class="form-control" name="banner_2_expired"
                                            id="kt_datepicker_1" readonly="readonly" value="" />
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
                                        <input type="text" class="form-control" name="banner_3_upload"
                                            id="kt_datepicker_1" readonly="readonly" value="" />
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3">

                                        <input type="text" class="form-control" name="banner_3_expired"
                                            id="kt_datepicker_1" readonly="readonly" value="" />
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
                                        <input type="text" class="form-control" name="banner_4_upload"
                                            id="kt_datepicker_1" readonly="readonly" value="" />
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3">

                                        <input type="text" class="form-control" name="banner_4_expired"
                                            id="kt_datepicker_1" readonly="readonly" value="" />
                                    </div>
                                </div>









                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-9 ml-lg-auto">
                                        <button type="submit"
                                            class="btn btn-primary font-weight-bold mr-2">save</button>
                                        <button type="reset"
                                            class="btn btn-light-primary font-weight-bold">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form> -->
                        <!--end::Form-->
                    </div>
                </div>
                <!--end::Card-->
                <div class="col-lg-12">
                    <div class="card card-custom example example-compact">
                        <div class="card-header">
                            <h3 class="card-title">Worm Slider</h3>
                            <div class="container">


                                <!-- <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-4"></div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 text-center">Link Upload</div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 text-center">File Upload</div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 text-center">Date uploaded</div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 text-center">Paid Until</div>
                                </div> -->
                            </div>

                        </div>
                        <!--begin::Form-->
                        <form class="form" method="post" action="{{route('admin.worm.page.insert',$page->id)}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <!--begin: Code-->

                                <input type="hidden" class="form-control" name="page_id" value="{{$page->id}}" />


                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-2     col-sm-12"> Banner
                                        1</label>
                                    <div class="col-lg-3 col-md-3 col-sm-4">
                                        <input type="link" class="form-control" name="worm_1_link" value="" />
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <input type="file" class="form-control" name="worm_1_image" value="" />

                                    </div>


                                    <div class="col-lg-2 col-md-2 col-sm-3">
                                        <input type="date" class="form-control" name="worm_1_upload" />
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3">

                                        <input type="date" class="form-control" name="worm_1_expired" />
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
                        </form>


                        <table class="table table-separate table-head-custom table-checkable">
                            <thead>
                                <tr>
                                    <th>ID</th>

                                    <th>Banner</th>
                                    <th>Date Uploaded</th>
                                    <th>Paid Until</th>


                                    <th>Action</th>



                                </tr>
                            </thead>
                            <tbody>




                                @foreach($page['slider'] as $rowslider)




                                <tr>

                                    <td>{{$loop->index+1}} </td>


                                    <td><img src="{{asset('assets/images/backend_images/worm/'.$rowslider['worm_1_image'])}}" height="100px" width="150px" alt="Banner Image"></td>

                                    <td>{{$rowslider->worm_1_upload}}</td>
                                    <td> {{$rowslider->worm_1_expired}}</td>

                                    <td><a href="javascript:void(0)" data-toggle="modal" data-target="#editModalslider{{$rowslider->id}}" class="btn btn-success">Slider Edit</a>
                                        <a href="javascript:void(0)" class="confirmDelete btn btn-danger " record="slider" recordid="{{ $rowslider->id }}">Slider delete</a>
                                    </td>
                                    </td>



                                </tr>
                                @include('admin.modal.category_page.slider_edit')
                                @endforeach


                                <!-- //edit modal strnatcasecmp -->

                                <!-- edit modal end -->


                            </tbody>
                        </table>


                        <div class="row mt-20 mb-20">
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

                        <!--end::Form-->
                    </div>
                </div>

                <div class="col-lg-12">
                    <!--begin::Card-->


                    <div class="card card-custom example example-compact">
                        <div class="card-header">
                            <h3 class="card-title">Gallery</h3>
                            <div class="container">


                                <!-- <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-4"></div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 text-center">Link Upload</div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 text-center">File Upload</div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 text-center">Date uploaded</div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 text-center">Paid Until</div>
                                </div> -->
                            </div>

                        </div>
                        <!--begin::Form-->
                        <form class="form" method="post" action="{{route('admin.gallery.page.insert',$page->id)}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <!--begin: Code-->

                                <input type="hidden" class="form-control" name="page_id" value="{{$page->id}}" />




                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <input type="file" class="form-control" name="gallery_slider_image" value="" multiple />

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
                        </form>
                        <!--end::Form-->
                    </div>
                </div>

            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>


@endsection