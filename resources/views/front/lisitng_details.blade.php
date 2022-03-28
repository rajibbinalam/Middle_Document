@extends('layout.front.master')
@section('content')
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            <div id="sidebar" class="span33">
              
                <ul id="sideManu" class="nav nav-tabs nav-stacked">
                    <li class="subMenu"><a>Business Lisitng</a>
                        @foreach($categories as $row)
                        <ul>
                            <li><a href="products.html"><i
                                        class="icon-chevron-right"></i><strong>{{$row->cat_name}}</strong></a></li>

                        </ul>
                        @endforeach

                    </li>

                </ul>
                <br />
                <ul id="sideManu" class="nav nav-tabs nav-stacked">
                    <li class="subMenu"><a>Select a Region</a>
                        @foreach($categories as $row)
                        <ul>
                            <li><a href="products.html"><i
                                        class="icon-chevron-right"></i><strong>{{$row->cat_name}}</strong></a></li>

                        </ul>
                        @endforeach

                    </li>

                </ul>
                <br>
               
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
                                              <a href="product_details.html"><img
                                                      src="{{asset('images/listing/'.$row['logo'])}}"
                                                      alt=""></a>

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
               
        



<div class="well well-small">


<div class="card-body">
       
        <div class="icon-bar" style="float: right;">
            <img src="{{asset('assets/frontend')}}/themes/images/products/b1.jpg" height="200px" alt=""/>
            <img src="{{asset('assets/frontend')}}/themes/images/products/b1.jpg" height="120px" alt=""/>
            <img src="{{asset('assets/frontend')}}/themes/images/products/b1.jpg" height="120px" alt=""/>
            <img src="{{asset('assets/frontend')}}/themes/images/products/b1.jpg" height="120px" alt=""/>
        </div>

          <h3 class="card-title">{{$listing['business_name']}}</h3>

        <div class="container emp-profile">
            
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-img">
                            <img src="{{asset('images/listing/'.$listing['logo'])}}" height="120px" width="200px" alt=""/>
                        </div>
                    </div>
                </div>
                    
                    <div class="col-md-12" style="margin-top: 3%;">
                    @php 
                    $city = \App\Models\City::find($listing->city_id);
                    $suburb = \App\Models\Suburbs::find($listing->suburbs_id);

                    @endphp
                        
                         
                                    <p><b>Mobile</b> &nbsp;&nbsp;{{$listing['mobile']}}</p>
                                    <p><b>Landline</b>&nbsp;&nbsp;  {{$listing['landline']}}</p>
                                    <p><b>Website</b>&nbsp;&nbsp; {{$listing['website']}}</p>
                                    <p><b>Address</b>&nbsp;&nbsp; {{$listing['address']}}</p>
                                    <p><b>City</b>&nbsp;&nbsp; {{$city['city_name']}}</p>
                                    <p><b>Suburb</b> &nbsp;&nbsp;{{$suburb['suburbs_name']}}</p>
                                    <!-- <p>Opening Hours&nbsp; 8am-5pm</p>
                                    <p>Service Area&nbsp;&nbsp; Service space means a space outside the cargo area that is used for a galley,<br> and similar spaces and trunks to those spaces.</p> -->
                                    <p>Payment Method accepted :  {{$listing['payment_method']}}</p>
                           
                            <hr>
                            <div>
                                 <p style="margin-left: 5%;margin-right: 50%">{{$listing['description']}}</p>
        
                            </div>

                            <div id="map-container-google-1" >
                                <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                                    style="width:59%" ></iframe>
                            </div>
                        


                    </div>
                
                    
        </div>
        

    </div>


</div>



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

                                        <form  method="post" action="{{route('user.login')}}">
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
                                                        <input type="password" id="inputPassword1"
                                                            placeholder="Password" name="password">
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
                                        <img src="{{asset('assets/frontend')}}/themes/images/payment_methods.png"
                                            title="Payment Methods" alt="Payments Methods">

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
@endsection
