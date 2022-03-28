@extends('layout.front.master')
@section('content')
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            <div id="sidebar" class="span33">

                <ul id="sideManu" class="nav nav-tabs nav-stacked">
                    <li class="subMenu"><a>Browse Our Categories</a>
                        @foreach($categories as $row)
                        <ul>
                            <li><a href=""><i class="icon-chevron-right"></i><strong>{{$row->cat_name}}</strong></a></li>

                        </ul>
                        @endforeach

                    </li>

                </ul>
                <br />
                <ul id="sideManu" class="nav nav-tabs nav-stacked">
                    <li class="subMenu"><a>Select a Region</a>
                        @foreach($categories as $row)
                        <ul>
                            <li><a href=""><i class="icon-chevron-right"></i><strong>{{$row->cat_name}}</strong></a></li>

                        </ul>
                        @endforeach

                    </li>

                </ul>
                <br>
                <div class="thumbnail">
                    <img style="height:300px" src="{{asset('assets/images/backend_images/banner/listing/'.$banner6->banner_1_image)}}" title="banner" alt="banner">

                </div>
                &nbsp; &nbsp;
                <div class="thumbnail">
                    <img style="height:300px" src="{{asset('assets/images/backend_images/banner/listing/'.$banner5->banner_1_image)}}" title="banner" alt="banner">

                </div>
            </div>
            <!-- Sidebar end=============================================== -->
            <div class="span9">
                <div class="well well-small">

                    <div class="row-fluid">
                        <div id="featured" class="carousel slide">
                            <div class="carousel-inner">

                                @php

                                $feesid =App\Models\LisitngFees::where('id',2)->get();

                                @endphp
                                @foreach($feesid as $fees)
                                @php
                                $purchaseid =App\Models\Listingorder::where('page_id',$fees->id)->get()->toArray();

                                $galleryChank = array_chunk($purchaseid ,5);


                                @endphp
                                @foreach( $galleryChank as $key => $value)
                                <div class="item  @if($key == 1) active @endif">
                                    <ul class="thumbnails">
                                        @foreach($value as $page)

                                        @php

                                        $row = App\Models\Listing::find($page['listing_id']);
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

                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href=""><img src="{{asset('images/listing/'.$row['logo'])}}" alt=""></a>

                                            </div>
                                        </li>
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

                <hr class="soft" />
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



                <div class="well well-small">

                    @php

                    $listingFesspage =App\Models\LisitngFees::where('id',1)->get();


                    @endphp

                    @foreach($listingFesspage as $fees)
                    @php
                    $purchaseid =App\Models\Listingorder::where('page_id',$fees->id);

                    if (isset($_GET['sort']) && !empty($_GET['sort'])) {
                    if ($_GET['sort']=="latest_listing") {
                    $purchaseid->orderBy('id','DESC');

                    }else if ($_GET['sort']=="old_listing") {
                    $purchaseid->orderBy('id','ASC');

                    }
                    }else{

                    }

                    $purchaseid = $purchaseid->simplePaginate(20);
                    @endphp


                    @foreach($purchaseid as $page)
                    @php

                    $row = App\Models\Listing::find($page->listing_id);
                    @endphp
                    @if(!empty($row->id))
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

                    @if($day < $fees->duration)
                        <div class="item">
                            <img class="img" src="{{asset('images/listing/'.$row['logo'])}}" alt="" height="200px" width="220px">

                            <div class="para" style="display: inline-block; margin-left: 15px;">
                                <h6 style="color: #007db9">{{$row['business_name']}}</h6>
                                <p><i class="icon-user"></i>{{$city['city_name']}}</p>
                                <p><i class="icon-map-marker"></i>{{$suburb['suburbs_name']}}</p>
                                <p><i class="icon-sitemap"></i><span style="color:red;">{{$row['address']}}</p>
                            </div>
                            <div class="view" style="display: inline-block; float: right;">
                                <a href="{{route('front.business.lisitng.details',$row['id'])}}" class="btn btn-primary">view </a>
                                <form action="{{route('addToCart')}}" id="AddToCart" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$row['id']}}" id="">
                                    <input type="hidden" name="business_name" value="{{$row['business_name']}}" id="">
                                    <input type="hidden" name="logo" value="{{$row['logo']}}" id="">
                                    <input type="hidden" name="industry" value="{{$row['industry']}}" id="">
                                    <input type="hidden" name="city_id" value="{{$row['city_id']}}" id="">
                                    <input type="hidden" name="suburbs_id" value="{{$row['suburbs_id']}}" id="">
                                    <input type="hidden" name="mobile" value="{{$row['mobile']}}" id="">
                                    <input type="hidden" name="landline" value="{{$row['landline']}}" id="">
                                    <input type="hidden" name="website" value="{{$row['website']}}" id="">
                                    <input type="hidden" name="description" value="{{$row['description']}}" id="">
                                    <input type="hidden" name="payment_method" value="{{$row['payment_method']}}" id="">
                                    <input type="hidden" name="address" value="{{$row['address']}}" id="">
                                    <input type="hidden" name="total" value="{{$row['total']}}" id="">
                                    <button type="submit" class="btn btn-primary">Buy Now</button>
                                </form>
                                
                            </div>


                        </div>

                        @else
                        @endif
                        @else

                        @endif
                        @endforeach
                        @endforeach















                </div>



                {!! $purchaseid->appends(Request::all())->links() !!}
                <br>
                &nbsp;

                <ul class="thumbnails12">


                    <div class="thumbnail">
                        <a href="product_details.html"><img src="{{asset('assets/images/backend_images/banner/listing/'.$banner4->banner_1_image)}}" alt="" style="height: 200px;
    width: 800px;" /></a>

                    </div>


                </ul>
            </div>
            <div class="span99">

                <a href="{{route('user.post_ad')}}" class="btn btn-success">Post an Ad</a>
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
                                                        <button type="submit" class="btn btn-success" style="width:100px;">Sign in</button>

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
                <div class="well well-small">
                    <a href="" class="btn btn-success form-control">Trusted Pay</a>
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


                            <img style="height:300px" src="{{asset('assets/images/backend_images/banner/listing/'.$banner1->banner_1_image)}}" title="banner" alt="banner">



                        </ul>

                    </div>
                </div>
                <div class="well well-small" style="height:300px">

                    <div class="row-fluid">

                        <ul class="thumbnails">
                            <img style="height:300px" src="{{asset('assets/images/backend_images/banner/listing/'.$banner2->banner_1_image)}}" title="banner" alt="banner">

                        </ul>

                    </div>
                </div>

                <div class="well well-small" style="height:300px">

                    <div class="row-fluid">

                        <ul class="thumbnails">
                            <img style="height:300px" src="{{asset('assets/images/backend_images/banner/listing/'.$banner3->banner_1_image)}}" title="banner" alt="banner">

                        </ul>

                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection