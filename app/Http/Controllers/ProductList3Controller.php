<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductList3Controller extends Controller
{
    public function index()
    {
        $ProductList3Data = ProductList3Model::first();

        if (!$ProductList3Data) {
            abort(500, 'Product List3 data not found in the database.');
        }

        return view('home', compact('ProductList3Data'));
    }
}
