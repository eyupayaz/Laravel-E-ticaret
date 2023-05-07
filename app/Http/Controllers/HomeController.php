<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public $categories;
    public function __construct() {
        $this->categories = Category::all();
    }

    public function index()
    {
      $setting = Setting::first();
      $products = Product::latest()->limit(6)->get();

      return view("home.index",['setting'=>$setting, 'categories' => $this->categories, 'products' => $products]);
    }
    public static function getsetting()
    {
        return Setting::first();
    }
    public function contact()
    {
        $setting = Setting::first();
        return view("home.contact",['setting'=>$setting,  'categories' => $this->categories]);
    }
    public function aboutus()
    {
        $setting = Setting::first();
        return view("home.about",['setting'=>$setting, 'categories' => $this->categories]);
    }
    public function sss()
    {
        $setting = Setting::first();
        return view("home.sss",['setting'=>$setting, 'categories' => $this->categories]);
    }
    public function yardım()
    {
        $setting = Setting::first();
        return view("home.yardım",['setting'=>$setting, 'categories' => $this->categories]);
    }
    public function references()
    {
        $setting = Setting::first();
        return view("home.references",['setting'=>$setting,  'categories' => $this->categories]);
    }
    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        return redirect(route('contact'));
    }

    public function  login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        $method = $request->method();

        if($request->isMethod('post'))
        {
            $credentials = $request->only('username', 'password');
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'username' => 'The provided credentials do not match our records'
            ]);
        }
    }

    // products by category
    public function productListByCategory($id, $slug){
        $category = Category::with("products")->find($id);
        $setting = Setting::first();
        return view("home.category_product_list",[
            'setting'=>$setting,
            'categories' => $this->categories,
            'categoryProducts' => $category
        ]);
    }

    public function product_detail($id){
        $product = Product::find($id);
        $setting = Setting::first();
        return view("home.product_detail",['product' => $product,'setting' => $setting, 'categories' => $this->categories]);
    }
}
