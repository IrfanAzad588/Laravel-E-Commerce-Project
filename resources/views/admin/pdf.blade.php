<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2 style="">Order Details</h2>
<br>
<h3 style="color: orangered">Customer Id:</h3>
<h4 style="color: blueviolet">{{$order->user_id}}</h4>
<h3 style="color: orangered">Customer Name:</h3>
<h4 style="color: blueviolet">{{$order->name}}</h4>
<h3 style="color: orangered">Customer Email:</h3>
<h4 style="color: blueviolet">{{$order->email}}</h4>
<h3 style="color: orangered">Customer Phone:</h3>
<h4 style="color: blueviolet">{{$order->phone}}</h4>
<h3 style="color: orangered">Customer Address:</h3>
<h4 style="color: blueviolet">{{$order->address}}</h4>


<h3 style="color: orangered">Product Id:</h3>
<h4 style="color: blueviolet">{{$order->product_id}}</h4>
<h3 style="color: orangered">Product name:</h3>
<h4 style="color: blueviolet">{{$order->product_title}}</h4>
<h3 style="color: orangered">Product Quantity:</h3>
<h4 style="color: blueviolet">{{$order->quantity}}</h4>
<h3 style="color: orangered">Product Price:</h3>
<h4 style="color: blueviolet">{{$order->price}}</h4>
<h3 style="color: orangered">Payment Status:</h3>
<h4 style="color: blueviolet">{{$order->payment_status}}</h4>
<br>
{{--<img height="250" width="450" src="product/{{$order->image}}">--}}

</body>
</html>



