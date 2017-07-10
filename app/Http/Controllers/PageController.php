<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\ContactMail;
use App\Product;
use Illuminate\Support\Facades\Mail;
use TCG\Voyager\Models\Page;

class PageController extends Controller {
    public function index () {
        $blocks = Page::where('id', '<=', 2)->get();
        $products = Product::where('homepage', '=', 1)->get();
        $footer = Page::where('id', '=', 4)->get();
        $footer = json_decode($footer->body);

        $images = [];

        foreach ($blocks as $i => $key) {
            $images[$i] = json_decode($key->image);
        }


        return view('pages.index', compact('products', 'blocks', 'images', 'footer'));
    }

    public function install () {
        $blocks = Page::where('id', '=', 3)->first();
        $images = json_decode($blocks->image);
        $footer = Page::where('id', '=', 4)->get();
        $footer = json_decode($footer->body);


        return view('pages.installatie', compact('blocks', 'images', 'footer'));
    }

    public function contact () {

        $footer = Page::where('id', '=', 4)->get();
        $footer = json_decode($footer->body);


        return view('pages.contact', compact('footer'));
    }

    public function email (\Symfony\Component\HttpFoundation\Request $request) {

        $contact = new Contact();
        $contact->naam = $request->name;
        $contact->email = $request->email;
        $contact->description = $request->message;
        $contact->save();

        Mail::to('sluistechniek@gmail.com')->send(new ContactMail($request->all()));
        \Session::flash('flash_message', 'successfully saved.');
        return redirect()->back();

    }
}
