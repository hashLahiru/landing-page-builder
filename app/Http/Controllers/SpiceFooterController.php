<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SpiceFooterModel;
use Illuminate\Http\Request;

class SpiceFooterController extends Controller
{
    public function index()
    {
        $SpiceFooterData = SpiceFooterModel::first();

        if (!$SpiceFooterData) {
            abort(500, 'Spice Footer Data not found in the database.');
        }

        return view('spice-web-template.pages.products', compact('SpiceFooterData'));
    }
}
