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
                    <li>View Listing</li>
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
                </form>
                <div class="well">


                    @foreach($listing as $row)


                    @php
                    $city = \App\Models\City::find($row->city_id);
                    $suburb = \App\Models\Suburbs::find($row->suburbs_id);
                    @endphp

                    <table class="table">
                        <tr class="mt-5">
                            <th>
                                <img class="img" src="{{asset('images/listing/'.$row['logo'])}}" height="180px" width="180px">
                            </th>
                            <td>

                                <div class="active-listing">
                                    <h4><a href="#">{{$row['business_name']}}</a></h4>
                                    <p>One owner Lady Driver matza</p>
                                </div>
                                <div class="span3">

                                    <p><i class="icon-user"></i>{{$city['city_name']}}</p>
                                    <p><i class="icon-map-marker"></i>{{$city['city_name']}}</p>
                                </div>
                                <div class="span3">
                                    <h5>Price $5608.00</h5>
                                </div>

                                <!-- <div><i class="fas fa-map-marker-alt fa-fw"></i>{{$suburb['suburbs_name']}}</div> -->
                                <!-- <div><i class="fas fa-tachometer-alt fa-fw"></i><span style="color:red;">{{$row['address']}}</span></div> -->


                            </td>
                            <td>



                                <div class="sec-center" style=" margin-top: 150px;margin-left: -100px;">
                                    <input class="dropdown" type="checkbox" id="dropdown{{$row->id}}" style="display: none;" name="dropdown" />
                                    <label class="for-dropdown" for="dropdown{{$row->id}}" style="position: absolute;margin-top: -47px;left: -43px;"><i class="icon-cog"></i> <i class="uil uil-arrow-down"></i></label>
                                    <div class="section-dropdown" style="width: 169px;top: 0px;">
                                        <a href="{{ route('user.listing.view',$row->id) }}" class="dm">View Lisitng <i class="uil uil-arrow-right"></i></a>
                                        <a href="{{route('user.listing.edit',$row->id)}}" class="dm">Edit Lisitng <i class="uil uil-arrow-right"></i></a>
                                        <a href="{{route('user.listing.delete',$row->id)}}" class="dm">Delete Lisitng <i class="uil uil-arrow-right"></i></a>
                                    </div>
                                </div>


                            </td>
                        </tr>
                    </table>
                    @endforeach

                </div>


            </div>

        </div>
    </div>
</div>



@endsection