<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024.12.02
class FooterSeeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'footer',
            'description' => 'This is the footer section of the landing page',
        ]);

        $fields = [
        

            'footer_text1',
            'footer_text1_ur',
            'footer_text2',
            'footer_text2_ur',
            'footer_text3',
            'footer_text3_ur',
            'footer_textA',
            'footer_textB',
            'footer_icon',
            'footer_textC',

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
            'title' => [''],


            
            'footer_text1' => ['Creative Tim'],
            'footer_text1_url' => ['https://www.creative-tim.com/'],
            'footer_text2' => ['Blog'],
            'footer_text2_url' => ['http://blog.creative-tim.com/'],
            'footer_text3' => ['Licenses'],
            'footer_text3_url' => ['https://www.creative-tim.com/license'],
            'footer_textA' => ['©'],
            'footer_textB' => [', made with'],
            'footer_icon' => ['fa fa-heart heart'],
            'footer_textC' => ['by Creative Tim'],

           
        ];
        return $sampleValues[$field] ?? [];
    }
}
