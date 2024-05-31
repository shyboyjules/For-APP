<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('prod.index', ['product' => $product]);
    }

    public function create(){
        return view('prod.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string',
            'qty' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'required|string',
        ]);

        try {
            $newProduct = Product::create($data);
        } catch (\Exception $e) {
            Log::error('Error creating product: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error creating product.');
        }

        return redirect()->route('prod.index');
    }

    public function edit(Product $product){
        return view('prod.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request){
        $data = $request->validate([
            'name' => 'required|string',
            'qty' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'required|string',
        ]);

        $product->update($data);

        return redirect(route('prod.index',))->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route('prod.index',))->with('success', 'Product deleted successfully');
    }
}
