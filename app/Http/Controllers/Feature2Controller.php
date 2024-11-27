<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class Feature2Controller extends Controller
{
    public function index()
    {
        $feature2Data = Feature2Model::first();

        if (!$feature2Data) {
            abort(500, 'feature data not found in the database.');
        }

        return view('home', compact('feature2Data'));
    }
}
