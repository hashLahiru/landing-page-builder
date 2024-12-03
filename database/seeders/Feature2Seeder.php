<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024/11/25 
class Feature2Seeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'feature2',
            'description' => 'This is the feature2 section of the landing page',
        ]);

        $fields = [
            'f2_title',
            'f2_description',
            'f2_img1_url',
            'f2_text1',
            'f2_icon1',
            'f2_para1',
            'f2_button1_icon',
            'f2_button1_text',
            'f2_button1_url',
            'f2_img2_url',
            'f2_text2',
            'f2_icon2',
            'f2_para2',
            'f2_button2_icon',
            'f2_button2_text',
            'f2_button2_url',
            'f2_img3_url',
            'f2_text3',
            'f2_icon3',
            'f2_para3',
            'f2_button3_icon',
            'f2_button3_text',
            'f2_button3_url',
            
            
            
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
 


            'f2_title' =>['Is this what you are looking for?'],
            'f2_description'=>["This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here."],
            'f2_img1_url'=>['img/sections/jan-sendereks.jpg'],
            'f2_text1'=>['Design'],
            'f2_icon1'=>['nc-icon nc-world-2'],
            'f2_para1'=>['Unlike fashionable design, it lasts many years – even in today’s throwaway society.'],
            'f2_button1_icon'=>['fa fa-book'],
            'f2_button1_text'=>['SHOW MORE'],
            'f2_button1_url'=>['#pkp'],
            'f2_img2_url'=>['img/sections/anders-jilden.jpg'],
            'f2_text2'=>['UI Kits'],
            'f2_icon2'=>['nc-icon nc-single-copy-04'],
            'f2_para2'=>['Imagine if you could go to the profile of a friend and instead of scrolling through...'],
            'f2_button2_icon'=>['fa fa-book'],
            'f2_button2_text'=>['SHOW MORE'],
            'f2_button2_url'=>['#pkp'],
            'f2_img3_url'=>['img/sections/uriel-soberanes.jpg'],
            'f2_text3'=>['Development'],
            'f2_icon3'=>['nc-icon nc-time-alarm'],
            'f2_para3'=>['For starters, it seemed like a good idea to keep a running list of Vision investments.'],
            'f2_button3_icon'=>['fa fa-book'],
            'f2_button3_text'=>['SHOW MORE'],
            'f2_button3_url'=>['#pkp'],

       ];

        return $sampleValues[$field] ?? [];
    }
}
