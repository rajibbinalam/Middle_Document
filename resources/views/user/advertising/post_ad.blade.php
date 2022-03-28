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
                    <li>Registration</li>
                </ul>
                <div class="loader-bg">
                    <div class="loader text-center"></div>
                </div>
                <img src="{{asset('assets/frontend/themes/images/loader-arrows.gif')}}" height="50" width="50" alt="">

                <div class="user-form">
                    <form class="form-horizontal span9" method="post" action="{{route('user.store')}}" enctype="multipart/form-data">
                        @csrf

                        
                        <div id="sidebar" class="span4">
                            <!-- <ul id="sideManu" class="nav nav-tabs nav-stacked" style="margin-bottom: 30px;"> -->
                            <div class="control-group col-md-6">
                                <label class="control-label" for="inputFname1">Category <sup>*</sup></label>
                                <div class="controls">
                                    <select name="cat_id" id="cat_id">
                                        <option value="">Select Category</option>
                                        @foreach($category as $row)
                                        <option value="{{$row->id}}">{{$row->cat_name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="control-group col-md-6">
                                <label class="control-label" for="inputFname1">Title <sup>*</sup></label>
                                <div class="controls">
                                    <input type="text" id="inputFname12" name="title" value="">
                                </div>
                            </div>

                            <div class="control-group col-md-6">
                                <label class="control-label" for="inputFname1">Listing Type <sup>*</sup></label>
                                <div class="controls">
                                    <select class="form-control" name="listing_type" id="uniqueid">
                                        <option value="Buy now" data-target="#a" class="attached enabled">Buy Now
                                        </option>
                                        <option value="Auction" data-target="#b" class="attached enabled">Auction
                                        </option>

                                    </select>
                                </div>
                            </div>

                            <div class="control-group col-md-6 showOnSelect" id="a">
                                <div class="control-group col-md-6">
                                    <label class="control-label" for="inputFname1">Listing Duration <sup>*</sup></label>
                                    <div class="controls">
                                        <select class="form-control" name="listing_duration">
                                            <option value="">Buy
                                                Select Listing Duration</option>
                                            @foreach($listing_duration as $duration)
                                            <option value="{{$duration}}">
                                                {{$duration}} Days
                                            </option>
                                            @endforeach

                                        </select>

                                    </div>
                                </div>


                                <div class="control-group ">
                                    <label class="control-label" for="input_email">Price <sup>*</sup></label>
                                    <div class="controls">
                                        <input type="text" id="input_email" name="price" placeholder="Price">
                                    </div>
                                </div>

                                <div class="control-group col-md-6">
                                    <label class="control-label" for="inputFname1">Quantity <sup>*</sup></label>
                                    <div class="controls">
                                        <input type="number" id="inputFname12" name="quantity" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="control-group col-md-6 showOnSelect" id="b">
                                <div class="control-group col-md-6">
                                    <label class="control-label" for="inputFname1">Start Date/Time <sup>*</sup></label>
                                    <div class="controls">
                                        <input type="date" id="inputFname12" name="start_date" value="">

                                    </div>
                                    &nbsp;&nbsp;
                                    <div class="control-group col-md-6">
                                        <label class="control-label" for="inputFname1"> <sup>*</sup></label>
                                        <div class="controls">
                                            <input type="time" id="inputFname12" name="start_time" id="myTime" step="2">

                                        </div>

                                    </div>
                                </div>

                                <div class="control-group col-md-6">
                                    <label class="control-label" for="inputFname1">End Date/Time <sup>*</sup></label>
                                    <div class="controls">
                                        <input type="date" id="inputFname12" name="end_date" value="">

                                    </div>
                                    &nbsp;&nbsp;
                                    <div class="control-group col-md-6">
                                        <label class="control-label" for="inputFname1"> <sup>*</sup></label>
                                        <div class="controls">
                                            <input type="time" id="inputFname12" name="end_time" id="myTime" step="2">

                                        </div>

                                    </div>
                                </div>
                                <div class="control-group col-md-6">
                                    <label class="control-label" for="inputFname1">Listing Duration
                                        <sup>*</sup></label>
                                    <div class="controls">
                                        <select class="form-control" name="listing_duration">
                                            <option value="">Buy
                                                Select Listing Duration</option>
                                            @foreach($listing_duration as $duration)
                                            <option value="{{$duration}}">
                                                {{$duration}} Days
                                            </option>
                                            @endforeach

                                        </select>

                                    </div>
                                </div>
                                <div class="control-group col-md-6">
                                    <label class="control-label" for="inputFname1">Starting Bid <sup>*</sup></label>
                                    <div class="controls">
                                        <input type="text" id="inputFname12" name="starting_bid" value="">
                                    </div>
                                </div>
                                <div class="control-group col-md-6">
                                    <label class="control-label" for="inputFname1">Reserved Price
                                        <sup>*</sup></label>
                                    <div class="controls">
                                        <input type="text" id="inputFname12" name="reserved_price" value="">
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label class="control-label" for="input_email">Price <sup>*</sup></label>
                                    <div class="controls">
                                        <input type="text" id="input_email" name="price" placeholder="Price">
                                    </div>
                                </div>
                            </div>





                            <div class="control-group col-md-6">
                                <label class="control-label" for="inputFname1">Doors <sup>*</sup></label>
                                <div class="controls">
                                    <select name="door" id="door">
                                        <option value="">Select Doors</option>
                                        @foreach( $doors as $row)
                                        <option value="{{$row}}">{{$row}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="input_email">Mileage <sup>*</sup></label>
                                <div class="controls">
                                    <input type="text" id="input_email" name="mileage" placeholder="Mileage">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="input_email">Year <sup>*</sup></label>
                                <div class="controls">
                                    <input type="text" id="input_email" name="year" placeholder="Year">
                                </div>
                            </div>


                            <div class="control-group col-md-6">
                                <label class="control-label" for="inputFname1">Transmissions<sup>*</sup></label>
                                <div class="controls">
                                    <select name="transmissions" id="transmissions">
                                        <option value="">Select Transmissions</option>
                                        @foreach( $transmission as $row)
                                        <option value="{{$row}}">{{$row}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>


                            <div class="control-group">
                                <label class="control-label" for="input_email">Main Image <sup style="color: red;">*</sup></label>
                                <div class="controls">
                                    <img id="blah" src="#" alt="your image" style="width:500px;height:200px;" />
                                    <input accept="image/*" type='file' name="main_image" id="imgInp" style="margin-left: 81px;" />
                                </div>
                            </div>


                            <!-- </ul> -->
                        </div>

                        <div id="sidebar" class="span4">



                            <!-- <ul id="sideManu" class="nav nav-tabs nav-stacked" style="margin-bottom: 30px;"> -->
                            <div class="control-group col-md-6">
                                <label class="control-label" for="inputFname1">Sub Category <sup>*</sup></label>
                                <div class="controls">
                                    <select name="subcat_id" id="subcat_id">
                                        <option value="">Select sub Category-</option>

                                    </select>
                                </div>
                            </div>
                            <div class="control-group col-md-6">
                                <label class="control-label" for="inputFname1">Color<sup>*</sup></label>
                                <div class="controls">
                                    <input type="text" id="inputFname1" name="color" placeholder="Color">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="input_email">Body Style <sup>*</sup></label>
                                <div class="controls">
                                    <input type="text" id="input_email" name="body" placeholder="Body Style">
                                </div>
                            </div>



                            <div class="control-group col-md-6">
                                <label class="control-label" for="inputFname1">Condition <sup>*</sup></label>
                                <div class="controls">
                                    <select name="condition" id="condition">
                                        <option value="">Select Condition</option>
                                        @foreach( $condition as $row)
                                        <option value="{{$row}}">{{$row}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>


                            <div class="control-group col-md-6">
                                <label class="control-label" for="inputFname1">Seller Type<sup>*</sup></label>
                                <div class="controls">
                                    <select name="sell" id="sell">
                                        <option value="">Select Seller Type</option>
                                        @foreach( $sellerType as $row)
                                        <option value="{{$row}}">{{$row}}</option>
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
                                        <option value="{{$row}}">{{$row}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="input_email">Registration Experiy
                                    <sup>*</sup></label>
                                <div class="controls">
                                    <input type="text" id="input_email" name="registered_experiy" placeholder="Registration Experiy">
                                </div>
                            </div>

                            <div class="control-group col-md-6">
                                <label class="control-label" for="inputFname1">Airconditioning <sup>*</sup></label>
                                <div class="controls">
                                    <select name="airconditioning" id="airconditioning">
                                        <option value="">Select Airconditioning-</option>
                                        @foreach( $aircondition as $row)
                                        <option value="{{$row}}">{{$row}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="input_email">Description <sup>*</sup></label>
                                <div class="controls">
                                    <textarea class="form-control" id="input_email" name="description" rows="3" placeholder="Description"></textarea>

                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="input_email">Select multiple Image
                                    <sup>*</sup></label>
                                <div class="controls" style="display: flex;">
                                    <input type="file" id="profileImage" name="galleryImage[]" class="form-control" multiple="">
                                </div>
                            </div>
                            <div class="row" id="preview_img">
                            </div>


                            <!-- </ul> -->
                        </div>
                        <div class="span9">
                            <div class="span9 my-info">
                                <div style="display: flex; justify-content:center" v>
                                    <div class="seller-accept-post" style="text-align: center;">
                                        <h4>Shipping</h4>
                                        <h6> <textarea name="shipping" rows="3" style="width: 400px;"></textarea></h6>
                                    </div>
                                    <div class="seller-accept-post" style="text-align: center;">
                                        <h4>Payment Method Prefferd</h4>
                                        <h6><textarea name="payment_method" rows="3" style="width: 400px;"></textarea>
                                        </h6>
                                    </div>
                                </div>
                            </div>


                        </div>


                        <div class="span9">
                            <div class="span9 my-info">
                                <h4>Your Contact Details</h4>
                                <hr>
                                <br>
                            </div>
                            <div class="span4">
                                <div class="control-group">
                                    <label class="control-label" for="city_id">City<sup>*</sup></label>
                                    <div class="controls">
                                        <select name="city_id" id="city_id">
                                            <option value="">Selct City</option>
                                            @foreach($city as $row)
                                            <option value="{{$row->id}}" @if(Auth::user()->city_id == $row->id)
                                                selected=" " ;@endif>{{$row->city_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="userName">Name <sup>*</sup></label>
                                    <div class="controls">
                                        <input type="text" id="userName" name="name" placeholder="Name">
                                    </div>
                                </div>
                            </div>

                            <div class="span4">
                                <div class="control-group">
                                    <label class="control-label" for="country">Suburb<sup>*</sup></label>
                                    <div class="controls">
                                        <select name="suburbs_id" id="suburbs_id">

                                            @foreach($suburbs as $row)
                                            <option value="{{$row->id}}" @if(Auth::user()->suburbs_id == $row->id)
                                                selected=" " ;@endif>{{$row->suburbs_name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="email">Email <sup>*</sup></label>
                                    <div class="controls">
                                        <input type="email" name="email" id="email" value="{{Auth::user()->email}}">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="phone">Phone <sup>*</sup></label>
                                    <div class="controls">
                                        <input type="tel" name="phone" id="phone" value="{{Auth::user()->phone}}">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <table style="width:100%">
                            <tr style="background-color: silver;">
                                <th style=" text-align: left;">Check it</th>
                                <th style=" text-align: left;">Page Name</th>
                                <th style=" text-align: left;">Duration</th>
                                <th style=" text-align: center;"> Price</th>
                            </tr>
                            @foreach($price as $row)
                            @php
                            $page = \App\Models\Page::find($row->page_id);
                            @endphp

                            <tr style="@if((++$loop->index) %2 == 0 )background-color: #cbcbcb; @else background-color: white; @endif line-height: 30px;">
                                <td>
                                    <input type="checkbox" name="page_id[]" class="charge form-control cb" id="{{$row->id}}" value="{{$row->id}}" data-cash="{{$row->price}}" />
                                </td>
                                <td>{{$page->title}}</td>
                                <td>{{$row->period}}</td>
                                <td style=" text-align: center;">{{$row->price}}</td>
                            </tr>
                            @endforeach


                            <tr>
                                <td></td>
                                <td></td>
                                <td style="text-align: right;">Total Price:</td>
                                <td style="text-align: right;">
                                    <!-- <p class="total"  style=" text-align: left;">.00 </p> -->
                                    <input type="text" id="totalcost" name="total" value="">


                                </td>
                            </tr>
                        </table>








                        <p><sup>*</sup>Required field </p>


                        <div class="control-group">
                            <div class="controls">

                                <button type="submit" class="btn btn-large btn-success" type="submit">Accept &
                                    submit</button>
                            </div>
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
    $(function() {
        $(document).on('change', '#cat_id', function() {

            var cat_id = $(this).val();

            $.ajax({
                url: "{{route('get_subcategory')}}",
                type: "GET",
                data: {
                    cat_id: cat_id
                },
                success: function(data) {
                    var html = '<option value="">Select Subcategory</option>';
                    $.each(data, function(key, v) {
                        html += '<option value ="' + v.id + '"  data-name="' + v
                            .subcat_name + '">' + v.subcat_name + '</option>';
                    });
                    $('#subcat_id').html(html);
                }
            });
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $(document).on('change', '#city_id', function() {

            var city_id = $(this).val();

            $.ajax({
                url: "{{route('add_get_suburbs')}}",
                type: "GET",
                data: {
                    city_id: city_id
                },
                success: function(data) {
                    var html = '<option value="">Select Suburbs</option>';
                    $.each(data, function(key, v) {
                        html += '<option value ="' + v.id + '"  data-name="' + v
                            .suburbs_name + '">' + v.suburbs_name + '</option>';
                    });
                    $('#suburbs_id').html(html);
                }
            });
        });
    });
</script>

<script>
    $('.cb').on('change', function() { // on change of state
        UpdateCost();
    });
    $('#myselect').on('change', function() { // on change of state
        $("#txt2").val($('#myselect').val() * 1000);
    });

    function UpdateCost() {
        var sum = 0;
        var gn, elem;
        $('.cb:checked').each(function() {
            sum += Number($(this).data('cash'));
        })

        $('#totalcost').val(sum.toFixed(2));
    }
</script>

<script>
    $(document).ready(function() {
        $('#profileImage').on('change', function() { //on file input change
            if (window.File && window.FileReader && window.FileList && window
                .Blob) //check File API supported browser
            {

                var data = $(this)[0].files; //this file data

                $.each(data, function(index, file) { //loop though each file
                    if (/(\.|\/)(gif|jpe?g|png)$/i.test(file
                            .type)) { //check supported file type
                        var fRead = new FileReader(); //new filereader
                        fRead.onload = (function(file) { //trigger function on successful read
                            return function(e) {
                                var img = $('<img style="width:100px"/>').addClass(
                                    'thumb').attr('src', e.target
                                    .result); //create image element 
                                $('#preview_img').append(
                                    img); //append image to output element
                            };
                        })(file);
                        fRead.readAsDataURL(file); //URL representing the file's data.
                    }
                });

            } else {
                alert("Your browser doesn't support File API!"); //if File API is absent
            }
        });
    });
</script>

<script>
    $(function() {
        //Hide all the divs with a specific class
        $('.showOnSelect').hide();
        //Show the div corresponding to the selected option
        $($('#uniqueid option:selected').data('target')).show();

        $('#uniqueid').change(function() {
            //Again do the same as above. This time use the option selected right now
            $('.showOnSelect').hide();
            $($(this).find('option:selected').data('target')).show();
        })
    })
</script>

@endsection