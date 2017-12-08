<?php

namespace App\Http\Controllers;

use App\Page;
use App\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller {
    public function index () {

        $products = Product::all();
        $count = count($products);
        $footer = Page::where('id', '=', 4)->get();
        $footer = json_decode($footer);
        $footer = $footer[0]->body;





        $highestProductPrice = DB::table('products')->orderBy('price','desc')->first();
        $highestProductPrice = $highestProductPrice->price;
        return view('pages.products', compact('products', 'count', 'footer','highestProductPrice'));


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



        if ($request->option_one == 0 && $request->option_two  == 0 &&  $request->option_three == 0 && $request->option_four  == 0) {
            $products = Product::where('name', 'LIKE', '%' . $name . '%')->whereRaw('price >=' . $prices[0])
                ->whereRaw('price <=' . $prices[1])->get();

            return response()->json($products);
        }

        if ($request->option_one == 0) {
            $option1 = "";
        } else {
            if ($request->option_two == 1) {
                $and = " OR ";
            } elseif ($request->option_three == 1) {
                $and = " OR ";
            } elseif ($request->option_four == 1) {
                $and = " OR ";
            } else {
                $and = "";
            }

            $option1 = "option_1 = " . $request->option_one . $and;
        }

        if ($request->option_two == 0) {
            $option2 = "";
        } else {
            if ($request->option_three == 1) {
                $and = " OR ";
            } elseif ($request->option_four == 1) {
                $and = " OR ";
            } else {
                $and = "";
            }
            $option2 = "option_2 = " . $request->option_two . $and;
        }

        if ($request->option_three == 0) {
            $option3 = "";
        } else {
            if ($request->option_four == 1) {
                $and = " OR ";
            } else {
                $and = "";
            }

            $option3 = "option_3 = " . $request->option_three . $and;
        }

        if ($request->option_four == 0) {
            $option4 = "";
        } else {
            $option4 = "option_4 = " . $request->option_four;
        }


        if (isset($name)) {
            $products = Product::where('name', 'LIKE', '%' . $name . '%')->whereRaw('price >=' . $prices[0])
                ->whereRaw('price <=' . $prices[1])->whereRaw($option1 . $option2 . $option3 . $option4)->get();
        } else {
            $products = Product::whereRaw('price >=' . $prices[0])->whereRaw('price <=' . $prices[1])
                ->whereRaw($option1 . $option2 . $option3 . $option4)->get();
        }

        /*
         *
         *  } else if(isset($option1) && isset($option2) && isset($option3) && isset($option4)){
            $products = Product::whereRaw('price >=' . $prices[0])->whereRaw('price <=' . $prices[1])
                        ->whereRaw("option_1 =" . $option1)->orWhereRaw("option_2 =" . $option2)
                        ->orWhereRaw("option_3 =" . $option3)->orWhereRaw("option_4 =" . $option4)->get();
        }else if(isset($option1)) {
            $products = Product::whereRaw('price >=' . $prices[0])->whereRaw('price <=' . $prices[1])
                        ->whereRaw("option_1 =" . $option1)->get();
        } else if(isset($option2)) {
            $products = Product::whereRaw('price >=' . $prices[0])->whereRaw('price <=' . $prices[1])
                ->whereRaw("option_2 =" . $option2)->get();
        } else if(isset($option3)) {
            $products = Product::whereRaw('price >=' . $prices[0])->whereRaw('price <=' . $prices[1])
                ->whereRaw("option_2 =" . $option2)->get();
        } else if(isset($option4)) {
            $products = Product::whereRaw('price >=' . $prices[0])->whereRaw('price <=' . $prices[1])
                ->whereRaw("option_2 =" . $option2)->get();
        }  else if(isset($name)) {
            $products = Product::where('name', 'LIKE', '%' . $name . '%')->whereRaw('price >=' . $prices[0])->whereRaw('price <=' . $prices[1])->get();
        } else {
            $products = Product::whereRaw('price >=' . $prices[0])->whereRaw('price <=' . $prices[1])->get();
        }
         */

        return response()->json($products);
    }
}
