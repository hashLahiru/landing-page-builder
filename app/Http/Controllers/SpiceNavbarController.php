<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SpiceNavbarModel;
use Illuminate\Http\Request;

class SpiceNavbarController extends Controller
{
    public function index()
    {
        $SpiceNavbarData = SpiceNavbarModel::first();

        if (!$SpiceNavbarData) {
            abort(500, 'Spice Navbar Data not found in the database.');
        }

        return view('spice-web-template.pages.home', compact('SpiceNavbarData'));
    }
}
