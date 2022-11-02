@extends('layouts.app')

@section('container')

    <h3 class="px-5 mx-2 mt-">{{ $maintitle }}</h3>
    <div class="d-flex">
        <div class="card mb-3 mt-3 mx-auto d-none d-md-block" style="width: 1000px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src={{ asset("pictures/{$clothes['photo']}") }} style="width: 300px; height: 300px" alt="Product Picture">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h1 class="mb-3">{{ $clothes['name'] }}</h1>
                        <h6 class="card-text">Size : {{ $clothes['size'] }}</h6>
                        @if ($clothes['waist'] != '')
                            <p class="card-text pt-3">Waist : {{ $clothes['waist'] }}</p>
                        @else
                            <p class="card-text pt-3">Bust : {{ $clothes['bust'] }}</p>
                        @endif
                        <p class="card-text">Length : {{ $clothes['length'] }}</p><br>
                        <a href="https://wa.me/6285173380018"
                            class="btn btn-primary align-items-center justify-content-center mx-auto">Buy</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3 d-block d-md-none mx-auto">
            <img src={{ asset("pictures/{$clothes['photo']}") }} class="card-img-top" style="width: 300px; height: 300px"
                alt="Product Picture">
            <div class="card-body text-center">
                <h1 class="mb-3">{{ $clothes['name'] }}</h1>
                <h6 class="card-text">Size : {{ $clothes['size'] }}</h6>
                @if ($clothes['waist'] != '')
                    <p class="card-text pt-3">Waist : {{ $clothes['waist'] }}</p>
                @else
                    <p class="card-text pt-3">Bust : {{ $clothes['bust'] }}</p>
                @endif
                <p class="card-text">Length : {{ $clothes['length'] }}</p><br>
                <a href="https://wa.me/6285173380018" class="btn btn-primary align-items-center justify-content-center mx-auto">Buy</a>
            </div>
        </div>
        {{-- <div class="mt-4 mb-4 mx-auto p-3 text-white rounded justify-content-center align-items-center text-center" style="width: 1000px; height: 700px; background-color: rgb(196, 212, 241)">
            
            <h1 class="mb-3">{{ $clothes['name'] }}</h1>
            <img src={{ asset("pictures/{$clothes['photo']}") }} style="width: 300px; height: 300px">
            <h5 class="mt-3"><b>Size</b></h5>
            <p>{{ $clothes['size'] }}</p>
            <p>Contact : {{ $clothes['waist'] }}</p>
            </p>
        </div> --}}
    </div>
@endsection
