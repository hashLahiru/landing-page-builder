<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class Teams5Controller extends Controller
{
    public function index()
    {
        $Teams5Data = Teams5Model::first();

        if (!$Teams5Data) {
            abort(500, 'Teams 5 data not found in the database.');
        }

        return view('home', compact('Teams5Data'));
    }
}
