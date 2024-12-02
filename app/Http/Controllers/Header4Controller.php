<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class Header4Controller extends Controller
{
    public function index()
    {
        $header4Data = Header4Model::first();

        if (!$header4Data) {
            abort(500, 'header 4 data not found in the database.');
        }

        return view('home', compact('header4Data'));
    }
}
