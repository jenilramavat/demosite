<?php

namespace App\Http\Controllers;

use App\Expense;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');
    }

    public function login(){

        if(Auth::check()){


            return view('home');

        }else{
            return view('auth.login');
        }
    }

}
