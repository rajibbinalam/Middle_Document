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

                @include('error.message')
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add Page
                </button> -->
                <!--end::Actions-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->

            <!--end::Toolbar-->
        </div>
    </div>

    <!-- //add modal -->


    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="card card-custom gutter-b">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">{{$table}}
            </div>
            <div class="card-toolbar">

                <label for="" class="sort-data-form">Sort</label>
                <select name="" style="width: 150px;" id="">
                    <option value="">Latest</option>
                    <option value="">Listing</option>
                </select>
                <label for="" class="sort-data-form">Sort</label>
                <select name="" style="width: 150px;" id="">
                    <option value="">Latest</option>
                    <option value="">Listing</option>
                </select>
                <button class="sort-go-btn">Go</button>
            </div>
        </div>
        <div class="card-body">
        <div class="container mt-10">
            <div class="card-title">
                <form>
               

                    <div class="form-row">
                        <div class="form-group col-md-3">

                            <input type="date" class="form-control" name="to"
                                />
                        </div>

                        <div class="form-group col-md-3">
                            <input type="date" class="form-control" name="from"
                                />
                        </div>
                    </div>

                </form>

            </div>
</div>
           
            <!--begin: Datatable-->
            <table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">
                <thead>
                    <tr>
                        <th>Listing ID</th>
                        <th>Thumb</th>
                        <th>Description</th>
                        <th>price</th>
                        <th>Ads on</th>
                        <th>Manage</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($ads as $row)
                    @php
      $user = App\Models\User::find($row->user_id);
                    $adTime = strtotime($row->created_at);

                    $difference = time() - $adTime;
                    $minute = round($difference / 60) ;
                    $time = round($difference / 3600) ;
                    $day = round($difference / 86400) ;


                    $month = round($difference / 2592000);
                    $year = round($day / 360);

                    @endphp

                    <tr>

                        <td>{{$row->post_id}}</td>
                        <td><img src="{{asset('images/'.$row->main_image)}}" style="width:200px;height:100px"></td>

                        <td>
                            <p>{{$row->title}}</p>
                            <p><i class="fa fa-user" style="font-size: 12px;color: #185eb5;margin-right: 8px;"></i>{{$row->user->username}}</p>
                            <p><i class="fa fa-map-marker" style="font-size: 12px;color: #185eb5;margin-right: 8px;"></i>{{$row->city->city_name}}</p>
                        </td>
                        <td>{{$gs->website_currency}} &nbsp;{{$row->price}}</td>
                        <td>
                        {{ $row->created_at->format('M') }}
                                    {{ $row->created_at->format('d') }},{{ $row->created_at->format('Y') }}
                                    <br>
                                    
                            @if($minute < 60) {{$minute}} minutes @elseif($time < 24) {{$time}} hours @elseif($day < 30) {{ $day }} days @elseif($month < 12) {{$month}} months @else {{$year}} year @endif</td>

                        <td>
                            <a href="{{route('admin.user.user_adds.view',$row->id)}}"><i class="fa fa-eye"></i></a>
                            <a href="javascript:void(0)" class="confirmDelete " record="userads" recordid="{{ $row->id }}"><i class="fa fa-trash"></i></a>


                            <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalLong{{$row->id}}"><i class="fas fa-envelope"></i></a>


                        </td>



                    </tr>




                    <!-- //edit modal strnatcasecmp -->

                    <!-- edit modal end -->
                    @endforeach

                </tbody>
            </table>
            <!--end: Datatable-->
        </div>
    </div>
    <!--end::Entry-->
</div>
@endsection