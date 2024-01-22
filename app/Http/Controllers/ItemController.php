<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    function index()
    {
        $items = Item::get();

        return view('items', ['items' => $items]);
    }

    function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'quantity' => 'required|numeric',
        ]);

        try {
            $item = new Item();
            $item->name = $request->name;
            $item->description = $request->description;
            $item->quantity = $request->quantity;
            $item->save();
            return back()->with('success', 'Item successfully added.');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'quantity' => 'required',
        ]);

        try {
            $item = Item::findOrFail($request->id);
            $item->name = $request->name;
            $item->description = $request->description;
            $item->quantity = $request->quantity;
            $item->save();
            return back()->with('success', 'Item successfully updated.');
        } catch (\Throwable $th) {

            return back()->with('error', $th->getMessage());
        }

    }

    function delete(Request $request)
    {
        $id = $request->validate([
            'id' => ['required', 'numeric'],
        ]);

        try {
            Item::destroy($id);
            return back()->with('success', 'Item successfully deleted.');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }
}