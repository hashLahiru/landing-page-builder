<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SpiceContactusModel;
use Illuminate\Http\Request;

class SpiceContactUsController extends Controller
{
    public function index()
    {
        $SpiceContactusData = SpiceContactusModel::first();

        if (!$SpiceContactusData) {
            abort(500, 'Spice contact us  Data not found in the database.');
        }

        return view('spice-web-template.pages.contactUs', compact('SpiceContactusData'));
    }
}





