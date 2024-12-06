<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class HeroProductController extends Controller
{
    public function index()
    {
        $HeroProductData = HeroProductModel::first();

        if (!$HeroProductData) {
            abort(500, 'Hero product data not found in the database.');
        }

        return view('home', compact('HeroProductData'));
    }
}
