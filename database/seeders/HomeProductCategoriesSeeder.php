<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024.12.05
class HomeProductCategoriesSeeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'HomeProductCategories',
            'description' => 'This is the Spice Home Product Categories  section of the landing page',
        ]);

        $fields = [
          
                    
            'H_cate_title1' ,
            'H_cate_title2' ,

            'H_cate_btn1_text' ,
            'H_cate_btn1_url' ,
            
            'H_cate_btn2_text' ,
            'H_cate_btn2_url' ,
            
            'H_cate_btn3_text' ,
            'H_cate_btn3_url' ,
            
            'H_cate_btn4_text' ,
            'H_cate_btn4_url' ,

             
        
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
                
             

     

            'H_cate_title1' =>['explore & choose'],
            'H_cate_title2' =>['categories'],

            'H_cate_btn1_text' =>['COOKING INGREDIENTS'],
            'H_cate_btn1_url' =>['collections/candied-fruits.html'],
            
            'H_cate_btn2_text' =>['BAKING INGREDIENTS'],
            'H_cate_btn2_url' =>['collections/natural-flavorings-extracts.html'],
            
            'H_cate_btn3_text' =>['SALTS + PEPPERCORNS'],
            'H_cate_btn3_url' =>['collections/spice-blends.html'],
            
            'H_cate_btn4_text' =>['herbs'],
            'H_cate_btn4_url' =>['products/black-pepper-whole.html'],

                       
        ];
        return $sampleValues[$field] ?? [];
    }
}
