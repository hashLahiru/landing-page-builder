<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PopularProductModel;
use Illuminate\Http\Request;

class PopularProductController extends Controller
{
    public function index()
    {
        $PopularProductData = PopularProductModel::first();

        if (!$PopularProductData) {
            abort(500, 'Popular Product Data not found in the database.');
        }

        return view('spice-web-template.pages.home', compact('PopularProductData'));
    }
}
