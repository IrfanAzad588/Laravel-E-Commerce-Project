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
                            <h4 class="card-title mb-4 text-center display-4">Add Product form</h4>
                            <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Title</label>
                                    <div class="col-sm-9">
                                        <input placeholder="Write a title" required="" type="text" class="form-control text-info" id="horizontal-firstname-input" name="title"/>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-email-input13" class="col-sm-3 col-form-label">Product Description</label>
                                    <div class="col-sm-9">
                                        <textarea required="" placeholder="Write a description" class="form-control summernote text-info" id="horizontal-firstname-input13" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Product Price</label>
                                    <div class="col-sm-9">
                                        <input required="" placeholder="Write a Price" type="number" class="form-control text-info" id="horizontal-password-input" name="price"/>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Discount Price</label>
                                    <div class="col-sm-9">
                                        <input placeholder="Write a Discount Price" type="number" class="form-control text-info" id="horizontal-password-input" name="dis_price"/>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input2" class="col-sm-3 col-form-label">Product Quantity</label>
                                    <div class="col-sm-9">
                                        <input required="" placeholder="Write Product Quantity" type="number" class="form-control text-info" min="0" id="horizontal-password-input2" name="quantity"/>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Category</label>
                                    <div class="col-sm-9" >
                                        <select class="form-control " name="category" required="" >
                                            <option value="" > -- Select Product Category -- </option>
                                            @foreach($category as $category)
                                                <option class="text-info" value="{{$category->category_name}}">{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input4" class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <input required="" type="file" class="form-control-file text-info" id="horizontal-password-input4" name="image"/>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Video Link</label>
                                    <div class="col-sm-9">
                                        <input placeholder="Give a Video Link" type="text" class="form-control text-info" id="horizontal-firstname-input" name="video_link"/>
                                    </div>
                                </div>

                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-9">
                                        <div>
                                            <button type="submit" class="btn btn-success w-md">Create New Course</button>
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
