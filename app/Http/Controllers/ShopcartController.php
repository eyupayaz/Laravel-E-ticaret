<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Shopcart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ShopcartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datalist = Shopcart::where('user_id', Auth::id())->get();
        return view('home.shopcart', ['datalist' => $datalist]);
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
    public function store(Request $request,$id)
    {
        $data = new Shopcart;
        $data->product_id = $id;
        $data->user_id = Auth::id();
        $data->quantity = $request->input('quantity');
        $data->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Shopcart $shopcart)
    {


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shopcart $shopcart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shopcart $shopcart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shopcart $shopcart,$id)
    {
        $data = $shopcart::find($id);
        $data->delete();
        return redirect()->route('user_products');
    }
}
