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
          <li>{{$title}}</li>
        </ul>
        <form class="form-horizontal" style="text-align:right" action="" id="sortProducts" name="sortProducts">
          <div class="control-group">
            Sort By
            <select name="sort" id="sort">
              <option>Select Listing</option>
              <option value="latest_listing" @if (isset($_GET['sort']) && $_GET['sort']=='latest_listing' ) selected @endif>Latest Listing</option>
              <option value="old_listing" @if (isset($_GET['sort']) && $_GET['sort']=='old_listing' ) selected @endif>Oldest Listing</option>

            </select>
          </div>
        </form>

        <div class="well">





          @php
          $pageid = App\Models\Page::first();

          $feesid =App\Models\SiteFees::where('page_id',$pageid->id)->get();

          @endphp

          @foreach($feesid as $fees)

          @php
          $purchaseid =App\Models\Addfees::where('page_id',$fees->id)->where('user_id',Auth::user()->id);
          if (isset($_GET['sort']) && !empty($_GET['sort'])) {
          if ($_GET['sort']=="latest_listing") {
          $purchaseid->orderBy('id','DESC');

          }else if ($_GET['sort']=="old_listing") {
          $purchaseid->orderBy('id','ASC');

          }
          }else{

          }

          $purchaseid = $purchaseid->paginate(6);
          @endphp

          @foreach($purchaseid as $page)

          @php
          $row = App\Models\Advertising::find($page->ads_id);
          @endphp

          @if(!empty($row->id))

          @php

          $adTime = strtotime($row->created_at);




          $difference = time() - $adTime;
          $minute = round($difference / 60) ;
          $time = round($difference / 3600) ;
          $day = round($difference / 86400) ;



          $month = round($difference / 2592000);
          $year = round($day / 360);



          @endphp




          @if($day > $fees->period)

          <table class="table">
            <tr class="mt-5">
              <th>
                <img class="img" src="{{asset('images/'.$row['main_image'])}}" height="180px" width="180px">
              </th>
              <td>
                <div>

                  <p>{{$row['title']}}</p>
                </div>

                <p><i class="fas fa-user fa-fw"></i>{{$row['color']}}</p>
                <p><i class="fas fa-map-marker-alt fa-fw"></i>{{$row['price']}}</p>
                <p><i class="fas fa-tachometer-alt fa-fw"></i><span style="color:red;">{{$row['seller_type']}}</span></p>


              </td>
              <td>

                <div class="sec-center" style="margin-top: 150px;margin-left: -100px;">
                  <input class="dropdown" type="checkbox" id="dropdown{{$row->id}}" style="display: none;" name="dropdown" />

                  <label class="for-dropdown" for="dropdown{{$row->id}}" style="position: absolute;margin-top: -47px;left: -43px;">
                    <i class="icon-cog"></i>
                    <i class="uil uil-arrow-down"></i>
                  </label>

                  <div class="section-dropdown" style="width: 169px;top: 0px;">

                    <a href="{{ route('user.expired.advertising.view',$row->id) }}" class="dm">View Expired Advertising <i class="uil uil-arrow-right"></i></a>
                    <a href="{{route('user.advertising.edit',$row->id)}}" class="dm">Edit Expired Advertising <i class="uil uil-arrow-right"></i></a>
                    <a href="{{route('user.advertising.delete',$row->id)}}" class="dm">Delete Expired Advertising <i class="uil uil-arrow-right"></i></a>

                  </div>
                </div>


              </td>


            </tr>
          </table>

          @else

          @endif

          @else
          @endif

          @endforeach



          @endforeach



        </div>


      </div>

    </div>
  </div>
</div>






@endsection