<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class PricingPlan2Controller extends Controller
{
    public function index()
    {
        $PricingPlan2Data = PricingPlan2Model::first();

        if (!$PricingPlan2Data) {
            abort(500, 'Pricing Plan 2 data not found in the database.');
        }

        return view('home', compact('PricingPlan2Data'));
    }
}
