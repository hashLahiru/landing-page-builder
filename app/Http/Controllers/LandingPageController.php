<?php

namespace App\Http\Controllers;

use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;

class LandingPageController extends Controller
{
    public function getComponentData($componentId)
    {
        $component = Component::with([
            'fields' => function ($query) {
                $query->with('values');
            }
        ])->find($componentId);

        if (!$component) {
            return response()->json(['message' => 'Component not found'], 404);
        }

        return response()->json($component);
    }
}
