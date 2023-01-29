<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>products</span>
            </h2>
            <div class="text-center  display-4">
                <h3 class="mt-3">Search</h3>
                <form action="{{url('product_search')}}" method="GET" >
                    @csrf
                    <div class="mx-auto" style="position: relative; bottom: 30px">
                        <input style="width: 500px" class="text-dark fa-bold" type="text" name="search" placeholder="Search for something">
                        <input class="fa-bold btn btn-outline-info" type="submit" value="Search">
                    </div>
                </form>
            </div>
        </div>
        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{session()->get('message')}}
            </div>
        @endif
        <div class="row" style="position: relative; bottom: 30px">

            @foreach($product as $products)

                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="{{url('product_details',$products->id)}}" class="option1">
                                    Product Details
                                </a>
                                <a href="" class="option2">
                                    Buy Now
                                </a>
                                <form action="{{url('add_cart',$products->id)}}" method="post">
                                    @csrf
                                    <div class="row text-center">
                                        <div class="col-lg-6 mt-1 mx-auto">
                                             <button id="round2" class="btn btn-warning text-dark" type="submit">Add To Cart</button>
                                        </div>
                                        <div class="col-lg-6 mt-1 mx-auto" >
                                            <input class="text-center" id="round1" type="number" name="quantity" value="1" min="1">
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="img-box ">
                            <img src="product/{{$products->image}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                {{$products->title}}
                            </h5>
                        </div>
                        @if($products->discount_price!=null)
                        <div class="row mt-2">
                            <div class="col-md-4 text-muted">
                                <h6 style="text-decoration: line-through; color: #0c5460">
                                    ${{$products->price}}
                                </h6>
                            </div>
                            <div class="col-md-4"  >
                                <h6  style="color: red" >
                                    ${{$products->discount_price}}
                                </h6>
                            </div>
                        </div>
                        @else
                            <h6 style="color: blue">
                                ${{$products->price}}
                            </h6>
                        @endif
                    </div>
                </div>
            @endforeach
            <div class="py-3">
                {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
            </div>

        </div>
    </div>
</section>
