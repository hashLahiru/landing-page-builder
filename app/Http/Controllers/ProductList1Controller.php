<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductList1Controller extends Controller
{
    public function index()
    {
        $ProductList1Data = ProductList1Model::first();

        if (!$ProductList1Data) {
            abort(500, 'Product List1 data not found in the database.');
        }

        return view('home', compact('ProductList1Data'));
    }
}
