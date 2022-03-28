@extends('layout.admin.master')
@section('content')


<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
		<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="d-flex align-items-center flex-wrap mr-2">
				<!--begin::Page Title-->
				<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Admin</h5>
				<!--end::Page Title-->
				<!--begin::Actions-->
				<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
				<span class="text-muted font-weight-bold mr-4">{{$title}}</span>

				<!--end::Actions-->
			</div>
			<!--end::Info-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<!--begin::Actions-->

				<!--end::Daterange-->
				<!--begin::Dropdowns-->

				<!--end::Dropdowns-->
			</div>
			<!--end::Toolbar-->
		</div>
	</div>
	<!--end::Subheader-->
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--begin::Card-->
					<div class="card card-custom example example-compact">
						<div class="card-header">
							<h3 class="card-title">{{$table}}</h3>
							<div class="card-title">
								<label class="" style="font-size: 13px; margin: 4px 12px 0 0;">Site ON/OFF</label>
								<input type="checkbox" checked data-toggle="toggle" data-style="android" data-onstyle="info" style="width: 60px !important; height: 36px !important;" data-offstyle="danger">
							</div>


						</div>
						<!--begin::Form-->
						<form class="form" method="post" action="{{route('admin.general.update')}}" enctype="multipart/form-data">
							@csrf
							<div class="card-body">
								<!--begin: Code-->
								<div class="example-code mb-10">
									<ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#example_code_js">JS</a>
										</li>
									</ul>
									<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
									<div class="tab-content">
										<div class="tab-pane active" id="example_code_html" role="tabpanel">
											<div class="example-highlight">
												<pre style="height:400px">

																</div>
															</div>
															<div class="tab-pane" id="example_code_js">
																<div class="example-highlight">
																	<pre style="height:400px">

																</div>
															</div>
														</div>
													</div>
													<!--end: Code-->
													<div class="alert alert-custom alert-light-danger d-none" role="alert" id="kt_form_1_msg">
														<div class="alert-icon">
															<i class="flaticon2-information"></i>
														</div>
														<div class="alert-text font-weight-bold">Oh snap! Change a few things up and try submitting again.</div>
														<div class="alert-close">
															<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span>
																	<i class="ki ki-close"></i>
																</span>
															</button>
														</div>
													</div>
                                            <div class="form-group row">
                                                <div class="col-md-12 col-lg-12 col-sm-12">
													<a href="{{route('admin.admin-cache-clear')}}" class="btn btn-danger float-right" style="padding: 6px 8px 6px 8px; font-size: 12px; margin: -15px 0 20px 0;">Cache Clear</a>
												</div>
                                                
												<label class="col-xl-2 col-lg-2 col-form-label text-right">Site Logo</label>
												<div class="col-lg-4 col-xl-4">
													<div class="image-input image-input-outline" id="kt_image_1">
														<div class="image-input-wrapper" style="background-image: url({{asset('assets/images/setting/'.$gs->site_logo)}})"></div>
														<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
															<i class="fa fa-pen icon-sm text-muted"></i>
															<input type="file" name="site_logo" accept=".png, .jpg, .jpeg" />
															<input type="hidden" name="site_logo_remove" />
														</label>
														<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
															<i class="ki ki-bold-close icon-xs text-muted"></i>
														</span>
													</div>
													
												</div>
												<label class="col-xl-1 col-lg-1 col-form-label text-left">Favicon</label>
												<div class="col-lg-5 col-xl-5">
													<div class="image-input image-input-outline" id="kt_image_2">
														<div class="image-input-wrapper" style="background-image: url({{asset('assets/images/setting/'.$gs->favicon)}})"></div>
														<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
															<i class="fa fa-pen icon-sm text-muted"></i>
															<input type="file" name="favicon" accept=".png, .jpg, .jpeg" />
															<input type="hidden" name="favicon_remove" />
														</label>
														<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
															<i class="ki ki-bold-close icon-xs text-muted"></i>
														</span>
													</div>
												</div>
											</div>
                                            <div class="form-group row">
												<label class="col-form-label text-right col-lg-3 col-sm-12">User Login By</label>
												<div class="col-lg-4 col-md-9 col-sm-12">
													<select class="form-control selectpicker" name="users_login_by">
														<option value="email">Email</option>
														<option value="username">Username</option>
														
													</select>
												</div>
											</div>

                                            <div class="form-group row">
												<label class="col-form-label text-right col-lg-3 col-sm-12">Auto Approve New Users</label>
												<div class="col-lg-4 col-md-9 col-sm-12">
													<select class="form-control selectpicker" name="auto_approved_new_user">
														<option value="no">No</option>
														<option value="yes">Yes</option>
														
													</select>
												</div>
											</div>
                                            <div class="form-group row">
												<label class="col-form-label text-right col-lg-3 col-sm-12">Confirm New Users Status</label>
												<div class="col-lg-4 col-md-9 col-sm-12">
													<select class="form-control selectpicker" name="confirm_new_user_status">
														<option value="enabled">Enabled</option>
														<option value="disabled">Disabled</option>
														
													</select>
												</div>
											</div>
                                            <div class="form-group row">
												<label class="col-form-label text-right col-lg-3 col-sm-12">Auto Approve New Users as Sellers</label>
												<div class="col-lg-4 col-md-9 col-sm-12">
													<select class="form-control selectpicker" name="auto_approved_new_user_as_sellers">
														<option value="yes">Yes</option>
														<option value="no">No</option>
														
													</select>
												</div>
											</div>
                                            <div class="form-group row">
												<label class="col-form-label text-right col-lg-3 col-sm-12">Auto Approve New Users as Buyers</label>
												<div class="col-lg-4 col-md-9 col-sm-12">
													<select class="form-control selectpicker" name="auto_approved_new_user_as_buyers">
														<option value="yes">Yes</option>
														<option value="no">No</option>
														
													</select>
												</div>
											</div>
                                            <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Your Website Name</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<input type="text" class="form-control" name="website_name" value="{{$gs->website_name}}" />
															
														</div>
													</div>

                                                    <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Site Title</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<input type="text" class="form-control" name="site_title" value="{{$gs->site_title}}" />
															
														</div>
													</div>
                                                    <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Meta Keywords</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
														@php
														$js = json_decode($gs->meta_keyword);

														@endphp
													
															<textarea type="text" class="form-control" name="meta_keyword[]">
															@foreach($js as $item)
														{{$item}}

														@endforeach
															
															</textarea>

														</div>
													</div>
                                                    <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Meta Description</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<textarea type="text" class="form-control" name="meta_description">{{$gs->meta_description}}</textarea>
															
														</div>
													</div>
                                                    <div class="form-group row">
													@php
														$h1 = json_decode($gs->h1_tages);

														@endphp
														<label class="col-form-label text-right col-lg-3 col-sm-12">H1 Tags</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<textarea type="text" class="form-control" name="h1_tages[]">@foreach($h1 as $item) {{$item}} @endforeach</textarea>
															
														</div>
													</div>

                                                    
                                                    <div class="form-group row">
													@php
														$h2 = json_decode($gs->h2_tags);

														@endphp
														<label class="col-form-label text-right col-lg-3 col-sm-12">H2 Tags</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<textarea type="text" class="form-control" name="h2_tags[]">@foreach($h2 as $item) {{$item}} @endforeach</textarea>															
														</div>
													</div>
                                                    <div class="form-group row">
													@php
														$h3 = json_decode($gs->h3_tages);

														@endphp
														<label class="col-form-label text-right col-lg-3 col-sm-12">H3 Tags</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<textarea type="text" class="form-control" name="h3_tages[]">@foreach($h3 as $item) {{$item}} @endforeach</textarea>
															
														</div>
													</div>


                                                    <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Website Currency</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<input type="text" class="form-control" name="website_currency"value="{{$gs->website_currency}}" />
															
														</div>
													</div>

                                                    <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Number of ads displayed homepage featured</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<input type="number" class="form-control" name="homepage_featured" value="{{$gs->homepage_featured}}" />
															
														</div>
													</div>
                                                    <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Number of ads displayed Category featured</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<input type="number" class="form-control" name="category_featured" value="{{$gs->category_featured}}" />
															
														</div>
													</div>
                                                    <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Number of ads displayed per category page</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<input type="number" class="form-control" name="per_category_page" value="{{$gs->per_category_page}}" />
															
														</div>
													</div>
                                                    <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Number of ads displayed On Business Page</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<input type="number" class="form-control" name="business_page" value="{{$gs->business_page}}" />
															
														</div>
													</div>
                                                    <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Website Time Zone</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															
														<select name="" id="">
															<option value="">UTC</option>
															<option value="">UTC</option>
															<option value="">UTC</option>
														</select>
															
														</div>
													</div>
                                                    <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Geolocation country</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<input type="text" class="form-control" name="geolocation_country" value="{{$gs->geolocation_country}}" />
															
														</div>
													</div>
                                                    <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Language</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<input type="text" class="form-control" name="language" value="{{$gs->language}}" />
															
														</div>
													</div>
                                                    <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Admin Support Email for Contact Form</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<input type="text" class="form-control" name="contract_form" value="{{$gs->contract_form}}" />
															
														</div>
													</div>

                                                    <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Banned Words</label>
														@php
														$bw = json_decode($gs->banned_words);

														@endphp
														<div class="col-lg-9 col-md-9 col-sm-12">
															<textarea type="text" class="form-control" name="banned_words[]">@foreach($bw as $item) {{$item}} @endforeach</textarea>
															<span>Use a comma between words</span>
														</div>
													</div>

                                                    <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Message Form Banned Content</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<textarea type="text" class="form-control" name="banned_content" >{{$gs->banned_content}}</textarea>
															
														</div>
													</div>
												
												
												</div>
												<div class="card-footer">
													<div class="row">
														<div class="col-lg-9 ml-lg-auto">
															<button type="submit" class="btn btn-primary font-weight-bold mr-2" >save</button>
															<!-- <button type="reset" class="btn btn-light-primary font-weight-bold">Cancel</button> -->
														</div>
													</div>
												</div>
											</form>
											<!--end::Form-->
										</div>
										<!--end::Card-->
									</div>
								
								</div>
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
@endsection