<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024.12.01
class Header4Seeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'header4',
            'description' => 'This is the header 4 section of the landing page',
        ]);

        $fields = [
          
                    
            'H4_text1' ,
            'H4_text1_url' ,
            'H4_text2',
            'H4_text2_url',
            'H4_text3',
            'H4_text3_url',
            'H4_icon1' ,
            'H4_icon1_url' ,
            'H4_icon2' ,
            'H4_icon2_url',
            'H4_img1_url' ,
            'H4_img2_url' ,
            'H4_video_url' ,
            'H4_video_text' ,
            'H4_textA1' ,
            'H4_textA2',
            'H4_btn_text',
            'H4_btn_icon',
            'H4_btn_url' ,
                  
        
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
                
            'H4_text1' =>['Creative Tim'],
            'H4_text1_url' =>['www.creative-tim.html'],
            'H4_text2'=>['Components'],
            'H4_text2_url'=>['javascript:;'],
            'H4_text3'=>['Tutorial'],
            'H4_text3_url'=>['javascript:;'],
            'H4_icon1' =>['fa fa-twitter'],
            'H4_icon1_url' =>['javascript:;'],
            'H4_icon2' =>['fa fa-facebook'],
            'H4_icon2_url'=>['javascript:;'],
            'H4_img1_url' =>['/img/video-placeholder.png'],
            'H4_img2_url' =>['img/video-placeholder.png'],
            'H4_video_url' =>['assets/video/fireworks.mp4'],
            'H4_video_text' =>['Video not supported'],
            'H4_textA1' =>['Make it'],
            'H4_textA2' =>['Stand out'],
            'H4_btn_text' =>['Play Video'],
            'H4_btn_icon' =>['fa fa-play'],
            'H4_btn_url' =>['video-source'],



            
        ];
        return $sampleValues[$field] ?? [];
    }
}
