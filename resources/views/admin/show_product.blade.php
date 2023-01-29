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
<!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
            @endif
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center display-4">All Product</h4>
                            <table id="datatable-buttons" class=" text-white table table-striped table-dark table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; border-color: greenyellow">
                                <thead>
                                <tr>
                                    <th style="color: darkorange ">SL NO.</th>
                                    <th style="color: lightgreen">Product Title</th>
                                    <th style="color: lightgreen">Description</th>
                                    <th style="color: lightgreen">Quantity</th>
                                    <th style="color: lightgreen">Price</th>
                                    <th style="color: lightgreen">Discount Price</th>
                                    <th style="color: lightgreen">Product Image</th>
                                    <th style="color: darkorange ">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($product as $product)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$product->title}}</td>
                                        <td>{{$product->description}}</td>
                                        <td>{{$product->quantity}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->discount_price}}</td>
                                        <td>
                                            <img style="width:100%; height: 100%" class="=img-res rounded mx-auto d-block" src="/product/{{$product->image}}"  height="150" width="200">
                                        </td>

                                        <td>
                                            <a onclick="return confirm('Are You Sure To Delete This?')"  href="{{url('delete_product',$product->id)}}" class="btn btn-outline-danger">
                                                Delete
                                            </a>
                                            <a href="{{url('update_product',$product->id)}}" class="btn btn-outline-success">
                                                Edit
                                            </a>
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
    </div>
</div>

@include('admin.script')
<!-- End custom js for this page -->
</body>
</html>
