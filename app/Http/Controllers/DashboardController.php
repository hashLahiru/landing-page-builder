<?php

namespace App\Http\Controllers;

use App\Models\AdminDashMain;
use Illuminate\Http\Request;

use App\Models\Component;
use App\Models\ComponentField;

class DashboardController extends Controller
{
    public function index()
    {
        $menus = AdminDashMain::with('subMenus')->get();
        return view('admin.layout.header', compact('menus'));
    }

    public function saveComponentFields(Request $request)
    {
        $componentId = $request->component_id;

        $updatedFields = $request->updated_fields;

        $component = Component::find($componentId);

        if ($component) {
            foreach ($updatedFields as $fieldId => $value) {
                $field = ComponentField::find($fieldId);
                if ($field) {
                    $field->value = $value;
                    $field->save();
                }
            }

            return response()->json(['message' => 'Field updated Successfully.']);
        }

        return response()->json(['error' => 'Component not found'], 404);
    }
}
