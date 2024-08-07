<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {
        $carts = Cart::where('user_id', auth()->id())->get();
        return view('cart', compact('carts'));
    }

    public function checkout($id)
    {
        $cart = Cart::find($id);
        return view('checkout', compact('cart'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required',
            'quantity' => 'required|integer|min:1'
        ]);
        $data['user_id'] = auth()->id();

        $check = Cart::where('user_id', $data['user_id'])->where('product_id', $data['product_id'])->first();
        if(!empty($check)){
            return back()->with('success', 'Product already in cart');
        }

        Cart::create($data);
        return back()->with('success', 'Product added to cart');
    }
}