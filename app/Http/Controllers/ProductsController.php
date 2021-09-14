<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
      $products = Product::all()->sortBy("name");
      return view('products/index', ['products' => $products, 'title' => 'Products']);
    }

    public function create(){
      return view("products/create");
    }

    public function edit($id){
      $product = Product::find($id);
      return view('products/edit', ['product' => $product]);
    }

    public function update($id){
      $product = Product::find($id);
      $product->name = \request('name');
      $product->quantity = \request('quantity');
      $product->save();
      return redirect("/products");
    }

    public function store(){
      $product = new Product();
      $product->name = \request('name');
      $product->quantity = \request('quantity');
      $product->save();
      return redirect("/products");
    }

    public function productsJson(){
      return Product::all();
    }
}
