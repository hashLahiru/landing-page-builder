<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Component;
use App\Models\ComponentField;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\ContactController;

// Landing Page Route
Route::get('/', function () {
    $components = [
        'header',
        'product',
        'feature2',
        'feature3',
        'feature4',
        'feature5',
        'feedback1',
        'feedback2',
        'feedback3',
        'ProductList1',
        'ProductList2',
        'ProductList3',
        'ProductList4'
    ];

    $data = [];
    foreach ($components as $componentName) {
        $component = Component::where('name', $componentName)->first();
        if ($component) {
            $fields = ComponentField::where('component_id', $component->id)
                ->with('values')
                ->get();
            $componentData = [];
            foreach ($fields as $field) {
                $componentData[$field->field_name] = $field->values->pluck('value')->first();
            }
            $data[$componentName . 'Data'] = (object) $componentData;
        }
    }

    return view('home', $data);
});

// Profile Management Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes
Route::middleware('auth')->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });

    Route::get('/admin-test', function () {
        return view('admin.dashboard');
    });

    Route::get('/messages', [ContactController::class, 'index'])->name('admin.messages');
    Route::get('/messages/{id}', [ContactController::class, 'show'])->name('admin.messages.show');

    Route::get('/page-editor', function () {
        $components = Component::all();
        return view('admin.page-editor', [
            'components' => $components
        ]);
    });

    Route::post('/save-component-fields', [AdminController::class, 'saveComponentFields']);
});

// Retrieve Component Fields for AJAX
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

// Image Upload Routes
Route::get('/image-uploader', [ImageController::class, 'index'])->name('image.uploader');
Route::post('/admin/image-upload', [ImageController::class, 'upload'])->name('image.upload');

// Landing Page Component Data
Route::get('/landing-page/component/{id}', [LandingPageController::class, 'getComponentData']);

// Contact Form Routes
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Logout Route
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Authentication Routes
require __DIR__ . '/auth.php';
