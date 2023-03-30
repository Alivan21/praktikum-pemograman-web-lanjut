<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
  public function index()
  {
    $products = Product::all();
    return view('products.index', compact('products'));
  }

  public function show($id)
  {
    $product = Product::where('id', $id)->first();
    return view('products.detail', compact('product'));
  }
}
