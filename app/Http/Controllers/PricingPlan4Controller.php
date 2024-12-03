<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class PricingPlan4Controller extends Controller
{
    public function index()
    {
        $PricingPlan4Data = PricingPlan4Model::first();

        if (!$PricingPlan4Data) {
            abort(500, 'Pricing Plan 4 data not found in the database.');
        }

        return view('home', compact('PricingPlan4Data'));
    }
}
