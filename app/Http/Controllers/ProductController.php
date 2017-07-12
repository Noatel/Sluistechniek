<?php

namespace App\Http\Controllers;

use App\Page;
use App\Product;

class ProductController extends Controller {
    public function index () {

        $products = Product::all();
        $count = count($products);
        $footer = Page::where('id', '=', 4)->get();
        $footer = json_decode($footer);
        $footer = $footer[0]->body;
        return view('pages.products', compact('products', 'count', 'footer'));
    }

    public function view (Product $product) {
        $footer = Page::where('id', '=', 4)->get();
        $footer = json_decode($footer);
        $footer = $footer[0]->body;

        if ($product->description) {
            $product->meta_description = substr(strip_tags($product->description), 0, 157) . '...';
        } else {
            $product->meta_description = null;
        }

        return view('pages.product-detail', compact('product', 'footer'));
    }

    public function search (\Illuminate\Http\Request $request) {
        $prices = explode(',', $request->slider);
        $name = $request->name;
        if (!isset($name)) {
            $products = Product::whereRaw('price >=' . $prices[0])->whereRaw('price <=' . $prices[1])->get();
        } else {
            $products = Product::where('name', 'LIKE', '%' . $name . '%')->whereRaw('price >=' . $prices[0])
                ->whereRaw('price <=' . $prices[1])->get();
        }
        return response()->json($products);
    }
}
