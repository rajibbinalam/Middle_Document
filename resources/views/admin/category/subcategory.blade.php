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
                    <span class="text-muted font-weight-bold mr-4">{{ $title }}</span>


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

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ $add_title }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('admin.subcategory.insert') }}">
                            @csrf
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Category Name</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input type="text" class="form-control" name="subcat_name" value="" />

                                    <input type="hidden" class="form-control" name="cat_id" value="{{ $category->id }}" />
                                </div>
                            </div>
                            Seo Details
                            <hr>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Seo Title</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input type="text" class="form-control" name="title" value="" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Seo Description</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <textarea type="text" class="form-control" name="description" value=""></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Seo Keywords</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <textarea type="text" class="form-control" name="kewywords[]" value=""></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                    data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary font-weight-bold">Save changes</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="card card-custom gutter-b">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">{{ $table }}
                </div>
                <div class="card-toolbar">
                    <!--begin::Dropdown-->

                    <!--end::Dropdown-->
                    <!--begin::Button-->
                    <a href="" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#exampleModal">
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <circle fill="#000000" cx="9" cy="15" r="6" />
                                    <path
                                        d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                        fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>Add New Su Category</a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <!--begin: Datatable-->
                <div class="card">
                    <div class="card-header">
                        {{ $category->cat_name }}
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($subcategory as $row)
                            @php
                                $js = json_decode($row->kewywords);
                                
                            @endphp


                            <li class="list-group-item">{{ $loop->index + 1 }} -{{ $row->subcat_name }} - &nbsp;&nbsp;<a
                                    href="javascript:void(0)" data-toggle="modal"
                                    data-target="#editModal{{ $row->id }}">Edit</a>
                                /<a href="javascript:void(0)" class="confirmDelete " record="subcategory"
                                    recordid="{{ $row->id }}">Delete</a></li>
                            @include('admin.modal.sub_category.edit')
                        @endforeach
                    </ul>
                </div>
                <!--end: Datatable-->
            </div>
        </div>
        <!--end::Entry-->
    </div>
@endsection
