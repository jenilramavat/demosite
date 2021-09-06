<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('front.index');
    }

    public function about()
    {

        return view('front.about');
    }

    public function price()
    {

        return view('front.price');
    }

    public function video()
    {

        return view('front.video');
    }

    public function contact()
    {

        return view('front.contact');
    }
}
