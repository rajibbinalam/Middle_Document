@extends('layout.front.master')
@section('content')
<div id="mainBody">
    <div class="container">
        <div class="row">
            <div class="container" style="margin-bottom: 30px;">
                <div class="row">
                    <div class="span3">
                        <div class="card">
                            <div class="card-header text-center">
                                Category
                            </div>
                            <div class="card-body category-search">
                                <ul>
                                    <li><a href="">Pet for sele</a></li>
                                    <li><a href="">Table </a></li>
                                    <li><a href="">Cats for sele</a></li>
                                    <li><a href="">Buckets</a></li>
                                    <li><a href="">Boats and Jets Skits</a></li>
                                    <a href="#"> More... </a>
                                </ul>

                            </div>
                        </div>
                        <div class="price-search">
                            <h5><strong>Price :</strong></h5>
                            <form action="">
                                <input type="text" name="" id="">
                                <label for="">to</label>
                                <input type="text" name="" id="">
                                <input type="submit" value="GO" name="" id="">
                            </form>
                        </div>
                        <div class="sale-by">
                            <strong>Sale By: </strong>
                            <ul>
                                <li>Ower</li>
                                <li>Delar</li>
                                <li>Agency</li>
                            </ul>
                        </div>
                        <br>
                        <div class="made-by">
                            <strong>Made By: </strong>
                            <ul>
                                <li>Samsung</li>
                                <li>Hp</li>
                                <li>Del</li>
                            </ul>
                            <a href="">More...</a>
                        </div>
                        <br>
                        <div class="body-st6yle-search">
                            <strong>Body Style: </strong>
                            <ul>
                                <li>Samsung</li>
                                <li>Hp</li>
                                <li>Del</li>
                            </ul>
                            <a href="">More...</a>
                        </div>
                        <br>
                        <div class="year-search">
                            <strong>Year: </strong><br>
                            <select class="form-control" id="exampleFormControlSelect1" style="width: 91px;">
                                <option>--Year--</option>
                                <option>2020</option>
                                <option>2020</option>
                                <option>2020</option>
                                <option>2020</option>
                            </select>
                        </div>
                        <br>
                        <div class="mileage-search">
                            <strong>Mileage: </strong>
                            <br>
                            <select class="form-control" id="exampleFormControlSelect1" style="width: 91px;">
                                <option>--Min--</option>
                                <option>2020</option>
                                <option>2020</option>
                                <option>2020</option>
                                <option>2020</option>
                            </select>
                            <span>to</span>
                            <select class="form-control" id="exampleFormControlSelect1" style="width: 91px;">
                                <option>--Max--</option>
                                <option>2020</option>
                                <option>2020</option>
                                <option>2020</option>
                                <option>2020</option>
                            </select>
                            <span>Km</span>
                        </div>
                        <br>
                        <div class="transmission-search">
                            <strong>Transmission: </strong>
                            <ul>
                                <li>Manual</li>
                                <li>Automatic</li>
                                <li>Semi-Automatic</li>
                            </ul>
                        </div>
                        <br>
                        <div class="fuel-search">
                            <strong>Fuel: </strong>
                            <ul>
                                <li>Petrol</li>
                                <li>Dijel</li>
                                <li>CNG</li>
                            </ul>
                        </div>
                        <br>
                        <div class="doors-search">
                            <strong>Doors: </strong>
                            <ul>
                                <li>1</li>
                                <li>2</li>
                                <li>3</li>
                                <li>4</li>
                            </ul>
                        </div>
                        <br>
                        <div class="condition-search">
                            <strong>Condition: </strong>
                            <ul>
                                <li>New</li>
                                <li>Old</li>
                                <li>Used</li>
                            </ul>
                        </div>
                        <br>
                        <div class="perth-search">
                            <strong>Perth </strong><br>
                            <select class="form-control" id="exampleFormControlSelect1" style="width: 91px;">
                                <option>--Perth--</option>
                                <option>2020</option>
                                <option>2020</option>
                                <option>2020</option>
                                <option>2020</option>
                            </select>
                            <h6>Caringbale(6)</h6>
                            <h6>Balga(12)</h6>
                            <h6>Extra(4)</h6>
                            <a href="">More...</a>
                        </div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1" style="display: inline;">Only ad with pic</label>
                        </div><br>
                        <div class="key-search text-center">
                            <strong><a href="">Refine By Keyword </a></strong><br>
                            <input type="text" style=" width:160px" name="" id="" placeholder="Keyword..."><br>
                            <button>GO</button>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="card">
                            <div class="card-header text-center">
                                Category
                            </div>
                            <div class="card-body category-search">
                                <ul>
                                    <li><a href="">Agents & Services</a></li>
                                    <li><a href="">House & Flats for Sale </a></li>
                                    <li><a href="">Huse & Flats for Rent</a></li>
                                    <li><a href="">Office & Commercial</a></li>
                                    <li><a href="">Housing & Wanted</a></li>
                                    <li><a href="">Room & Roommates</a></li>
                                    <li><a href="">Lands</a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="price-search">
                            <h5><strong>Price :</strong></h5>
                            <form action="">
                                <input type="text" name="" id="" placeholder="Max">
                                <label for="">to</label>
                                <input type="text" name="" id="" placeholder="Min">
                                <input type="submit" value="GO" name="" id="">
                            </form>
                        </div>
                        <div class="sale-by">
                            <strong>For Sale By: </strong>
                            <ul>
                                <li>Ower</li>
                                <li>Delar</li>
                                <li>Agency</li>
                            </ul>
                        </div>
                        <br>
                        <div class="made-by">
                            <strong>Property Type: </strong>
                            <ul>
                                <li>Apartment</li>
                                <li>Building</li>
                                <li>Bungglow</li>
                                <li>Commercials</li>
                            </ul>
                            <a href="">More...</a>
                        </div>
                        <br>
                        <div class="price-search">
                            <h5><strong>Area :</strong></h5>
                            <form action="">
                                <input type="text" name="" id="" placeholder="Min">
                                <label for="">to</label>
                                <input type="text" name="" id="" placeholder="Max">
                                <label for="">m2</label>
                                <input type="submit" value="GO" name="" id="">
                            </form>
                        </div>
                        <br>
                        <div class="year-search">
                            <strong>Bed Rooms: </strong><br>
                            <select class="form-control" id="exampleFormControlSelect1" style="width: 91px;">
                                <option>--Bedrooms--</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <br>
                        <div class="mileage-search">
                            <strong>Bath Rooms: </strong>
                            <br>
                            <select class="form-control" id="exampleFormControlSelect1" style="width: 91px;">
                                <option>--Bathroom--</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <br>
                        <div class="transmission-search">
                            <strong>Province: </strong>
                            <ul>
                                <li>Eastern Cape</li>
                                <li>Free State</li>
                                <li>Gauteng</li>
                                <li>KweZulu-natal</li>
                                <li>Limpopo</li>
                                <a href="">More...</a>
                            </ul>
                        </div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1" style="display: inline;">Only ad with pic</label>
                        </div><br>
                        <div class="key-search text-center">
                            <strong><a href="">Refine By Keyword </a></strong><br>
                            <input type="text" style=" width:160px" name="" id="" placeholder="Keyword..."><br>
                            <button>GO</button>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="card">
                            <div class="card-header text-center">
                                Category
                            </div>
                            <div class="card-body category-search">
                                <ul>
                                    <li><a href="">Dog & Puppies</a></li>
                                    <li><a href="">Cats & kittens</a></li>
                                    <li><a href="">Horses</a></li>
                                    <li><a href="">Birds</a></li>
                                    <li><a href="">Fish</a></li>
                                    <li><a href="">Snakes</a></li>
                                    <li><a href="">Reptiles</a></li>
                                    <li><a href="">Spiuders & Insects</a></li>
                                    <li><a href="">Other Pets</a></li>
                                    <li><a href="">Pet Supplies & Services</a></li>
                                    <a href="#"> More... </a>
                                </ul>

                            </div>
                        </div>
                        <div class="price-search">
                            <h5><strong>Price :</strong></h5>
                            <form action="">
                                <input type="text" name="" id="">
                                <label for="">to</label>
                                <input type="text" name="" id="">
                                <input type="submit" value="GO" name="" id="">
                            </form>
                        </div>
                        <div class="sale-by">
                            <strong>Sale By: </strong>
                            <ul>
                                <li>Ower</li>
                                <li>Delar</li>
                                <li>Agency</li>
                            </ul>
                        </div>
                        <br>
                        <div class="breed-search">
                            <strong>Breed: </strong><br>
                            <select class="form-control" id="exampleFormControlSelect1" style="width: 91px;">
                                <option>--Breed--</option>
                                <option>Style</option>
                                <option>Feshion</option>
                                <option>COllection</option>
                                <option>Synoname</option>
                            </select>
                        </div>
                        <br>
                        <div class="body-st6yle-search">
                            <strong>Sex: </strong>
                            <ul>
                                <li>Male</li>
                                <li>Female</li>
                                <li>Males Only</li>
                                <li>Female Only</li>
                                <li>Male - Female</li>
                            </ul>
                            <a href="">More...</a>
                        </div>
                        <br>
                        <div class="transmission-search">
                            <strong>Province: </strong>
                            <ul>
                                <li>Eastern Cape</li>
                                <li>Free State</li>
                                <li>Gauteng</li>
                                <li>KwaZulu Natal</li>
                                <li>Limpopo</li>
                                <a href="">More...</a>
                            </ul>
                        </div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1" style="display: inline;">Only ad with pic</label>
                        </div><br>
                        <div class="key-search text-center">
                            <strong><a href="">Refine By Keyword </a></strong><br>
                            <input type="text" style=" width:160px" name="" id="" placeholder="Keyword..."><br>
                            <button>GO</button>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="card">
                            <div class="card-header text-center">
                                Jobs
                            </div>
                            <div class="card-body category-search">
                                <ul>
                                    <li><a href="">Accounting & Finance</a></li>
                                    <li><a href="">Advertising</a></li>
                                    <li><a href="">Art & Design Media</a></li>
                                    <li><a href="">Business Management</a></li>
                                    <li><a href="">Cleaning</a></li>
                                    <li><a href="">Computing & IT</a></li>
                                    <li><a href="">Construction</a></li>
                                    <li><a href="">Customer Service</a></li>
                                    <li><a href="">Education</a></li>
                                    <li><a href="">Everythink Else</a></li>
                                    <a href="#"> More... </a>
                                </ul>

                            </div>
                        </div>
                        <div class="sale-by">
                            <strong>Industry: </strong>
                            <ul>
                                <li>Accounting</li>
                                <li>Advertising</li>
                                <li>Aerospace</li>
                                <li>Agriculture</li>
                                <li>Arts & Media</li>
                                <a href="">More...</a>
                            </ul>
                        </div>
                        <br>
                        <div class="made-by">
                            <strong>Job Type: </strong>
                            <ul>
                                <li>Permanent</li>
                                <li>Part-Time</li>
                                <li>Temporary / Contract</li>
                            </ul>
                        </div>
                        <br>
                        <div class="body-st6yle-search">
                            <strong>Work Experience: </strong>
                            <ul>
                                <li>1 to 2 Years</li>
                                <li>2 to 5 Years</li>
                                <li>5 to 7 Years</li>
                                <li>7 to 10 Years</li>
                                <li>10+ Years</li>
                            </ul>
                            <a href="">More...</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

@endsection