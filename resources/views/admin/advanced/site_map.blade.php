@extends('layout.admin.master')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Site Map</h5>
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
    <div class="card card-custom gutter-b">



        <div class="card-body row">
            @include('error.message')

            <div class="col-md-3 col-lg-3 col-sm-4">
                <div class="category">
                    <a href="">
                        <h6>Browse</h6>
                    </a>
                    <div class="subCategory">
                        <a href="">
                            <h6>Category</h6>
                        </a>
                        <div class="childCategory">
                            <a href="">
                                <h6>Art</h6>
                            </a>
                            <a href="">
                                <h6>Antiques</h6>
                            </a>
                            <a href="">
                                <h6>Automotive</h6>
                            </a>
                            <a href="">
                                <h6>Baby</h6>
                            </a>
                            <a href="">
                                <h6>Books</h6>
                            </a>
                            <a href="">
                                <h6>Business & Industrial </h6>
                            </a>
                            <a href="">
                                <h6>Cameras & Photo </h6>
                            </a>
                            <a href="">
                                <h6>Cell Phones & PSAs </h6>
                            </a>
                            <a href="">
                                <h6>Clothing & Shoes </h6>
                            </a>
                            <a href="">
                                <h6>Coins &b Paper Money </h6>
                            </a>
                            <a href="">
                                <h6>Collectibles </h6>
                            </a>
                            <a href="">
                                <h6>Computers </h6>
                            </a>
                            <a href="">
                                <h6>Consumer Electronics </h6>
                            </a>
                            <a href="">
                                <h6>Crafts </h6>
                            </a>
                            <a href="">
                                <h6>Dolls & Bears </h6>
                            </a>
                            <a href="">
                                <h6>DVDs & Movies </h6>
                            </a>
                            <a href="">
                                <h6>Entertainment Mem </h6>
                            </a>
                            <a href="">
                                <h6>Everything Else </h6>
                            </a>
                            <a href="">
                                <h6>Health & Beauty </h6>
                            </a>
                            <a href="">
                                <h6>Home & Garden </h6>
                            </a>
                            <a href="">
                                <h6>Jewelry & Watches </h6>
                            </a>
                            <a href="">
                                <h6>Music </h6>
                            </a>
                            <a href="">
                                <h6>Musical Instruments </h6>
                            </a>
                            <a href="">
                                <h6>Pottery & Glass </h6>
                            </a>
                            <a href="">
                                <h6>Real Estate </h6>
                            </a>
                            <a href="">
                                <h6>Specialty Services </h6>
                            </a>
                            <a href="">
                                <h6>Sporting Goods </h6>
                            </a>
                            <a href="">
                                <h6>Sports Fan Shop </h6>
                            </a>
                            <a href="">
                                <h6>Stamps </h6>
                            </a>
                            <a href="">
                                <h6>Tickets </h6>
                            </a>
                            <a href="">
                                <h6>Toys & Hobbies </h6>
                            </a>
                            <a href="">
                                <h6>Travel </h6>
                            </a>
                            <a href="">
                                <h6>Video Games </h6>
                            </a>
                        </div>
                        <a href="">
                            <h6>Regions</h6>
                        </a>
                    </div>
                    <a href="">
                        <h6>Search</h6>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-4">
                <div class="category">
                    <a href="">
                        <h6>Create Listing</h6>
                    </a>
                    <a href="">
                        <h6>Account</h6>
                    </a>
                    <div class="subCategory">
                        <a href="">
                            <h6>Register</h6>
                        </a>
                        <a href="">
                            <h6>Sign In</h6>
                        </a>
                        <a href="">
                            <h6>User Verification</h6>
                        </a>
                        <a href="">
                            <h6>Forgot Password</h6>
                        </a>
                    </div>
                    <a href="">
                        <h6>Contact Us</h6>
                    </a>
                    <a href="">
                        <h6>About Us</h6>
                    </a>
                    <a href="">
                        <h6>Terms & Conditions</h6>
                    </a>
                    <a href="">
                        <h6>Privacy Policy</h6>
                    </a>
                    <a href="">
                        <h6>Site Map</h6>
                    </a>
                    <a href="">
                        <h6>Help</h6>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-4">
                <div class="category">
                    <a href="">
                        <h6></h6>
                    </a>
                    <a href="">
                        <h6>My Account</h6>
                    </a>
                    <div class="subCategory">
                        <a href="">
                            <h6>Summary</h6>
                        </a>
                        <div class="childCategory">
                            <a href="">
                                <h6>Watching</h6>
                            </a>
                            <a href="">
                                <h6>Active</h6>
                            </a>
                        </div>
                        <a href="">
                            <h6>Listing</h6>
                        </a>
                        <div class="childCategory">
                            <a href="">
                                <h6>Active</h6>
                            </a>
                            <a href="">
                                <h6>Ended</h6>
                            </a>
                        </div>
                        <a href="">
                            <h6>Site Fees</h6>
                        </a>
                        <a href="">
                            <h6>Account</h6>
                        </a>
                        <div class="childCategory">
                            <a href="">
                                <h6>Details</h6>
                            </a>
                            <a href="">
                                <h6>Address</h6>
                            </a>
                            <br><br>
                            <a href="">
                                <h6>Password</h6>
                            </a>
                        </div>
                        <a href="">
                            <h6>Messaging</h6>
                        </a>
                        <div class="childCategory">
                            <a href="">
                                <h6>Inbox</h6>
                            </a>
                            <a href="">
                                <h6>Outbox</h6>
                            </a>
                        </div>
                        <a href="">
                            <h6>Feedback</h6>
                        </a>
                        <div class="childCategory">
                            <a href="">
                                <h6>Summary</h6>
                            </a>
                            <a href="">
                                <h6>Buyer</h6>
                            </a>
                            <a href="">
                                <h6>Seller</h6>
                            </a>
                        </div>
                        <a href="">
                            <h6>Listing Preferences</h6>
                        </a>
                        <div class="childCategory">
                            <a href="">
                                <h6>Payment</h6>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
    <!--end::Entry-->
</div>
@endsection