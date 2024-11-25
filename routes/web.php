<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Models\Component;
use App\Models\ComponentField;

Route::get('/', function () {
    // Retrieve the 'header' component
    $headerComponent = Component::where('name', 'header')->first();

    // Retrieve the fields and their values for the 'header' component

    $headerFields = ComponentField::where('component_id', $headerComponent->id)
        ->with('values')
        ->get();

    // Create an associative array to store field data for the 'header'
    $headerData = [];
    foreach ($headerFields as $field) {
        $headerData[$field->field_name] = $field->values->pluck('value')->first();
    }

    // Retrieve the 'product' component
    $productComponent = Component::where('name', 'product')->first();

    // Retrieve the fields and their values for the 'product' component
    $productFields = ComponentField::where('component_id', $productComponent->id)
        ->with('values')
        ->get();

    // Create an associative array to store field data for the 'product'
    $productData = [];
    foreach ($productFields as $field) {
        $productData[$field->field_name] = $field->values->pluck('value')->first();
    }

    // Pass both sets of data to the view
    return view('home', [
        'headerData' => (object) $headerData,
        'productData' => (object) $productData,
    ]);
});

Route::get('/product', function () {
    // Retrieve the 'header' component
    $headerComponent = Component::where('name', 'header')->first();

    // Retrieve the fields and their values for the 'header' component

    $headerFields = ComponentField::where('component_id', $headerComponent->id)
        ->with('values')
        ->get();

    // Create an associative array to store field data for the 'header'
    $headerData = [];
    foreach ($headerFields as $field) {
        $headerData[$field->field_name] = $field->values->pluck('value')->first();
    }

    // Retrieve the 'product' component
    $productComponent = Component::where('name', 'product')->first();

    // Retrieve the fields and their values for the 'product' component

    $productFields = ComponentField::where('component_id', $productComponent->id)
        ->with('values')
        ->get();

    // Create an associative array to store field data for the 'product'

    $productData = [];
    foreach ($productFields as $field) {
        $productData[$field->field_name] = $field->values->pluck('value')->first();
    }

    // Pass both sets of data to the view
    return view('home', [
        'headerData' => (object) $headerData,
        'productData' => (object) $productData,
    ]);
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin-test', function () {
    return view('admin.dashboard');
});

Route::get('/landing-page/component/{id}', [LandingPageController::class, 'getComponentData']);
