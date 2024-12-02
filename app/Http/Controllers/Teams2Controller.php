<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class Teams2Controller extends Controller
{
    public function index()
    {
        $Teams2Data = Teams2Model::first();

        if (!$Teams2Data) {
            abort(500, 'Teams 2 data not found in the database.');
        }

        return view('home', compact('Teams2Data'));
    }
}
