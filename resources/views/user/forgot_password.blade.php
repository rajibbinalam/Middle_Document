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
                    <li >Login</li>
                </ul>
                <h3> Login</h3>
                
                <div class="well">
                @include('error.message')
                    <form class="form-horizontal" method="post" action="{{route('user.forgot-password')}}">
                        @csrf
                        

                        
                        <div class="control-group">
                            <label class="control-label" for="input_email">Email <sup>*</sup></label>
                            <div class="controls">
                                <input type="email" id="input_email" name="email" placeholder="Email">
                            </div>
                        </div>
                        
                      
                

                       

                        <div class="control-group">
                            <div class="controls">
                              
                                <button type="submit" class="btn btn-large btn-success" >Send Request</button>
                            </div>
                        </div>
                    </form>
                </div>


            </div>

        </div>
    </div>
</div>

@endsection
