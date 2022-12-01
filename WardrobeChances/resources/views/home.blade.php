@extends('layouts.app')

@section('container')
    
    <div id="carouselExampleSlidesOnly" class="carousel slide w-100 h-100 d-flex" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="pictures/posterfix1.svg" class="d-block w-100 h-100 img-fluid " alt="...">
            </div>

            <div class="carousel-caption position-absolute top-0  start-0 mx-auto my-5 py-5 d-none d-md-block">

                <a class="btn  btn-outline-secondary" style=" margin-top: 420px; margin-left: 70px" href="/product"
                    role="button">Shop Now</a>
            </div>
            <div class="carousel-caption position-absolute top-0  start-0 mx-auto my-5 py-5 d-block d-md-none">

                <a class="btn  btn-outline-secondary" style="margin-top: 95px; margin-left: 20px; font-size: 10px"
                    href="/product" role="button">Shop Now</a>
            </div>
          
        </div>
    </div>

   


    <div class="">
        <h2 class="text-center mt-4 mb-4" style="font-family: 'nunito'; font-weight: bold">New Arrivals</h2>
        <div class="w-100 " style="background-color: #c5cfea">
            <div class="container text-center w-100">
                <div class="card-group">
                    @foreach ($clothes as $clothe)
                        @if ($loop->iteration < 4)
                            <div class="col-auto col-md-4 ">
                                <div class="px-2 py-4" style="">
                                    <div class="card my-2 mx-auto " style="width: 15rem">
                                        <img src="{{ asset("pictures/{$clothe['photo']}") }}" class="card-img-top"
                                            style="width: 238.5px; height: 230px" alt="Product picture">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $clothe['name'] }}</h5>
                                            <p class="card-text">Size : {{ $clothe['size'] }}</p>
                                            <div class="d-flex">
                                                <a href="/detailproduct/{{ $clothe['code'] }}"
                                                    style="background-color:#c5cfea; "
                                                    class="btn align-items-center justify-content-center mx-auto"><b>Shop</b></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>


        <div class="my-4">
            <h3 class="text-center" style="font-family: 'nunito'; font-weight: bold">What Makes Us Different?</h3>

        </div>

        <div class="card-group mt-5 mx-5">
            <div class="card border-light">
                <img src="pictures/why1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Unique yet Affordable</h5>
                    <p class="card-text text-center">Our designs are unique by combining several clothes into one, but
                        don't
                        worry the prices that we offer are still affordable</p>
                </div>
            </div>
            <div class="card border-light">
                <img src="pictures/why2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Exclusive Product</h5>
                    <p class="card-text text-center">We only produce one model for each design, so you won't be using
                        the same clothes as other people</p>
                </div>
            </div>
            <div class="card border-light">
                <img src="pictures/why3.png" class="card-img-top " alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Environmentally Friendly</h5>
                    <p class="card-text text-center">By buying our product, you can help reduce clothing waste! Because
                        we
                        use thrift clothes as the basic material</p>
                </div>
            </div>
        </div>

        <div class=" d-flex align-items-center justify-content-center my-5">
            <a class="btn" style="background-color:#c5cfea; color: #ffffff" href="/about" role="button"><b>More
                    About Us </b>➜</a>
        </div>



@endsection