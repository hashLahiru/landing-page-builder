<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

use App\Models\LandingPage;

Route::get('/', function () {
    $landingPageData = LandingPage::first();
    return view('home', ['landingPageData' => $landingPageData]);
});

Route::get('/landing-page', [LandingPageController::class, 'index']);
