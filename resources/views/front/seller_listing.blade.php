@extends('layout.front.master')

<?php

use App\Models\Category;

$categories = Category::categories();

// echo "<pre>";print_r($categories);die();
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
                        

                    </li>

                </ul>

                <br />
                <div class="well well-small">
                    Select a Region:

                </div>

                <br />

                <br>
               
            </div>
            <!-- Sidebar end=============================================== -->
            <div class="span9">
               
                <a href="" class="btn btn-primary form-control">
                    <p style="margin: 0;">Seller Listing</p>
                </a>

                <br>
                <ul class="thumbnails">
                 

                    @foreach($user_listing as $row)
                    

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
                        @endforeach
                </ul>

                <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">&raquo;</a>
                </div>


              
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
                                                            password?</a>
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