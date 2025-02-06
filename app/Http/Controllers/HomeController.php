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
        return view('home.index', ['active' => 'index']);
    }

    public function about(): \Illuminate\Contracts\View\View
    {
        return view('home.about', ['active' => 'about']);
    }

    public function product(): \Illuminate\Contracts\View\View
    {
        return view('home.product', ['active' => 'product']);
    }

    public function contact(): \Illuminate\Contracts\View\View
    {
        return view('home.contact', ['active' => 'contact']);
    }
}
