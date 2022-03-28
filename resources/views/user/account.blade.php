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
          <li>Account</li>
        </ul>
        <h3>Your Account Information</h3>
        @include('error.message')
        <div class="well">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">User Name</th>
                <th scope="col"></th>
                <th scope="col">{{Auth::user()->username}}</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">First Name</th>
                <td></td>
                <td>{{Auth::user()->f_name}}</td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">Last Name</th>
                <td></td>
                <td>{{Auth::user()->l_name}}</td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">Email</th>
                <td></td>
                <td>{{Auth::user()->email}}</td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">Phone</th>
                <td></td>
                <td>{{Auth::user()->phone}}</td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">City</th>
                @php
                $city = App\Models\City::find(Auth::user()->city_id);
                $suburbs = App\Models\Suburbs::find(Auth::user()->suburbs_id);

                @endphp
                <td></td>
                <td>@if(!empty($city)){{$city->city_name}} @else @endif</td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">Subrubs</th>
                <td></td>
                <td>@if(!empty($suburbs)){{$suburbs->suburbs_name}} @elese @endif</td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">Address</th>
                <td></td>
                <td>{{Auth::user()->address}}</td>
                <td></td>
              </tr>
            </tbody>
          </table>



          <div class="control-group">
            <div class="controls">

              <button type="submit" class="btn btn-large btn-success" type="submit"><a href="{{route('user.account.edit',Auth::user()->id)}}">Edit Info</a></button>
            </div>
          </div>

        </div>


      </div>

    </div>
  </div>
</div>
@endsection