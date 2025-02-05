<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): \Illuminate\Contracts\View\View
    {
        return view('home.index');
    }

    public function about(): \Illuminate\Contracts\View\View
    {
        return view('home.about');
    }

    public function product(): \Illuminate\Contracts\View\View
    {
        return view('home.product');
    }

    public function contact(): \Illuminate\Contracts\View\View
    {
        return view('home.contact');
    }
}
