<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class PricingPlan1Controller extends Controller
{
    public function index()
    {
        $PricingPlan1Data = PricingPlan1Model::first();

        if (!$PricingPlan1Data) {
            abort(500, 'Pricing Plan1 data not found in the database.');
        }

        return view('home', compact('PricingPlan1Data'));
    }
}
