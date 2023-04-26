<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($product_id)
    {
        $data = Product::find($product_id);
        $images = DB::table('images')->where('product_id', '=', $product_id)->get();
        return view('admin.image.create',['data' => $data, 'images' => $images]);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $product_id)
    {
        $data = new Image();
        $data->name = $request->input('name');
        $data->product_id = $product_id;
        $data->image = Storage::putFile('images', $request->file('image'));
        $data->save();
        return redirect()->route('admin.image.create',['product_id'=>$product_id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($product_id)
    {
        $data = Image::find($product_id);
        $data->delete();
        return redirect()->route('admin.image.create', ['product_id'=>$product_id]);
    }
}
