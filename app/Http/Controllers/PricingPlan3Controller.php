<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class PricingPlan3Controller extends Controller
{
    public function index()
    {
        $PricingPlan3Data = PricingPlan3Model::first();

        if (!$PricingPlan3Data) {
            abort(500, 'Pricing Plan 3 data not found in the database.');
        }

        return view('home', compact('PricingPlan3Data'));
    }
}
