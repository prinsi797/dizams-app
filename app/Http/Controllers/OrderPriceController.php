<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderPrice;

class OrderPriceController extends Controller {

    public function index() {
        $orderPrices = OrderPrice::all();
        return view('orderprices.index', compact('orderPrices'));
    }

    public function create() {
        return view('orderprices.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'discount' => 'required|numeric',
        ]);

        OrderPrice::create($request->all());
        return redirect()->route('orderprices.index')->with('success', 'Order price created successfully.');
    }

    public function edit($id) {
        $orderPrice = OrderPrice::findOrFail($id);
        return view('orderprices.edit', compact('orderPrice'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'discount' => 'required|numeric',
        ]);

        $orderPrice = OrderPrice::findOrFail($id);
        $orderPrice->update($request->all());

        return redirect()->route('orderprices.index')->with('success', 'Order price updated successfully.');
    }

    public function destroy($id) {
        $orderPrice = OrderPrice::findOrFail($id);
        $orderPrice->delete();

        return redirect()->route('orderprices.index')->with('success', 'Order price deleted successfully.');
    }
}
