<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchase;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
    public function checkout() 
    {
        
        $cartId = DB::table('purchases')->latest('cart_id')->first()->cart_id + 1;

        foreach (Cart::content() as $item)
        {
            Purchase::create([
                'ip' => request()->ip(),
                'cart_id' => $cartId,
                'product_id' => $item->id,
                'name' => $item->name,
                'qty' => $item->qty,
                'price' => $item->price
            ]);
        }
        Cart::destroy();
        return view('outofstock');
    }

}
