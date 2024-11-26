<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class Feature5Controller extends Controller
{
    public function index()
    {
        $feature5Data = Feature5Model::first();

        if (!$feature5Data) {
            abort(500, 'feature data not found in the database.');
        }

        return view('home', compact('feature5Data'));
    }
}
