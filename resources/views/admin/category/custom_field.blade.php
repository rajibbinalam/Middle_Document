@extends('layout.admin.master')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Custom Field</h5>
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


        <div class="card-body row" style="width: 100%;">
            @include('error.message')
            <div class="col-md-12">
                <table style="width: 100%;background-color: #ebebeb;border-radius: 3px;margin: 4px 2px 23px 0; border: 1px solid #959595;">
                    <thead>
                        <tr style="display: flex;justify-content: space-evenly; padding: 5px 0 5px 0;">
                            <th class="col">Real Estate</th>
                            <th class="col">Automotive</th>
                            <th class="col">All Other Categories</th>
                        </tr>
                    </thead>
                </table>
            </div>

            <div class="col-md-4" style="display: flex; justify-content:space-evenly">
                <div>
                    <p for="phone">Phone :</p>
                    <p for="phone">Listed By :</p>
                    <p for="phone">Available From :</p>
                    <p for="phone">Property Type :</p>
                    <p for="phone">Bedrooms :</p>
                    <p for="phone">Bathrooms :</p>
                    <p for="phone">Amenities :</p>
                    <p><br></p>
                    <p><br></p>
                    <p><br></p>
                    <p style="margin-bottom: 21px;"></p>
                    <p for="phone">Comunity :</p>
                    <p for="phone">Phone :</p>
                    <p for="phone">City :</p>
                    <p for="phone">Suburbs :</p>
                    <p for="phone">Address :</p>
                </div>
                <div class="text-center Firstcolumn">
                    <input class="form-control" style="margin-top: 0 !important;" type="text" name="" id="phone">
                    <select name="" class="form-control" id="">
                        <option value=""> Owner</option>
                        <option value=""> Buyer</option>
                        <option value=""> Seller</option>
                    </select>
                    <select name="" class="form-control" id="">
                        <option value=""> Immidiatly</option>
                        <option value=""> Buyer</option>
                        <option value=""> Seller</option>
                    </select>
                    <select name="" class="form-control" id="">
                        <option value=""> Appartment</option>
                        <option value=""> Buyer</option>
                        <option value=""> Seller</option>
                    </select>
                    <select name="" class="form-control" id="">
                        <option value=""> 1</option>
                        <option value=""> 2</option>
                        <option value=""> 3</option>
                    </select>
                    <select name="" class="form-control" id="">
                        <option value=""> 1</option>
                        <option value=""> 2</option>
                        <option value=""> 3</option>
                    </select>
                    <select name="" class="form-control" id="">
                        <option value=""> 1 Garage</option>
                        <option value=""> 2 Garage</option>
                        <option value=""> 3 Garage</option>
                    </select>
                    <select name="" class="form-control" id="">
                        <option value=""> Swimming Pool</option>
                        <option value=""> Swimming Pool</option>
                        <option value=""> Swimming Pool</option>
                    </select>
                    <select name="" class="form-control" id="">
                        <option value=""> Lift</option>
                        <option value=""> Lift</option>
                        <option value=""> Lift</option>
                    </select>
                    <select name="" class="form-control" id="">
                        <option value=""> Double CartPort</option>
                        <option value=""> Single CartPort</option>
                        <option value=""> Multi CartPort</option>
                    </select>
                    <select name="" class="form-control" id="">
                        <option value=""> New Shop</option>
                        <option value=""> Single CartPort</option>
                        <option value=""> Multi CartPort</option>
                    </select>
                    <input class="form-control" type="text" name="" id="phone">
                    <select name="" class="form-control" id="">
                        <option value=""> Double CartPort</option>
                        <option value=""> Single CartPort</option>
                        <option value=""> Multi CartPort</option>
                    </select>
                    <select name="" class="form-control" id="">
                        <option value=""> New Shop</option>
                        <option value=""> Single CartPort</option>
                        <option value=""> Multi CartPort</option>
                    </select>
                    <input class="form-control" type="text" name="" id="phone">
                </div>

            </div>

            <div class="col-md-4" style="display: flex; justify-content:space-evenly">
                <div>
                    <p for="phone">Phone :</p>
                    <p for="phone">For Sele By :</p>
                    <p for="phone">Make :</p>
                    <p for="phone">Model :</p>
                    <p for="phone">Body Style :</p>
                    <p for="phone">Year :</p>
                    <p for="phone" style="margin-top: 19px;">Millege :</p>
                    <p for="phone">Transmission :</p>
                    <p for="phone">Fuel :</p>
                    <p for="phone">Doors :</p>
                    <p for="phone">Colors :</p>
                    <p for="phone">Condition :</p>
                    <p for="phone">Air Conditioner :</p>
                    <p for="phone">Register :</p>
                    <p for="phone">Register until :</p>
                    <p for="phone">Suburbs :</p>
                    <p for="phone">City :</p>
                    <p for="phone">Address :</p>
                </div>
                <div class="Firstcolumn">
                    <input class="form-control" style="margin-top: 0 !important;"" type=" text" name="" id="phone">
                    <select name="" class="form-control" id="">
                        <option value=""> Owner</option>
                        <option value=""> Buyer</option>
                        <option value=""> Seller</option>
                    </select>
                    <select name="" class="form-control" id="">
                        <option value=""> BMW</option>
                        <option value=""> Hero</option>
                        <option value=""> HP</option>
                    </select>
                    <select name="" class="form-control" id="">
                        <option value=""> 118</option>
                        <option value=""> 121</option>
                        <option value=""> 345</option>
                    </select>
                    <select name="" class="form-control" id="">
                        <option value=""> Hetchback 1</option>
                        <option value=""> Hetchback 2</option>
                        <option value=""> Hetchback 3</option>
                    </select>
                    <select name="" class="form-control" id="">
                        <option value=""> 2019</option>
                        <option value=""> 2019</option>
                        <option value=""> 2019</option>
                    </select>
                    <input class="form-control" type="text" name="" id="phone">
                    <select name="" class="form-control" id="">
                        <option value=""> Manual</option>
                        <option value=""> Auto</option>
                    </select>
                    <select name="" class="form-control" id="">
                        <option value=""> Petrol</option>
                        <option value=""> Diesel</option>
                    </select>
                    <select name="" class="form-control" id="">
                        <option value=""> 1</option>
                        <option value=""> 2</option>
                        <option value=""> 3</option>
                        <option value=""> 4</option>
                    </select>
                    <select name="" class="form-control" id="">
                        <option value=""> Red</option>
                        <option value=""> Green</option>
                        <option value=""> Blue</option>
                    </select>
                    <select name="" class="form-control" id="">
                        <option value=""> Used</option>
                        <option value=""> New</option>
                    </select>
                    <select name="" class="form-control" id="">
                        <option value=""> Yes</option>
                        <option value=""> No</option>
                    </select>
                    <select name="" class="form-control" id="">
                        <option value=""> Yes</option>
                        <option value=""> No</option>
                    </select>
                    <input class="form-control" type="text" name="" id="phone">
                    <select name="" class="form-control" id="">
                        <option value=""> Dhaka</option>
                        <option value=""> Khulna</option>
                    </select>
                    <select name="" class="form-control" id="">
                        <option value=""> Peth</option>
                        <option value=""> North</option>
                    </select>
                    <input class="form-control" type="text" name="" id="phone">
                </div>

            </div>

            <div class="col-md-4" style="display: flex; justify-content:space-evenly">
                <div>
                    <p for="phone">Phone :</p>
                    <p for="phone" style="margin-top: 19px;">make By :</p>
                    <p for="phone">Add type :</p>
                    <p for="phone">Condition :</p>
                    <p for="phone">Phone :</p>
                    <p for="phone">City :</p>
                    <p for="phone">Suburbs :</p>
                    <p for="phone">Address :</p>
                </div>
                <div class="text-center Firstcolumn">
                    <input class="form-control" style="margin-top: 0 !important;" type="text" name="" id="phone">
                    <input class="form-control" type="text" name="" id="phone">

                    <select name="" class="form-control" id="">
                        <option value=""> For sele</option>
                        <option value=""> for Buy</option>
                    </select>
                    <select name="" class="form-control" id="">
                        <option value=""> Used</option>
                        <option value=""> New</option>
                    </select>
                    <input class="form-control" type="text" name="" id="phone">
                    <select name="" class="form-control" id="">
                        <option value=""> Dhaka</option>
                        <option value=""> Khulna</option>
                    </select>
                    <select name="" class="form-control" id="">
                        <option value=""> Peth</option>
                        <option value=""> North</option>
                    </select>
                    <input class="form-control" type="text" name="" id="phone">
                </div>
            </div>


            <br>

            <div class="row mt-20" style="width: 100%;">
            <div class="col-md-12" style="display: flex; justify-content:space-around; margin-bottom:10px;">
                <h4 style="color: red;"> Pets Custom Fields</h4>
                <h4 style="color: red;"> Electronics Custom Fields</h4>
                <h4 style="color: red;"> Job Custom Fields</h4>
            </div>

                <div class="col-md-4" style="display: flex; justify-content:space-evenly">
                    <div>
                        <p for="phone">Phone :</p>
                        <p for="phone" style="margin-top: 19px;">Category :</p>
                        <p for="phone">Sub Category :</p>
                        <p for="phone">For Sell By :</p>
                        <p for="phone">Breed :</p>
                        <p for="phone">Age :</p>
                        <p for="phone">Sex :</p>
                        <p for="phone">City :</p>
                        <p for="phone">Suburbs :</p>
                        <p for="phone">Address :</p>
                    </div>
                    <div class="text-center Firstcolumn">
                        <input class="form-control" style="margin-top: 0 !important;" type="text" name="" id="phone">

                        <select name="" class="form-control" id="">
                            <option value=""> Pets</option>
                            <option value=""> Cats</option>
                        </select>
                        <select name="" class="form-control" id="">
                            <option value=""> Olpets</option>
                            <option value=""> Black Cats</option>
                        </select>
                        <select name="" class="form-control" id="">
                            <option value=""> Owner</option>
                            <option value=""> Buyer</option>
                        </select>
                        <input class="form-control" type="text" name="" id="phone">
                        <input class="form-control" type="text" name="" id="phone">
                        <select name="" class="form-control" id="">
                            <option value=""> Male</option>
                            <option value=""> Female</option>
                        </select>
                        <select name="" class="form-control" id="">
                            <option value=""> Dhaka</option>
                            <option value=""> Khulna</option>
                        </select>
                        <select name="" class="form-control" id="">
                            <option value=""> Peth</option>
                            <option value=""> North</option>
                        </select>
                        <input class="form-control" type="text" name="" id="phone">
                    </div>
                </div>
                <div class="col-md-4" style="display: flex; justify-content:space-evenly">
                    <div>
                        <p for="phone">Phone :</p>
                        <p for="phone" style="margin-top: 19px;">make By :</p>
                        <p for="phone">Add type :</p>
                        <p for="phone">Condition :</p>
                        <p for="phone">Phone :</p>
                        <p for="phone">City :</p>
                        <p for="phone">Suburbs :</p>
                        <p for="phone">Address :</p>
                    </div>
                    <div class="text-center Firstcolumn">
                        <input class="form-control" style="margin-top: 0 !important;" type="text" name="" id="phone">
                        <input class="form-control" type="text" name="" id="phone">

                        <select name="" class="form-control" id="">
                            <option value=""> For sele</option>
                            <option value=""> for Buy</option>
                        </select>
                        <select name="" class="form-control" id="">
                            <option value=""> Used</option>
                            <option value=""> New</option>
                        </select>
                        <input class="form-control" type="text" name="" id="phone">
                        <select name="" class="form-control" id="">
                            <option value=""> Dhaka</option>
                            <option value=""> Khulna</option>
                        </select>
                        <select name="" class="form-control" id="">
                            <option value=""> Peth</option>
                            <option value=""> North</option>
                        </select>
                        <input class="form-control" type="text" name="" id="phone">
                    </div>
                </div>
                <div class="col-md-4" style="display: flex; justify-content:space-evenly">
                    <div>
                        <p for="phone">Phone :</p>
                        <p for="phone" style="margin-top: 19px;">make By :</p>
                        <p for="phone">Add type :</p>
                        <p for="phone">Condition :</p>
                        <p for="phone">Phone :</p>
                        <p for="phone">City :</p>
                        <p for="phone">Suburbs :</p>
                        <p for="phone">Address :</p>
                    </div>
                    <div class="text-center Firstcolumn">
                        <input class="form-control" style="margin-top: 0 !important;" type="text" name="" id="phone">
                        <input class="form-control" type="text" name="" id="phone">

                        <select name="" class="form-control" id="">
                            <option value=""> For sele</option>
                            <option value=""> for Buy</option>
                        </select>
                        <select name="" class="form-control" id="">
                            <option value=""> Used</option>
                            <option value=""> New</option>
                        </select>
                        <input class="form-control" type="text" name="" id="phone">
                        <select name="" class="form-control" id="">
                            <option value=""> Dhaka</option>
                            <option value=""> Khulna</option>
                        </select>
                        <select name="" class="form-control" id="">
                            <option value=""> Peth</option>
                            <option value=""> North</option>
                        </select>
                        <input class="form-control" type="text" name="" id="phone">
                    </div>
                </div>
      
            </div>
        </div>
    </div>
    <!--end::Entry-->
</div>
@endsection