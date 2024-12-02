<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $aboutData = AboutModel::first();

        if (!$aboutData) {
            abort(500, 'about us page data not found in the database.');
        }

        return view('home', compact('aboutData'));
    }
}
