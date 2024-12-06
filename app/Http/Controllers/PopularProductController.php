<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class HomeProductCategoriesController extends Controller
{
    public function index()
    {
        $PopularProductData = PopularProductModel::first();

        if (!$PopularProductData) {
            abort(500, 'Popular Product Data not found in the database.');
        }

        return view('home', compact('PopularProductData'));
    }
}
