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

        if ($request->option_one == 0) {
            $request->option_one = null;
        }
        if ($request->option_two == 0) {
            $request->option_two = null;
        }


        $option1 = $request->option_one;
        $option2 = $request->option_two;


        if (isset($name) && isset($option1) && isset($option2)) {
            $products = Product::where('name', 'LIKE', '%' . $name . '%')->whereRaw('price >=' . $prices[0])->whereRaw('price <=' . $prices[1])
                ->whereRaw("option_1 =" . $option1)->orWhereRaw("option_2 =" . $option2)->get();
        } else if(isset($option1) && isset($option2)){
            $products = Product::whereRaw('price >=' . $prices[0])->whereRaw('price <=' . $prices[1])
                ->whereRaw("option_1 =" . $option1)->orWhereRaw("option_2 =" . $option2)->get();
        }else if(isset($option1)) {
            $products = Product::whereRaw('price >=' . $prices[0])->whereRaw('price <=' . $prices[1])
                ->whereRaw("option_1 =" . $option1)->get();
        } else if(isset($option2)) {
            $products = Product::whereRaw('price >=' . $prices[0])->whereRaw('price <=' . $prices[1])
                ->whereRaw("option_2 =" . $option2)->get();
        }  else if(isset($name)) {
            $products = Product::where('name', 'LIKE', '%' . $name . '%')->whereRaw('price >=' . $prices[0])->whereRaw('price <=' . $prices[1])->get();
        } else {
            $products = Product::whereRaw('price >=' . $prices[0])->whereRaw('price <=' . $prices[1])->get();
        }

        return response()->json($products);
    }
}
