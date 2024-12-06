<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class HeroContactusController extends Controller
{
    public function index()
    {
        $HeroContactusData = HeroContactusModel::first();

        if (!$HeroContactusData) {
            abort(500, 'Hero Contactus data not found in the database.');
        }

        return view('home', compact('HeroContactusData'));
    }
}
