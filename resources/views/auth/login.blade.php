@extends('layout.front.master')
@section('content')
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->

            <!-- Sidebar end=============================================== -->
            <div class="spanu9">


                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                    <li class="active">login</li>
                </ul>
                <h3> Login</h3>
                @include('error.message')
                <div class="well">
                   
                    <form class="form-horizontal" method="post" action="{{route('user.login')}}">
                        @csrf
                        
                        
                        <div class="control-group">
                            <label class="control-label" for="input_email">Email <sup>*</sup></label>
                            <div class="controls">
                                <input type="email" id="input_email" name="email" placeholder="Email">
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
                            <div class="controls">
                                <input type="password" id="inputPassword1" name="password" placeholder="Password">
                            </div>
                        </div>
                       







                     

                        <div class="control-group">
                            <div class="controls">
                              
                                <button type="submit" class="btn btn-large btn-success" type="submit" >Login</button>
                            </div>
                        </div>
                    </form>
                </div>


            </div>

        </div>
    </div>
</div>

@endsection
