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
                    <li>Listing</li>
                </ul>

                <div class="well">

                    <form class="form-horizontal" method="post" action="{{route('user.listing.update',$listing->id)}}" enctype="multipart/form-data">
                        @csrf


                        <div class="row">
                            <div class="col-12">

                                <div id="sidebar" class="spanarlisitng33">


                                    <div class="control-group">
                                        <label class="control-label" for="inputFname1">Business Name <sup>*</sup></label>
                                        <input type="text" id="inputFname12" name="business_name" value="{{$listing->business_name}}">
                                    </div>


                                    <div class="control-group">
                                        <label class="control-label" for="input_email"> Logo <sup>*</sup></label>
                                        <div class="controls">
                                            <img id="blah" src="{{asset('images/listing/'.$listing['logo'])}}" alt="your Logo" style="width:500px;height:200px;" />
                                            <input accept="image/*" type='file' name="logo" id="imgInp" />
                                        </div>
                                    </div>


                                    <div class="control-group">
                                        <label class="control-label" for="state">Industry<sup>*</sup></label>
                                        <div class="controls">
                                            <input type="text" id="input_email" name="industry" placeholder="Industry" value="{{$listing->industry}}">
                                        </div>
                                    </div>
                                    @php
                                    $cityedit = App\Models\City::find($listing->city_id);
                                    $suburbsedit = App\Models\Suburbs::find($listing->suburbs_id);

                                    @endphp

                                    <div class="control-group">
                                        <label class="control-label" for="state">City<sup>*</sup></label>
                                        <div class="controls">
                                            <select name="city_id" id="city_id">

                                                @foreach($city as $row)
                                                <option value="{{$row->id}}" @if($listing->city_id== $row->id ) selected ; @endif>{{$row->city_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="control-group">
                                        <label class="control-label" for="country">Suburb<sup>*</sup></label>
                                        <div class="controls">
                                            <select name="suburbs_id" id="suburbs_id">
                                                <option value="{{$listing->suburbs_id}}" @if($listing->suburbs_id== $suburbsedit->suburbs_id ) selected ; @endif>{{$suburbsedit->suburbs_name}}</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="inputPassword1">Mobile <sup>*</sup></label>
                                        <div class="controls">
                                            <input type="phone" name="mobile" placeholder="Mobile" value="{{$listing->mobile}}">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="inputPassword1">Landline <sup>*</sup></label>
                                        <div class="controls">
                                            <input type="phone" name="landline" placeholder="Landline" value="{{$listing->landline}}">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="input_email">Website <sup>*</sup></label>
                                        <div class="controls">
                                            <input type="text" id="input_email" name="website" placeholder="Website" value="{{$listing->website}}">
                                        </div>
                                    </div>


                                    <div class="control-group">
                                        <label class="control-label" for="input_email">Description <sup>*</sup></label>
                                        <div class="controls">
                                            <textarea class="form-control" id="input_email" name="description" rows="3" placeholder="Description">{{$listing->description}}</textarea>

                                        </div>
                                    </div>


                                    <div class="control-group">
                                        <label class="control-label" for="inputLnam">Payment Method<sup>*</sup></label>
                                        <div class="controls">
                                            <input type="text" id="inputLnam" name="payment_method" placeholder="Payment Method" value="{{$listing->payment_method}}">
                                        </div>
                                    </div>


                                    <div class="control-group">
                                        <label class="control-label" for="input_email">Address <sup>*</sup></label>
                                        <div class="controls">
                                            <input type="text" id="input_email" name="address" placeholder="Address" value="{{$listing->address}}">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="input_email">Tags <sup>*</sup></label>
                                        <div class="controls">
                                            <input type="text" id="input_email" name="tags" placeholder="Tags" value="{{$listing->tags}}">
                                        </div>
                                    </div>





                                    <div class="control-group">
                                        <div class="controls">

                                            <button type="submit" class="btn btn-large btn-success" type="submit">Update</button>
                                        </div>
                                    </div>



                                </div>





                    </form>
                </div>


            </div>

        </div>
    </div>
</div>



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
                        html += '<option value ="' + v.id + '"   data-name="' + v.subcat_name + '">' + v.subcat_name + '</option>';
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
                        html += '<option value ="' + v.id + '"   data-name="' + v.suburbs_name + '">' + v.suburbs_name + '</option>';
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

@endsection