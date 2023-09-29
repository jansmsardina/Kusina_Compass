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
        $users=Auth::user();
        // Retrieve all store updates
        $storeUpdates = StoreUpdate::where('fk_users_id', Auth::user()->id)->first();
        // $storeUpdates = StoreUpdate::where('fk_users_id', $users->id)->get();
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
            'fk_users_id' => 'required',
            'name' => 'required',
            'photo' => 'required',
            'contact' => 'required',
            'opening_time' => 'required',
            'closing_time' => 'required',
            'address' => 'required',
        ]);
        

        // Update the store details
        $storeUpdate = StoreUpdate::findOrFail($id);
        $storeUpdate->update($request->all());

        return redirect()->route('store.update')
            ->with('success', 'Store details updated successfully');
    }

    
}
