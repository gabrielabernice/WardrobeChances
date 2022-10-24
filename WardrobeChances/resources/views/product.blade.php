@extends('layouts.app')

@section('container')
    <h1>{{ $maintitle }}</h1>
    <div class="container text-center">
        <div class="row">
            @foreach ($clothes as $clothe)
                <div class="col-auto col-md-3 mx-auto mx-md-0">
                    <div class="card my-2" style="width: 15rem">
                        <img src="{{ asset("pictures/{$clothe['photo']}") }}" class="card-img-top" style="width: 238.5px; height: 230px" alt="Product picture">
                        <div class="card-body">
                            <h5 class="card-title">{{ $clothe['name'] }}</h5>
                            <p class="card-text">Size : {{ $clothe['size'] }}</p>
                            <div class="d-flex">
                                <a href="/detailproduct/{{ $clothe['code'] }}" class="btn btn-primary align-items-center justify-content-center mx-auto">Details</a>
                            </div>
                        </div>
                    </div>
                    {{-- <p>{{ $clothe['price'] }}</p>
                    <p>{{ $clothe['waist'] }}</p>
                    <p>{{ $clothe['length'] }}</p>
                    <p>{{ $clothe['bust'] }}</p> --}}
                </div>
            @endforeach
        </div>
    </div>

    {{-- <table class="table table-striped">
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>Country</td>
            <td>Description</td>
            <td>Contact</td>
            <td>Photo</td>
        </tr>

        @foreach ($writers as $writer)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><a href="index/{{$writer['code']}}">{{ $writer['nama'] }}</a></td>
                <td>{{ $writer['country'] }}</td>
                <td>
                    @if ($loop->first)
                        Urutan Teratas
                    @elseif ($loop->last)
                        Urutan Terbawah
                    @elseif($loop->odd)
                        Urutan Ganjil
                    @elseif($loop->even)
                        Urutan Genap
                    @endif
                </td>
                <td>
                    {{ $writer['contact'] }}
                </td>
                <td>
                    <img src="pictures/{{ $writer['photo'] }}" style="width: 100px; height: 100px">
                </td>
            </tr>
        @endforeach
    </table> --}}
@endsection
