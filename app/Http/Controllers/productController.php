<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products = product::latest()->get();
        return view('product.index',compact('products'));
    }
    public function create()
    {
        $categories = Category::orderBy('priority')->get();
        return view('product.create',compact('categories'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'description' => 'required',
            'photopath' => 'required',
            'stock' => 'required',
            'status' => 'required',
        ]);

        if($request->hasFile('photopath')){
            $file = $request->photopath;
            $filename = $file->getClientOriginalName();
            $filename = time().'_'.$filename;
            $file->move('images/products',$filename);
            $data['photopath'] = $filename;
        }

        Product::create($data);
        return redirect(route('product.index'));
    }

    public function edit($id){
        $product = product::find($id);
        $categories = category::orderBy('priority')->get();
        return view('product.edit',compact('product','categories'));

    }
    public function update(Request $request,$id)
    {
        $data = $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'description' => 'required',
            'photopath' => 'nullable',
            'stock' => 'required',
            'status' => 'required',
        ]);

        $product = product::find($id);

        if($request->hasFile('photopath')){
            $file = $request->photopath;
            $filename = $file->getClientOriginalName();
            $filename = time().'_'.$filename;
            $file->move('images/products',$filename);
            File::delete(public_path('image/products/'.$product->photopath));
            $data['photopath'] = $filename;
        }
        $product->update($data);
        return redirect(route('product.index'));
    }
    public function delete($id)
    {
        $product = product::find($id);
        File::delete(public_path('image/products/'. $product->photopath));
        $product->delete();
        return redirect(route('product.index'));

    }
}