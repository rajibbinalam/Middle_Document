@extends('layout.admin.master')
@section('content')


<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
		<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="d-flex align-items-center flex-wrap mr-1">
				<!--begin::Page Heading-->
				<div class="d-flex align-items-baseline flex-wrap mr-5">
					<!--begin::Page Title-->
					<h5 class="text-dark font-weight-bold my-1 mr-5">Role Permission</h5>
					<!--end::Page Title-->
					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
						<li class="breadcrumb-item text-muted">
							<a href="" class="text-muted">Permission</a>
						</li>
						<li class="breadcrumb-item text-muted">
							<a href="" class="text-muted">Role Permission</a>
						</li>
					</ul>
					<!--end::Breadcrumb-->
				</div>
				<!--end::Page Heading-->
			</div>

		</div>
	</div>
	<!--end::Subheader-->
	<!--begin::Entry-->
	<div class="card card-custom gutter-b">
		<div class="card-header flex-wrap border-0 pt-6 pb-0">
			<div class="card-title">
				<h3 class="card-label">Role and Permission
			</div>

		</div>
		<div class="card-body">

			@if(session()->has('not_permitted'))
			<div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('not_permitted') }}</div>
			@endif
			<section class="forms">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header d-flex align-items-center">
									<h4>Permission</h4>
								</div>

								<form method="post" action="{{route('role.setPermission')}}">
									@csrf
									<div class="card-body">
										<input type="hidden" name="role_id" value="{{$lims_role_data->id}}" />
										<div class="table-responsive">
											<table class="table table-bordered permission-table">
												<thead>
													<tr>
														<th colspan="6" class="text-center">{{$lims_role_data->name}} Group Permission</th>
													</tr>
													<tr>
														<th rowspan="2" class="text-center">Module Name</th>
														<th colspan="5" class="text-center">

															<input type="checkbox" id="select_all">
															<label for="select_all">Permissions</label>

														</th>
													</tr>
													<tr>
														<th class="text-center">View</th>
														<th class="text-center">Add</th>
														<th class="text-center">Edit</th>
														<th class="text-center">Delete</th>
														<th class="text-center">Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>User Management </td>
														<td class="text-center">
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("users_index", $all_permission))
																<input type="checkbox" value="1" id="users_index" name="users_index" checked />
																@else
																<input type="checkbox" value="1" id="users_index" name="users_index" />
																@endif
																<label for="users_index"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("users_create", $all_permission))
																<input type="checkbox" value="1" id="users_create" name="users_create" checked>
																@else
																<input type="checkbox" value="1" id="users_create" name="users_create">
																@endif
																<label for="users_create"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("users_edit", $all_permission))
																<input type="checkbox" value="1" id="users_edit" name="users_edit" checked />
																@else
																<input type="checkbox" value="1" id="users_edit" name="users_edit" />
																@endif
																<label for="users_edit"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("users_delete", $all_permission))
																<input type="checkbox" value="1" id="users_delete" name="users_delete" checked />
																@else
																<input type="checkbox" value="1" id="users_delete" name="users_delete" />
																@endif
																<label for="users_delete"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("users_status", $all_permission))
																<input type="checkbox" value="1" id="users_status" name="users_status" checked>
																@else
																<input type="checkbox" value="1" id="users_status" name="users_status">
																@endif
																<label for="users_status"></label>

															</div>
														</td>
													</tr>

													<tr>

														<td>Category</td>
														<td class="text-center">
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("category_index", $all_permission))
																<input type="checkbox" value="1" id="category_index" name="category_index" checked />
																@else
																<input type="checkbox" value="1" id="category_index" name="category_index" />
																@endif
																<label for="category_index"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("category_create", $all_permission))
																<input type="checkbox" value="1" id="category_create" name="category_create" checked>
																@else
																<input type="checkbox" value="1" id="category_create" name="category_create">
																@endif
																<label for="category_create"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("category_edit", $all_permission))
																<input type="checkbox" value="1" id="category_edit" name="category_edit" checked />
																@else
																<input type="checkbox" value="1" id="category_edit" name="category_edit" />
																@endif
																<label for="category_edit"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("category_delete", $all_permission))
																<input type="checkbox" value="1" id="category_delete" name="category_delete" checked />
																@else
																<input type="checkbox" value="1" id="category_delete" name="category_delete" />
																@endif
																<label for="category_delete"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("category_status", $all_permission))
																<input type="checkbox" value="1" id="category_status" name="category_status" checked>
																@else
																<input type="checkbox" value="1" id="category_status" name="category_status">
																@endif
																<label for="category_status"></label>

															</div>
														</td>
													</tr>

													<tr>
														<td>Sub Category</td>
														<td class="text-center">
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("subcategory_index", $all_permission))
																<input type="checkbox" value="1" id="subcategory_index" name="subcategory_index" checked />
																@else
																<input type="checkbox" value="1" id="subcategory_index" name="subcategory_index" />
																@endif
																<label for="subcategory_index"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("subcategory_create", $all_permission))
																<input type="checkbox" value="1" id="subcategory_create" name="subcategory_create" checked>
																@else
																<input type="checkbox" value="1" id="subcategory_create" name="subcategory_create">
																@endif
																<label for="subcategory_create"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("subcategory_edit", $all_permission))
																<input type="checkbox" value="1" id="subcategory_edit" name="subcategory_edit" checked />
																@else
																<input type="checkbox" value="1" id="subcategory_edit" name="subcategory_edit" />
																@endif
																<label for="subcategory_edit"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("subcategory_delete", $all_permission))
																<input type="checkbox" value="1" id="subcategory_delete" name="subcategory_delete" checked />
																@else
																<input type="checkbox" value="1" id="subcategory_delete" name="subcategory_delete" />
																@endif
																<label for="subcategory_delete"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("subcategory_status", $all_permission))
																<input type="checkbox" value="1" id="subcategory_status" name="subcategory_status" checked>
																@else
																<input type="checkbox" value="1" id="subcategory_status" name="subcategory_status">
																@endif
																<label for="subcategory_status"></label>

															</div>
														</td>
													</tr>

													<tr>

														<td>City</td>
														<td class="text-center">
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("city_index", $all_permission))
																<input type="checkbox" value="1" id="city_index" name="city_index" checked>
																@else
																<input type="checkbox" value="1" id="city_index" name="city_index">
																@endif
																<label for="city_index"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("city_create", $all_permission))
																<input type="checkbox" value="1" id="city_create" name="city_create" checked>
																@else
																<input type="checkbox" value="1" id="city_create" name="city_create">
																@endif
																<label for="city_create"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("city_edit", $all_permission))
																<input type="checkbox" value="1" id="city_edit" name="city_edit" checked>
																@else
																<input type="checkbox" value="1" id="city_edit" name="city_edit">
																@endif
																<label for="city_edit"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("city_delete", $all_permission))
																<input type="checkbox" value="1" id="city_delete" name="city_delete" checked>
																@else
																<input type="checkbox" value="1" id="city_delete" name="city_delete">
																@endif
																<label for="city_delete"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("city_status", $all_permission))
																<input type="checkbox" value="1" id="city_status" name="city_status" checked>
																@else
																<input type="checkbox" value="1" id="city_status" name="city_status">
																@endif
																<label for="city_status"></label>

															</div>
														</td>
													</tr>


													<tr>

														<td>Suburbs</td>
														<td class="text-center">
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("suburbs_index", $all_permission))
																<input type="checkbox" value="1" id="suburbs_index" name="suburbs_index" checked>
																@else
																<input type="checkbox" value="1" id="suburbs_index" name="suburbs_index">
																@endif
																<label for="suburbs_index"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("suburbs_create", $all_permission))
																<input type="checkbox" value="1" id="suburbs_create" name="suburbs_create" checked>
																@else
																<input type="checkbox" value="1" id="suburbs_create" name="suburbs_create">
																@endif
																<label for="suburbs_create"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("suburbs_edit", $all_permission))
																<input type="checkbox" value="1" id="suburbs_edit" name="suburbs_edit" checked>
																@else
																<input type="checkbox" value="1" id="suburbs_edit" name="suburbs_edit">
																@endif
																<label for="suburbs_edit"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("suburbs_delete", $all_permission))
																<input type="checkbox" value="1" id="suburbs_delete" name="suburbs_delete" checked>
																@else
																<input type="checkbox" value="1" id="suburbs_delete" name="suburbs_delete">
																@endif
																<label for="suburbs_delete"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("suburbs_status", $all_permission))
																<input type="checkbox" value="1" id="suburbs_status" name="suburbs_status" checked>
																@else
																<input type="checkbox" value="1" id="suburbs_status" name="suburbs_status">
																@endif
																<label for="suburbs_status"></label>

															</div>
														</td>
													</tr>


													<tr>
														<td>Users Ads</td>
														<td class="text-center">
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("users_ads_index", $all_permission))
																<input type="checkbox" value="1" id="users_ads_index" name="users_ads_index" checked>
																@else
																<input type="checkbox" value="1" id="users_ads_index" name="users_ads_index">
																@endif
																<label for="users_ads_index"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("users_ads_create", $all_permission))
																<input type="checkbox" value="1" id="users_ads_create" name="users_ads_create" checked>
																@else
																<input type="checkbox" value="1" id="users_ads_create" name="users_ads_create">
																@endif
																<label for="users_ads_create"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("users_ads_edit", $all_permission))
																<input type="checkbox" value="1" id="users_ads_edit" name="users_ads_edit" checked>
																@else
																<input type="checkbox" value="1" id="users_ads_edit" name="users_ads_edit">
																@endif
																<label for="users_ads_edit"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("users_ads_delete", $all_permission))
																<input type="checkbox" value="1" id="users_ads_delete" name="users_ads_delete" checked>
																@else
																<input type="checkbox" value="1" id="users_ads_delete" name="users_ads_delete">
																@endif
																<label for="users_ads_delete"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("users_ads_status", $all_permission))
																<input type="checkbox" value="1" id="users_ads_status" name="users_ads_status" checked>
																@else
																<input type="checkbox" value="1" id="users_ads_status" name="users_ads_status">
																@endif
																<label for="users_ads_status"></label>

															</div>
														</td>
													</tr>


													<tr>

														<td>Admin Staff</td>
														<td class="text-center">
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("admin_staff_index", $all_permission))
																<input type="checkbox" value="1" id="admin_staff_index" name="admin_staff_index" checked>
																@else
																<input type="checkbox" value="1" id="admin_staff_index" name="admin_staff_index">
																@endif
																<label for="admin_staff_index"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("admin_staff_create", $all_permission))
																<input type="checkbox" value="1" id="admin_staff_create" name="admin_staff_create" checked>
																@else
																<input type="checkbox" value="1" id="admin_staff_create" name="admin_staff_create">
																@endif
																<label for="admin_staff_create"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("admin_staff_edit", $all_permission))
																<input type="checkbox" value="1" id="admin_staff_edit" name="admin_staff_edit" checked>
																@else
																<input type="checkbox" value="1" id="admin_staff_edit" name="admin_staff_edit">
																@endif
																<label for="admin_staff_edit"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("admin_staff_delete", $all_permission))
																<input type="checkbox" value="1" id="admin_staff_delete" name="admin_staff_delete" checked>
																@else
																<input type="checkbox" value="1" id="admin_staff_delete" name="admin_staff_delete">
																@endif
																<label for="admin_staff_delete"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("admin_staff_status", $all_permission))
																<input type="checkbox" value="1" id="admin_staff_status" name="admin_staff_status" checked>
																@else
																<input type="checkbox" value="1" id="admin_staff_status" name="admin_staff_status">
																@endif
																<label for="admin_staff_status"></label>

															</div>
														</td>
													</tr>

													<tr>
														<td>Role & Permission</td>
														<td class="text-center">
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("role_permission_index", $all_permission))
																<input type="checkbox" value="1" id="role_permission_index" name="role_permission_index" checked />
																@else
																<input type="checkbox" value="1" id="role_permission_index" name="role_permission_index" />
																@endif
																<label for="role_permission_index"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("role_permission_create", $all_permission))
																<input type="checkbox" value="1" id="role_permission_create" name="role_permission_create" checked>
																@else
																<input type="checkbox" value="1" id="role_permission_create" name="role_permission_create">
																@endif
																<label for="role_permission_create"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("role_permission_edit", $all_permission))
																<input type="checkbox" value="1" id="role_permission_edit" name="role_permission_edit" checked />
																@else
																<input type="checkbox" value="1" id="role_permission_edit" name="role_permission_edit" />
																@endif
																<label for="role_permission_edit"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("role_permission_delete", $all_permission))
																<input type="checkbox" value="1" id="role_permission_delete" name="role_permission_delete" checked />
																@else
																<input type="checkbox" value="1" id="role_permission_delete" name="role_permission_delete" />
																@endif
																<label for="role_permission_delete"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("role_permission_status", $all_permission))
																<input type="checkbox" value="1" id="role_permission_status" name="role_permission_status" checked>
																@else
																<input type="checkbox" value="1" id="role_permission_status" name="role_permission_status">
																@endif
																<label for="role_permission_status"></label>

															</div>
														</td>
													</tr>
													<tr>
														<td>Banner & Gallery Setup</td>
														<td class="text-center">
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("bannerAndGallery_index", $all_permission))
																<input type="checkbox" value="1" id="bannerAndGallery_index" name="bannerAndGallery_index" checked />
																@else
																<input type="checkbox" value="1" id="bannerAndGallery_index" name="bannerAndGallery_index" />
																@endif
																<label for="bannerAndGallery_index"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("bannerAndGallery_create", $all_permission))
																<input type="checkbox" value="1" id="bannerAndGallery_create" name="bannerAndGallery_create" checked>
																@else
																<input type="checkbox" value="1" id="bannerAndGallery_create" name="bannerAndGallery_create">
																@endif
																<label for="bannerAndGallery_create"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("bannerAndGallery_edit", $all_permission))
																<input type="checkbox" value="1" id="bannerAndGallery_edit" name="bannerAndGallery_edit" checked />
																@else
																<input type="checkbox" value="1" id="bannerAndGallery_edit" name="bannerAndGallery_edit" />
																@endif
																<label for="bannerAndGallery_edit"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("bannerAndGallery_delete", $all_permission))
																<input type="checkbox" value="1" id="bannerAndGallery_delete" name="bannerAndGallery_delete" checked />
																@else
																<input type="checkbox" value="1" id="bannerAndGallery_delete" name="bannerAndGallery_delete" />
																@endif
																<label for="bannerAndGallery_delete"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("bannerAndGallery_status", $all_permission))
																<input type="checkbox" value="1" id="bannerAndGallery_status" name="bannerAndGallery_status" checked>
																@else
																<input type="checkbox" value="1" id="bannerAndGallery_status" name="bannerAndGallery_status">
																@endif
																<label for="bannerAndGallery_status"></label>

															</div>
														</td>
													</tr>
													<tr>
														<td>Function</td>
														<td class="text-center">
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("function_index", $all_permission))
																<input type="checkbox" value="1" id="function_index" name="function_index" checked />
																@else
																<input type="checkbox" value="1" id="function_index" name="function_index" />
																@endif
																<label for="function_index"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("function_create", $all_permission))
																<input type="checkbox" value="1" id="function_create" name="function_create" checked>
																@else
																<input type="checkbox" value="1" id="function_create" name="function_create">
																@endif
																<label for="function_create"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("function_edit", $all_permission))
																<input type="checkbox" value="1" id="function_edit" name="function_edit" checked />
																@else
																<input type="checkbox" value="1" id="function_edit" name="function_edit" />
																@endif
																<label for="function_edit"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("function_delete", $all_permission))
																<input type="checkbox" value="1" id="function_delete" name="function_delete" checked />
																@else
																<input type="checkbox" value="1" id="function_delete" name="function_delete" />
																@endif
																<label for="function_delete"></label>

															</div>
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("function_status", $all_permission))
																<input type="checkbox" value="1" id="function_status" name="function_status" checked>
																@else
																<input type="checkbox" value="1" id="function_status" name="function_status">
																@endif
																<label for="function_status"></label>

															</div>
														</td>
													</tr>
													<tr>
														<td>Auction Settings</td>
														<td class="text-center">
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("auction_index", $all_permission))
																<input type="checkbox" value="1" id="auction_index" name="auction_index" checked />
																@else
																<input type="checkbox" value="1" id="auction_index" name="auction_index" />
																@endif
																<label for="auction_index"></label>

															</div>
														</td>
														<td class="text-center">
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("auction_edit", $all_permission))
																<input type="checkbox" value="1" id="auction_edit" name="auction_edit" checked />
																@else
																<input type="checkbox" value="1" id="auction_edit" name="auction_edit" />
																@endif
																<label for="auction_edit"></label>

															</div>
														</td>
														<td class="text-center">
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("auction_status", $all_permission))
																<input type="checkbox" value="1" id="auction_status" name="auction_status" checked>
																@else
																<input type="checkbox" value="1" id="auction_status" name="auction_status">
																@endif
																<label for="auction_status"></label>

															</div>
														</td>
													</tr>
													<tr>
														<td>User Special Price</td>
														<td class="text-center">
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("user_special_price_index", $all_permission))
																<input type="checkbox" value="1" id="user_special_price_index" name="user_special_price_index" checked />
																@else
																<input type="checkbox" value="1" id="user_special_price_index" name="user_special_price_index" />
																@endif
																<label for="user_special_price_index"></label>

															</div>
														</td>
														<td class="text-center">
														</td>
														<td class="text-center">
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("user_special_price_edit", $all_permission))
																<input type="checkbox" value="1" id="user_special_price_edit" name="user_special_price_edit" checked />
																@else
																<input type="checkbox" value="1" id="user_special_price_edit" name="user_special_price_edit" />
																@endif
																<label for="user_special_price_edit"></label>

															</div>
														</td>
														<td class="text-center">
														</td>
														<td class="text-center">
														</td>
													</tr>



													<tr>
														<td>Reports</td>
														<td class="text-center"> Reports
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
																@if(in_array("report_view", $all_permission))
																<input type="checkbox" value="1" id="report_view" name="report_view" checked>
																@else
																<input type="checkbox" value="1" id="report_view" name="report_view">
																@endif
																<label for="report_view"></label>

															</div>
														</td>
														<td class="text-center"> Sales Transcation
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("sales_transcation_view", $all_permission))
																<input type="checkbox" value="1" id="sales_transcation_view" name="sales_transcation_view" checked>
																@else
																<input type="checkbox" value="1" id="sales_transcation_view" name="sales_transcation_view">
																@endif
																<label for="sales_transcation_view"></label>

															</div>
														</td>
														<td class="text-center"> Listing Fees Revenue
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("listing_fees_view", $all_permission))
																<input type="checkbox" value="1" id="listing_fees_view" name="listing_fees_view" checked>
																@else
																<input type="checkbox" value="1" id="listing_fees_view" name="listing_fees_view">
																@endif
																<label for="listing_fees_view"></label>

															</div>
														</td>
														<td class="text-center">

														</td>
														<td class="text-center">

														</td>
													</tr>
													<tr>
														<td>Business Page</td>
														<td class="text-center"> Business Page
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("business_page_view", $all_permission))
																<input type="checkbox" value="1" id="business_page_view" name="business_page_view" checked>
																@else
																<input type="checkbox" value="1" id="business_page_view" name="business_page_view">
																@endif
																<label for="business_page_view"></label>

															</div>
														</td>
														<td class="text-center"> Management
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("business_management_view", $all_permission))
																<input type="checkbox" value="1" id="business_management_view" name="business_management_view" checked>
																@else
																<input type="checkbox" value="1" id="business_management_view" name="business_management_view">
																@endif
																<label for="business_management_view"></label>

															</div>
														</td>
														<td class="text-center"> Transactions
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("business_transaction_view", $all_permission))
																<input type="checkbox" value="1" id="business_transaction_view" name="business_transaction_view" checked>
																@else
																<input type="checkbox" value="1" id="business_transaction_view" name="business_transaction_view">
																@endif
																<label for="business_transaction_view"></label>

															</div>
														</td>
														<td class="text-center"> Payment Method for Business
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("business_payment_method_view", $all_permission))
																<input type="checkbox" value="1" id="business_payment_method_view" name="business_payment_method_view" checked>
																@else
																<input type="checkbox" value="1" id="business_payment_method_view" name="business_payment_method_view">
																@endif
																<label for="business_payment_method_view"></label>

															</div>
														</td>
														<td class="text-center">

														</td>
													</tr>
													<tr>
														<td>Email Settings</td>
														<td class="text-center"> Email Setting
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("email_setting_view", $all_permission))
																<input type="checkbox" value="1" id="email_setting_view" name="email_setting_view" checked>
																@else
																<input type="checkbox" value="1" id="email_setting_view" name="email_setting_view">
																@endif
																<label for="email_setting_view"></label>

															</div>
														</td>
														<td class="text-center"> Email Templetes
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("email_templete_view", $all_permission))
																<input type="checkbox" value="1" id="email_templete_view" name="email_templete_view" checked>
																@else
																<input type="checkbox" value="1" id="email_templete_view" name="email_templete_view">
																@endif
																<label for="email_templete_view"></label>

															</div>
														</td>
														<td class="text-center"> SMTP Setting
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("smtp_setting_view", $all_permission))
																<input type="checkbox" value="1" id="smtp_setting_view" name="smtp_setting_view" checked>
																@else
																<input type="checkbox" value="1" id="smtp_setting_view" name="smtp_setting_view">
																@endif
																<label for="smtp_setting_view"></label>

															</div>
														</td>
														<td class="text-center">

														</td>
														<td class="text-center">

														</td>
													</tr>
													<tr>
														<td>Advanced</td>
														<td class="text-center"> Advanced
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("advance_view", $all_permission))
																<input type="checkbox" value="1" id="advance_view" name="advance_view" checked>
																@else
																<input type="checkbox" value="1" id="advance_view" name="advance_view">
																@endif
																<label for="advance_view"></label>

															</div>
														</td>
														<td class="text-center"> Maintenance
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("advance_maintenance_view", $all_permission))
																<input type="checkbox" value="1" id="advance_maintenance_view" name="advance_maintenance_view" checked>
																@else
																<input type="checkbox" value="1" id="advance_maintenance_view" name="advance_maintenance_view">
																@endif
																<label for="advance_maintenance_view"></label>

															</div>
														</td>
														<td class="text-center"> Site Map
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("advance_siteMap_view", $all_permission))
																<input type="checkbox" value="1" id="advance_siteMap_view" name="advance_siteMap_view" checked>
																@else
																<input type="checkbox" value="1" id="advance_siteMap_view" name="advance_siteMap_view">
																@endif
																<label for="advance_siteMap_view"></label>

															</div>
														</td>
														<td class="text-center">

														</td>
														<td class="text-center">

														</td>
													</tr>

													<tr>
														<td>Site Preference</td>
														<td class="text-center"> Setup
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("setup", $all_permission))
																<input type="checkbox" value="1" id="setup" name="setup" checked>
																@else
																<input type="checkbox" value="1" id="setup" name="setup">
																@endif
																<label for="setup"></label>

															</div>
														</td>
														<td class="text-center"> Term & Condition
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("t_c", $all_permission))
																<input type="checkbox" value="1" id="t_c" name="t_c" checked>
																@else
																<input type="checkbox" value="1" id="t_c" name="t_c">
																@endif
																<label for="t_c"></label>

															</div>
														</td>
														<td class="text-center"> About Us
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("a_u", $all_permission))
																<input type="checkbox" value="1" id="a_u" name="a_u" checked>
																@else
																<input type="checkbox" value="1" id="a_u" name="a_u">
																@endif
																<label for="a_u"></label>

															</div>
														</td>
														<td class="text-center"> Privecy & Policy
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("p_c", $all_permission))
																<input type="checkbox" value="1" id="p_c" name="p_c" checked>
																@else
																<input type="checkbox" value="1" id="p_c" name="p_c">
																@endif
																<label for="p_c"></label>

															</div>
														</td>
														<td class="text-center">

														</td>
													</tr>
													<tr>
														<td>Billing & Fees</td>

														<td class="text-center"> View Billing & Fees
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("billing_fees_view", $all_permission))
																<input type="checkbox" value="1" id="billing_fees_view" name="billing_fees_view" checked>
																@else
																<input type="checkbox" value="1" id="billing_fees_view" name="billing_fees_view">
																@endif
																<label for="billing_fees_view"></label>

															</div>
														</td>

														<td class="text-center"> View Site Fees
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("view_site_fees", $all_permission))
																<input type="checkbox" value="1" id="view_site_fees" name="view_site_fees" checked>
																@else
																<input type="checkbox" value="1" id="view_site_fees" name="view_site_fees">
																@endif
																<label for="view_site_fees"></label>

															</div>
														</td>
														<td class="text-center"> edit Site Fees
															<div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">

																@if(in_array("site_fees_edit", $all_permission))
																<input type="checkbox" value="1" id="site_fees_edit" name="site_fees_edit" checked>
																@else
																<input type="checkbox" value="1" id="site_fees_edit" name="site_fees_edit">
																@endif
																<label for="site_fees_edit"></label>

															</div>
														</td>
														<td class="text-center"> Payment Gateway
															<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">

																@if(in_array("payment_gateway", $all_permission))
																<input type="checkbox" value="1" id="payment_gateway" name="payment_gateway" checked>
																@else
																<input type="checkbox" value="1" id="payment_gateway" name="payment_gateway">
																@endif
																<label for="payment_gateway"></label>

															</div>
														</td>
														<td class="text-center">
														</td>
													</tr>

												</tbody>
											</table>
										</div>
										<div class="form-group">
											<input type="submit" value="Submit" class="btn btn-primary">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>





			<!--end: Datatable-->
		</div>
	</div>
	<!--end::Entry-->
</div>


@endsection
@section('js')

<script type="text/javascript">
	$("ul#setting").siblings('a').attr('aria-expanded', 'true');
	$("ul#setting").addClass("show");
	$("ul#setting #role-menu").addClass("active");

	$("#select_all").on("change", function() {
		if ($(this).is(':checked')) {
			$("tbody input[type='checkbox']").prop('checked', true);
		} else {
			$("tbody input[type='checkbox']").prop('checked', false);
		}
	});
</script>
@endsection