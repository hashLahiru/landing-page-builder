<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class navbarController extends Controller
{
    public function index()
    {
        $navbarData = navbarModel::first();

        if (!$navbarData) {
            abort(500, 'Navbar data not found in the database.');
        }

        return view('home', compact('navbarData'));
    }
}
