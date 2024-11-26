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

    // Nithya Jayasooriya  -  22/11/2024 --------------------------

    // Retrieve the 'product' component
    $productComponent = Component::where('name', 'feature1')->first();

    // Retrieve the fields and their values for the 'product' component
    $productFields = ComponentField::where('component_id', $productComponent->id)
        ->with('values')
        ->get();

   // Create an associative array to store field data for the 'product'
    $productData = [];
    foreach ($productFields as $field) {
        $productData[$field->field_name] = $field->values->pluck('value')->first();
    }

     // Nithya Jayasooriya  -  25/11/2024  --------------------
   
    $feature2Component = Component::where('name', 'feature2')->first();

    $feature2Fields = ComponentField::where('component_id', $feature2Component->id)
        ->with('values')
        ->get();

    $feature2Data = [];
    foreach ($feature2Fields as $field) {
        $feature2Data[$field->field_name] = $field->values->pluck('value')->first();
    }

     // Nithya Jayasooriya  -  25/11/2024  --------------------

    $feature3Component = Component::where('name', 'feature3')->first();

  
    $feature3Fields = ComponentField::where('component_id', $feature3Component->id)
        ->with('values')
        ->get();

    $feature3Data = [];
    foreach ($feature3Fields as $field) {
        $feature3Data[$field->field_name] = $field->values->pluck('value')->first();
    }


         // Nithya Jayasooriya  -  26/11/2024  --------------------

         $feature4Component = Component::where('name', 'feature4')->first();

  
         $feature4Fields = ComponentField::where('component_id', $feature4Component->id)
             ->with('values')
             ->get();
     
         $feature4Data = [];
         foreach ($feature4Fields as $field) {
             $feature4Data[$field->field_name] = $field->values->pluck('value')->first();
         }


         
         // Nithya Jayasooriya  -  26/11/2024  --------------------

         $feature5Component = Component::where('name', 'feature5')->first();

  
         $feature5Fields = ComponentField::where('component_id', $feature5Component->id)
             ->with('values')
             ->get();
     
         $feature5Data = [];
         foreach ($feature5Fields as $field) {
             $feature5Data[$field->field_name] = $field->values->pluck('value')->first();
         }

    // Pass both sets of data to the view
    return view('home', [
        'headerData' => (object) $headerData,
        'productData' => (object) $productData,
        'feature2Data' => (object) $feature2Data,
        'feature3Data' => (object) $feature3Data,
        'feature4Data' => (object) $feature4Data,
        'feature5Data' => (object) $feature5Data,
    ]);
});

// Route::get('/product', function () {
//     // Retrieve the 'header' component
//     $headerComponent = Component::where('name', 'header')->first();

//     // Retrieve the fields and their values for the 'header' component

//     $headerFields = ComponentField::where('component_id', $headerComponent->id)
//         ->with('values')
//         ->get();

//     // Create an associative array to store field data for the 'header'
//     $headerData = [];
//     foreach ($headerFields as $field) {
//         $headerData[$field->field_name] = $field->values->pluck('value')->first();
//     }

//     // Retrieve the 'product' component
//     $productComponent = Component::where('name', 'feature1')->first();

//     // Retrieve the fields and their values for the 'product' component

//     $productFields = ComponentField::where('component_id', $productComponent->id)
//         ->with('values')
//         ->get();

//    // Create an associative array to store field data for the 'product'

//     $productData = [];
//     foreach ($productFields as $field) {
//         $productData[$field->field_name] = $field->values->pluck('value')->first();
//     }

//     // Pass both sets of data to the view
//     return view('home', [
//         'headerData' => (object) $headerData,
//          'productData' => (object) $productData,
//     ]);
// });

 Route::get('/landing-page/component/{id}', [LandingPageController::class, 'getComponentData']);
