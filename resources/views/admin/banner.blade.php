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


                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-4"></div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 text-center">Link Upload</div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 text-center">File Upload</div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 text-center">Date uploaded</div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 text-center">Paid Until</div>
                                </div>
                            </div>

                        </div>
                        <!--begin::Form-->
                        <form class="form" method="post" action="{{route('admin.banner.insert')}}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <!--begin: Code-->




                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-2     col-sm-12">Home Page Banner
                                        1</label>
                                    <div class="col-lg-3 col-md-3 col-sm-4">
                                        <input type="link" class="form-control" name="home_page_banner_1_link"
                                            value="{{$gs->home_page_banner_1_link}}" />
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <input type="file" class="form-control" name="home_page_banner_1_image"
                                            value="{{$gs->home_page_banner_1_image}}" />

                                    </div>


                                    <div class="col-lg-2 col-md-2 col-sm-3">
                                        <input type="text" class="form-control" name="home_page_banner_1_upload"
                                            id="kt_datepicker_1" readonly="readonly"
                                            value="{{$gs->home_page_banner_1_upload}}" />
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3">

                                        <input type="text" class="form-control" name="home_page_banner_1_expired"
                                            id="kt_datepicker_1" readonly="readonly"
                                            value="{{$gs->home_page_banner_1_expired}}" />
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-2     col-sm-12">Home Page
                                        Banner2</label>
                                    <div class="col-lg-3 col-md-3 col-sm-4">
                                        <input type="text" class="form-control" name="home_page_banner_2_link"
                                            value="{{$gs->home_page_banner_2_link}}" />
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <input type="file" class="form-control" name="home_page_banner_2_image"
                                            value="{{$gs->home_page_banner_2_image}}" />
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3">
                                        <input type="text" class="form-control" name="home_page_banner_2_upload"
                                            id="kt_datepicker_1" readonly="readonly"
                                            value="{{$gs->home_page_banner_2_upload}}" />
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3">

                                        <input type="text" class="form-control" name="home_page_banner_2_expired"
                                            id="kt_datepicker_1" readonly="readonly"
                                            value="{{$gs->home_page_banner_2_expired}}" />
                                    </div>
                                </div>





                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-2     col-sm-12">Home Page
                                        Banner3</label>
                                    <div class="col-lg-3 col-md-3 col-sm-4">
                                        <input type="link" class="form-control" name="home_page_banner_3_link"
                                            value="{{$gs->home_page_banner_3_link}}" />
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <input type="file" class="form-control" name="home_page_banner_3_image"
                                            value="{{$gs->home_page_banner_3_image}}" />
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3">
                                        <input type="text" class="form-control" name="home_page_banner_3_upload"
                                            id="kt_datepicker_1" readonly="readonly"
                                            value="{{$gs->home_page_banner_3_upload}}" />
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3">

                                        <input type="text" class="form-control" name="home_page_banner_3_expired"
                                            id="kt_datepicker_1" readonly="readonly"
                                            value="{{$gs->home_page_banner_3_expired}}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-2     col-sm-12">Home Page
                                        Banner4</label>
                                    <div class="col-lg-3 col-md-3 col-sm-4">
                                        <input type="link" class="form-control" name="home_page_banner_4_link"
                                            value="{{$gs->home_page_banner_4_link}}" />
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <input type="file" class="form-control" name="home_page_banner_4_image"
                                            value="{{$gs->home_page_banner_4_image}}" />
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3">
                                        <input type="text" class="form-control" name="home_page_banner_4_upload"
                                            id="kt_datepicker_1" readonly="readonly"
                                            value="{{$gs->home_page_banner_4_upload}}" />
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3">

                                        <input type="text" class="form-control" name="home_page_banner_4_expired"
                                            id="kt_datepicker_1" readonly="readonly"
                                            value="{{$gs->home_page_banner_4_expired}}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-2     col-sm-12">Category Banner
                                        1</label>
                                    <div class="col-lg-3 col-md-3 col-sm-4">
                                        <input type="link" class="form-control" name="cateory_banner_1_link"
                                            value="{{$gs->cateory_banner_1_link}}" />
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <input type="file" class="form-control" name="cateory_banner_1_image"
                                            value="{{$gs->cateory_banner_1_image}}" />
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3">
                                        <input type="text" class="form-control" name="cateory_banner_1_upload"
                                            id="kt_datepicker_1" readonly="readonly"
                                            value="{{$gs->cateory_banner_1_upload}}" />
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3">

                                        <input type="text" class="form-control" name="cateory_banner_1_expired"
                                            id="kt_datepicker_1" readonly="readonly"
                                            value="{{$gs->cateory_banner_1_expired}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-2     col-sm-12">Category
                                        Banner2</label>
                                    <div class="col-lg-3 col-md-3 col-sm-4">
                                        <input type="link" class="form-control" name="cateory_banner_2_link"
                                            value="{{$gs->cateory_banner_2_link}}" />
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <input type="file" class="form-control" name="cateory_banner_2_image"
                                            value="{{$gs->cateory_banner_2_image}}" />
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3">
                                        <input type="text" class="form-control" name="cateory_banner_2_upload"
                                            id="kt_datepicker_1" readonly="readonly"
                                            value="{{$gs->cateory_banner_2_upload}}" />
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3">

                                        <input type="text" class="form-control" name="cateory_banner_2_expired"
                                            id="kt_datepicker_1" readonly="readonly"
                                            value="{{$gs->cateory_banner_2_expired}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-2     col-sm-12">Category Banner
                                        3</label>
                                    <div class="col-lg-3 col-md-3 col-sm-4">
                                        <input type="link" class="form-control" name="cateory_banner_3_link"
                                            value="{{$gs->cateory_banner_3_link}}" />
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <input type="file" class="form-control" name="cateory_banner_3_image"
                                            value="{{$gs->cateory_banner_3_image}}" />
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3">
                                        <input type="text" class="form-control" name="cateory_banner_3_upload"
                                            id="kt_datepicker_1" readonly="readonly"
                                            value="{{$gs->cateory_banner_3_upload}}" />
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3">

                                        <input type="text" class="form-control" name="cateory_banner_3_expired"
                                            id="kt_datepicker_1" readonly="readonly"
                                            value="{{$gs->cateory_banner_3_expired}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-2     col-sm-12">Category Banner
                                        4</label>
                                    <div class="col-lg-3 col-md-3 col-sm-4">
                                        <input type="link" class="form-control" name="cateory_banner_4_link"
                                            value="{{$gs->cateory_banner_4_link}}" />
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <input type="file" class="form-control" name="cateory_banner_4_image"
                                            value="{{$gs->cateory_banner_4_image}}" />
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3">
                                        <input type="text" class="form-control" name="cateory_banner_4_upload"
                                            id="kt_datepicker_1" readonly="readonly"
                                            value="{{$gs->cateory_banner_4_upload}}" />
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3">

                                        <input type="text" class="form-control" name="cateory_banner_4_expired"
                                            id="kt_datepicker_1" readonly="readonly"
                                            value="{{$gs->cateory_banner_4_expired}}" />
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
                        </form>
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
