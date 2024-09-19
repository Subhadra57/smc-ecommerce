<?php

namespace App\Http\Controllers;

use App\Mail\OrderStatusMail;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $cart = Cart::find($request->input('cart_id'));
        $data['product_id'] = $cart->product_id;
        $data['quantity'] = $cart->quantity;
        $data['price'] = $cart->product->price;
        $data['user_id'] = auth()->id();
        $data['order_date'] = date('Y-m-d');
        $data['status'] = 'Pending';
        Order::create($data);
        $cart->delete();
        return redirect('/cart')->with('success', 'Order placed 
        successfully');

    }

    public function index()
    {
        $orders = Order::all();
        return view ('order.index',compact('orders'));
    }

    public function status($id, $status)
    {
        $order = Order::find($id);
        $order->Status = $status;
        $order->save();

        $user = $order->user;
        Mail::to($user->email)->send(new OrderStatusMail($user,$status));
        return redirect()->back()->with('success','Order is now'.$status);

    }

    public function mycart()
    {
        $orders = Order::where('user_id',auth()->id())->get();
        return view('myorder',compact('orders'));
    }

}