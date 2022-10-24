<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clothes extends Model
{
    use HasFactory;

    private static $clothes = [
        [
            'name' => 'Macaronts',
            'size' => 'S',
            'waist' => '74',
            'length' => '90',
            'bust' => '',
            'photo' => 'macaronts.jpg',
            'code' => 'mac'
        ],
        [
            'name' => 'Tres Colores',
            'size' => 'Fit to L',
            'waist' => '',
            'length' => '43',
            'bust' => '114',
            'photo' => 'trescolores.jpg',
            'code' => 'tres'
        ],
        [
            'name' => 'Rose Cardi Pops',
            'size' => 'Fit to L',
            'waist' => '',
            'length' => '43',
            'bust' => '136',
            'photo' => 'rosecardipops.jpg',
            'code' => 'rose'
        ],
        [
            'name' => 'Sweet Banana Sorbet',
            'size' => 'Fit to L',
            'waist' => '',
            'length' => '83/64',
            'bust' => '126',
            'photo' => 'sweetbananasorbet.jpg',
            'code' => 'banana'
        ],
        [
            'name' => 'Baklava On Top',
            'size' => 'Fit to M',
            'waist' => '',
            'length' => '40',
            'bust' => '76',
            'photo' => 'baklavaontop.jpg',
            'code' => 'baklava'
        ],
        [
            'name' => 'Crop Velvet',
            'size' => 'Fit to M',
            'waist' => '',
            'length' => '40',
            'bust' => '68',
            'photo' => 'cropvelvet.jpg',
            'code' => 'crop'
        ]
    ];

    public static function allData(){
        return collect(self::$clothes);
    }

    public static function allDataWithCode($code){
        $allClothes = static::allData();
        return $allClothes->firstWhere('code', $code);
    }
}
