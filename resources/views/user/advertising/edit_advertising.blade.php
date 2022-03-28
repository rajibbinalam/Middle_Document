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
                    <li >Registration</li>
                </ul>
                
                <div class="well">
                                     
                <form class="form-horizontal" method="post" action="{{route('user.advertising.update',$advertising->id)}}" enctype="multipart/form-data">
                        @csrf

                <div id="sidebar" class="spanar33">
					
					<ul id="sideManu" class="nav nav-tabs nav-stacked">

                    <div class="control-group col-md-6">
                            <label class="control-label" for="inputFname1">Category <sup>*</sup></label>
                            <div class="controls">
                            <select name="cat_id" id="cat_id">
                                    <option value="">Select Category</option>
                                    @foreach($category as $row)
                                    <option value="{{$row->id}}" @if($advertising->cat_id == $row->id) selected=" " ;@endif>{{$row->cat_name}}</option>
                                    @endforeach
                                 
                                </select>
                            </div>
                        </div>
					
                        <div class="control-group col-md-6">
                            <label class="control-label" for="inputFname1">Title <sup>*</sup></label>
                            <div class="controls">
                                <input type="text" id="inputFname12" name="title" value="{{$advertising->title}}">
                            </div>
                        </div>

				

                        <div class="control-group col-md-6">
                                    <label class="control-label" for="inputFname1">Doors <sup>*</sup></label>
                                    <div class="controls">
                                        <select name="door" id="door">
                                            <option value="">Select Doors</option>
                                            @foreach( $doors as $row)
                                            <option value="{{$row}}" @if($advertising->door == $row) selected=" " ;@endif>{{$row}}</option>
                                             @endforeach
                                        </select>
                                    </div>
                                </div>
						<div class="control-group">
                            <label class="control-label" for="input_email">Mileage <sup>*</sup></label>
                            <div class="controls">
                                <input type="text" id="input_email" name="mileage" placeholder="Mileage" value="{{$advertising->mileage}}">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input_email">Year <sup>*</sup></label>
                            <div class="controls">
                                <input type="text" id="input_email" name="year" placeholder="Year" value="{{$advertising->year}}">
                            </div>
                        </div>
  

                        <div class="control-group col-md-6">
                                    <label class="control-label" for="inputFname1">Transmissions <sup>*</sup></label>
                                    <div class="controls">
                                        <select name="transmissions" id="transmissions">
                                            <option value="">Select Transmissions</option>
                                            @foreach( $transmission as $row)
                                            <option value="{{$row}}" @if($advertising->transmissions == $row) selected=" " ;@endif>{{$row}}</option>
                                             @endforeach
                                        </select>
                                    </div>
                                </div>
                        
                               
                        <div class="control-group col-md-6">
                                    <label class="control-label" for="inputFname1">Airconditioning <sup>*</sup></label>
                                    <div class="controls">
                                        <select name="airconditioning" id="airconditioning">
                                            <option value="">Select Airconditioning</option>
                                            @foreach( $aircondition as $row)
                                            <option value="{{$row}}" @if($advertising->airconditioning == $row) selected=" " ;@endif>{{$row}}</option>
                                             @endforeach
                                        </select>
