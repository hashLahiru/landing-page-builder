<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class Teams1Controller extends Controller
{
    public function index()
    {
        $Teams1Data = Teams1Model::first();

        if (!$Teams1Data) {
            abort(500, 'Teams 1 data not found in the database.');
        }

        return view('home', compact('Teams1Data'));
    }
}
