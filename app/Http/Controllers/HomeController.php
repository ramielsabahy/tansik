<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => 'first']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function first(){
        $about = \App\AboutUs::first();
        $contact = \App\ContactUs::first();
        $products = \App\Product::get();
        $services = \App\Service::get();
        $information = \App\Information::first();
        $user = \App\User::first();
        return view('Main.index')->with('about', $about)
                                 ->with('information', $information)   
                                 ->with('contact', $contact)
                                 ->with('products', $products)
                                 ->with('services', $services)
                                 ->with('user', $user);
    }
}
