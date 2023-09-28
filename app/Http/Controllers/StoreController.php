<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StoreUpdate;

class StoreController extends Controller
{
    public function index()
    {
        // Retrieve all store updates
        $storeUpdates = StoreUpdate::all();

        return view('profile.edit', ['storeUpdates' => $storeUpdates]);
    }

    public function edit($id)
    {
        // Retrieve a specific store update by ID
        $storeUpdate = StoreUpdate::findOrFail($id);

        return view('store.edit', ['storeUpdate' => $storeUpdate]);
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
}
