<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Shopcart;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ShopcartController extends Controller
{
    public $categories;

    public function __construct() {
        $this->categories = Category::all();
    }

    public function index()
    {
        $datalist = Shopcart::where('user_id', Auth::id())->get();
        $total = 0;
        $priceWithTax = 0;
        foreach ($datalist as $data):
            $total += ($data->product->price * $data->quantity);
        endforeach;
        $priceWithTax = $total + $total * (0.18);

        $onlyTax = $total * (0.18);

        return view('home.shopcart', [
            'productList' => $datalist,
            'categories' => $this->categories,
            'totalPrice' => $total,
            'totalPriceWithTax' => $priceWithTax,
            'totalTax' => $onlyTax
        ]);
    }


    public function address()
    {
        $datalist = Shopcart::where('user_id', Auth::id())->get();
        $total = 0;
        $priceWithTax = 0;
        foreach ($datalist as $data):
            $total += ($data->product->price * $data->quantity);
        endforeach;
        $priceWithTax = $total + $total * (0.18);

        $onlyTax = $total * (0.18);

        return view('home.address', [
            'productList' => $datalist,
            'categories' => $this->categories,
            'totalPrice' => $total,
            'totalPriceWithTax' => $priceWithTax,
            'totalTax' => $onlyTax
        ]);
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

        return redirect()->route("home.shopcart.index");
    }


    public function address_store(Request $req)
    {
        $adres = new UserAddress();
        $adres->phone = $req->phone;
        $adres->city = $req->city;
        $adres->country = $req->country;
        $adres->state = $req->state;
        $adres->user_id = Auth::user()->id;
        $adres->address = $req->address;
        $adres->save();
        return redirect()->route("home.shopcart.checkout");

    }


    public function checkout(Shopcart $shopcart)
    {
        return view("home.checkout",[
            'categories' => $this->categories
        ]);
    }


    public function checkout_payment(Request $req)
    {
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->total_price = 500;
        $order->order_status = "ACTIVE";
        $order->shipping = "PENDING";
        //TODO: BURASI DEGİSECEK
        $order->address_id = 1;
        $order->save();

        $savedOrder = Order::where('user_id',Auth::user()->id)->latest()->limit(1)->first();
        $cartItems = Shopcart::where('user_id', Auth::id())->get();
        $total = 0;
        foreach ($cartItems as $item):
            $orderItem = new OrderItem();
            $orderItem->user_id = Auth::user()->id;
            $orderItem->order_id = $savedOrder->id;
            $orderItem->product_id = $item->product->id;
            $total += ($item->product->price * $item->quantity);
            $orderItem->save();
        endforeach;

        $savedOrder->total_price = $total + $total * (0.18);
        $savedOrder->save();

        return redirect()->route("home");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shopcart $shopcart,$id)
    {
        $data = $shopcart::find($id);
        $data->delete();
        return redirect()->back();
    }
}
