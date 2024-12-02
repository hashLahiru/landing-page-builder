<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class Teams3Controller extends Controller
{
    public function index()
    {
        $Teams3Data = Teams3Model::first();

        if (!$Teams3Data) {
            abort(500, 'Teams 3 data not found in the database.');
        }

        return view('home', compact('Teams3Data'));
    }
}
