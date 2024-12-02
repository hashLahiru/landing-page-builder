<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class Header3Controller extends Controller
{
    public function index()
    {
        $header3Data = Header3Model::first();

        if (!$header3Data) {
            abort(500, 'header 3 data not found in the database.');
        }

        return view('home', compact('header3Data'));
    }
}
