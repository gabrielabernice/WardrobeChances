@extends('layouts.app')

@section('container')
<div class="d-block">
    <div class="d-flex mx-auto">
        <h1 class="text-center mt-3 mx-auto">{{ $maintitle }}</h1>
    
    </div>
</div>


<div class="d-flex">
        <div class="card mb-5 mt-3 mx-auto d-none d-md-block" style="width: 1000px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src={{ asset("pictures/{$clothes['photo']}") }} style="width: 300px; height: 300px" alt="Product Picture">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="mb-3">{{ $clothes['name'] }}</h2>
                        <h6 class="card-text">Size : {{ $clothes['size'] }}</h6>
                        @if ($clothes['waist'] != '')
                            <p class="card-text pt-3">Waist : {{ $clothes['waist'] }}</p>
                        @else
                            <p class="card-text pt-3">Bust : {{ $clothes['bust'] }}</p>
                        @endif
                        <p class="card-text">Length : {{ $clothes['length'] }}</p><br>
                        <a href="https://wa.me/6285173380018"
                            class="btn  align-items-center justify-content-center mx-auto"  style="background-color:#c5cfea; color: white " target="_blank"><b>Buy</b></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-5 d-block d-md-none mx-auto ">
            <img src={{ asset("pictures/{$clothes['photo']}") }} class="card-img-top" style="width: 300px; height: 300px"
                alt="Product Picture">
            <div class="card-body text-center">
                <h2 class="mb-3">{{ $clothes['name'] }}</h2>
                <h6 class="card-text">Size : {{ $clothes['size'] }}</h6>
                @if ($clothes['waist'] != '')
                    <p class="card-text pt-3">Waist : {{ $clothes['waist'] }}</p>
                @else
                    <p class="card-text pt-3">Bust : {{ $clothes['bust'] }}</p>
                @endif
                <p class="card-text">Length : {{ $clothes['length'] }}</p><br>
                <a href="https://wa.me/6285173380018" target="_blank" style="background-color:#c5cfea; color: white" class="btn align-items-center justify-content-center mx-auto"><b>Buy</b></a>
            </div>
        </div>
    </div>
@endsection
