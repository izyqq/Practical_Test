<?php

namespace App\Http\Controllers\API;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index() {
        return Product::all();
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer'
        ]);
        return Product::create($data);
    }

    public function show($id) {
        return Product::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);
        $data = $request->validate([
            'name' => 'string',
            'description' => 'nullable|string',
            'price' => 'numeric',
            'quantity' => 'integer'
        ]);
        $product->update($data);
        return $product;
    }

    public function destroy($id) {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
