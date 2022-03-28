@extends('layout.front.master')
@section('content')
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            @include('user.user_sidebar')
            <!-- Sidebar end=============================================== -->
            <div class="spana9">
                <ul class="breadcrumb" style="background-color: #1a4bbb;color:white">
                    <li><a href="{{url('/')}}" style="color:#26262600;">Home</a> /</li>
                    <li>{{$title}}</li>
                </ul>

                <form class="form-horizontal" style="text-align:right" action="" id="sortProducts" name="sortProducts">
                    <div class="control-group">
                        Sort By
                        <select name="sort" id="sort">
                            <option>Select Listing</option>
                            <option value="latest_listing" @if (isset($_GET['sort']) && $_GET['sort']=='latest_listing' ) selected @endif>Latest Listing</option>
                            <option value="old_listing" @if (isset($_GET['sort']) && $_GET['sort']=='old_listing' ) selected @endif>Oldest Listing</option>

                        </select>
                    </div>
                    <div class="well">



                        @foreach($advertising as $row)



                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 250px;">
                                        <img class="img" src="{{asset('images/'.$row['main_image'])}}" height="180px" width="100%">
                                    </th>
                                    <th scope="col">
                                        <p><strong>{{$row['title']}}</strong></p>
                                        <p>{{$row['color']}}</p>
                                        <p>{{$row['price']}}</p>
                                        <p>{{$row['condition']}}</p>
                                        <p>{{$row['seller_type']}}</p>
                                        <p><i class="fas fa-user fa-fw"></i></p>
                                        <p><i class="fas fa-map-marker-alt fa-fw"></i></p>
                                        <p><i class="fas fa-tachometer-alt fa-fw"></i><span style="color:red;"></span></p>
                                    </th>
                                    <th scope="col" style="width: 50px;">
                                        <div class="" style="position: relative;">
                                            <input class="dropdown" type="checkbox" id="dropdown{{$row->id}}" style="display: none;" name="dropdown" />
                                            <label class="for-dropdown" for="dropdown{{$row->id}}" style="width: 10px;">
                                                <i class="icon-cog geare-btn"></i> <i class="uil uil-arrow-down"></i>
                                            </label>
                                            <div class="section-dropdown" style="position: absolute;">
                                                <a href="{{route('user.advertising.view',$row->id)}}" class="dm">View Advertising <i class="uil uil-arrow-right"></i></a>
                                                <a href="{{route('user.advertising.edit',$row->id)}}" class="dm">Edit Advertising <i class="uil uil-arrow-right"></i></a>
                                                <a href="{{route('user.advertising.delete',$row->id)}}" class="dm">Delete Advertising <i class="uil uil-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                        </table>
                        <hr class="advertizing-hr">
                        @endforeach

                    </div>


            </div>

        </div>
    </div>
</div>






@endsection