<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;

Route::get('/', function () {
    // Retrieve the 'header' component
    $headerComponent = Component::where('name', 'header')->first();

    // Retrieve the fields and their values for the 'header' component
    $headerFields = ComponentField::where('component_id', $headerComponent->id)
        ->with('values')  // Eager load related values
        ->get();

    // Create an associative array to store field data for the 'header'
    $headerData = [];
    foreach ($headerFields as $field) {
        $headerData[$field->field_name] = $field->values->pluck('value')->first();  // Get the first value for each field
    }

    return view('home', ['headerData' => (object) $headerData]);
});

Route::get('/landing-page/component/{id}', [LandingPageController::class, 'getComponentData']);
