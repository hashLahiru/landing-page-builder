<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductList4Controller extends Controller
{
    public function index()
    {
        $ProductList4Data = ProductList4Model::first();

        if (!$ProductList4Data) {
            abort(500, 'Product List4 data not found in the database.');
        }

        return view('home', compact('ProductList4Data'));
    }
}
