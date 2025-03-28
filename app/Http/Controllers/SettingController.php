<?php

namespace App\Http\Controllers;

use App\DataTables\SettingsDataTable;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SettingsDataTable $dataTable)
    {
        // return view('user',
        // [
        //     'hidup' => '',
        //     'title' => $author,
        //     'post' => $author->postingan->load('category', 'author'),
        //     'user' => $author->name,
        // ]);
        // $index => "index",
        return $dataTable->render("app.setting", ['index' => "Marketing Info"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
