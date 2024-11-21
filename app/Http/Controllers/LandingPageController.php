<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;

class LandingPageController extends Controller
{
    public function index()
    {
        $landingPageData = LandingPage::first(); // Fetch the first landing page record

        if (!$landingPageData) {
            // Debugging: Return a friendly message if no data is found
            abort(500, 'Landing Page data not found in the database.');
        }

        return view('home', compact('landingPageData'));
    }
}
