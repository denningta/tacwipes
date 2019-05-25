<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\DB;

class CartController extends Controller
{
    public function index(Request $request) 
    {

        return view('products.cart');
    }

    public function store(Request $request) 
    {
        Cart::add($request->id, $request->name, $request->qty, $request->price, ['img' => $request->img]);
        return redirect()->route('cart.index')->with('success_message', 'Item was added to your cart!');
    }

    public function delete($rowId)
    {
        Cart::remove($rowId);
        return view('products.cart');
    }


}
