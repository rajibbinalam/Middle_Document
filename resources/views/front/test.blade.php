@extends('layout.front.master')
@section('content')
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            <div id="sidebar" class="span33">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Category select</label>
                    <select class="form-control" style="width: 200px;" id="exampleFormControlSelect1">
                        <option>Category</option>
                        <option>Category</option>
                        <option>Category</option>
                        <option>Category</option>
                        <option>Category</option>
                    </select>
                </div>
                <!-- <div class="well well-small"></div>
                <div class="well well-small"></div> -->
                <ul id="sideManu" class="nav nav-tabs nav-stacked">
                    <li class="subMenu"><a>Browse Our Categories</a>
                        @foreach($categories as $row)
                        <ul>
                            <li><a href="products.html"><i class="icon-chevron-right"></i><strong>{{$row->cat_name}}</strong></a></li>

                        </ul>
                        @endforeach

                    </li>

                </ul>
                <br />
                <ul id="sideManu" class="nav nav-tabs nav-stacked">
                    <li class="subMenu"><a>Select a Region</a>
                        @foreach($cities as $row)
                        <ul>
                            <li><a href="products.html"><i class="icon-chevron-right"></i><strong>{{$row->city_name}}</strong></a></li>

                        </ul>
                        @endforeach

                    </li>

                </ul>
                <br>
                <div class="price col-md-2">
                    <form action="" method="post">
                        <strong>Price: </strong>
                        <div class="form-group price-search text-center">

                            <label for="">$</label>
                            <input type="text" class="form-control" name="" id="">
                            <label for="">to $</label>
                            <input type="text" class="form-control" name="" id="">
                            <button>GO</button>
                        </div>

                    </form>

                </div>
                <div class="sale-by">
                    <strong>Sale By: </strong>
                    <ul>
                        <li>Ower</li>
                        <li>Delar</li>
                        <li>Agency</li>
                    </ul>
                </div>
                <br>
                <div class="made-by">
                    <strong>Made By: </strong>
                    <ul>
                        <li>Samsung</li>
                        <li>Hp</li>
                        <li>Del</li>
                    </ul>
                    <a href="">More...</a>
                </div>
                <br>
                <div class="body-st6yle-search">
                    <strong>Body Style: </strong>
                    <ul>
                        <li>Samsung</li>
                        <li>Hp</li>
                        <li>Del</li>
                    </ul>
                    <a href="">More...</a>
                </div>
                <br>
                <div class="year-search">
                    <strong>Year: </strong><br>
                    <select class="form-control" id="exampleFormControlSelect1" style="width: 91px;">
                        <option>--Year--</option>
                        <option>2020</option>
                        <option>2020</option>
                        <option>2020</option>
                        <option>2020</option>
                    </select>
                </div>
                <br>
                <div class="mileage-search">
                    <strong>Mileage: </strong>
                    <br>
                    <select class="form-control" id="exampleFormControlSelect1" style="width: 91px;">
                        <option>--Min--</option>
                        <option>2020</option>
                        <option>2020</option>
                        <option>2020</option>
                        <option>2020</option>
                    </select>
                    <span>to</span>
                    <select class="form-control" id="exampleFormControlSelect1" style="width: 91px;">
                        <option>--Max--</option>
                        <option>2020</option>
                        <option>2020</option>
                        <option>2020</option>
                        <option>2020</option>
                    </select>
                    <span>Km</span>
                </div>
                <br>
                <div class="transmission-search">
                    <strong>Transmission: </strong>
                    <ul>
                        <li>Manual</li>
                        <li>Automatic</li>
                        <li>Semi-Automatic</li>
                    </ul>
                </div>
                <br>
                <div class="fuel-search">
                    <strong>Fuel: </strong>
                    <ul>
                        <li>Petrol</li>
                        <li>Dijel</li>
                        <li>CNG</li>
                    </ul>
                </div>
                <br>
                <div class="doors-search">
                    <strong>Doors: </strong>
                    <ul>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                    </ul>
                </div>
                <br>
                <div class="condition-search">
                    <strong>Condition: </strong>
                    <ul>
                        <li>New</li>
                        <li>Old</li>
                        <li>Used</li>
                    </ul>
                </div>
                <br>
                <div class="perth-search">
                    <strong>Perth </strong><br>
                    <select class="form-control" id="exampleFormControlSelect1" style="width: 91px;">
                        <option>--Perth--</option>
                        <option>2020</option>
                        <option>2020</option>
                        <option>2020</option>
                        <option>2020</option>
                    </select>
                    <h6>Caringbale(6)</h6>
                    <h6>Balga(12)</h6>
                    <h6>Extra(4)</h6>
                    <a href="">More...</a>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1" style="display: inline;">Only ad with pic</label>
                </div><br>
                <div class="key-search text-center">
                    <strong><a href="">Refine By Keyword </a></strong><br>
                    <input type="text" style=" width:160px" name="" id="" placeholder="Keyword..."><br>
                    <button>GO</button>
                </div>
                <!-- <div class="thumbnail">
                    <img style="height:300px" src="{{asset('assets/images/backend_images/banner/'.$banner->banner_4_image)}}" title="banner" alt="banner">

                </div> -->
            </div>
            <!-- Sidebar end=============================================== -->
            <div class="span9">


                <form class="form-horizontal" style="text-align:right">
                    <div class="control-group">
                        Sort By
                        <select>
                            <option>Priduct name A - Z</option>
                            <option>Priduct name Z - A</option>
                            <option>Priduct Stoke</option>
                            <option>Price Lowest first</option>
                        </select>
                    </div>
                </form>



                <h5 style="background: #3b5998; color: white; font-size: 16px; padding: 3px 0px 3px 13px;">Featured Vehical Ads </h5>

                <div class="well well-small">

                  
                    @foreach($feesid as $fees)
                    @php
                    $purchaseid =App\Models\Addfees::where('page_id',$fees->id)->simplePaginate(20);


                    @endphp

                    @foreach($purchaseid as $page)
                    @if(!empty($page->id))
                    @php

                    $row = App\Models\Advertising::find($page->ads_id);
                    @endphp




                    @php

                    $ticketTime = strtotime($row['created_at']);

                    $difference = time() - $ticketTime;
                    $minute = round($difference / 60) ;
                    $time = round($difference / 3600) ;
                    $day = round($difference / 86400);

                    $month = round($difference / 2592000);
                    $year = round($day / 360);



                    @endphp
                    @if($day < $fees->period)
                        <table class="table">
                            <tr class="mt-5">
                                <th>
                                    <img class="img" src="{{asset('images/'.$row['main_image'])}}" height="180px" width="180px">
                                </th>
                                <td>
                                    <div>
                                        <p>{{$row['title']}}</p>
                                    </div>
                                    <div style="margin-left: 80%;">${{$row['price']}}</div>
                                    <div><i class="fas fa-user fa-fw"></i>Quintion</div>

                                    <div><i class="fas fa-tachometer-alt fa-fw"></i><span style="color:red;">
                                            <h5>{{$row['title']}}</h5>
                                            <h4> {{$gs->website_currency}}.{{$row['price']}}</h4>

                                            @if($minute < 60) {{$minute}} minutes @elseif($time < 24) {{$time}} hours @elseif($day < 30) {{ $day }} days @elseif($month < 12) {{$month}} months @else {{$year}} year @endif </span>
                                    </div>
                                    <form method="post" action="{{route('front.watch')}}"> @csrf<button type="submit" style="margin: 0;">
                                            <div> <input type="hidden" name="ads_id" value="{{$row['id']}}"><i class="icon-star "></i>Watch this</div>
                                        </button></form>

                                </td>
                                <td>
                                    <p>
                                        <a href="{{route('front.categories.cateory.details',$row->id)}}"><button type="button" style="background-color:rgb(41, 156, 30);margin-top:100%;margin-left: 30%;"> view</button></a>
                                    </p>

                                </td>
                            </tr>
                        </table>
                        @else

                        @endif
                        @else
                        @endif
                        @endforeach
                        @endforeach

                        <!-- <table class="table">
    <tr class="mt-5">
    <th>
        <img class="img" src="{{asset('assets/frontend')}}/themes/images/products/1.jpg" height="180px" width="180px">
    </th>
    <td>
        <div>
        <p>2009 Mazda 3BL serise SP25 Sedan 4dr Activematic 5sp</p>
    </div>
        <div style="margin-left: 80%;">$50,0000</div>
        <div><i class="fas fa-user fa-fw"></i>Quintion</div>
        <div><i class="fas fa-map-marker-alt fa-fw"></i>Carrum Downs,VIC</div>
        <div><i class="fas fa-tachometer-alt fa-fw"></i><span style="color:red;">25min ago</span></div>
        <div><i class="far fa-star fa-fw"></i>Watch this</div>
        
    </td>
    <td>
        <p>
        <a href=""><button type="button" style="background-color:rgb(41, 156, 30);margin-top:100%;margin-left: 30%;"> view</button></a>
        </p>
    
    </td>
    </tr>
