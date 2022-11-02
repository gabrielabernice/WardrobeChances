@extends('layouts.app')

@section('container')
    <h1 class="text-center mb-5">{{ $maintitle }}</h1>
    <div class="container text-center ">
        <div class="row">
          
          <div class="col">
            <h3 class="mt-5">The Story Behind Our Logo</h3>
            <p class="px-5">Our logo is made from the word <b>"thrift"</b>, which is one of the activities we do to provide
                an opportunity to make used clothes it undergoes rework process, so that they can be used again.</p>
            <h6 class="mb-3"><i>#ChancesToWear</i></h6>
          </div>
          <div class="col ps-5">
            <img src="pictures/logo.jpg" style="width: 300px; height: 300px" alt="Wardrobe Chances' Logo">
          </div>
        </div>
      </div>

    {{-- <div class="" style="">
        <div class="mt-3 mb d-flex justify-content-center align-items-center">
            <img src="pictures/logo.jpg" style="width: 300px; height: 300px" alt="Wardrobe Chances' Logo">
        </div>
        <div class="text-center">
            <h3 class="mt-5">The Story Behind Our Logo</h3>
            <p class="px-5">Our logo is made from the word <b>"thrift"</b>, which is one of the activities we do to provide
                an opportunity to make used clothes it undergoes rework process, so that they can be used again.</p>
            <h6 class="mb-3"><i>#ChancesToWear</i></h6>
        </div>
    </div> --}}
@endsection
