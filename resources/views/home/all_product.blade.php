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
    @include('home.product_view')

    {{--    comments Section--}}

    <section class="subscribe_section">
        <div class="container-fuild">
            <div class="box" style="background-color: #d4ced0" >
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="subscribe_form ">
                            <div class="heading_container heading_center">
                                <h3>Comments</h3>
                            </div>
                            <form action="{{url('add_comment')}}" method="POST">
                                @csrf
                                <input type="text" placeholder="Comment something here" name="comment">
                                <button>
                                    Comment
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="subscribe_section">
        <div class="container-fuild">
            <div class="box" style="background-color: #8CE9FF" >
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="subscribe_form ">
                            <div class="heading_container heading_center">
                                <h3>All Comments</h3>

                                @foreach($comment as $comment)
                                    <div class="mt-3">
                                        <p style="font-weight: bold; color: navy">{{$comment->name}}</p>
                                        <p class="">{{$comment->comment}}</p>
                                        <a class="text-danger" href="javascript::void(0);"onclick="reply(this)" data-commentid="{{$comment->id}}">Reply</a>
                                    </div>
                                    @foreach($reply as $rep)
                                        @if($rep->comment_id == $comment->id)

                                            <div style="padding-left: 10%; padding-bottom: 10px;">
                                                <p style="font-weight: bold; color: green">{{$rep->name}}</p>
                                                <p >{{$rep->reply}}</p>
                                                <a class="text-danger" href="javascript::void(0);"onclick="reply(this)" data-commentid="{{$comment->id}}">Reply</a>
                                            </div>
                                        @endif
                                    @endforeach

                                @endforeach

                                <div style="display: none" class="replyDiv mt-3">
                                    <form action="{{url('add_reply')}}" method="POST">
                                        @csrf
                                        <input type="text" name="commentId" id="commentId" hidden >
                                        <input type="text" placeholder="Write here" name="reply">
                                        {{--                                        <textarea name="" style="height: 100px; width: 500px" placeholder="Write here"></textarea>--}}
                                        <br>
                                        <div class="row" style="position: relative; bottom: 40px">
                                            <div class="col-md-6">
                                                <input type="submit" value="Reply" class="btn bg-danger  text-white  " style="background-color: red ; width: 90px; margin-bottom: 50px">
                                            </div>
                                            <div class="col-md-6">
                                                <a href="javascript::void(0);" class="btn btn-warning mt-4 rounded" onclick="reply_close(this)" >close</a>
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
    </section>


</div>
@include('home.footer')
<!-- footer end -->
<div class="cpy_">
    <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

        Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

    </p>
</div>

<script type="text/javascript">
    function reply(caller) {
        document.getElementById('commentId').value = $(caller).attr('data-commentid');
        $('.replyDiv').insertAfter($(caller));
        $('.replyDiv').show();
    }
    function reply_close(caller) {
        $('.replyDiv').hide();
    }

</script>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        var scrollpos = localStorage.getItem('scrollpos');
        if (scrollpos) window.scrollTo(0, scrollpos);
    });

    window.onbeforeunload = function(e) {
        localStorage.setItem('scrollpos', window.scrollY);
    };
</script>

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
