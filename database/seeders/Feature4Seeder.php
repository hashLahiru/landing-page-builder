<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024/11/25 
class Feature4Seeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'feature4',
            'description' => 'This is the feature4 section of the landing page',
        ]);

        $fields = [
        
           
            'f4_title',
            'f4_description',
            
            'f4_icon1',
            'f4_text1',
            'f4_para1',
        
            'f4_icon2',
            'f4_text2',
            'f4_para2',
        
            'f4_icon3',
            'f4_text3',
            'f4_para3',
        
            'f4_img_url',
            
            
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
 

            'f4_title'=>['Is this what you are looking for?'],
            'f4_description'=>['The more formalized version launching today brings a slate of corporate partners and a more structured application review process.'],
            
            'f4_icon1'=>['nc-icon nc-atom'],
            'f4_text1'=>['For Developers'],
            'f4_para1'=>["The moment you use Paper Kit, you know you’ve never felt anything like it. With a single use, is's a powerfull UI Kit"],
        
            'f4_icon2'=>['nc-icon nc-ruler-pencil'],
            'f4_text2'=>['For Designers Only'],
            'f4_para2'=>["TThe moment you use Paper Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before."],
        
            'f4_icon3'=>['nc-icon nc-tie-bow'],
            'f4_text3'=>['Beautiful Examples'],
            'f4_para3'=>["Speed up your development time or get inspired with the large number of example pages."],
        
            'f4_img_url'=>['img/sections/ipad.png'],


            ];

        return $sampleValues[$field] ?? [];
    }
}
