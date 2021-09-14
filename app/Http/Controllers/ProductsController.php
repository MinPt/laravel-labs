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

    public function productsJson(){
      return Product::all();
    }
}