{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Order Details</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="row">--}}
{{--    <div class="col-lg-10 mx-auto">--}}
{{--        <div class="card">--}}
{{--            <div class="card-body">--}}
{{--                <h4 class="card-title mb-4 text-center display-4">Order Details</h4>--}}
{{--                <form action="" method="" enctype="">--}}
{{--                    @csrf--}}
{{--                    <div class="form-group row mb-4">--}}
{{--                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">User Id</label>--}}
{{--                        <div class="col-sm-9">--}}
{{--                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">{{$order->user_id}}</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group row mb-4">--}}
{{--                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Customer Name</label>--}}
{{--                        <div class="col-sm-9">--}}
{{--                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">{{$order->name}}</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group row mb-4">--}}
{{--                        <label for="horizontal-email-input13" class="col-sm-3 col-form-label">Customer Email</label>--}}
{{--                        <div class="col-sm-9">--}}
{{--                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">{{$order->email}}</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group row mb-4">--}}
{{--                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Customer Address</label>--}}
{{--                        <div class="col-sm-9">--}}
{{--                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">{{$order->address}}</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group row mb-4">--}}
{{--                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Id</label>--}}
{{--                        <div class="col-sm-9">--}}
{{--                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">{{$order->product_id}}</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group row mb-4">--}}
{{--                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Name</label>--}}
{{--                        <div class="col-sm-9">--}}
{{--                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">{{$order->product_title}}</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group row mb-4">--}}
{{--                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Quantity</label>--}}
{{--                        <div class="col-sm-9">--}}
{{--                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">{{$order->quantity}}</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group row mb-4">--}}
{{--                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Price</label>--}}
{{--                        <div class="col-sm-9">--}}
{{--                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">{{$order->price}}</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group row mb-4">--}}
{{--                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Payment Status</label>--}}
{{--                        <div class="col-sm-9">--}}
{{--                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">{{$order->payment_status}}</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group row mb-4">--}}
{{--                        <label for="horizontal-password-input4" class="col-sm-3 col-form-label"> Image</label>--}}
{{--                        <div class="col-sm-9">--}}
{{--                            <img class="mt-3" height="400" width="450" src="product/{{$order->image}}" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}




{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <meta http-equiv="x-ua-compatible" content="ie=edge">--}}

{{--    <title>Order Details</title>--}}
{{--    <style>--}}
{{--        body{--}}
{{--            font-family: "Courier New", Courier, "Lucida Sans Typewriter", "Lucida Typewriter", monospace !important;--}}
{{--            letter-spacing: -0.3px;--}}
{{--        }--}}
{{--        .invoice-wrapper{ width: 700px; margin: auto; }--}}
{{--        .nav-sidebar .nav-header:not(:first-of-type){ padding: 1.7rem 0rem .5rem; }--}}
{{--        .logo{ font-size: 50px; }--}}
{{--        .sidebar-collapse .brand-link .brand-image{ margin-top: -33px; }--}}
{{--        .content-wrapper{ margin: auto !important; }--}}
{{--        .billing-company-image { width: 50px; }--}}
{{--        .billing_name { text-transform: uppercase; }--}}
{{--        .billing_address { text-transform: capitalize; }--}}
{{--        .table{ width: 100%; border-collapse: collapse; }--}}
{{--        th{ text-align: left; padding: 10px; }--}}
{{--        td{ padding: 10px; vertical-align: top; }--}}
{{--        .row{ display: block; clear: both; }--}}
{{--        .text-right{ text-align: right; }--}}
{{--        .table-hover thead tr{ background: #eee; }--}}
{{--        .table-hover tbody tr:nth-child(even){ background: #fbf9f9; }--}}
{{--        address{ font-style: normal; }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="row invoice-wrapper">--}}
{{--    <div class="col-md-12">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <table class="table">--}}
{{--                    <tr>--}}
{{--                        <td>--}}
{{--                            <h4>--}}
{{--                                <span class="">Areeba's Glam</span>--}}
{{--                            </h4>--}}
{{--                        </td>--}}
{{--                        <td class="text-right">--}}
{{--                            <strong>Date: 28 April 2020</strong>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                </table>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <br><br>--}}
{{--        <div class="row invoice-info">--}}
{{--            <div class="col-md-12">--}}
{{--                <table class="table">--}}
{{--                    <tr>--}}
{{--                        <td>--}}
{{--                            <div class="">--}}
{{--                                From--}}
{{--                                <address>--}}
{{--                                    <strong>Areeba's Glam</strong><br>--}}
{{--                                    HSR Layout Sector 6, Bnagalore<br>--}}
{{--                                    Email: stackcoder.in@gmail.com--}}
{{--                                </address>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <div class="">--}}
{{--                                To--}}
{{--                                <address>--}}
{{--                                    <strong class="billing_name">{{$order->name}}</strong><br>--}}
{{--                                    <span class="billing_address">{{$order->address}}</span><br>--}}
{{--                                    Phone: {{$order->phone}}<br>--}}
{{--                                    Email: {{$order->email}}--}}
{{--                                </address>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <div class="text-right">--}}
{{--                                <b>Customer Id:</b>--}}
{{--                                {{$order->user_id}}--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                </table>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <br><br>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12 table-responsive">--}}
{{--                <table class="table table-condensed table-hover">--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th>Qty</th>--}}
{{--                        <th>Product Name</th>--}}
{{--                        <th>Product Description</th>>--}}
{{--                        <th>Quantity</th>--}}
{{--                        <th>Price</th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    <tr>--}}
{{--                        <td>1</td>--}}
{{--                        <td>{{$order->product_title}}</td>--}}
{{--                        <td>{{$order->description}}</td>--}}
{{--                        <td>{{$order->quantity}}</td>--}}
{{--                        <td>{{$order->price}}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td colspan="3" class="text-right">Sub Total</td>--}}
{{--                        <td class="text-right"><strong>&#8377; 1000</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td colspan="3" class="text-right">TAX (18%)</td>--}}
{{--                        <td class="text-right"><strong>&#8377; 180</strong></td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td colspan="3" class="text-right">Total Payable</td>--}}
{{--                        <td class="text-right"><strong>&#8377; 1180</strong></td>--}}
{{--                    </tr>--}}
{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </div>--}}
{{--            <!-- /.col -->--}}
{{--        </div>--}}
{{--        <br><br><br>--}}
{{--        <div>--}}
{{--            <small><small>NOTE: This is system generate invoice no need of signature</small></small>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}



