@extends('layout.admin.master')
@section('content')


<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
		<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="d-flex align-items-center flex-wrap mr-2">
				<!--begin::Page Title-->
				<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Listing Fees Revinue</h5>
				<!--end::Page Title-->
				<!--begin::Actions-->
			
				<!--end::Actions-->
			</div>
			<!--end::Info-->
			<!--begin::Toolbar-->

			<!--end::Toolbar-->
		</div>
	</div>
	<!--end::Subheader-->
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Dashboard-->
			<!--begin::Row-->
			<div class="row">
				<div class="col-lg-12 col-xxl-8">
					<!--begin::List Widget 9-->
					<div class="card card-custom card-stretch gutter-b">
						<!--begin::Header-->
						<div class="card-header align-items-center border-0 mt-4">
							<h3 class="card-title align-items-start flex-column">
								<span class="font-weight-bolder text-dark">Payment Information</span>
								<span class="text-muted mt-3 font-weight-bold font-size-sm">Make Sure Your Payment</span>
							</h3>
						
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body row pt-4">
							<div class="col-md-4">
								<div class="card">
									<div class="card-header text-center">
										User Info
									</div>
									<div class="card-body">
										

										<p>Name : {{$advertize_data->user->f_name}} {{$advertize_data->user->l_name}}</p>
										<p>Email : {{$advertize_data->user->email}}</p>
										<p>User Name : {{$advertize_data->user->username}}</p>
										<p>Phone : {{$advertize_data->user->phone}}</p>
										<p>City : @if(!empty($advertize_data->user->city)){{$advertize_data->user->city->city_name}} @else @endif</p>
										<p>Suburbs :@if(!empty($advertize_data->user->suburbs)) {{$advertize_data->user->suburbs->suburbs_name}} @else @endif</p>
										<p>Address : {{$advertize_data->user->address}}</p>
									</div>
								</div>
							</div>

							<div class="col-md-8">
								<div class="card">
									<div class="card-header text-center">
										Advertizement Info
									</div>
									<div class="card-body">
										<div class="text-center">
											<img src="{{asset('images/listing/'.$advertize_data['logo'])}}" height="100px" width="150px" alt="User Image">
										</div>
										<p>Business Name : <strong>{{$advertize_data->business_name}}</strong></p>
										<p>Industry : <strong>{{$advertize_data->industry}}</strong></p>
										<p>Mobile : <strong>{{$advertize_data->mobile}}</strong></p>
										<p>Landline : <strong>{{$advertize_data->landline}}</strong></p>
										<p>Vebsite : <strong>{{$advertize_data->website}}</strong></p>
										<p>Description : <strong>{{$advertize_data->description}}</strong></p>
										<p>Address : <strong>{{$advertize_data->address}}</strong></p>
										<p>City : <strong>{{$advertize_data->city->city_name}}</strong></p>
									
										<p>Suburbs : <strong>{{$advertize_data->suburbs->suburbs_name}}</strong></p>

										<p>Total : <strong>{{$advertize_data->total}}</strong></p>
									</div>
								</div>
							</div>

						</div>
						<!--end: Card Body-->
					</div>
					<!--end: List Widget 9-->
				</div>

			</div>
		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->
</div>
@endsection