<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class HomeProductCategoriesController extends Controller
{
    public function index()
    {
        $HomeProductCategoriesData = HomeProductCategoriestModel::first();

        if (!$HomeProductCategoriesData) {
            abort(500, 'Home Product Categories Data not found in the database.');
        }

        return view('home', compact('HomeProductCategoriesData'));
    }
}
