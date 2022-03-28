@extends('layout.admin.master')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-2">
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Dashboard</h5>
            </div>
        </div>
    </div>
    <div class="card card-custom gutter-b">

        <div class="card-body row">
            @include('error.message')
            <div class="col-md-3 text-center ">
                <div class="summary-grid">
                    <h5>Recently Signed in User</h5>
                    <p><strong>5</strong></p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="summary-grid">
                    <h5>New Registerd User</h5>
                    <p><strong>5</strong></p>
                </div>
            </div>
            <div class="col-md-3 text-center ">
                <div class="summary-grid">
                    <h5>Active Listing</h5>
                    <p><strong>{{ App\Models\Listing::where('status', 1)->count() }}</strong></p>
                </div>
            </div>
            <div class="col-md-3 text-center ">
                <div class="summary-grid">
                    <h5>Total Listing</h5>
                    <p><strong>{{ App\Models\Listing::all()->count() }}</strong></p>
                </div>
            </div>
            <div class="col-md-4 text-center ">
                <div class="summary-grid">
                    <h5>Site Revenue</h5>
                    <small>for 24 Hours</small>
                    <p><strong>{{ $totalRevenue}}</strong></p>
                </div>
            </div>
            <div class="col-md-4 text-center ">
                <div class="summary-grid">
                    <h5>Site Revenue</h5>
                    <small>for 7 Days</small>
                    <p><strong>$1200</strong></p>
                </div>
            </div>
            <div class="col-md-4 text-center ">
                <div class="summary-grid">
                <h5>Site Revenue</h5>
                    <small>for 30 Days</small>
                    <p><strong>$5600</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection