<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024/11/25 
class Feature3Seeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'feature3',
            'description' => 'This is the feature3 section of the landing page',
        ]);

        $fields = [
            'f3_title',
            
            'f3_icon1',
            'f3_text1',
            'f3_para1',
            'f3_button1_text',
            'f3_button1_url',

            'f3_icon2',
            'f3_text2',
            'f3_para2',
            'f3_button2_text',
            'f3_button2_url',

            'f3_icon3',
            'f3_text3',
            'f3_para3',
            'f3_button3_text',
            'f3_button3_url',

            'f3_icon4',
            'f3_text4',
            'f3_para4',
            'f3_button4_text',
            'f3_button4_url',

            'f3_img_url',
            
            
            
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
 

            'f3_title'=>['Your life will be much easier'],
            
            'f3_icon1'=>['nc-icon nc-layout-11'],
            'f3_text1'=>['Components'],
            'f3_para1'=>['The kit comes with a huge number of components designed to look perfect together.'],
            'f3_button1_text'=>['SEE MORE'],
            'f3_button1_url'=>['#pkp'],

            'f3_icon2'=>['nc-icon nc-palette'],
            'f3_text2'=>['Beautiful Gallery'],
            'f3_para2'=>["Spend your time generating new ideas. You don't have to think of implementing anymore."],
            'f3_button2_text'=>['SEE MORE'],
            'f3_button2_url'=>['#pkp'],

            'f3_icon3'=>['nc-icon nc-touch-id'],
            'f3_text3'=>['Secured'],
            'f3_para3'=>['Larger, yet dramatically thinner. More powerful, but remarkably power is efficient.'],
            'f3_button3_text'=>['SEE MORE'],
            'f3_button3_url'=>['#pkp'],

            'f3_icon4'=>['nc-icon nc-delivery-fast'],
            'f3_text4'=>['Fast Prototyping'],
            'f3_para4'=>['Medium has a new head of product, while the startup behind the defunct texting app...'],
            'f3_button4_text' =>['SEE MORE'],
            'f3_button4_url'=>['#pkp'],

            'f3_img_url'=>['img/sections/iphone.png'],



            ];

        return $sampleValues[$field] ?? [];
    }
}
