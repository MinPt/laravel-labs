<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all()->sortBy("name");
        return view('products/index', ['products' => $products, 'title' => 'Products']);
    }

    public function create()
    {
        return view("products/create");
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products/edit', ['product' => $product]);
    }

    public function update($id)
    {
        $data = request()->validate(['name' => ['required', "max:50"], 'quantity' => 'required|min:1|max:5']);
        $product = Product::find($id);
        $product->name = $data['name'];
        $product->quantity = $data['quantity'];
        $product->save();
        return redirect("/products");
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect("/products");
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('products/show', ['product' => $product]);
    }

    public function store()
    {
        $data = request()->validate(['name' => ['required', "max:50"], 'quantity' => 'required|min:1|max:5']);
        $product = new Product();
        $product->name = $data['name'];
        $product->quantity = $data['quantity'];
        $product->save();
        return redirect("/products");
    }

    public function productsJson()
    {
        return Product::all();
    }
}
