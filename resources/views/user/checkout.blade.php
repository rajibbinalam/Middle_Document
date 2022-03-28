@extends('layout.front.master')
@section('content')
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            @include('user.user_sidebar')
            <!-- Sidebar end=============================================== -->
            <div class="spana9">
                <ul class="breadcrumb" style="background-color: #1a4bbb;color:white">
                    <li><a href="{{url('/')}}" style="color:#26262600;">Home</a> /</li>
                    <li>View Active Advertising</li>
                </ul>


                <div class="row">
                    <div id="gallery" class="span3">
                    </div>




                    <a class="btn btn-small pull-right" href="#detail">More Details</a>
                    <br class="clr" />

                    <hr class="soft" />




                    <div class="span9">

                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="home">
                                <h4>Product Information</h4>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Row Id</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach(Cart::content() as $cart)
                                        <tr>
                                            <th scope="row">{{++$loop->index}}</th>
                                            <td>{{$cart->name}}</td>
                                            <td>{{$cart->id}}</td>
                                            <td>{{$cart->qty}}</td>
                                            <td>{{$cart->price}}</td>
                                            <td>
                                                <a href="{{url('/user/cart-remove/'.$cart->rowId)}}" class="remove"><i class="fa fa-trash-o" aria-hidden="true"> Delete</i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col">Total: {{Cart::subtotal()}}</th>
                                                <th scope="col"></th>
                                            </tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>
                                                <!-- <form action="" method="post">
                                                    
                                                    <input type="hidden" name="product_id">
                                                    <input type="hidden" name="user_id">
                                                    <input type="hidden" name="quantity">
                                                    
                                                </form> -->
                                                <a href="{{route('Order')}}" class="btn btn-primary">Check Out</a>
                                            </th>
                                        </thead>
                                    </tbody>
                                </table>


                            </div>
                            <div class="tab-pane fade active in" id="home">
                                <h4>Order List</h4>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Product Number</th>
                                            <th scope="col">Product Id</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach(App\Models\Order::where('user_id',16)->get() as $order)
                                        <tr>
                                            <th scope="row">{{++$loop->index}}</th>
                                            <td>{{$order->order_number}}</td>
                                            <td>{{$order->product_id}}</td>
                                            <td>{{$order->quantity}}</td>
                                            <td>{{$order->total_cost}}</td>
                                            <td>
                                                <a href="{{url('/user/order-delete/'.$order->id)}}" class="remove"><i class="fa fa-trash-o" aria-hidden="true"> Cancel</i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col">Total: {{App\Models\Order::where('user_id',Auth::user()->id)->sum('total_cost')}}</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                    </tbody>
                                </table>


                            </div>
                        </div>

                    </div>



                </div> <!-- row end -->




            </div> <!-- well end -->



        </div> <!-- span9 end -->




    </div>
</div>
</div>



@endsection