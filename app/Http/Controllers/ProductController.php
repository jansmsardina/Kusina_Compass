<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller



{
    public function index (){
        $products =Product::all();
        // $users = Auth::user();
        // $products = Product::where('user_id', $users->id)->get();
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
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Use 'image' instead of 'img'.
       
    ]);
    
    if ($request->hasFile('image')) 
    {
        $destination_path = 'public/Uploads/ProductUploads/';
        $image = $request->file('image');
        $image_name = $image->getClientOriginalName();
        $path = $request->file('image')->storeAs($destination_path, $image_name); // Fix this line.
        $input['image'] =$destination_path. $image_name;
    } else {
        $data['image'] = ''; // Set a default value for the image if it's not provided.
    }

  

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