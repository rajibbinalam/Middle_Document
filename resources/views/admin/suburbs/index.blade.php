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
    @include('admin.modal.suburbs.create')
    
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="card card-custom gutter-b">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">{{$table}}
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
                    </span>Add New Category</a>
                <!--end::Button-->
            </div>
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>City Name</th>
                        <th>Suburbs Name</th>
                        <th>Seo Title</th>
                        <th>Seo Description</th>
                        <th>Seo Keywords</th>
                        <th>Status</th>
                        <th>Action</th>



                    </tr>
                </thead>
                <tbody>
                    @foreach($suburbs as $row)
                    @php
                    $cityname = \App\Models\City::find($row->city_id);
                    @endphp
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$cityname->city_name}}</td>
                        <td>{{$row->suburbs_name}}</td>
                        <td>{{$row->title}}</td>
                        <td>{{$row->description}}</td>
                        <td> @php
                            $js = json_decode($row->kewywords);
                            @endphp
                            @foreach($js as $item) {{$item}} @endforeach</td>
                        <td><input type="checkbox" {{$row->status=='1'? 'checked':''}} id="suburbsStatus"
                                data-id="{{$row->id}}" data-toggle="toggle" data-style="android" data-onstyle="info"
                                data-size="mini">

                        </td>
                        <td>
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#editModal{{$row->id}}"><i
                                    class="fa fa-edit"></i></a>
                            <a href="javascript:void(0)" class="confirmDelete " record="suburbs"
                                recordid="{{ $row->id }}"><i class="fa fa-trash"></i></a></td>



                    </tr>
                    @include('admin.modal.suburbs.edit')

                   
                    @endforeach

                </tbody>
            </table>
            <!--end: Datatable-->
        </div>
    </div>
    <!--end::Entry-->
</div>
@endsection
