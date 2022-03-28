<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
    <!--begin::Menu Container-->
    <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
        <!--begin::Menu Nav-->
        <ul class="menu-nav">
            <li class="menu-item menu-item-active" aria-haspopup="true">
                <a href="{{route('admin.dashboard')}}" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                                <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>

            <!-- <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('admin.summary')}}" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                    </span>
                    <span class="menu-text">Summary</span>
                    <i class="menu-arrow"></i>
                </a>
            </li> -->
            <?php
            $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
            $report_view_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'report_view'],
                    ['role_id', $role->id]
                ])->first();

            ?>
            @if($report_view_permission_active )
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
                        <i class="fa fa-file" aria-hidden="true"></i>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Reports</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                            <span class="menu-link">
                                <span class="menu-text">Reports</span>
                            </span>
                        </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.sales_transcation.index')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">Sales Transactions</span>
                                <i class="menu-arrow"></i>
                            </a>
                        </li>

                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.lisitng_fees_revenue')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">Listing Fees Revenue</span>
                                <i class="menu-arrow"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            @endif


            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
                        <i class="fas fa-cog"></i>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Site Preferences</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                            <span class="menu-link">
                                <span class="menu-text">Site Preferences</span>
                            </span>
                        </li>
                        <?php
                        $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
                        $setup_permission_active = DB::table('permissions')
                            ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                            ->where([
                                ['permissions.name', 'setup'],
                                ['role_id', $role->id]
                            ])->first();

                        ?>
                        @if($setup_permission_active )
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.general.setting')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">Setup</span>
                                <i class="menu-arrow"></i>
                            </a>

                        </li>
                        @endif
                        <?php
                        $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
                        $t_c_permission_active = DB::table('permissions')
                            ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                            ->where([
                                ['permissions.name', 't_c'],
                                ['role_id', $role->id]
                            ])->first();

                        ?>
                        @if($t_c_permission_active )
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.general.term_and_condition')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">Terms & Conditions</span>
                                <i class="menu-arrow"></i>
                            </a>
                        </li>
                        @endif
                        <?php
                        $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
                        $a_u_permission_active = DB::table('permissions')
                            ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                            ->where([
                                ['permissions.name', 'a_u'],
                                ['role_id', $role->id]
                            ])->first();

                        ?>
                        @if($a_u_permission_active )
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.general.about_us')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">About Us</span>
                                <i class="menu-arrow"></i>
                            </a>

                        </li>
                        @endif
                        <?php
                        $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
                        $p_c_permission_active = DB::table('permissions')
                            ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                            ->where([
                                ['permissions.name', 'p_c'],
                                ['role_id', $role->id]
                            ])->first();

                        ?>
                        @if($p_c_permission_active )
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.general.privacy_policy')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">Privacy Policy</span>
                                <i class="menu-arrow"></i>
                            </a>

                        </li>
                        @endif

                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.general.site_fees')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">Site Fees</span>
                                <i class="menu-arrow"></i>
                            </a>

                        </li>


                    </ul>
                </div>
            </li>
            <?php
            $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
            $billing_fees_view_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'billing_fees_view'],
                    ['role_id', $role->id]
                ])->first();

            ?>
            @if($billing_fees_view_permission_active )
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
                        <i class="fas fa-file-invoice-dollar"></i>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Billing & Fees</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                            <span class="menu-link">
                                <span class="menu-text">Billing & Fees</span>
                            </span>

                        </li>
                        <!-- 
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.site.fees.show')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">Add Site Fees</span>
                                <i class="menu-arrow"></i>
                            </a>

                        </li> -->
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.site.fees')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text"> Edit  Fees</span>
                                <i class="menu-arrow"></i>
                            </a>

                        </li>
                        <!-- <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="javascript:;" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">Edit Fees</span>
                                <i class="menu-arrow"></i>
                            </a>

                        </li> -->
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.edit_payment_gateway')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">Edit Payment Gateway</span>
                                <i class="menu-arrow"></i>
                            </a>

                        </li>


                    </ul>
                </div>
            </li>
            @endif

            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
                        <i class="fas fa-user"></i>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Users</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                            <span class="menu-link">
                                <span class="menu-text">Users</span>
                            </span>
                        </li>
                        <?php
                        $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
                        $users_index_permission_active = DB::table('permissions')
                            ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                            ->where([
                                ['permissions.name', 'users_index'],
                                ['role_id', $role->id]
                            ])->first();

                        ?>
                        @if($users_index_permission_active )
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.user.index')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">Management</span>
                                <i class="menu-arrow"></i>
                            </a>

                        </li>
                        @endif

                        <?php
                        $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
                        $user_special_price_index_permission_active = DB::table('permissions')
                            ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                            ->where([
                                ['permissions.name', 'user_special_price_index'],
                                ['role_id', $role->id]
                            ])->first();

                        ?>
                        @if($user_special_price_index_permission_active )
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.user.user_price')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">User Special Price</span>
                                <i class="menu-arrow"></i>
                            </a>

                        </li>
                        @endif


                    </ul>
                </div>
            </li>
            <?php
            $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
            $category_index_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'category_index'],
                    ['role_id', $role->id]
                ])->first();

            ?>
            @if($category_index_permission_active )
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
                        <i class="fas fa-shopping-cart"></i>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Categories</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                            <span class="menu-link">
                                <span class="menu-text">Categories</span>
                            </span>
                        </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.category.index')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">Edit</span>
                                <i class="menu-arrow"></i>
                            </a>
                        </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.customField')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">Custom Fields</span>
                                <i class="menu-arrow"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            @endif

            <?php
            $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
            $subcategory_index_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'subcategory_index'],
                    ['role_id', $role->id]
                ])->first();

            ?>
            @if($subcategory_index_permission_active )

            <!-- <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                       
                        <i class="fas fa-shopping-cart"></i>
                      
                    </span>
                    <span class="menu-text">SubCategories</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                            <span class="menu-link">
                                <span class="menu-text">SubCategories</span>
                            </span>
                        </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.subcategory.index')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">SubCategory</span>
                                <i class="menu-arrow"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> -->
            @endif

            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
                        <i class="fas fa-flag"></i>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Suburbd/town</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                            <span class="menu-link">
                                <span class="menu-text">Suburbd/town</span>
                            </span>
                        </li>
                        <?php
                        $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
                        $city_index_permission_active = DB::table('permissions')
                            ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                            ->where([
                                ['permissions.name', 'city_index'],
                                ['role_id', $role->id]
                            ])->first();

                        ?>
                        @if($city_index_permission_active )
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.city.index')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">Edit</span>
                                <i class="menu-arrow"></i>
                            </a>

                        </li>
                        @endif
                        <?php
                        $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
                        $suburbs_index_permission_active = DB::table('permissions')
                            ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                            ->where([
                                ['permissions.name', 'suburbs_index'],
                                ['role_id', $role->id]
                            ])->first();

                        ?>
                        @if($suburbs_index_permission_active )
                        <!-- <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.suburbs.index')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">Add Suburbs</span>
                                <i class="menu-arrow"></i>
                            </a>

                        </li> -->
                        @endif


                    </ul>
                </div>
            </li>

            <?php
            $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
            $users_ads_index_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'users_ads_index'],
                    ['role_id', $role->id]
                ])->first();

            ?>
            @if($users_ads_index_permission_active )
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
                        <i class="fas fa-ad"></i>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">User Ads</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                            <span class="menu-link">
                                <span class="menu-text">User Ads</span>
                            </span>
                        </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.user.user_adds')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">Ads</span>
                                <i class="menu-arrow"></i>
                            </a>

                        </li>



                    </ul>
                </div>
            </li>
            @endif


            <!-- <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                      
                        <i class="fas fa-image"></i>
                     
                    </span>
                    <span class="menu-text">Banner Setup</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                            <span class="menu-link">
                                <span class="menu-text">Banner Setup</span>
                            </span>
                        </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.banner.insert')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">Banner</span>
                                <i class="menu-arrow"></i>
                            </a>

                        </li>



                    </ul>
                </div>
            </li> -->
            <?php
            $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
            $bannerAndGallery_index_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'bannerAndGallery_index'],
                    ['role_id', $role->id]
                ])->first();

            ?>
            @if($bannerAndGallery_index_permission_active )
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
                        <i class="fas fa-image"></i>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Banner & Gallery Setup</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                            <span class="menu-link">
                                <span class="menu-text">Banner & Gallery Setup</span>
                            </span>
                        </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.adpage.index')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">view</span>
                                <i class="menu-arrow"></i>
                            </a>

                        </li>



                    </ul>
                </div>
            </li>
            @endif

            <?php
            $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
            $email_setting_view_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'email_setting_view'],
                    ['role_id', $role->id]
                ])->first();

            ?>
            @if($email_setting_view_permission_active )
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
                        <i class="fas fa-envelope"></i>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Email Setting</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                            <span class="menu-link">
                                <span class="menu-text">Email Setting</span>
                            </span>
                        </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.email_tanplete.index')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">Email Tamplates</span>
                                <i class="menu-arrow"></i>
                            </a>

                        </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.setting.mail')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">SMTP Setting</span>
                                <i class="menu-arrow"></i>
                            </a>

                        </li>



                    </ul>
                </div>
            </li>
            @endif

            <?php
            $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
            $advance_view_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'advance_view'],
                    ['role_id', $role->id]
                ])->first();

            ?>
            @if($advance_view_permission_active )
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
                        <i class="fas fa-users-cog"></i>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Advanced</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                            <span class="menu-link">
                                <span class="menu-text">Advanced</span>
                            </span>
                        </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.maintenence')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">Maintenance</span>
                                <i class="menu-arrow"></i>
                            </a>

                        </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.siteMap')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">Site Map</span>
                                <i class="menu-arrow"></i>
                            </a>

                        </li>



                    </ul>
                </div>
            </li>
            @endif

            <?php
            $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
            $business_page_view_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'business_page_view'],
                    ['role_id', $role->id]
                ])->first();

            ?>
            @if($business_page_view_permission_active )
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
                        <i class="fas fa-chart-bar"></i>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Business Page</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                            <span class="menu-link">
                                <span class="menu-text">Business Page</span>
                            </span>
                        </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.business_management.index')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">Management</span>
                                <i class="menu-arrow"></i>
                            </a>

                        </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.business_transcation.index')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">Transactions</span>
                                <i class="menu-arrow"></i>
                            </a>

                        </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('admin.payment_for_business')}}" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">Payment Method for Business</span>
                                <i class="menu-arrow"></i>
                            </a>

                        </li>



                    </ul>
                </div>
            </li>
            @endif

            <!-- <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <i class="fas fa-chart-bar"></i>
                    </span>
                    <span class="menu-text">Cache Clear</span>
                    <i class="menu-arrow"></i>
                </a>
            </li> -->

            <?php
            $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
            $admin_staff_index_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'admin_staff_index'],
                    ['role_id', $role->id]
                ])->first();

            ?>
            @if($admin_staff_index_permission_active )
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('admin.staff.index')}}" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
                        <i class="fas fa-atom"></i>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Admin Staff</span>
                    <i class="menu-arrow"></i>
                </a>

            </li>
            @endif
            <?php
            $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
            $auction_index_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'auction_index'],
                    ['role_id', $role->id]
                ])->first();

            ?>
            @if($auction_index_permission_active )
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('admin.general.auction_setting')}}" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
                        <i class="fas fa-chart-bar"></i>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Auction Setting</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            @endif
            <?php
            $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
            $function_index_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'function_index'],
                    ['role_id', $role->id]
                ])->first();

            ?>
            @if($function_index_permission_active )
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('admin.general.auction_bid')}}" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
                        <i class="fas fa-atom"></i>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Function</span>
                    <i class="menu-arrow"></i>
                </a>

            </li>
            @endif
            <?php
            $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
            $role_permission_index_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'role_permission_index'],
                    ['role_id', $role->id]
                ])->first();

            ?>
            @if($role_permission_index_permission_active )
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('admin.role.index')}}" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
                        <i class="fas fa-pencil-ruler"></i>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Role & Permission</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            @endif

        </ul>
        <!--end::Menu Nav-->
    </div>
    <!--end::Menu Container-->
</div>