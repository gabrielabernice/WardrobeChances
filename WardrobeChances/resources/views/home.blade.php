{{-- @extends('layouts.app') --}}

{{-- @section('container')
    

@endsection
 --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pagetitle }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    @include('components.navigation')


    <div id="carouselExampleSlidesOnly" class="carousel slide w-100 h-100 d-flex" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="pictures/posterfix1.png" class="d-block w-100 h-100 img-fluid " alt="...">
            </div>

            <div class="carousel-caption position-absolute top-0  start-0 mx-auto my-5 py-5 d-none d-md-block">

                <a class="btn  btn-outline-secondary" style=" margin-top: 420px; margin-left: 70px" href="/product"
                    role="button">Shop Now</a>
            </div>
            <div class="carousel-caption position-absolute top-0  start-0 mx-auto my-5 py-5 d-block d-md-none">

                <a class="btn  btn-outline-secondary" style="margin-top: 95px; margin-left: 20px; font-size: 10px"
                    href="/product" role="button">Shop Now</a>
            </div>
            {{-- <div class="carousel-item">
          <img src="pictures/poster2.png" class="d-block w-100 h-100 img-fluid" alt="...">
        </div> --}}
        </div>
    </div>

    {{-- <div id="carouselExampleSlidesOnly" class="carousel slide w-100 h-100 d-flex position-relative"
        data-bs-ride="carousel">
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <img src="pictures/poster.png" class="d-block w-100 img-fluid" alt="..." style="height: 90vh">
                <div class="carousel-caption text-start position-absolute top-0  start-0 mx-5 my-5 py-5">
                    <h1 class="">Be Different, Wear Different!</h1>
                    <a class="btn btn-primary" href="/product" role="button">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    </div> --}}


    <div class="">
        <h2 class="text-center mt-4 mb-4">New Arrivals</h2>
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
            <h3 class="text-center">What Makes Us Different?</h3>

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


        <div class="text-center py-3 " style="background-color: #c5cfea">

            <h5 class="" style="color: #ffffff"><b>Find Us</b></h5>
            <div class="container text-center " style="width: 200px">
                <div class="row">
                    <div class="col">
                        <a href="https://instagram.com/wardrobechances?igshid=YmMyMTA2M2Y="><img src="pictures/1.svg"
                                class="card-img-top" alt="..."></a>
                    </div>
                    <div class="col">
                        <a href="https://www.tiktok.com/@wardrobechances?_t=8WxjTjl4Aao&_r=1"><img src="pictures/2.svg"
                                class="card-img-top" alt="..."></a>
                    </div>
                    <div class="col">
                        <a href="https://wa.me/6285173380018"> <img src="pictures/3.svg" class="card-img-top"
                                alt="..."></a>
                    </div>
                </div>
            </div>
            <p class=" mt-3 mx-5 px-5" style="color: #ffffff">Wardrobe Chances' business concept offers fashion and
                quality with the best deal.
                Established on 2021, Wardrobe Chances has been providing the best re-worked thrift in town. All
                contents and informations in this website are protected by the copyright of Wardrobe Chances.</p>
            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}


        </div>
        <div class="text-center p-2 pt-3" style="color: #ffffff; background-color: #b6bfd9">
            <p style="font-size: 12px"> Copyright ©WardrobeChances All Rights Reserved.</p>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
            integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
        </script>


</body>


</html>
