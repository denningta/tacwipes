<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function carts()
    {
        return $this->belongsToMany('App\Cart');
    }

    public static function products()
    {
        $products = Product::all();
    }
}
