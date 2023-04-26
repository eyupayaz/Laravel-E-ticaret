<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

       return view('admin.product.index',[
           'myTitle' => "Ürünlerim",
           'productList' => $products
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select("id","name")->get();
        return view('admin.product.create',[
            'categories' => $categories

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Product();
        $data->name = $request->input('name');
        $data->description = $request->input('description');
        $data->image = Storage::putFile('images', $request->file('image'));
        $data->category_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->price = $request->input('price');
        $data->quantity = $request->input('quantity');
        $data->tax = (int)$request->input('tax');
        $data->detail = $request->input('detail');
        $data->slug = $request->input('slug');
        $data->status = $request->input("status");
        $data->save();
        return redirect()->route("admin.product.index");

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product,$id)
    {
        $data = Product::find($id);
        $datalist = Category::all();
        return view('admin.product.edit',['data' => $data, 'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product,$id)
    {
        $data = Product::find($id);
        $data->name = $request->input('name');
        $data->description = $request->input('description');
        $data->image = Storage::putFile('images', $request->file('image'));
        $data->category_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->price = $request->input('price');
        $data->quantity = $request->input('quantity');
        $data->tax = (int)$request->input('tax');
        $data->detail = $request->input('detail');
        $data->slug = $request->input('slug');
        $data->status = $request->input("status");

        $data->save();
        return redirect()->route("admin.product.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Product $product,$id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect()->route('admin.product.index');

    }

}
