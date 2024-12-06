<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024.12.05
class HeroProductSeeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'HeroProduct',
            'description' => 'This is the Spice Hero Product  section of the landing page',
        ]);

        $fields = [
          
                    
            'HP_img_url' ,
            'HP_title' ,
             
        
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
                
             

            'HP_img_url' =>['SSpiceWebTemplate/cdn/shop/files/banner-1_1024x565_crop_centerb695.jpg'],
            'HP_title' =>['Products'],

                       
        ];
        return $sampleValues[$field] ?? [];
    }
}
