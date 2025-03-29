<?php

namespace App\Http\Controllers;

use App\Models\HouseProduct;
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
        $products = HouseProduct::get()->map(function ($item) {
            return [
                'id' => $item->id,
                'uuid' => $item->uuid,
                'unit' => $item->unit,
                'title' => $item->title,
                'description' => $item->description,
                'specification_list' => json_decode($item->specification_list, true),
                'specification_table' => json_decode($item->specification_table, true),
                'images' => json_decode($item->images, true),
                'created_at' => $item->created_at,
                'updated_at' => $item->updated_at
            ];
        });
        // dd($products);
        // dd(HouseProduct::get()->first());

        return view('home.product', compact('products') + ['active' => 'product']);
    }

    public function contact(): \Illuminate\Contracts\View\View
    {
        return view('home.contact', ['active' => 'contact']);
    }
}
