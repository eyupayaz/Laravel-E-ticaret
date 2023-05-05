<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Setting::first();
      return view("home.index",['setting'=>$setting]);
    }
    public static function getsetting()
    {
        return Setting::first();
    }
    public function contact()
    {
        $setting = Setting::first();
        return view("home.contact",['setting'=>$setting]);
    }
    public function aboutus()
    {
        $setting = Setting::first();
        return view("home.about",['setting'=>$setting]);
    }
    public function references()
    {
        $setting = Setting::first();
        return view("home.references",['setting'=>$setting]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
