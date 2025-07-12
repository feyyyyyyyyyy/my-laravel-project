<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Branch;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['category', 'branch'])->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $branches = Branch::all();
        return view('products.create', compact('categories', 'branches'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'        => 'required',
            'cost'        => 'required|numeric',
            'price'       => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'branch_id'   => 'required|exists:branches,id',
        ]);
        Product::create($data);
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $branches = Branch::all();
        return view('products.edit', compact('product', 'categories', 'branches'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name'        => 'required',
            'cost'        => 'required|numeric',
            'price'       => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'branch_id'   => 'required|exists:branches,id',
        ]);
        $product->update($data);
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}