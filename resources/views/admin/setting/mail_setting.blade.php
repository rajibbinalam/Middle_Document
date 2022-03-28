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
                <span class="text-muted font-weight-bold mr-4">Email Setting</span>

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
                            <h3 class="card-title">Dynamic Email Setup</h3>
                        </div>
                        <!--begin::Form-->
                        <form class="form" method="post" files=true action="{{route('admin.setting.mailStore')}}">
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
														<label class="col-form-label text-right col-lg-3 col-sm-12">SMTP Host Name</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
                                                        <input type="text" name="mail_host" class="form-control" value="{{env('MAIL_HOST')}}" required />
															
														</div>
													</div>

                                                    <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">SMTP Port</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
                                                        <input type="text" name="port" class="form-control" value="{{env('MAIL_PORT')}}" required />
														
														</div>
													</div>
                                                    <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">SMTP Username</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
                                                        <input type="text" name="mail_address" class="form-control" value="{{env('MAIL_FROM_ADDRESS')}}" required />
														</div>
													</div>
                                                    <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">SMTP Password</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
                                                        <input type="password" name="password" class="form-control" value="{{env('MAIL_PASSWORD')}}" required />
															
														</div>
													</div>
                                                    <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Sender Email</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
                                                        <input type="text" name="email_name" class="form-control" value="{{env('MAIL_FROM_EMAIL')}}" required />
															
														</div>
													</div>
                                                    <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Sender Name</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
                                                        <input type="text" name="mail_name" class="form-control" value="{{env('MAIL_FROM_NAME')}}" required />
															
														</div>
													</div>
                                                    <!-- <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Encryption</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
                                                        <input type="text" name="encryption" class="form-control" value="{{env('MAIL_ENCRYPTION')}}" required />
														</div>
													</div> -->
												</div>
												<div class="card-footer">
													<div class="row">
														<div class="col-lg-9 ml-lg-auto">
															<button type="submit" class="btn btn-primary font-weight-bold mr-2" >save</button>
															<button type="reset" class="btn btn-light-primary font-weight-bold">Cancel</button>
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