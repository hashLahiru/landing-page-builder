<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HeaderVideoOrderModel;
use Illuminate\Http\Request;

class HeaderVideoOrderController extends Controller
{
    public function index()
    {
        $headerData = HeaderVideoOrderModel::first();

        if (!$headerData) {
            abort(500, 'Landing Page data not found in the database.');
        }

        return view('home', compact('headerData'));
    }
}
