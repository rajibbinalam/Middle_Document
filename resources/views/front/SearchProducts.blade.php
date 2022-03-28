<!-- Shokal Start -->

@extends('layout.front.master')
@section('content')
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            <div id="sidebar" class="span33">
                <a href="" style="color: white; text-decoration: none; background-color:transparent;">
                    <div class="well well-small" style="background-color: #2D93CA; text-align: center;color: white;">
                        Connect with us</div>
                </a>
                <img style="height:100px;width: 300px;" src="{{asset('assets/frontend')}}/themes/images/connect.jpg">
                <br><br>
                <ul id="sideManu" class="nav nav-tabs nav-stacked">
                    <li class="subMenu"><a>Browse Our Categories</a>
                        @foreach($categories as $row)
                        <ul>
                            <li><a href="{{route('front.category',$row['id'])}}"><i class="icon-chevron-right"></i><strong>{{$row->cat_name}}</strong></a></li>

                        </ul>
                        @endforeach

                    </li>

                </ul>

                <br />
                <div class="well well-small">
                    Select a Region:

                </div>

                <br />

                <!-- <ul id="sideManu" class="nav nav-tabs nav-stacked">
                    <li class="subMenu"><a>Select a Region</a>
                        @foreach($cities as $row)
                        <ul>
                            <li><a href="products.html"><i
                                        class="icon-chevron-right"></i><strong>{{$row->city_name}}</strong></a></li>

                        </ul>
                        @endforeach

                    </li>

                </ul> -->
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


                                @foreach( $galleryChank as $key => $value)
                                <div class="item @if($key == 1) active @endif">
                                    <ul class="thumbnails">
                                        @foreach($value as $row)
                                        <li class="span3">

                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="product_details.html"><img src="{{asset('assets/images/backend_images/gallery/'.$row['gallery_slider_image'])}}" alt=""></a>

                                            </div>
                                        </li>

                                        @endforeach

                                    </ul>
                                </div>
                                @endforeach

                            </div>
                            <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
                            <a class="right carousel-control" href="#featured" data-slide="next">›</a>
                        </div>
                    </div>
                </div>
                <a href="" class="btn btn-primary form-control" style="height: 32px !important">
                    <p>Featured Ads</p>
                </a>

                <br>
                <ul class="thumbnails">
                    @foreach($adds as $add)
                    <li class="spanp3">
                        <div class="thumbnail">
                            <a href="#"><img src="{{asset('images/'.$add->main_image)}}" alt="" /></a>

                            <div class="caption">
                                <h5><a href="" style="color: #008fe3; text-decoration: none; background-color: transparent;">{{$add['title']}}</a></h5>
                                <a href="" class="btn btn-primary">Buy Now <i class="icon-chevron-right"></i></a>
                                <h5 style="text-align: center !important;"> {{$gs->website_currency}}.{{$add['price']}}</h5>
                                <p><strong>Listed</strong></p>
                                <p style="margin-left: 5px;"></p>
                            </div>
                        </div>
                    </li>
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
                    <a href="" class="btn btn-success form-control">Please Login</a>
                    <div class="row-fluid">
                        <div id="featured" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <ul class="thumbnails">
                                        <li class="span3">

                                            <form method="post" action="{{route('user.login')}}">
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
                                                        <button type="submit" class="btn btn-primary" style="width:100px; margin-left: 40px;">Sign in</button>

                                                    </div>
                                                </div>
                                                <a href="#" class="form-control">Forget password?</a>
                                            </form>


                                        </li>

                                    </ul>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="well well-small">
                    <a href="" class="btn btn-primary form-control" style="margin-left: 40px;">Trusted By</a>
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
@endsection

<!-- Shokal Ending -->