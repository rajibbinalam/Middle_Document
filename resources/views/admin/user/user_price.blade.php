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


                <!-- <a href="{{route('admin.page.index')}}" class="btn btn-primary">
                    Add Page
</a> -->
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
                    <h5 class="modal-title" id="exampleModalLabel">{{$add_title}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.site.fees.insert')}}">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Page N ame</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <select name="page_id" id="page_id" class="form-control">
                                    <option value="">Select</option>
                                    @foreach($page as $row)
                                    <option value="{{$row->id}}">{{$row->title}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Period</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <input type="text" class="form-control" name="period" value="" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Price</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <input type="text" class="form-control" name="price" value="" />
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
                <h3 class="card-label">{{$table}}
            </div>
            <div class="card-toolbar">
                <!--begin::Dropdown-->

                <!--end::Dropdown-->
                <!--begin::Button-->
                <!-- <a href="" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#exampleModal">
                    <span class="svg-icon svg-icon-md"> -->
                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <circle fill="#000000" cx="9" cy="15" r="6" />
                                <path
                                    d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                    fill="#000000" opacity="0.3" />
                            </g>
                        </svg> -->
                <!--end::Svg Icon-->
                <!-- </span>Add New Fees</a> -->
                <!--end::Button-->
            </div>
        </div>

        <!-- model add -->
        <form method="post" action="{{route('admin.user.price.insert')}}">
            @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleSelect1">Select User
                    <span class="text-danger">*</span></label>
                <select class="form-control"  name="user_id" id="email">
                    <option disable value="0">Select User</option>
                    @foreach(App\Models\User::get() as $item)
                    <option value="{{ $item->id }}">{{ $item->email }}</option>
                    @endforeach
                </select>

                <div class="col-lg-12">
                <label class="col-lg-6 col-form-label">User details</label>
                <div class="pl-4" id="user_detail">Select User First</div>
            </div>
            </div>
            
            <!--begin: Datatable-->
            <div class="row">
                <div class="col-xl-5">

                <label class="containeruser">Default
  <input type="radio" checked="checked" name="radio">
  <span class="checkmark"></span>
</label>
                   
                    <table class="table table-separate table-head-custom table-checkable">
                        <thead>
                            <tr>

                                <th>Period</th>
                                <th>Page</th>
                                <th>Price</th>




                            </tr>
                        </thead>
                        <tbody>
                            @foreach($fees as $row)
                            <?php
                $page =\App\Models\Page::find($row->page_id);
                ?>
                <input type="hidden" name="page_id[]" value="{{$row->id}}" style="width:30px;">
                            <tr>




                                <td><input type="text" value="{{$row->period}}" style="width:30px;">days</td>

                                <td>{{$page->title}}</td>
                                <td>

                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                            <span class="input-group-text">{{$gs->website_currency}}</span>
                                        </div>
                                        <input type="text" class="form-control"
                                            aria-label="Text input with checkbox" name="price[]" value="{{$row->price}}"
                                            style="width:30px;" />
                                    </div>



                                </td>





                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;


                <div class="col-xl-5">

                <label class="containeruser">
  <input type="radio" name="radio">User Special
  <span class="checkmark"></span>
</label>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;             
<table class="table table-separate table-head-custom table-checkable">
                        <thead>
                            <tr>

                                <th>Period</th>
                                <th>Page</th>
                                <th>Price</th>




                            </tr>
                        </thead>
                        <tbody>
                            @foreach($fees as $row)
                            <?php
                $page =\App\Models\Page::find($row->page_id);
                ?>
                            <tr>




                                <td><input type="text" value="{{$row->period}}" style="width:30px;">days</td>

                                <td>{{$page->title}}</td>
                                <td>

                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                            <span class="input-group-text">{{$gs->website_currency}}</span>
                                        </div>
                                        <input type="text" class="form-control" 
                                            aria-label="Text input with checkbox" name="user_price[]" 
                                            style="width:30px;" />
                                    </div>



                                </td>





                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
            <input type="submit" value="save">
            <!--end: Datatable-->
        </div>
</form>
    </div>
    <!--end::Entry-->
</div>
<script>
    
    </script>
@endsection
