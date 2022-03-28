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
                           

                        </div>
                        <!--begin::Form-->
                        <form class="form" method="post" action="{{route('admin.general.term_and_condition')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <!--begin: Code-->
                                <div class="example-code mb-10">
                                    <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab"
                                                href="#example_code_html">HTML</a>
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
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Meta Information</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<textarea type="text" class="form-control" name="t_c_information" rows="10" cols="50">{{$gs->t_c_information}}</textarea>
															
														</div>
													</div>

                                                    
                                                    <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Meta Title</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<input type="text" class="form-control" name="t_c_title" value="{{$gs->t_c_title}}" />															
														</div>
													</div>
                                                   


                                                 

                                                    <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Meta Description</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<textarea type="text" class="form-control" name="t_c_description"  rows="10" cols="50">{{$gs->t_c_description}}</textarea>
															
														</div>
													</div>

                                                    <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Meta Keywords</label>
														@php
														$termkeyword = json_decode($gs->t_c_keyword);
													
														@endphp
														<div class="col-lg-9 col-md-9 col-sm-12">
															<textarea type="text" class="form-control" name="t_c_keyword[]">@foreach($termkeyword as $item) {{$item}} @endforeach</textarea>
															
														</div>
													</div>
												
												
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
