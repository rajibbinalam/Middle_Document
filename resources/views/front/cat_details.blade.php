@extends('layout.front.master')
@section('content')
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            <div id="sidebar" class="span3">
                <div class="well-small">
                    <h6>Listing ID: 97839473</h6>
                </div>
                <div class="card text-center">
                    <div class="card-header">
                        Seller Information
                        @php 

   $sellerinfo = App\Models\User::find($advertising->user_id)
                        @endphp
                    </div>
                    <div class="card-body">
                        <i class="icon-user" aria-hidden="true"></i>Name: {{ $sellerinfo->f_name}} {{ $sellerinfo->l_name}} <br>
                        <i class="icon-lock" aria-hidden="true"></i>Location: {{ $sellerinfo->address}} <br>
                        <i class="icon-calendar" aria-hidden="true"></i>Registered: 12/23/1222 <br>
                        <i class="icon-phone" aria-hidden="true"></i>Phone: {{ $sellerinfo->phone}} <br>
                    </div>
                    <div class="card-footer">
                        <a href="">View Seller Other Listing</a>
                    </div>
                </div>
                <div class="query">
                    <h6>sand an Query About >></h6>
                    <h3>{{ $sellerinfo->title}}</h3>
                    <form action="{{route('user.send.message')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">User name</label>
                            <input type="text" name="name" class="form-control" id="">
                            <input type="hidden" name="ad_id" class="form-control" value="{{$advertising->id}}">
                            <input type="hidden" name="user_id" class="form-control" value="{{$advertising->user_id}}">
                        </div>
                        <div class="form-group">
                            <label for="">User Email</label>
                            <input type="email" name="email" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Message</label>
                            <textarea name="message" id="" cols="10" rows="4" style="width: 200px; height: 90px;"></textarea>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1" style="display: inline;">Email a copy of this post</label>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 10px;">Sand</button>
                    </form>
                </div>
            </div>
            <!-- Sidebar end=============================================== -->
            <div class="spana9">
                <div class="product">
                    <h2>{{ $sellerinfo->title}}</h2>
                    <i class="icon-star-o" aria-hidden="true"></i> 5 Reviews <br>
                </div>
                <div class="row">
                    <div id="gallery" class="span5">
                    <!-- @php
                                $i = 1;
                            @endphp
                        <div class="mySlides">
                            <img src="{{asset('images/'.$advertising['main_image'])}}" class="big-image" id="img{{ $i }}">
                        </div> -->
                       
                        <div class="mySlides">
                            <img   src="{{asset('images/'.$advertising['main_image'])}}" class="big-image">
                        </div>
                        @php
                                $i = 1;
                            @endphp
                        @foreach ($advertising->gallery as $image)
                        <div class="mySlides">
                            <img  src="{{asset('images/gallery/'.$image['galleryImage'])}}"  class="big-image{{$i}}">
                        </div>
                        @php
                                    $i++;
                                @endphp
                       
                            @endforeach
                        
                       
                        
                        <div class="pre-nxt-btn">
                            <!-- <a class="prev" onclick="plusSlides(-1)">❮</a> -->
                            <!-- <a class="next" onclick="plusSlides(1)">❯</a> -->
                        </div>


                       

                        <div class="row">
                       
                   
                            <div class="column">
                                <img  class="demo cursor" src="{{asset('images/'.$advertising['main_image'])}}" width="50px" height="45px" onclick="currentSlide(100)" alt="The Woods">
                            </div>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($advertising->gallery as $image)
                            <div class="column">
                                <img  class="demo{{$i}} cursor" src="{{asset('images/gallery/'.$image['galleryImage'])}}" width="50px" height="45px" onclick="currentSlide({{$i}})" alt="Cinque Terre">
                            </div>
                            @php
                                    $i++;
                                @endphp
                            @endforeach
                           
                        </div>

                    </div>
                    <div class="row">
                        <div class="span4">
                            <div class="social-btn">
                                <i class="icon-facebook"></i>
                                <i class="icon-external-link"></i>
                                <i class="icon-twitter-sign"></i>
                                <i class="icon-pinterest"></i>
                                <i class="icon-google-plus"></i>
                            </div>
                            <!-- 
                            Regular space: &nbsp;
                            Two spaces gap: &ensp;
                            Four spaces gap: &emsp; 
                            -->
                            <div class="product-info">
                                <h6>Listed <span> &emsp;&emsp;&emsp;&emsp;&emsp; </span><strong>: {{$advertising['created_id']}} </strong></h6>
                                <h6>Phone <span> &emsp;&emsp;&emsp;&emsp;&emsp; </span><strong>: {{$advertising['phone']}} </strong></h6>
                                <h6>For sale by <span> &emsp;&emsp;&ensp;&nbsp; </span><strong>: {{$advertising['0']}} </strong></h6>
                                <h6>Make <span> &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;</span><strong>: {{$advertising['main_image']}} </strong></h6>
                                <h6>Model <span> &emsp;&emsp;&emsp;&emsp;&emsp; </span><strong>: {{$advertising['0']}} </strong></h6>
                                <h6>Body Style <span> &emsp;&emsp;&ensp;&nbsp; </span><strong>:{{$advertising['body']}}  </strong></h6>
                                <h6>Year <span> &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp; </span><strong>: {{$advertising['year']}} </strong></h6>
                                <h6>Millege <span> &emsp;&emsp;&emsp;&emsp;&ensp; </span><strong>: {{$advertising['mileage']}} KM </strong></h6>
                                <h6>Transmission <span> &emsp;&ensp; </span><strong>: {{$advertising['transmissions']}} </strong></h6>
                                <h6>Fuel <span> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; </span><strong>: Petrol </strong></h6>
                                <h6>Doors <span> &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp; </span><strong>: {{$advertising['door']}} </strong></h6>
                                <h6>Color <span> &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;</span><strong>: {{$advertising['color']}} </strong></h6>
                                <h6>Condition <span> &emsp;&emsp;&emsp;&ensp; </span><strong>: {{$advertising['condition']}} </strong></h6>
                                <h6>AirConditioner <span> &emsp;&nbsp; </span><strong>: {{$advertising['airconditioning']}} </strong></h6>
                                <h6>Registered <span> &emsp;&emsp;&emsp;&nbsp; </span><strong>: {{$advertising['registered']}} </strong></h6>
                                <h6>Registered Until <span> &emsp; </span><strong>: {{$advertising['registered_experiy']}} </strong></h6>
                                <h6>Suburb <span> &emsp;&emsp;&emsp;&emsp;&emsp; </span><strong>: Carring vie </strong></h6>
                                <h6>City <span> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp; </span><strong>: Dhaka </strong></h6>
                                <h6>Address <span> &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp; </span><strong>:{{$advertising['transmissions']}} </strong></h6>
                                <h6>Mapn Location <span> &emsp;&ensp;&nbsp; </span><strong>: Map </strong></h6>
                            </div>
                        </div>

                    </div>
                    <!-- <div class="span6">
                        <h3>Blue Casual Polo T-Shirt </h3>
                        <small>- Brand Name</small>
                        <hr class="soft" />
                        <small>100 items in stock</small>
                        <form class="form-horizontal qtyFrm">
                            <div class="control-group">
                                <h4>Rs.1000</h4>
                                <select class="span2 pull-left">
                                    <option>Small</option>
                                    <option>Medium</option>
                                    <option>Large</option>
                                </select>
                                <input type="number" class="span1" placeholder="Qty." />
                                <button type="submit" class="btn btn-large btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i></button>
                            </div>
                    </div> -->
                    </form>

                    <hr class="soft clr" />
                    <p class="span6">
                    {{$advertising['description']}}

                    </p>

                </div>
                <div class="row">
                    <h4>Releted Products</h4>
                    <hr>
                    <div class="all-releted-products">
                        <ul>
                            <li class="releted-all-product">
                                <img src="{{asset('assets/frontend/themes/images/products/6.jpg')}}" height="80" width="100" alt="">
                                <h6><a href="#">BMW car for Instalment</a></h6>
                                <h6>$ 43567</h6>
                            </li>
                            <li class="releted-all-product">
                                <img src="{{asset('assets/frontend/themes/images/products/6.jpg')}}" height="80" width="100" alt="">
                                <h6><a href="#">BMW car for Instalment</a></h6>
                                <h6>$ 43567</h6>
                            </li>
                            <li class="releted-all-product">
                                <img src="{{asset('assets/frontend/themes/images/products/6.jpg')}}" height="80" width="100" alt="">
                                <h6><a href="#">BMW car for Instalment</a></h6>
                                <h6>$ 43567</h6>
                            </li>
                            <li class="releted-all-product">
                                <img src="{{asset('assets/frontend/themes/images/products/6.jpg')}}" height="80" width="100" alt="">
                                <h6><a href="#">BMW car for Instalment</a></h6>
                                <h6>$ 43567</h6>
                            </li>
                            <li class="releted-all-product">
                                <img src="{{asset('assets/frontend/themes/images/products/6.jpg')}}" height="80" width="100" alt="">
                                <h6><a href="#">BMW car for Instalment</a></h6>
                                <h6>$ 43567</h6>
                            </li>
                            <li class="releted-all-product">
                                <img src="{{asset('assets/frontend/themes/images/products/6.jpg')}}" height="80" width="100" alt="">
                                <h6><a href="#">BMW car for Instalment</a></h6>
                                <h6>$ 43567</h6>
                            </li>
                            
                        </ul>
                    </div>


                </div>
            </div>


        </div>
    </div>
</div>

@endsection
@push('cat_details_JS')
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>
@endpush