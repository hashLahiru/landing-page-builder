<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class Feature4Controller extends Controller
{
    public function index()
    {
        $feature4Data = Feature4Model::first();

        if (!$feature4Data) {
            abort(500, 'feature data not found in the database.');
        }

        return view('home', compact('feature4Data'));
    }
}
