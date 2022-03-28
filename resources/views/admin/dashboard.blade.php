@extends('layout.admin.master')
@section('content')
<?php

$dataPoints = array();
$y = 5;
for ($i = 0; $i < 10; $i++) {
  $y += rand(-1, 1) * 0.1;
  array_push($dataPoints, array("x" => $i, "y" => $y));
}

?>

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
  <!--begin::Subheader-->
  <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
      <!--begin::Info-->
      <div class="d-flex align-items-center flex-wrap mr-2">
        <!--begin::Page Title-->
        <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Dashboard</h5>
      </div>
    </div>
  </div>
  <div class="card card-custom gutter-b">
    @include('error.message')
    <div class="card-body row">

      <div class="col-lg-3 col-md-3 col-sm-6 mb-10">
        <div class="item1">
          <a href="">
            <i class="fas fa-users"></i>
            <h1>{{ App\Models\User::all()->count() }}</h1>
            <h2>Total user</h2>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="item2">
          <a href="">
            <i class="fas fa-list"></i>
            <h1>{{ App\Models\Listing::where('status', 1)->count() }}</h1>
            <h2>Active Listing</h2>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="item4">
          <a href="">
            <i class="fas fa-list"></i>
            <h1>{{ App\Models\Listing::all()->count() }}</h1>
            <h2>Total Listing</h2>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="item3">
          <a href="">
            <i class="fas fa-money-bill-wave"></i>
            <h1>{{ App\Models\Advertising::all()->sum('total') }}</h1>
            <h2>Total Cost</h2>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="item5">
          <a href="">
            <i class="far fa-eye"></i>
            <h1>65</h1>
            <h2>Total Visitor</h2>
            <small>By People</small>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="item6">
          <a href="">
            <i class="fas fa-money-check-alt"></i>
            <h1>{{ App\Models\Listing::whereDay('created_at',Carbon\Carbon::now()->day )->sum('total') }}</h1>
            <h2>Site Revenue</h2>
            <small>Last 24 Hour</small>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="item7">
          <a href="">
            <i class="fas fa-signal"></i>
            <h1>{{ App\Models\Listing::where('created_at' ,'>=', Carbon\Carbon::now()->subDays(7))->sum('total') }}</h1>
            <h2>Site Revenue</h2>
            <small>Last 7 Days</small>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="item8">
          <a href="">
            <i class="fas fa-hand-holding-usd"></i>
            <h1>{{ App\Models\Listing::where('created_at' ,'>=', Carbon\Carbon::now()->subDays(30))->sum('total') }}</h1>
            <h2>Site Revenue</h2>
            <small>Last 30 Days</small>
          </a>
        </div>
      </div>
    </div>

    <div id="chartContainer" style="height: 370px; width: 98%;"></div>

  </div>
  <!--end::Entry-->
</div>
@endsection
@push('canvasChart')
<script>
  window.onload = function() {

    var dataPoints = <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>;

    var chart = new CanvasJS.Chart("chartContainer", {
      theme: "light2",
      title: {
        text: "Live Site Estimate"
      },
      axisX: {
        title: "Time in millisecond"
      },
      axisY: {
        suffix: " PPM"
      },
      data: [{
        type: "line",
        yValueFormatString: "#,##0.0#",
        toolTipContent: "{y} PPM",
        dataPoints: dataPoints
      }]
    });
    chart.render();

    var updateInterval = 10000;
    setInterval(function() {
      updateChart()
    }, updateInterval);

    var xValue = dataPoints.length;
    var yValue = dataPoints[dataPoints.length - 1].y;

    function updateChart() {
      yValue += (Math.random() - 0.5) * 0.1;
      dataPoints.push({
        x: xValue,
        y: yValue
      });
      xValue++;
      chart.render();
    };

  }
</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
@endpush