<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024.12.05
class HeroContactusSeeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'HeroContactUs',
            'description' => 'This is the Spice Hero Contactus section of the landing page',
        ]);

        $fields = [
          
            'HC_mainimg_url' ,
            'HC_maintitle',
             
        
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
                
             
            'HC_mainimg_url' =>['SpiceWebTemplate/cdn/shop/files/slide-2_2048x1214_crop_top7279.jpg?v=1614350745'],
            'HC_maintitle' =>['Contact Us'],
           

                       
        ];
        return $sampleValues[$field] ?? [];
    }
}
