<?php

namespace App\Http\Controllers;

use App\Models\Clothes;
use Illuminate\Http\Request;

class WController extends Controller
{
    public function home(){
        return view('home', [
            "pagetitle" => "Home",
            "maintitle" => "Wardrobe Chances",
            "clothes" => Clothes::allData()
        ]);
    }

    public function product(){
        return view('product', [
            "pagetitle" => "Products",
            "maintitle" => "Our Products",
            "clothes" => Clothes::allData()
        ]);
    }

    public function detailproduct($code){
        return view('detailproduct', [
            "pagetitle" => "Product Details",
            "maintitle" => "Product Details",
            "clothes" => Clothes::allDataWithCode($code)
        ]);
    }

    public function about(){
        return view('about', [
            "pagetitle" => "About",
            "maintitle" => "About Us"
        ]);
    }
}
