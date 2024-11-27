<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;

class AdminController extends Controller
{
    public function saveComponentFields(Request $request)
    {
        $componentId = $request->component_id;
        $updatedFields = $request->updated_fields;

        $component = Component::find($componentId);

        if ($component) {
            foreach ($updatedFields as $fieldId => $value) {
                // Find the field
                $field = ComponentField::find($fieldId);

                if ($field) {
                    // Find or create the value entry for this field
                    $fieldValue = ComponentFieldValue::firstOrCreate(
                        ['component_field_id' => $fieldId], // Match criteria
                        ['value' => ''] // Default value
                    );

                    // Update the value
                    $fieldValue->value = $value;
                    $fieldValue->save();
                }
            }

            return response()->json(['message' => 'Fields updated successfully.']);
        }

        return response()->json(['error' => 'Component not found'], 404);
    }
}
