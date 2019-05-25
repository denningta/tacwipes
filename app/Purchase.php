<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = ['ip', 'product_id', 'name', 'price', 'qty', 'cart_id'];
}
