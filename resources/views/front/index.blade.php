@extends('layout.front.master')

<?php

use App\Models\Category;
use App\Models\City;

$categories = Category::categories();
$cities = City::cities();
$advertising = City::advertising();


//   echo "<pre>";print_r($advertising);die();
?>
@section('content')
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            <div id="sidebar" class="span33">
                <a href="" style="color: white; text-decoration: none; background-color:transparent;"><div class="well well-small" style="background-color: #2D93CA; text-align: center;color: white;padding: 2px 0 2px 0px;  font-weight: 800;">
                    Connect with us</div></a>
                <img style="height:100px;width: 300px;" src="{{asset('assets/frontend')}}/themes/images/connect.jpg">
                <br><br>
                <ul id="sideManu" class="nav nav-tabs nav-stacked">
                    <li class="subMenu">
                        <a style="background-color: #2d93ca !important;">Browse Our Categories</a>
                        @foreach($categories as $row)
                        <ul>
                            <li>
                                <button class="dropdown-btn">
                                    <i class="icon-chevron-right"></i><strong>{{$row['cat_name']}}</strong>
                                </button>
                                <div class="dropdown-container">
                                   

                                </div>
                            </li>
                        </ul>
                        @endforeach

                    </li>

                </ul>

                <br />
                <div class="well well-small">
                    Select a Region:
                    @foreach($cities as $row)
                    @php 

           
                    @endphp
                        <ul>
                            <li>
                                <button class="dropdown-btn">
                                
                                </button>
                               
                            </li>
                        </ul>
                        @endforeach

                </div>

                <br />

              
                <br>
                <div class="thumbnail">
                    <img style="height:300px" src="{{asset('assets/images/backend_images/banner/'.$banner->banner_4_image)}}" title="banner" alt="banner">

                </div>
            </div>
            <!-- Sidebar end=============================================== -->
            <div class="span9">
                <div class="well well-small">

                    <div class="row-fluid">
                        <div id="featured" class="carousel slide">
                            <div class="carousel-inner">

                                @php
                                $pageid = App\Models\Page::where('id',4)->first();
                                $feesid =App\Models\SiteFees::where('page_id',$pageid->id)->get();

                                @endphp
                                @foreach($feesid as $fees)
                                @php
                                $purchaseid =App\Models\Addfees::where('page_id',$fees->id)->get()->toArray();

                                $galleryChank = array_chunk($purchaseid ,5);


                                @endphp
                                @foreach( $galleryChank as $key => $value)

                                <div class="item  @if($key == 2) active @endif ">
                                    <ul class="thumbnails">
                                        @foreach($value as $page)

                                        @php

                                        $row = App\Models\Advertising::find($page['ads_id']);
                                        @endphp

                                        @if(!empty($row->id))
                                        @php

                                        $adTime = strtotime($row->created_at);




                                        $difference = time() - $adTime;
                                        $minute = round($difference / 60) ;
                                        $time = round($difference / 3600) ;
                                        $day = round($difference / 86400) ;



                                        $month = round($difference / 2592000);
                                        $year = round($day / 360);



                                        @endphp




                                        @if($day < $fees->period)

                                            <li class="span3">

                                                <div class="thumbnail">
                                                   
                                                    <a href="product_details.html"><img src="{{asset('images/'.$row['main_image'])}}" alt=""></a>

                                                </div>


                                                <h5>{{$row['title']}}</h5>


                                            </li>
                                            @else
                                            @endif
                                            @else
                                            @endif

                                            @endforeach

                                    </ul>
                                </div>
                                @endforeach
                                @endforeach

                            </div>
                            <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
                            <a class="right carousel-control" href="#featured" data-slide="next">›</a>
                        </div>
                    </div>
                </div>
                <a href="" class="btn btn-primary form-control">
                    <p style="margin: 0;">Featured Ads</p>
                </a>

                <br>
                <ul class="thumbnails">
                    @php
                    $pageid = App\Models\Page::where('id',3)->first();
                    $feesid = App\Models\Sitefees::where('page_id',$pageid->id)->get();

                    @endphp
                    @foreach($feesid as $fees)
                    @php
                    $purchaseid =App\Models\Addfees::where('page_id',$fees->id)->get();


                    @endphp

                    @foreach($purchaseid as $page)
                    @php

                    $row = App\Models\Advertising::find($page->ads_id);
                    @endphp

                    @if(!empty($row->id))
                    @php

                    $adTime = strtotime($row->created_at);


                    $difference = time() - $adTime;
                    $minute = round($difference / 60) ;
                    $time = round($difference / 3600) ;
                    $day = round($difference / 86400) ;


                    $month = round($difference / 2592000);
                    $year = round($day / 360);



                    @endphp


                    @if($day < $fees->period)

                        <li class="spanp3">
                            <div class="thumbnail">
                                <a href="product_details.html"><img src="{{asset('images/'.$row->main_image)}}" alt="" /></a>
                                <div class="caption">
                                    @if($row->listing_type == 'Auction')

                                    <h5><a href="" style="color: #008fe3; text-decoration: none; background-color: transparent;">{{$row['title']}}</a></h5>
                                    <a href="{{route('user.auction',$row['id'])}}" class="btn btn-primary">Auction <i class="icon-chevron-right"></i></a>
                                    <h5 style="text-align: center !important;"> {{$gs->website_currency}}.{{$row['price']}}</h5>
                                    <p><strong>Listed:</strong></p>
                                    <p style="margin-left: 5px;">@if($minute < 60) {{$minute}} minutes @elseif($time < 24) {{$time}} hours @elseif($day < 30) {{ $day }} days @elseif($month < 12) {{$month}} months @else {{$year}} year @endif</p>
                                    @else
                                    <h5><a href="" style="color: #008fe3; text-decoration: none; background-color: transparent;">{{$row['title']}}</a></h5>
                                    <a href="{{route('user.buy',$row['id'])}}" class="btn btn-primary">Buy Now <i class="icon-chevron-right"></i></a>
                                    <h5 style="text-align: center !important;"> {{$gs->website_currency}}.{{$row['price']}}</h5>
                                    <p><strong>Listed:</strong></p>
                                    <p style="margin-left: 5px;">@if($minute < 60) {{$minute}} minutes @elseif($time < 24) {{$time}} hours @elseif($day < 30) {{ $day }} days @elseif($month < 12) {{$month}} months @else {{$year}} year @endif</p>
                                    @endif
                                </div>
                            </div>
                        </li>
                         @else
                         @endif
                          @else
                           @endif
                            @endforeach
                        @endforeach
                </ul>

                <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">&raquo;</a>
                </div>


                <ul class="thumbnails12">


                    <div class="thumbnail">
                        <img style="width:750px;height:200px;" src="{{asset('assets/images/backend_images/banner/'.$banner->banner_3_image)}}" title="banner" alt="banner">

                    </div>


                </ul>
            </div>
            <div class="span99">

                <a href="{{route('user.post_ad')}}" class="btn btn-danger" style="margin-left: 25px;">Post an Ad</a>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;


                <div class="well well-small" style="height:300px">
                    <a href="" class="btn btn-success form-control" style="width: 100%;">Please
                        Login</a>
                    <div class="row-fluid">
                        <div id="featured" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <ul class="thumbnails">
                                        <li class="span3">

                                            <form method="post" action="{{route('user.login')}}" class="indx-login" style="">
                                                @csrf
                                                <div class="control-group">
                                                    <label class="control-label" for="inputEmail1">Email:</label>
                                                    <div class="controls">
                                                        <input type="text" id="inputEmail1" placeholder="Email" name="email">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="inputPassword1">Password</label>
                                                    <div class="controls">
                                                        <input type="password" id="inputPassword1" placeholder="Password" name="password">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <button type="submit" class="btn btn-primary" style="width:100px; margin-left: 40px;">Sign
                                                            in</button>

                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <a href="{{route('user.forgot-password')}}" class="form-control">Forget
                                                            password? Click here</a>
                                                            <a href="{{route('user.register')}}" class="form-control">Didn't Account? Click here</a>
                                                    </div>
                                                </div>
                                            </form>


                                        </li>

                                    </ul>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="well well-small text-center">
                    <a href="" class="btn btn-primary form-control" style="width: 80%;">Trusted By</a>
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="row-fluid">
                        <div id="featured" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <ul class="thumbnails">
                                        <img src="{{asset('assets/frontend')}}/themes/images/payment_methods.png" title="Payment Methods" alt="Payments Methods">

                                    </ul>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="well well-small" style="height:300px">

                    <div class="row-fluid">

                        <ul class="thumbnails">


                            <img style="height:300px" src="{{asset('assets/images/backend_images/banner/'.$banner->banner_1_image)}}" title="banner" alt="banner">



                        </ul>

                    </div>
                </div>
                <div class="well well-small" style="height:300px">

                    <div class="row-fluid">

                        <ul class="thumbnails">
                            <img style="height:300px" src="{{asset('assets/images/backend_images/banner/'.$banner->banner_2_image)}}" title="banner" alt="banner">

                        </ul>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>

<script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
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
@endsection