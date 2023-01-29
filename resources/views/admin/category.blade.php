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
            <div class="text-center py-3 display-4">
                <h2>Add Category</h2>
                <form action="{{url('/add_category')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mx-auto py-5">
                        <input class="text-dark fa-bold" type="text" name="category" placeholder="Write Category Name">
                        <input class="fa-bold btn btn-outline-info" type="submit" name="submit" value="Add Category">
                    </div>
                </form>
            </div>

                <div class="row">
                    <div class="col-9 mx-auto">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title"> Category information</h4>
                                <table id="datatable-buttons" class="text-white table table-striped table-dark table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; border-color: greenyellow">
                                    <thead>
                                    <tr>
                                        <th style="color: darkorange ">SL NO.</th>
                                        <th style="color: lightgreen">Category Name</th>
                                        <th style="color: darkorange ">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $data)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$data->category_name}}</td>

                                            <td>
                                                <a onclick="return confirm('Are You Sure To Delete This?')"  href="{{url('delete_category',$data->id)}}" class="btn btn-outline-danger">
                                                    Delete
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
