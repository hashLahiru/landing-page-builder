<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class Teams4Controller extends Controller
{
    public function index()
    {
        $Teams4Data = Teams4Model::first();

        if (!$Teams4Data) {
            abort(500, 'Teams 4 data not found in the database.');
        }

        return view('home', compact('Teams4Data'));
    }
}
