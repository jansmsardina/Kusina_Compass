<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StoreUpdate;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function index(): View
    {
        // echo Auth::user()->id; exit;
        // Retrieve all store updates
        $storeUpdates = StoreUpdate::where('user_id', Auth::user()->id)->first();

        // foreach ($storeUpdates as $d){
        //     echo $d->contact;
        // } 
        // exit;
        return view('details.update', compact('storeUpdates'));
    }

    public function edit($id)
    {
        // Retrieve a specific store update by ID
        $storeUpdate = StoreUpdate::findOrFail($id);

        return view('details.edit', ['storeUpdate' => $storeUpdate]);
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'contact' => 'required',
            'opening_time' => 'required',
            'closing_time' => 'required',
            'address' => 'required',
        ]);

        // Update the store details
        $storeUpdate = StoreUpdate::findOrFail($id);
        $storeUpdate->update($request->all());

        return redirect()->route('store.show')
            ->with('success', 'Store details updated successfully');
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
}}
    
