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
                <div class="col-lg-11 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4 text-center display-4">Edit Product form</h4>
                            <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Title</label>
                                    <div class="col-sm-9">
                                        <input value="{{$product->title}}" placeholder="Write a title" required="" type="text" class="form-control text-info" id="horizontal-firstname-input" name="title"/>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-email-input13" class="col-sm-3 col-form-label">Product Description</label>
                                    <div class="col-sm-9">
                                        <textarea required="" placeholder="Write a description" class="form-control summernote text-info" id="horizontal-firstname-input3" name="description" >{{$product->description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Product Price</label>
                                    <div class="col-sm-9">
                                        <input required="" placeholder="Write a Price" type="number" class="form-control text-info" id="horizontal-password-input" value="{{$product->price}}" name="price" />
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Discount Price</label>
                                    <div class="col-sm-9">
                                        <input placeholder="Write a Discount Price" type="number" class="form-control text-info" id="horizontal-password-input" value="{{$product->discount_price}}" name="dis_price"/>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input2" class="col-sm-3 col-form-label">Product Quantity</label>
                                    <div class="col-sm-9">
                                        <input required="" placeholder="Write Product Quantity" type="number" class="form-control text-info" min="0" id="horizontal-password-input2" value="{{$product->quantity}}" name="quantity"/>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Category</label>
                                    <div class="col-sm-9" >
                                        <select class="form-control text-white" name="category" required="" >
                                            <option class="text-white" value="{{$product->category}}" >{{$product->category}} </option>
                                            @foreach($category as $category)
                                                <option class="text-info" value="{{$category->category_name}}">{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input4" class="col-sm-3 col-form-label">Change Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control-file text-info" id="horizontal-password-input4" name="image"/>
                                        <img class="mt-3" height="400" width="450" src="/product/{{$product->image}}" alt="">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Video Link</label>
                                    <div class="col-sm-9">
                                        <input placeholder="Give a Video Link" type="text" class="form-control text-info" id="horizontal-firstname-input"  value="{{$product->video_link}}" name="video_link"/>
                                    </div>
                                </div>

                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-9">
                                        <div>
                                            <button type="submit" class="btn btn-success w-md">Update New Course</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- plugins:js -->
@include('admin.script')
<!-- End custom js for this page -->
</body>
</html>
