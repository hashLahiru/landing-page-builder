<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ImageController;

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

Route::get('/page-editor', function () {
    $components = Component::all();

    return view('admin.page-editor', [
        'components' => $components
    ]);
});

Route::get('/get-component-fields/{componentId}', function ($componentId) {
    $component = Component::with('fields.values')->find($componentId);

    if ($component) {
        $fields = $component->fields->map(function ($field) {
            return [
                'id' => $field->id,
                'field_name' => $field->field_name,
                'value' => $field->values->first()->value ?? '',
            ];
        });

        return response()->json(['fields' => $fields]);
    }

    return response()->json(['error' => 'Component not found'], 404);
});

Route::post('/save-component-fields', [AdminController::class, 'saveComponentFields']);

Route::get('/image-uploader', [ImageController::class, 'index'])->name('image.uploader');
Route::post('admin/image-upload', [ImageController::class, 'upload'])->name('image.upload');

Route::get('/landing-page/component/{id}', [LandingPageController::class, 'getComponentData']);
