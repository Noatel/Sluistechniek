<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller
{
    public function index()
    {

        $products = Product::all();
        $count = count($products);

        return view('pages.products', compact('products','count'));
    }

    public function view(Product $product)
    {

        return view('pages.product-detail', compact('product'));
    }

    public function search(\Illuminate\Http\Request $request)
    {
        $prices = explode(',', $request->slider);
        $name = $request->name;
        if (!isset($name)) {
            $products = Product::whereRaw('price >=' . $prices[0])->whereRaw('price <=' . $prices[1])->get();
        } else {
            $products = Product::where('name', 'LIKE', '%' . $name . '%')->whereRaw('price >=' . $prices[0])->whereRaw('price <=' . $prices[1])->get();
        }
        return response()
            ->json($products);
    }
}
