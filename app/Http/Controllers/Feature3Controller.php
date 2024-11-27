<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class Feature3Controller extends Controller
{
    public function index()
    {
        $feature3Data = Feature3Model::first();

        if (!$feature3Data) {
            abort(500, 'feature data not found in the database.');
        }

        return view('home', compact('feature3Data'));
    }
}
