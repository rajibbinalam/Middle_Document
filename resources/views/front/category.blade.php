@extends('layout.front.master')
@section('content')
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            @include('front.category_sidebar')
            <!-- Sidebar end=============================================== -->
            <div class="span9">


                <form class="form-horizontal" style="text-align:right" id="sortProducts" name="sortProducts">
                    <input type="hidden" name="url" class="charge form-control cb" id="url" value="{{$url}}" />
                    <div class="control-group">
                        Sort By
                        <select name="sort" id="sort">
                            <option>Select Listing</option>
                            <option value="latest_listing" @if (isset($_GET['sort']) && $_GET['sort']=='latest_listing'
                                ) selected @endif>Latest Listing</option>
                            <option value="old_listing" @if (isset($_GET['sort']) && $_GET['sort']=='old_listing' )
                                selected @endif>Oldest Listing</option>

                        </select>
                    </div>
                </form>



                <h5 style="background: #3b5998; color: white; font-size: 16px; padding: 3px 0px 3px 13px;">Featured
                    Vehical Ads </h5>

                <div class="well well-small filter_products">
                    @foreach($categoryAddvertisement as $row)

                    @foreach($row['adsid'] as $adverid)
                    @php
                    $listingFesspage =App\Models\SiteFees::where('id','3')->orWhere('id','4')->where('id',$adverid->page_id)->first();
              
                   
                    @endphp
                    @endforeach
                  
                    

                    @php
                    $city = \App\Models\City::find($row->city_id);
                    $suburb = \App\Models\Suburbs::find($row->suburbs_id);

                    @endphp


                    @php

                    $adTime = strtotime($row->created_at);




                    $difference = time() - $adTime;

                    $minute = round($difference / 60) ;
                    $time = round($difference / 3600) ;
                    $day = round($difference / 86400) ;






                    @endphp
                    @if($day < $listingFesspage['period'])

                    <table class="table">
                        <tr class="mt-5">
                            <th>
                                @if(!empty($row['main_image']))
                                <img class="img" src="{{asset('images/'.$row['main_image'])}}" height="180px"
                                    width="180px">
                                @else
                                <img class="img" src="{{asset('images/blanck.png')}}" height="180px" width="180px">
                                @endif
                            </th>
                            <td>
                                <div>
                                    <p>{{$row['title']}}</p>
                                    <p>{{$row['id']}}</p>

                                    <p>{{$row['cat_id']}}</p>
                                </div>
                                <div style="margin-left: 80%;">${{$row['price']}}</div>
                                <div><i class="fas fa-user fa-fw"></i>Quintion</div>

                                <div><i class="fas fa-tachometer-alt fa-fw"></i><span style="color:red;">
                                        <h5>{{$row['title']}}</h5>
                                        <h4> {{$gs->website_currency}}.{{$row['price']}}</h4>

                                    </span>
                                </div>
                                <form method="post" action="{{route('front.watch')}}"> @csrf<button type="submit"
                                        style="margin: 0;">
                                        <div> <input type="hidden" name="ads_id" value="{{$row['id']}}"><i
                                                class="icon-star "></i>Watch this
                                        </div>
                                    </button></form>

                            </td>
                            <td>
                                <p>
                                    <a href="{{route('front.categories.cateory.details',$row['id'])}}"><button
                                            type="button"
                                            style="background-color:rgb(41, 156, 30);margin-top:100%;margin-left: 30%;">
                                            view</button></a>
                                </p>

                            </td>
                        </tr>
                    </table>
                    @else
                    @endif
                    
                    @endforeach






                </div>



                <h5 style="background: #3b5998; color: white; font-size: 16px; padding: 3px 0px 3px 13px;">Featured
                    Vehical Ads </h5>

                <div class="well well-small filter_products">
                  @include('front.ajax_category')






                </div>


                </ul>


                <ul class="thumbnails12">


                    <div class="thumbnail">
                    @if(!empty($banner4['banner_1_expired'] < $nowdate))
                            <img style="height:300px"
                                src="{{asset('assets/images/backend_images/banner/'.$banner4['banner_1_image'])}}"
                                title="banner" alt="banner">
                                @else
                                <img style="height:300px"
                                src=""
                                title="banner" alt="banner">
                                @endif

                    </div>


                </ul>
            </div>
            <div class="span99">

                <a href="{{route('user.post_ad')}}" class="btn btn-success">Post an Ad</a>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;


                <div class="well well-small" style="height:300px">
                    <a href="" class="btn btn-success form-control indx-login">Please Login</a>
                    <div class="row-fluid">
                        <div id="featured" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <ul class="thumbnails">
                                        <li class="span3">

                                            <form method="post" action="{{route('user.login')}}" class="indx-login">
                                                @csrf
                                                <div class="control-group">
                                                    <label class="control-label" for="inputEmail1">Email:</label>
                                                    <div class="controls">
                                                        <input type="text" id="inputEmail1" placeholder="Email"
                                                            name="email">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="inputPassword1">Password</label>
                                                    <div class="controls">
                                                        <input type="password" id="inputPassword1"
                                                            placeholder="Password" name="password">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <button type="submit" class="btn btn-success"
                                                            style="width:100px;">Sign in</button>

                                                    </div>
                                                </div>
                                                <a href="forgetpass.html" class="form-control">Forget password?</a>
                                            </form>


                                        </li>

                                    </ul>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="well well-small text-center">
                    <a href="" class="btn btn-success form-control" style="width: 80%;">Trusted Pay</a>
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="row-fluid">
                        <div id="featured" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <ul class="thumbnails">
                                        <img src="{{asset('assets/frontend')}}/themes/images/payment_methods.png"
                                            title="Payment Methods" alt="Payments Methods">

                                    </ul>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="well well-small" style="height:300px">

                    <div class="row-fluid">

                        <ul class="thumbnails">
                            @if(!empty($banner1['banner_1_expired'] < $nowdate))
                            <img style="height:300px"
                                src="{{asset('assets/images/backend_images/banner/'.$banner1['banner_1_image'])}}"
                                title="banner" alt="banner">
                                @else
                                <img style="height:300px"
                                src=""
                                title="banner" alt="banner">
                                @endif
                        </ul>
                    </div>
                </div>
                <div class="well well-small" style="height:300px">
                    <div class="row-fluid">
                        <ul class="thumbnails">
                        @if(!empty($banner2['banner_1_expired ']< $nowdate))
                            <img style="height:300px"
                                src="{{asset('assets/images/backend_images/banner/'.$banner2['banner_1_image'])}}"
                                title="banner" alt="banner">
                                @else
                                <img style="height:300px"
                                src=""
                                title="banner" alt="banner">
                                @endif
                        </ul>
                    </div>
                </div>
                <div class="well well-small" style="height:300px">
                    <div class="row-fluid">
                        <ul class="thumbnails">
                        @if(!empty($banner3['banner_1_expired'] < $nowdate))
                            <img style="height:300px"
                                src="{{asset('assets/images/backend_images/banner/'.$banner3['banner_1_image'])}}"
                                title="banner" alt="banner">
                                @else
                                <img style="height:300px"
                                src=""
                                title="banner" alt="banner">
                                @endif
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
@push('home_category_dropdown')
<script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function () {
            this.classList.toggle("catActive");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }

</script>
@endpush
