<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024.12.05
class HeroHomeSeeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'HeroHome',
            'description' => 'This is the Spice Hero Home section of the landing page',
        ]);

        $fields = [
          
                    
            'HH_img_url' ,
            'HH_title' ,
            'HH_btn_text' ,
            'HH_btn_url' ,      
        
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
                
             

            'HH_img_url'  =>['SpiceWebTemplate/cdn/shop/files/slide-1_2048x1214_crop_top7279.jpg'],
            'HH_title'  =>['Fresh Spices, Aromatic Flavors'],
            'HH_btn_text'  =>['SHOP NOW'],
            'HH_btn_url'  =>['collections/sexy-lingerie.html'],      


            
        ];
        return $sampleValues[$field] ?? [];
    }
}
