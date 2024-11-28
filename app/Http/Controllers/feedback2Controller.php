<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class Feedback2Controller extends Controller
{
    public function index()
    {
        $feedback2Data = Feedback2Model::first();

        if (!$feedback2Data) {
            abort(500, 'feedback data not found in the database.');
        }

        return view('home', compact('feedback2Data'));
    }
}
