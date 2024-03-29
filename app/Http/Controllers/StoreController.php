<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
class StoreController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(4);

        return view('store.index', compact('products'));


        
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();

        return view('store.show', compact('product'));
    }
}
