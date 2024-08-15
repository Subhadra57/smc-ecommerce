<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
       $products = product::latest() ->limit(10)->get();
        return view('welcome',compact('products'));
    }

    public function about()
    {
        return view('about'); 
    }

    public function contact()
    {
        return view('contact');
    }
   
    public function viewproduct($id)
    {
        $product = product::find($id);
        $relatedproducts = product::where('category_id',$product->category_id)->where('id','!=',$id)
        ->get();
        return view('viewproduct',compact('product','relatedproducts'));
    }

    public function categoryproduct($catid)
    {
        $category = Category::find($catid);
        $products = product::where('category_id',$catid)->paginate(4);
        return view('categoryproduct',compact('products','category'));
    
    }
    public function search(Request $request)
    {
        $search = $request->search;
        $products = product::where('name','like','%'.$search.'%')->orWhere('description','like','%'.$search.'%')->get();
        return view('search',compact('products','search'));
    }

}

