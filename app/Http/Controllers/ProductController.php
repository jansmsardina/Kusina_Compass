<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller



{
    public function index (){
        $products =Product::all();
        $users = Auth::user();
        $products = Product::where('created_by', $users->id)->get();
        return view('product.index',compact('products'));
    }

    public function create (){
        return view('product.create');
    }
    public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'price' => 'required|integer',
        'description' => 'required',
        'name' => 'required',
        'price' => 'required|integer',
        'description' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        
    ]);
    
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/Uploads/ProductUploads', $filename);
    } else {
        $filename = ''; // Set a default value for the image if it's not provided.
    }

   $data = [
    'name' => $request->input('name'),
    'price' => $request->input('price'),
    'description' => $request->input('description'),
    'created_by' => Auth::id(),
    'image' => $filename,
];

    $newProduct = Product::create($data);

    return redirect(route('product.index'));
}

public function edit(Product $product){
    return view ('product.edit',['product' => $product]);
}

public function update(Product $product, Request $request){
    $data = $request->validate([
        'name' => 'required',
        'price' => 'required|integer',
        'description' => 'required',
        'img' => 'nullable',
    ]);
     if ($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/Uploads/ProductUploads', $filename);
    } else {
        $filename = ''; // Set a default value for the image if it's not provided.
    }

   $data = [
    'name' => $request->input('name'),
    'price' => $request->input('price'),
    'description' => $request->input('description'),
    'created_by' => Auth::id(),
    'image' => $filename,
];

    $product->update($data);
    return redirect(route('product.index')) ->with('success','Product Updated Succesfully');
}

public function destroy ($id){
    $product = Product::find($id);

        if ($product == null) {
            return response('Invalid ID', 403);
        }

        $product->delete();
    return redirect(route('product.index')) ->with('success','Product Deleted Succesfully');
    
}

}