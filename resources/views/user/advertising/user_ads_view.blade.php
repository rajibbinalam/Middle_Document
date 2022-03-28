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
                    <li >View User Advertising</li>
                </ul>



                  <div class="row">
                    <div id="gallery" class="span3">
                        <img src="{{asset('images/'.$advertising['main_image'])}}" style="width:300px; height: 300px;"/>
                    </div>

                  <div class="span6">
                    <h3>{{$advertising->price}}</h3> 
                    <h3>{{$advertising->title}}</h3>   
                    <h4>{{$advertising->mileage}}</h4> 
                    <h4>{{$advertising->year}}</h4>  
                     
                  </div>

                  <hr class="soft clr"/>
                  <p class="span6">{{$advertising->description}}</p>

                  <a class="btn btn-small pull-right" href="#detail">More Details</a>
                  <br class="clr"/>

                  <hr class="soft"/>

                  @php 
                   $city = \App\Models\City::find($advertising->city_id);
                   $suburb = \App\Models\Suburbs::find($advertising->suburbs_id);
                   $category = \App\Models\Category::find($advertising->cat_id);
                   $sub_category = \App\Models\SubCategory::find($advertising->subcat_id);
                  @endphp




                  <div class="span9">
         
                    <div id="myTabContent" class="tab-content">
                      <div class="tab-pane fade active in" id="home">
                        <h4>Product Information</h4>
                        <table class="table table-bordered">
                          <tbody>
                            <tr class="techSpecRow"><th colspan="2">Product Details</th></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Name: </td><td class="techSpecTD2">{{$advertising ->name}}</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Category: </td><td class="techSpecTD2">{{$category ->cat_name}}</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">SubCategory: </td><td class="techSpecTD2">{{$sub_category->subcat_name}}</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">City: </td><td class="techSpecTD2">{{$city ->city_name}}</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Suburb:</td><td class="techSpecTD2">{{$suburb->suburbs_name}}</td></tr>

                            <tr class="techSpecRow"><td class="techSpecTD1">Airconditioning :</td><td class="techSpecTD2">{{$advertising->airconditioning}}</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Doors :</td><td class="techSpecTD2">{{$advertising->door}}</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Transmissions :</td><td class="techSpecTD2">{{$advertising->transmissions}}</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Color :</td><td class="techSpecTD2">{{$advertising->color}}</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Body Style:</td><td class="techSpecTD2">{{$advertising->body}}</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Condition :</td><td class="techSpecTD2">{{$advertising->condition}}</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Seller Type :</td><td class="techSpecTD2">{{$advertising->seller_type}}</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Registered  :</td><td class="techSpecTD2">{{$advertising->registered}}</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Registration Experiy :</td><td class="techSpecTD2">{{$advertising->registered_experiy}}</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Email :</td><td class="techSpecTD2">{{$advertising->email}}</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Phone :</td><td class="techSpecTD2">{{$advertising->  phone}}</td></tr>
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