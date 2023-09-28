<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StoreUpdate;

class StoreController extends Controller
{
    public function index()
    {
        $storeUpdates = StoreUpdate::all();
        return view('details.update', compact('storeUpdates'));
    }

    public function edit($id)
    {
        $storeUpdate = StoreUpdate::findOrFail($id);
        return view('details.update', compact('storeUpdate'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'contact' => 'required',
            'opening_time' => 'required',
            'closing_time' => 'required',
            'address' => 'required',
        ]);

        $storeUpdate = StoreUpdate::findOrFail($id);
        $storeUpdate->update($request->all());

        return redirect()->route('details.update')->with('success', 'Store details updated successfully');
    }
}
