<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products(){
        $products = [
          ["name" => 'Book', "quantity" => 444],
          ["name" => 'Meat', "quantity" => 34],

        ];

        return view('products', ['products' => $products]);
    }
}
