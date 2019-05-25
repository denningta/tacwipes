<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function detail(Product $product)
    {
        // session(['product' => $product]);
        return view('products.detail', compact('product'));
    }
}
