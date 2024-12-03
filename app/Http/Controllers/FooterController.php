<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $footerData = footerModel::first();

        if (!$footerData) {
            abort(500, 'footer data not found in the database.');
        }

        return view('home', compact('footerData'));
    }
}
