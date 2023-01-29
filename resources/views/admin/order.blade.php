<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')
<!-- partial -->
    @include('admin.header')
    {{-- partial --}}

    <div class="main-panel">
        <div class="content-wrapper ">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
            @endif
            <div class="row" >
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center display-4">All Order</h4>

                            <div class="text-center  display-4">
                                <h2>Search</h2>
                                <form action="{{url('search')}}" method="get" >
                                    @csrf
                                    <div class="mx-auto mt-1">
                                        <input class="text-dark fa-bold" type="text" name="search" placeholder="Search for something">
                                        <input class="fa-bold btn btn-outline-info" type="submit" name="submit" value="Search">
                                    </div>
                                </form>
                            </div>

                            <table class="r-5 text-white table table-striped table-dark table-bordered mt-4" style="border-collapse: collapse; border-spacing: 0; width: 100%; border-color: greenyellow; padding-right: 100px">
                                <thead>
                                <tr>
                                    <th style="color: darkorange ">SL NO.</th>
                                    <th style="color: lightgreen">Name</th>
                                    <th style="color: lightgreen">Email</th>
                                    <th style="color: lightgreen">Address</th>
                                    <th style="color: lightgreen">Phone</th>
                                    <th style="color: lightgreen">Product Title</th>
                                    <th style="color: lightgreen">Quantity</th>
                                    <th style="color: lightgreen">Price</th>
                                    <th style="color: lightgreen">Payment Status</th>
                                    <th style="color: lightgreen">Delivery Status</th>
                                    <th style="color: lightgreen">Image</th>
                                    <th class="text-center" style="color: darkorange">Delivered <br> & <br>Print PDF <br> & <br>Send Email</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($order as $order)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$order->name}}</td>
                                        <td>{{$order->email}}</td>
                                        <td>{{$order->address}}</td>
                                        <td>{{$order->phone}}</td>
                                        <td>{{$order->product_title}}</td>
                                        <td>{{$order->quantity}}</td>
                                        <td>{{$order->price}}</td>
                                        <td>{{$order->payment_status}}</td>
                                        <td>{{$order->delivery_status}}</td>
                                        <td>
                                            <img style="width:100%; height: 100%" class="=img-res rounded mx-auto d-block" src="/product/{{$order->image}}"  height="150" width="200">
                                        </td>

                                        <td>
                                            @if($order->delivery_status=='processing')
                                                <a onclick="return confirm('Are you sure this product is Delivered?')" href="{{url('delivered',$order->id)}}" class="btn btn-outline-info mt-1 mx-auto">
                                                    Delivered
                                                </a>
                                            @else

                                                <p style="color: yellow">Delivered</p>

                                            @endif
                                                <br>
                                                <a onclick="return confirm('Are You Want To Print This?')"  href="{{url('print_pdf',$order->id)}}" class="btn btn-outline-danger mt-1">
                                                    PDF
                                                </a>
                                                <br>
                                                <a href="{{url('send_email',$order->id)}}" class="btn btn-outline-success mt-1">
                                                    Send Email
                                                </a>
                                        </td>
                                    </tr>

                                @empty
                                   <tr>
                                       <td colspan="16">
                                           <p class="text-danger text-center display-4">No Data Found</p>
                                       </td>
                                   </tr>
                                @endforelse

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div> <!-- end col -->
            </div>

        </div>
    </div>
</div>

{{-- plugins:js --}}
@include('admin.script')
<!-- End custom js for this page -->
</div>
</body>
</html>
