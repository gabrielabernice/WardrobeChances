@extends('layouts.app')

@section('container')
<div class="d-flex mx-auto">
    <h1 class="text-center pt-3 " style="font-family: 'nunito'; font-weight: bold">{{ $maintitle }}</h1>

</div>
    <div class="container text-center ">
        <div class="row mb-3">
            @foreach ($clothes as $clothe)
                <div class="col-auto col-md-4 mx-auto ">
                    <div class="card my-4 mx-auto shadow p-1 mb-5  rounded" style="width: 15rem; background-color:#dce6ff ;">
                        <img src="{{ asset("pictures/{$clothe['photo']}") }}" class="card-img-top" style=" height: 230px" alt="Product picture">
                        <div class="card-body">
                            <h5 class="card-title" style="width: ">{{ $clothe['name'] }}</h5>
                            <p class="card-text">Size : {{ $clothe['size'] }}</p>
                            <div class="d-flex">
                                <a href="/detailproduct/{{ $clothe['code'] }}" style="background-color:#516ab0; color: #ffffff"  class="btn  align-items-center justify-content-center mx-auto">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

  
@endsection
