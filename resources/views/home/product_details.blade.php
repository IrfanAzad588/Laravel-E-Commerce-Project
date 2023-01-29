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
</head>
<body>
<div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
        </div>
    @endif
    <div class="row py-5">
        <div class="col-8 mx-auto">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title ">Product Details</h4>
                    <div class="py-3 center">
                        <img src="/product/{{$product->image}}" class=" img-thumbnail rounded mx-auto d-block " alt="" height="100" width="">
                    </div>

                    <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <tr>
                            <th>Product Name</th>
                            <td>{{$product->title}}</td>
                        </tr>
                        <tr>
                            <th>Product Description</th>
                            <td>{{$product->description}}</td>
                        </tr>
                        <tr>
                            <th>Available Quantity</th>
                            <td>{{$product->quantity}}</td>
                        </tr>
                        @if($product->discount_price!=null)
                            <tr>
                                <th>Price</th>
                                <td>
                                    <h6 style="text-decoration: line-through; color: #0c5460">
                                        ${{$product->price}}
                                    </h6>
                                </td>
                            </tr>
                            <tr>
                                <th>Discount Price</th>
                                <td>
                                    <h6  style="color: red" >
                                        ${{$product->discount_price}}
                                    </h6>
                                </td>
                            </tr>
                        @else
                            <tr>
                                <th>Price</th>
                                <td>
                                    <h6 style="color: blue">
                                        ${{$product->price}}
                                    </h6>
                                </td>
                            </tr>
                        @endif
                        <tr>
                            <th>Video</th>
                            <td>{{$product->video_link}}</td>
                        </tr>
                    </table>
                    <form action="{{url('add_cart',$product->id)}}" method="post">
                        @csrf
                        <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <tr>
                                <th>Select Quantity</th>
                                <td>
                                    <div class="row">
                                        <div class="col-md-4 mx-auto text-center" >
                                            <input class="rounded" style="border-color: blueviolet; width: 200px; height: 40px;  border-width: 5px" type="number" name="quantity" value="1" min="1">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <div class="row text-center">
                            <div class="col-md-4 mx-auto">
                                <button class="btn btn-outline-warning text-danger rounded" type="submit" style="border-width: 5px">Add To Cart</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>





</div>
@include('home.footer')
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
