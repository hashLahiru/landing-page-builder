<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class Feedback1Controller extends Controller
{
    public function index()
    {
        $feedback1Data = Feedback1Model::first();

        if (!$feedback1Data) {
            abort(500, 'feedback data not found in the database.');
        }

        return view('home', compact('feedback1Data'));
    }
}
