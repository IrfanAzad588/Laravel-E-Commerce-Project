<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
    <!-- font awesome style -->
    <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
    <style>
        #round1 {
            border-radius: 35px;
            border-color: orange;
            border-width: 5px;
            background: transparent;
            padding: 20px;
            height: 30px;
            width: 135px;
        }
        #round2 {
            border-radius: 35px;
            border-color: orange;
            border-width: 5px;
            background-color: yellow;
            height: 44px;
            width: 140px;
        }
    </style>
</head>
<body>
<div class="hero_area">
    <!-- header section strats -->
@include('home.header')
<!-- end header section -->


    @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
        </div>
    @endif

    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center display-4">Ordered Product</h4>
                    <table id="datatable-buttons" class="text-white table table-striped table-dark table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; border-color: greenyellow">
                        <thead>
                        <tr>
                            <th>SL NO.</th>
                            <th>Product Title</th>
                            <th>Product Quantity</th>
                            <th>Price</th>
                            <th>Payment Status</th>
                            <th>Delivery Status</th>
                            <th>image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $total_price=0; ?>
                        @foreach($order as $order)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$order->product_title}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>{{$order->price}}</td>
                                <td>{{$order->payment_status}}</td>
                                <td>{{$order->delivery_status}}</td>
                                <td>
                                    <img style="width:150px" class="=img-res rounded mx-auto d-block" src="/product/{{$order->image}}"  height="150" width="200">
                                </td>
                                <td>
                                    @if($order->delivery_status == 'processing')
                                    <a  onclick="return confirm('Are You Sure To Cancel This Order?')"  href="{{url('cancel_order',$order->id)}}" class="btn btn-outline-danger">
                                        Cancel Order
                                    </a>
                                    @else
                                        <p class="text-warning">Not Allowed!</p>
                                    @endif
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div>








</div>
<div class="mt-10">
    @include('home.footer')
</div>

<!-- footer end -->
<div class="cpy_">
    <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

        Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

    </p>
</div>
<!-- jQery -->
<script src="home/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="home/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="home/js/bootstrap.js"></script>
<!-- custom js -->
<script src="home/js/custom.js"></script>
</body>
</html>