</div>
</div>
                        <div class="control-group">
                            <label class="control-label" for="input_email">Description <sup>*</sup></label>
                            <div class="controls">
                                <textarea class="form-control" id="input_email" name="description" rows="3" placeholder="Description">{{$advertising->description}}</textarea>
                                
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input_email">Main Image <sup>*</sup></label>
                            <div class="controls">
                            <img id="blah" src="#"  alt="your image" style="width:500px;height:200px;" />
                <input accept="image/*" type='file' name="main_image" id="imgInp" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="state">City<sup>*</sup></label>
                            <div class="controls">
                                <select  name="city_id" id="city_id">
                                    <option value="">Selct City</option>
                                    @foreach($city as $row)
                                    <option value="{{$row->id}}" @if($advertising->city_id == $row->id) selected=" " ;@endif>{{$row->city_name}}</option>
                                   @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="inputPassword1">Name <sup>*</sup></label>
                            <div class="controls">
                                <input type="text" id="inputPassword1" name="name" placeholder="Name" value="{{$advertising->name}}">
                            </div>
                        </div>
					</ul>
                   
					
				</div>

                <div id="sidebar" class="spanar33">
					
					<ul id="sideManu" class="nav nav-tabs nav-stacked">

                    <div class="control-group col-md-6">
                            <label class="control-label" for="inputFname1">Sub Category <sup>*</sup></label>
                            <div class="controls">
                            <select name="subcat_id" id="subcat_id">

                                 @foreach($subcategory as $row)
                                    <option value="{{$row->id}}" @if($advertising->subcat_id == $row->id) selected=" " ;@endif>{{$row->subcat_name}}</option>
                                 @endforeach

                                </select>
                            </div>
                        </div>
				
                    <div class="control-group col-md-6">
                            <label class="control-label" for="inputFname1">Color<sup>*</sup></label>
                            <div class="controls">
                                <input type="text" id="inputFname1" name="color" placeholder="Color" value="{{$advertising->color}}">
                            </div>
                            
                        </div>
						<div class="control-group">
                            <label class="control-label" for="input_email">Body Style <sup>*</sup></label>
                            <div class="controls">
                                <input type="text" id="input_email" name="body" placeholder="Body Style" value="{{$advertising->body}}">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input_email">Price <sup>*</sup></label>
                            <div class="controls">
                                <input type="text" id="input_email" name="price" placeholder="Price" value="{{$advertising->price}}">
                            </div>
                        </div>
  

                        <div class="control-group col-md-6">
                                    <label class="control-label" for="inputFname1">Condition <sup>*</sup></label>
                                    <div class="controls">
                                        <select name="condition" id="condition">
                                            <option value="">Select Condition</option>
                                            @foreach( $condition as $row)
                                            <option value="{{$row}}" @if($advertising->condition == $row) selected=" " ;@endif>{{$row}}</option>
                                             @endforeach
                                        </select>
                                    </div>
                                </div>

       

                        <div class="control-group col-md-6">
                                    <label class="control-label" for="inputFname1">Seller Type <sup>*</sup></label>
                                    <div class="controls">
                                        <select name="sell" id="sell">
                                            <option value="">Select Seller Type</option>
                                            @foreach( $sellerType as $row)
                                            <option value="{{$row}}" @if($advertising->seller_type == $row) selected=" " ;@endif>{{$row}}</option>
                                             @endforeach
                                        </select>
                                    </div>
                                </div>



                        <div class="control-group col-md-6">
                                    <label class="control-label" for="inputFname1">Registered <sup>*</sup></label>
                                    <div class="controls">
                                        <select name="registered" id="registered">
                                            <option value="">Select Registered</option>
                                            @foreach( $registerd as $row)
                                            <option value="{{$row}}" @if($advertising->registered == $row) selected=" " ;@endif>{{$row}}</option>
                                             @endforeach
                                        </select>
                                    </div>
                                </div>
                        <div class="control-group">
                            <label class="control-label" for="input_email">Registration Experiy <sup>*</sup></label>
                            <div class="controls">
                                <input type="text" id="input_email" name="registered_experiy" placeholder="Registration Experiy" value="{{$advertising->registered_experiy}}">
                            </div>
                        </div>
                      
                           
                       

                        <div class="control-group">
                            <label class="control-label" for="country">Suburb<sup>*</sup></label>
                            <div class="controls">
                                <select name="suburbs_id" id="suburbs_id">
                                    @foreach($suburbs as $row)
                                    <option value="{{$row->id}}" @if($advertising->suburbs_id == $row->id) selected=" " ;@endif>{{$row->suburbs_name}}</option>
                                     @endforeach
                                 
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="inputPassword1">Email <sup>*</sup></label>
                            <div class="controls">
                                <input type="email" name="email" placeholder="Email" value="{{$advertising->email}}">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="inputPassword1">Phone <sup>*</sup></label>
                            <div class="controls">
                                <input type="phone" name="phone" placeholder="phone" value="{{$advertising->phone}}">
                            </div>
                        </div>
					</ul>
                   
				</div>
               
 

                  

                        <div class="control-group ">
                         
                              
                                <button type="submit" class="btn btn-large btn-success" type="submit" >Accept & submit</button>
                            
                        </div>
                    </form>
                </div>

					
				</div>
				
			</div>
		</div>
	</div>

    <!-- <script>
    var $cs = $('.charge').change(function () {
    var total = +$('.total').html().trim() || 0,
        v = $(this).data('cash');
    if (this.checked) {
        total += v
    } else {
        total -= v;
    }
    $('.total').html(total);
    
});
$('.charge:checked').change();
        </script> -->

<script>
    imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
</script>

<script type="text/javascript">
$(function(){
  $(document).on('change','#cat_id',function(){
   
    var cat_id = $(this).val();

    $.ajax({
      url:"{{route('get_subcategory')}}",
      type:"GET",
      data:{cat_id:cat_id},
      success:function(data){
        var html = '<option value="">Select Subcategory</option>';
        $.each(data,function(key,v){
          html+='<option value ="'+v.id+'"  data-name="'+v.subcat_name+'">'+v.subcat_name+'</option>';
        });
        $('#subcat_id').html(html);
      }
    });
  });
});
</script>
<script type="text/javascript">
$(function(){
  $(document).on('change','#city_id',function(){
   
    var city_id = $(this).val();

    $.ajax({
      url:"{{route('add_get_suburbs')}}",
      type:"GET",
      data:{city_id:city_id},
      success:function(data){
        var html = '<option value="">Select Suburbs</option>';
        $.each(data,function(key,v){
          html+='<option value ="'+v.id+'"  data-name="'+v.suburbs_name+'">'+v.suburbs_name+'</option>';
        });
        $('#suburbs_id').html(html);
      }
    });
  });
});
</script>

<script>
    $('.cb').on('change', function(){ // on change of state
   UpdateCost();
});
$('#myselect').on('change', function(){ // on change of state
   $("#txt2").val( $('#myselect').val()*1000);
});
function UpdateCost() {
  var sum = 0;
  var gn, elem;
  $('.cb:checked').each(function(){
     sum += Number($(this).data('cash')); 
  })
 
 $('#totalcost').val(sum.toFixed(2));
}

    </script>

@endsection