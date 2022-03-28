@extends('layout.front.master')

<?php
use App\Models\Category;
$categories = Category::categories();

// echo "<pre>";print_r($categories);die();
?>
@section('content')
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            <div id="sidebar" class="span33">
                <div class="well well-small"
                    style="background-color: #2D93CA; text-align: center;color: white;padding: 2px 0 2px 0px; font-weight: 800;">
                    Connect with us</a></div>
                <img style="height:100px;width: 300px;" src="{{asset('assets/frontend')}}/themes/images/connect.jpg">
                <br><br>
                <ul id="sideManu" class="nav nav-tabs nav-stacked">
                    <li class="subMenu">
                        <a style="background-color: #2d93ca !important;">Browse Our Categories</a>
                        @foreach($categories as $row)
                        <ul>
                            <li>
                                <button class="dropdown-btn">
                                    <i class="icon-chevron-right"></i><strong>{{$row['cat_name']}}</strong>
                                </button>
                                <div class="dropdown-container">
                                    @foreach($row['subcategories'] as $subcat)
                                    <a href="{{route('front.category',$subcat['url'])}}">{{$subcat['subcat_name']}}</a>
                                    @endforeach

                                </div>
                            </li>
                        </ul>
                        @endforeach

                    </li>

                </ul>

                <br />
                <div class="well well-small">
                    Select a Region:

                </div>

                <br />

              
                <br>
               
            </div>
            <!-- Sidebar end=============================================== -->
            <div class="span9">
                <div class="well well-small">
{{$gs->t_c_information}}
                   
                </div>
               

           
               
             </div>
                            
        </div>
    </div>

    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function () {
                this.classList.toggle("catActive");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }

    </script>
    @endsection
