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
                    <li >View Active Business Listing</li>
                </ul>

                  <div class="row">
                    <div id="gallery" class="span3">
                        <img src="{{asset('images/listing/'.$listing['logo'])}}" style="width:300px; height: 300px;"/>
                    </div>

                  <div class="span6">
                    <h3>{{$listing->business_name}}</h3>
                    <h4>{{$listing->industry}}</h4> 
                     
                  </div>

                  <hr class="soft clr"/>
                  <p class="span6">{{$listing->description}}</p>

                  <a class="btn btn-small pull-right" href="#detail">More Details</a>
                  <br class="clr"/>

                  <hr class="soft"/>
                  @php 
                   $city = \App\Models\City::find($listing->city_id);
                   $suburb = \App\Models\Suburbs::find($listing->suburbs_id);
                  @endphp


                  <div class="span9">
         
                    <div id="myTabContent" class="tab-content">
                      <div class="tab-pane fade active in" id="home">
                        <h4>Product Information</h4>
                        <table class="table table-bordered">
                          <tbody>
                            <tr class="techSpecRow"><th colspan="2">Product Details</th></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">City: </td><td class="techSpecTD2">{{$city ->city_name}}</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Suburb:</td><td class="techSpecTD2">{{$suburb->suburbs_name}}</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Mobile :</td><td class="techSpecTD2">{{$listing->mobile}}</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Landline :</td><td class="techSpecTD2">{{$listing->landline}}</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Website:</td><td class="techSpecTD2">{{$listing->website}}</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Payment :</td><td class="techSpecTD2">{{$listing->payment_method}}</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Address:</td><td class="techSpecTD2">{{$listing->address}}</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Tags:</td><td class="techSpecTD2">{{$listing->tags}}</td></tr>
                          </tbody>
                        </table>
                        
                       
                      
                      </div>
                    </div>

                  </div>


                  
                </div> <!-- row end -->

					</div> <!-- well end -->



				</div> <!-- span9 end -->



				
			</div>
		</div>
	</div>

   




@endsection