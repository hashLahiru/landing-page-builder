<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductList2Controller extends Controller
{
    public function index()
    {
        $ProductList2Data = ProductList2Model::first();

        if (!$ProductList2Data) {
            abort(500, 'Product List2 data not found in the database.');
        }

        return view('home', compact('ProductList2Data'));
    }
}
