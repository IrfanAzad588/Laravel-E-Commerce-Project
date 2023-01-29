<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
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
            <h1 class="text-center display-4 py-4">Send Email to {{$order->email}}</h1>

            <form action="{{url('send_user_email',$order->id)}}" method="POST" >
                @csrf
                <div class="form-group row mb-4">
                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Email Greeting</label>
                    <div class="col-sm-9">
                        <input placeholder="Give Greeting" type="text" class="form-control text-info" id="horizontal-firstname-input" name="greeting"/>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="horizontal-email-input13" class="col-sm-3 col-form-label">Email FirstLine</label>
                    <div class="col-sm-9">
                        <textarea placeholder="Write Firstline" class="form-control summernote text-info" id="horizontal-firstname-input13" name="firstline"></textarea>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="horizontal-email-input13" class="col-sm-3 col-form-label">Email Body</label>
                    <div class="col-sm-9">
                        <textarea placeholder="Write Body Part" class="form-control summernote text-info" id="horizontal-firstname-input13" name="body"></textarea>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="horizontal-password-input2" class="col-sm-3 col-form-label">Email Button Name</label>
                    <div class="col-sm-9">
                        <input placeholder="Give Button Name" type="text" class="form-control text-info" min="0" id="horizontal-password-input2" name="button"/>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="horizontal-password-input2" class="col-sm-3 col-form-label">Email Url</label>
                    <div class="col-sm-9">
                        <input placeholder="Give Email Url" type="text" class="form-control text-info" min="0" id="horizontal-password-input2" name="url"/>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="horizontal-email-input13" class="col-sm-3 col-form-label">Email lastLine</label>
                    <div class="col-sm-9">
                        <textarea  placeholder="Write Lastline" class="form-control summernote text-info" id="horizontal-firstname-input13" name="lastline"></textarea>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-9">
                        <div>
                            <button type="submit" class="btn btn-success w-md">Send Email</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
@include('admin.script')
<!-- End custom js for this page -->
</div>
</body>
</html>
