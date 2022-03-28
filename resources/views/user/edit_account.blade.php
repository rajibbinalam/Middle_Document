@extends('layout.front.master')
@section('content')
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            @include('user.user_sidebar')
            <!-- Sidebar end=============================================== -->
            <div class="spanau9">


                <ul class="breadcrumb" style="background-color: #1a4bbb;color:white">
                    <li><a href="{{url('/')}}" style="color:#26262600;">Home</a> /</li>
                    <li >Update Account</li>
                    @include('error.message')
                </ul>
               
               
            
                <div class="well">
                   
                    <form class="form-horizontal" method="post" action="{{route('user.account.update',Auth::user()->id)}}">
                        @csrf
                       
                        <div class="control-group">
                            <label class="control-label" for="inputFname1">User Name </label>
                            <div class="controls">
                                <input type="text" id="inputFname12" name="username" placeholder="User Name" value="{{Auth::user()->username}}">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="inputFname1">First name </label>
                            <div class="controls">
                                <input type="text" id="inputFname1" name="f_name" placeholder="First Name" value="{{Auth::user()->f_name}}">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputLnam">Last name </label>
                            <div class="controls">
                                <input type="text" id="inputLnam" name="l_name" placeholder="Last Name" value="{{Auth::user()->l_name}}">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input_email">Email </label>
                            <div class="controls">
                                <input type="email" id="input_email" name="email" placeholder="Email" value="{{Auth::user()->email}}">
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="input_email">Phone </label>
                            <div class="controls">
                                <input type="text" id="input_email" name="phone" placeholder="Phone" value="{{Auth::user()->phone}}">
                            </div>
                        </div>
                        @php  
  $citye = App\Models\City::find(Auth::user()->city_id);
  $suburbs = App\Models\Suburbs::find(Auth::user()->suburbs_id);
  
      @endphp

                        
                        <div class="control-group">
                            <label class="control-label" for="state">City</label>
                            <div class="controls">
                                <select  name="city_id" id="city_id">
                                @if(!empty($city))
                                    <option value="">{{$citye->city_name}}</option>
                                    @else
                                    <option value="">Select City</option>
                                    @endif
                                    @foreach($city as $row)
                                    <option value="{{$row->id}}">{{$row->city_name}}</option>
                                   @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="country">Suburb</label>
                            <div class="controls">
                                <select name="suburbs_id" id="suburbs_id">
                                    @if(!empty($suburbs))
                                    <option value="">{{$suburbs->suburbs_name}}</option>
                                    @else
                                    @endif
                                 
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputPassword1">Address </label>
                            <div class="controls">
                                <input type="text" id="inputPassword1" name="address" placeholder="Address" value="{{Auth::user()->address}}">
                            </div>
                        </div>
                        


</label>



                        <div class="control-group">
                            <div class="controls">
                              
                                <button type="submit" class="btn btn-large btn-success" type="submit" >Update Account</button>
                            </div>
                        </div>
                    </form>
                </div>


            </div>

        </div>
    </div>
</div>
<script>

$('#inputFname12').on("keydown", function(e){
    var value =  e.target.value;
  //only allow a-z, A-Z, digits 0-9 and comma, with only 1 consecutive comma ...
  if (!e.key.match(/[a-zA-Z0-9,]/) || (e.key == ',' && value[value.length-1] == ',')) {
  
  }
});


    </script>

<script type="text/javascript">
$(function(){
  $(document).on('change','#city_id',function(){
   
    var city_id = $(this).val();

    $.ajax({
      url:"{{route('edit_suburbs')}}",
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
@endsection
