<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalproducts = product::count();
        $totalorders = Order::count();
        $pendingorders = order::where('status','pending')->count();
        $processingorders = order::where('status','processing')->count();
        $deliveredorders = order::where('status','Delivered')->count();
        $totalsales = 0;
        $totalsold = order::where('status','Delivered')->get();
        foreach($totalsold as $order)
        {
            $total = $order->price * $order->quantity;
            $totalsales += $total;
        }
        return view('dashboard',compact('totalproducts','totalorders','pendingorders','processingorders','deliveredorders','totalsales'));
    }

}
