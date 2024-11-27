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

        $feedback1Component = Component::where('name', 'feedback1')->first();

  
        $feedback1Fields = ComponentField::where('component_id', $feedback1Component->id)
           ->with('values')
           ->get();
              
        $feedback1Data = [];
        foreach ($feedback1Fields as $field) {
        $feedback1Data[$field->field_name] = $field->values->pluck('value')->first();
         }


      // Nithya Jayasooriya  -  26/11/2024  --------------------

        $feedback2Component = Component::where('name', 'feedback2')->first();

  
        $feedback2Fields = ComponentField::where('component_id', $feedback2Component->id)
           ->with('values')
           ->get();
              
        $feedback2Data = [];
        foreach ($feedback2Fields as $field) {
        $feedback2Data[$field->field_name] = $field->values->pluck('value')->first();
         }



        // Nithya Jayasooriya  -  26/11/2024  --------------------

        $feedback3Component = Component::where('name', 'feedback3')->first();

  
        $feedback3Fields = ComponentField::where('component_id', $feedback3Component->id)
           ->with('values')
           ->get();
              
        $feedback3Data = [];
        foreach ($feedback3Fields as $field) {
        $feedback3Data[$field->field_name] = $field->values->pluck('value')->first();
         }





                              // Nithya Jayasooriya  -  27/11/2024  --------------------

                              $ProductList1Component = Component::where('name', 'ProductList1')->first();

  
                              $ProductList1Fields = ComponentField::where('component_id', $ProductList1Component->id)
                                  ->with('values')
                                  ->get();
                          
                              $ProductList1Data = [];
                              foreach ($ProductList1Fields as $field) {
                                  $ProductList1Data[$field->field_name] = $field->values->pluck('value')->first();
                              }
                  
                              


                           // Nithya Jayasooriya  -  27/11/2024  --------------------

                           $ProductList2Component = Component::where('name', 'ProductList2')->first();

  
                           $ProductList2Fields = ComponentField::where('component_id', $ProductList2Component->id)
                               ->with('values')
                               ->get();
                       
                           $ProductList2Data = [];
                           foreach ($ProductList2Fields as $field) {
                               $ProductList2Data[$field->field_name] = $field->values->pluck('value')->first();

                           }


                         // Nithya Jayasooriya  -  27/11/2024  --------------------

                        //    $ProductList3Component = Component::where('name', 'ProductList3')->first();

  
                        //    $ProductList3Fields = ComponentField::where('component_id', $ProductList3Component->id)
                        //        ->with('values')
                        //        ->get();
                       
                        //    $ProductList3Data = [];
                        //    foreach ($ProductList3Fields as $field) {
                        //        $ProductList3Data[$field->field_name] = $field->values->pluck('value')->first();
                        //    }
                           



                                            //  // Nithya Jayasooriya  -  27/11/2024  --------------------

                                            //  $ProductList4Component = Component::where('name', 'ProductList4')->first();

  
                                            //  $ProductList4Fields = ComponentField::where('component_id', $ProductList4Component->id)
                                            //      ->with('values')
                                            //      ->get();
                                         
                                            //  $ProductList4Data = [];
                                            //  foreach ($ProductList4Fields as $field) {
                                            //      $ProductList4Data[$field->field_name] = $field->values->pluck('value')->first();
                                            //  }
                                            //  }
                                    
                  


    // Pass both sets of data to the view
    return view('home', [
        'headerData' => (object) $headerData,
        'productData' => (object) $productData,
        'feature2Data' => (object) $feature2Data,
        'feature3Data' => (object) $feature3Data,
        'feature4Data' => (object) $feature4Data,
        'feature5Data' => (object) $feature5Data,
        'feedback1Data' => (object) $feedback1Data,
         'feedback2Data' => (object) $feedback2Data,
         'feedback3Data' => (object) $feedback3Data,
         'ProductList1Data' => (object) $ProductList1Data,
         'ProductList2Data' => (object) $ProductList2Data,
        // 'ProductList3Data' => (object) $ProductList3Data,
        // 'ProductList4Data' => (object) $ProductList4Data,
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
