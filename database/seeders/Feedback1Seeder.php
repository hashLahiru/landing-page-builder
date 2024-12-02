<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024/11/25 
class Feedback1Seeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'Feedback1',
            'description' => 'This is the Feedback1 section of the landing page',
        ]);

        $fields = [
        
      
'fb1_img_url',         
'fb1_title' ,
'fb1_description' ,
'fb1_icon1',
'fb1_para1',
'fb1_text1' ,
'fb1_usertext1' ,
'fb1_profile1',
'fb1_icon2',
'fb1_para2',
'fb1_text2' ,
'fb1_usertext2' ,
'fb1_profile2' ,
'fb1_icon3',
'fb1_para3' ,
'fb1_text3' ,
'fb1_usertext3' ,
'fb1_profile3' ,

                   
            
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


            'fb1_img_url' =>['img/sections/uriel-soberanes.jpg'],  
            'fb1_title' =>['Our Clients Love Us'],
            'fb1_description' =>['You need more information? Check what other persons are saying about our product. They are very happy with their purchase.'],
            'fb1_icon1'=>['fa fa-quote-right'],
            'fb1_para1' =>["Your products, all the kits that I have downloaded from your site and worked with are sooo cool! I love the color mixtures, cards... everything. Keep up the great work!"],
            'fb1_text1' =>['Alec Thompson'],
            'fb1_usertext1' =>['@alecthompson'],
            'fb1_profile1' =>['img/faces/ayo-ogunseinde-2.jpg'],
            'fb1_icon2'=>['fa fa-quote-right'],
            'fb1_para2' =>["Don't be scared of the truth because we need to restart the human foundation in truth. That's why I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is not so attractive"],
            'fb1_text2' =>['Gina Andrew'],
            'fb1_usertext2' =>['@ginaandrew'],
            'fb1_profile2' =>['img/faces/joe-gardner-2.jpg'],
            'fb1_icon3'=>['fa fa-quote-right'],
            'fb1_para3' =>["Your products, all the kits that I have downloaded from your site and worked with are sooo cool! I love the color mixtures, cards... everything. Keep up the great work!"],
            'fb1_text3' =>['Joe West'],
            'fb1_usertext3' =>['@georgewest'],
            'fb1_profile3' =>['img/faces/kaci-baum-2.jpg'],
             
      

            ];

        return $sampleValues[$field] ?? [];
    }
}