</table> -->


{!! $purchaseid->appends(Request::all())->links() !!}



                        <h5 style="background: #3b5998; color: white; font-size: 16px; padding: 3px 0px 3px 13px;">Vehicle category </h5>



                        @foreach($categoryAddvertisement as $row)
                        <table class="table">
                            <tr class="mt-5">
                                <th>
                                    <img class="img" src="{{asset('images/'.$row['main_image'])}}" height="180px" width="180px">
                                </th>
                                <td>
                                    <div>
                                        <p>{{$row['title']}}</p>
                                    </div>
                                    <div style="margin-left: 80%;">{{$gs->website_currency}}{{$row['price']}}</div>
                                    <div><i class="fas fa-map-marker-alt fa-fw"></i>{{$row['name']}}</div>
                                    <div><i class="fas fa-user fa-fw"></i>{{$row['year']}} &nbsp; {{$row['door']}} &nbsp; {{$row['mileage']}} &nbsp; {{$row['airconditioning']}}</div>

                                    <div><i class="fas fa-tachometer-alt fa-fw"></i><span style="color:red;">@php

                                            $ticketTime = strtotime($row['created_at']);

                                            $difference = time() - $ticketTime;
                                            $minute = round($difference / 60) ;
                                            $time = round($difference / 3600) ;
                                            $day = round($difference / 86400);

                                            $month = round($difference / 2592000);
                                            $year = round($day / 360);



                                            @endphp
                                            <h5>{{$row['title']}}</h5>
                                            <h4> {{$gs->website_currency}}.{{$row['price']}}</h4>

                                            @if($minute < 60) {{$minute}} minutes @elseif($time < 24) {{$time}} hours @elseif($day < 30) {{ $day }} days @elseif($month < 12) {{$month}} months @else {{$year}} year @endif </span>
                                    </div>
                                    <div><i class="far fa-star fa-fw"></i>Watch this</div>

                                </td>
                                <td>
                                    <p>
                                        <a href="{{route('front.categories.cateory.details',$row['id'])}}"><button type="button" style="background-color:rgb(41, 156, 30);margin-top:100%;margin-left: 30%;"> view</button></a>
                                    </p>

                                </td>
                            </tr>
                        </table>
                        @endforeach










                </div>

                </ul>


                <ul class="thumbnails12">


                    <div class="thumbnail">
                        <img style="width:750px;height:200px;" src="{{asset('assets/images/backend_images/banner/'.$banner->banner_3_image)}}" title="banner" alt="banner">

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
                <div class="well well-small text-center">
                    <a href="" class="btn btn-success form-control" style="width: 80%;">Trusted Pay</a>
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