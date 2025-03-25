<?php

namespace App\Http\Controllers;

use App\DataTables\HouseProductDataTable;
use App\Models\HouseProduct;
use Illuminate\Http\Request;

class HouseProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(HouseProductDataTable $dataTable)
    {
        // $hasilProduct = HouseProduct::all();
        // dd($hasilProduct);
        // return view("app.setting-posts");
        return $dataTable->render("app.houseProduct", ['index' => "House Product"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HouseProduct $houseProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HouseProduct $houseProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HouseProduct $houseProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HouseProduct $houseProduct)
    {
        //
    }
}