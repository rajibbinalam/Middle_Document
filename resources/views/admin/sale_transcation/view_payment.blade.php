@extends('layout.admin.master')
@section('content')


<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
		<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="d-flex align-items-center flex-wrap mr-2">
				<!--begin::Page Title-->
				<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Advertisement Details</h5>
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
									<div class="card-body row">
										<!-- <div class="adv-user-img text-center">
											<img src="{{asset('images/'.$advertize_data->user->image)}}" height="100px" width="150px" alt="User Image">
										</div> -->
										<div class="col-md-4 col-lg-4 col-sm-6">
											<p>Name </p>
											<p>Email </p>
											<p>User Name </p>
											<p>Phone </p>
											<p>City </p>
											<p>Suburbs</p>
											<p>Address </p>
										</div>
										<div class="col-md-8 col-lg-8 col-sm-6">
											<p>:<strong>{{$advertize_data->user->f_name}} {{$advertize_data->user->l_name}}</strong></p>
											<p>:<strong>{{$advertize_data->user->email}}</strong></p>
											<p>:<strong>{{$advertize_data->user->username}}</strong></p>
											<p>:<strong>{{$advertize_data->user->phone}}</strong></p>
											<p>:<strong>@if(!empty($advertize_data->user->city)){{$advertize_data->user->city->city_name}} @else @endif</strong></p>
											<p>:<strong>@if(!empty($advertize_data->user->suburbs)) {{$advertize_data->user->suburbs->suburbs_name}} @else  @endif</strong></p>
											<p>:<strong>{{$advertize_data->user->address}}</strong></p>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-8">
								<div class="card">
									<div class="card-header text-center">
										Advertizement Info
									</div>
									<div class="card-body row">
										<div class="col-md-12 col-lg-12 col-sm-12 text-center mb-10">
											<img src="{{asset('images/'.$advertize_data['main_image'])}}" height="100px" width="150px" alt="User Image">
										</div>
										<div class="col-md-8 col-lg-8 col-sm-12" style="display: flex;justify-content: flex-start;">
											<div>
												<p>Title </p>
												<p>Transmsions </p>
												<p>Air Conditioning </p>
												<p>Descriptions </p>
												<p>City </p>
												<p>Name </p>
												<p>Price </p>
												<p>Registed Expired </p>
												<p>Suburbs </p>
												<p>Email </p>
											</div>
											<div>
												<p>: <strong>{{$advertize_data->title}}</strong></p>
												<p>: <strong>{{$advertize_data->transmissions}}</strong></p>
												<p>: <strong>{{$advertize_data->airconditioning}}</strong></p>
												<p>: <strong>{{$advertize_data->description}}</strong></p>
												<p>: <strong>{{$advertize_data->city->city_name}}</strong></p>
												<p>: <strong>{{$advertize_data->name}}</strong></p>
												<p>: <strong>{{$advertize_data->price}}</strong></p>
												<p>: <strong>{{$advertize_data->registered_experiy}}</strong></p>
												<p>: <strong>{{$advertize_data->suburbs->suburbs_name}}</strong></p>
												<p>: <strong>{{$advertize_data->email}}</strong></p>
											</div>

										</div>
										<div class="col-md-4 col-lg-4 col-sm-12" style="display: flex;justify-content: flex-start;">
											<div>
												<p>No, Doors </p>
												<p>Milleage </p>
												<p>Year </p>
												<p>Color </p>
												<p>Body </p>
												<p>Condition </p>
												<p>Seller type </p>
												<p>Registed </p>
												<p>Phone </p>
												<p>Total </p>
											</div>
											<div>
												<p>: <strong>{{$advertize_data->door}}</strong></p>
												<p>: <strong>{{$advertize_data->mileage}}</strong></p>
												<p>: <strong>{{$advertize_data->year}}</strong></p>
												<p>: <strong>{{$advertize_data->color}}</strong></p>
												<p>: <strong>{{$advertize_data->body}}</strong></p>
												<p>: <strong>{{$advertize_data->condition}}</strong></p>
												<p>: <strong>{{$advertize_data->seller_type}}</strong></p>
												<p>: <strong>{{$advertize_data->registered}}</strong></p>
												<p>: <strong>{{$advertize_data->phone}}</strong></p>
												<p>: <strong>{{$advertize_data->total}}</strong></p>

											</div>


										</div>


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