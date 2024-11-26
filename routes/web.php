<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Models\Component;
use App\Models\ComponentField;

Route::get('/', function () {
    $headerComponent = Component::where('name', 'header')->first();

    $headerFields = ComponentField::where('component_id', $headerComponent->id)
        ->with('values')
        ->get();

    $headerData = [];
    foreach ($headerFields as $field) {
        $headerData[$field->field_name] = $field->values->pluck('value')->first();
    }

    $productComponent = Component::where('name', 'product')->first();

    $productFields = ComponentField::where('component_id', $productComponent->id)
        ->with('values')
        ->get();

    $productData = [];
    foreach ($productFields as $field) {
        $productData[$field->field_name] = $field->values->pluck('value')->first();
    }

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
