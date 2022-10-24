@extends('layouts.app')

@section('container')
    <h1>{{ $maintitle }}</h1>
    <div class="mt-5 d-flex justify-content-center align-items-center">
        <img src="pictures/logo.jpg" style="width: 300px; height: 300px" alt="Wardrobe Chances' Logo">
    </div>
    <div class="text-center">
        <h1 class="mt-3">Our Logo</h1>
        <p class="px-5">Our logo is made from the word <b>"thrift"</b>, which is one of the activities we do to provide an opportunity to make used clothes it undergoes rework process, so that they can be used again.</p>
        <h6 class="mb-3"><i>#ChancesToWear</i></h6>
    </div>
@endsection