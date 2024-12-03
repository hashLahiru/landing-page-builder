<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'product',
            'description' => 'This is the product section of the landing page',
        ]);

        $fields = [
            'f1_title',
            'f1_description',
            'f1_icon1',
            'f1_text1',
            'f1_description1',
            'f1_button1_url',
            'f1_button1_text',
            'f1_icon2',
            'f1_text2',
            'f1_description2',
            'f1_button2_url',
            'f1_button2_text',
            'f1_icon3',
            'f1_text3',
            'f1_description3',
            'f1_button3_url',
            'f1_button3_text',
            'f1_icon4',
            'f1_text4',
            'f1_description4',
            'f1_button4_url',
            'f1_button4_text',
        ];

        foreach ($fields as $field) {
            $componentField = ComponentField::create([
                'component_id' => $component->id,
                'field_name' => $field,
            ]);

            $fieldValues = $this->getSampleValues($field);

            foreach ($fieldValues as $value) {
                ComponentFieldValue::create([
                    'component_field_id' => $componentField->id,
                    'value' => $value,
                ]);
            }
        }
    }

    private function getSampleValues($field)
    {
        $sampleValues = [
            'f1_title' => ['Let\'s talk product'],
            'f1_description' => ['This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn\'t scroll to get here. Add a button if you want the user to see more.'],
            'f1_icon1' => ['nc-icon nc-palette'],
            'f1_text1' => ['Beautiful Gallery'],
            'f1_description1' => ['Spend your time generating new ideas. You don\'t have to think of implementing.'],
            'f1_button1_url' => ['#'],
            'f1_button1_text' => ['SEE MORE'],
            'f1_icon2' => ['nc-icon nc-bulb-63'],
            'f1_text2' => ['New Ideas'],
            'f1_description2' => ['Larger, yet dramatically thinner. More powerful, but remarkably power efficient.'],
            'f1_button2_url' => ['#'],
            'f1_button2_text' => ['SEE MORE'],
            'f1_icon3' => ['nc-icon nc-chart-bar-32'],
            'f1_text3' => ['Statistics'],
            'f1_description3' => ['Choose from a veriety of many colors resembling sugar paper pastels.'],
            'f1_button3_url' => ['#'],
            'f1_button3_text' => ['SEE MORE'],
            'f1_icon4' => ['nc-icon nc-sun-fog-29'],
            'f1_text4' => ['Delightful design'],
            'f1_description4' => ['Find unique and handmade delightful designs related items directly from our sellers.'],
            'f1_button4_url' => ['#'],
            'f1_button4_text' => ['SEE MORE'],
        ];
        return $sampleValues[$field] ?? [];
    }
}
