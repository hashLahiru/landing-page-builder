<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class HeroHomeController extends Controller
{
    public function index()
    {
        $HeroHomeData = HeroHomeModel::first();

        if (!$HeroHomeData) {
            abort(500, 'Hero Home data not found in the database.');
        }

        return view('home', compact('HeroHomeData'));
    }
}
