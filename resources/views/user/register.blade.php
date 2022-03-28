@extends('layout.front.master')
@section('content')
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->

            <!-- Sidebar end=============================================== -->
            <div class="spanu9">


                <ul class="breadcrumb" style="background-color: #1a4bbb;color:white">
                    <li><a href="{{url('/')}}" style="color:#26262600;">Home</a> /</li>
                    <li>Registration</li>
                </ul>
                <ul class="breadcrumb">
                    <li>Autometically regiter with</a> <span class="divider"></span></li>

                </ul>
                <ul class=" text-center">
                    <a class="ml-1 btn btn-primary" href="{{ url('auth/facebook') }}" style="margin-top: 0px !important;background: blue;color: #ffffff;padding: 5px;border-radius:7px;" id="btn-fblogin">
                        <i class="fa fa-facebook-square" aria-hidden="true"></i> Login with Facebook
                    </a>
                </ul>
                <h3 class=" text-center"> Registration</h3>
                @include('error.message')
                <div class="well span4" style="text-align: center;margin-left: 200px;">
                    <form class="form-horizontal text-center" method="post" action="{{route('user.registration')}}">
                        @csrf
                        <h6>Username must be between 5-15 characters with no spaces or symbols <p style="color:red">only use letters and number</p>
                        </h6>
                        <div class="control-group">
                            <div class="controls">
                                <input class="text-center" type="text" id="inputFname12" name="username" placeholder="User Name">
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="controls">
                                <input class=" text-center" type="text" id="inputFname1" name="f_name" placeholder="First Name">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <input class=" text-center" type="text" id="inputLnam" name="l_name" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <input class=" text-center" type="email" id="input_email" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <input class=" text-center" type="email" id="input_email" name="c_email" placeholder="Confirm Email">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <input class=" text-center" type="text" id="input_email" name="phone" placeholder="Phone">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <select class=" text-center" name="city_id" id="city_id">
                                    <option value="">Selct City</option>
                                    @foreach($city as $row)
                                    <option value="{{$row->id}}">{{$row->city_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <select class=" text-center" name="suburbs_id" id="suburbs_id">
                                    <option value="">-</option>

                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <input class=" text-center" type="text" id="inputPassword1" name="address" placeholder="Address">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <input class=" text-center" type="password" id="inputPassword1" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <input class=" text-center" type="password" id="inputPassword1" placeholder="confirm Password">
                            </div>
                        </div>

                        <input style="margin: 0; padding: 0;" type="checkbox" checked name="" value='1'>
                        <span class="checkmark"></span>
                        <label style="display: inline-block">I Accept the terms and Condition</label>
                        <div class="control-group">
                            <div class="controls">
                                <p>You might recive a Message about Update</p>
                                <button type="submit" class="btn btn-large btn-success" type="submit">Create new Account</button>
                                <p></p>
                                <p>By Clicking Create an Account with Our <a style="color: #1ba2cb;" href="#">Terms and Condition</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#inputFname12').on("keydown", function(e) {
        var value = e.target.value;
        //only allow a-z, A-Z, digits 0-9 and comma, with only 1 consecutive comma ...
        if (!e.key.match(/[a-zA-Z0-9,]/) || (e.key == ',' && value[value.length - 1] == ',')) {

        }
    });
</script>

<script type="text/javascript">
    $(function() {
        $(document).on('change', '#city_id', function() {

            var city_id = $(this).val();

            $.ajax({
                url: "{{route('get_suburbs')}}",
                type: "GET",
                data: {
                    city_id: city_id
                },
                success: function(data) {
                    var html = '<option value="">Select Suburbs</option>';
                    $.each(data, function(key, v) {
                        html += '<option value ="' + v.id + '"  data-name="' + v.suburbs_name + '">' + v.suburbs_name + '</option>';
                    });
                    $('#suburbs_id').html(html);
                }
            });
        });
    });
</script>
@endsection