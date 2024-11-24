<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $productData = ProductModel::first();

        if (!$productData) {
            abort(500, 'Product data not found in the database.');
        }

        return view('home', compact('productData'));
    }
}
