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
                <span class="text-muted font-weight-bold mr-4">Role Update</span>


                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add Page
                </button> -->
                <!--end::Actions-->
            </div>
            <div class="d-flex align-items-center">
            </div>
            <!--end::Toolbar-->
        </div>
    </div>

    <!-- //add modal -->
    <!-- @include('admin.modal.role.create') -->


    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="card card-custom gutter-b">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Update</h3>
            </div>
        </div>
        <div class="card-body row">
            <div class="col-lg-2 col-md-2"></div>
            <form action="{{route('admin.role.update',$data->id)}}" method="post" class="col-lg-6 col-md-6">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Roll Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="{{$data->name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea name="description" id="" cols="75" rows="4">Static</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('admin.role.index')}}" class="btn btn-secondary">Back</a>
            </form>
        </div>


    </div>
    <!--end::Entry-->
</div>
@endsection