<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HeroContactusModel;
use Illuminate\Http\Request;

class HeroContactusController extends Controller
{
    public function index()
    {
        $HeroContactusData = HeroContactusModel::first();

        if (!$HeroContactusData) {
            abort(500, 'Hero Contactus data not found in the database.');
        }

        return view('spice-web-template.pages.contactUs', compact('HeroContactusData'));
    }
}
