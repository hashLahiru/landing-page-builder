<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class Feedback3Controller extends Controller
{
    public function index()
    {
        $feedback3Data = Feedback3Model::first();

        if (!$feedback3Data) {
            abort(500, 'feedback data not found in the database.');
        }

        return view('home', compact('feedback3Data'));
    }
}
