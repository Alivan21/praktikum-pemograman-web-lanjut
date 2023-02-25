<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public $products = [
        [

            'product' => 'Wingko Babat',
            'slug' => 'wingko'
        ],
        [
            'product' => 'Bakpia Pathok',
            'slug' => 'bakpia'
        ]
    ];

    public function index()
    {
        $products = $this->products;
        return view('products.index', compact('products'));
    }

    public function detail($param)
    {
        $products = $this->products;
        $param = array_search($param, array_column($products, 'slug'));
        $param = $products[$param];
        return view('products.detail', [
            'param' => $param,
            'back' => 'products'
        ]);
    }
}
