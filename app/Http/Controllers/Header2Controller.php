<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class Header2Controller extends Controller
{
    public function index()
    {
        $header2Data = Header2Model::first();

        if (!$header2Data) {
            abort(500, 'header 2 data not found in the database.');
        }

        return view('home', compact('header2Data'));
    }
}
