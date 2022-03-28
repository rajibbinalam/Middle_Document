
<?php
use App\Models\Category;
use App\Models\City;
$categories = Category::categories();
$cities = City::cities();
// echo "<pre>";print_r($categories);die();
?>



<div id="sidebar" class="span33">
                <ul id="sideManu" class="nav nav-tabs nav-stacked">
                    <li class="subMenu"><a>Browse Our Categories</a>
                        @foreach($categories as $row)
                        <ul>
                            <li>
                                <button class="dropdown-btn">
                                    <i class="icon-chevron-right"></i><strong>{{$row['cat_name']}}</strong>
                                </button>
                                <div class="dropdown-container">
                                    @foreach($row['subcategories'] as $subcat)
                                    <a href="{{url($subcat['url'])}}">{{$subcat['subcat_name']}}</a>
                                    @endforeach
                                   
                                </div>
                            </li>
                        </ul>
                        @endforeach

                    </li>

                </ul>
                <br />
                <ul id="sideManu" class="nav nav-tabs nav-stacked">
                    <li class="subMenu"><a>Select a Region</a>
                        @foreach($cities as $row)
                        <ul>
                            <li>
                                <button class="dropdown-btn">
                                    <i class="icon-chevron-right"></i><strong>{{$row['city_name']}}</strong>
                                </button>
                                <div class="dropdown-container">
                                @foreach($row['subcity'] as $subcat)
                                    <a href="#">{{$subcat['suburbs_name']}}</a>
                                   @endforeach
                                </div>

                                </a>
                            </li>
                        </ul>
                        @endforeach

                    </li>

                </ul>
                @if(isset($pageName) && $pageName="Category")
                <div>
              <h5>Sale By</h5>
              @foreach( $sellerType as $sell)
              <input type="checkbox" class="form-control sell" name="sell[]" id="{{$sell}}" value="{{$sell}}">&nbsp; &nbsp;{{$sell}}<br>
              @endforeach
</div>
                @endif
                <br>


                @if(isset($pageName) && $pageName="Category")
                <div>
              <h5>Transmission</h5>
              @foreach( $transmission as $trans)
              <input type="checkbox" class="form-control trans" name="trans[]" id="{{$trans}}" value="{{$trans}}">&nbsp; &nbsp;{{$trans}}<br>
              @endforeach
</div>
                @endif
                <br>




                @if(isset($pageName) && $pageName="Category")
                <div>
              <h5>Doors</h5>
              @foreach( $doors as $door)
              <input type="checkbox" class="form-control door" name="door[]" id="{{$door}}" value="{{$door}}">&nbsp; &nbsp;{{$door}}<br>
              @endforeach
</div>
                @endif
                <br>



                @if(isset($pageName) && $pageName="Category")
                <div>
              <h5>Condition</h5>
              @foreach( $condition as $con)
              <input type="checkbox" class="form-control con" name="con[]" id="{{$con}}" value="{{$con}}">&nbsp; &nbsp;{{$con}}<br>
              @endforeach
</div>
                @endif
                <br>

               
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1" style="display: inline;">Only ad with
                        pic</label>
                </div><br>
                <div class="key-search text-center">
                    <strong><a href="">Refine By Keyword </a></strong><br>
                    <input type="text" style=" width:160px" name="" id="" placeholder="Keyword..."><br>
                    <button>GO</button>
                </div>

            </div>