<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class PricingPlan5Controller extends Controller
{
    public function index()
    {
        $PricingPlan5Data = PricingPlan5Model::first();

        if (!$PricingPlan5Data) {
            abort(500, 'Pricing Plan 5 data not found in the database.');
        }

        return view('home', compact('PricingPlan5Data'));
    }
}
