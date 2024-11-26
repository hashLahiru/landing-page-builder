<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024/11/25 
class Feature5Seeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'feature5',
            'description' => 'This is the feature5 section of the landing page',
        ]);

        $fields = [
        
            'f5_img_url',
           
            'f5_title',
            
            'f5_icon1',
            'f5_text1',
            'f5_para1',
        
             
            'f5_icon2',
            'f5_text2',
            'f5_para2',
        
        
            'f5_icon3',
            'f5_text3',
            'f5_para3',

            'f5_icon4',
            'f5_text4',
            'f5_para4',
                   
            
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



            'f5_img_url' =>['img/sections/the-how-photographer.jpg'],
           
            'f5_title' =>['Your life will be much easier'],
            
            'f5_icon1'=>['nc-icon nc-atom'],
            'f5_text1' =>['For Developers'],
            'f5_para1' =>['While everyone technically has the feature now, that doesn’t mean you’ll see it all the time. But in this case, the feature wasn’t just randomly A/B tested.'],
        
             
            'f5_icon2' =>['nc-icon nc-ruler-pencil'],
            'f5_text2'=>['For Designers'],
            'f5_para2' =>['Loveflutter has actually been around for a while, pivoting from matches based on shared interests (innovative!) to now focus on analyzing.'],
        
        
            'f5_icon3' =>['nc-icon nc-paper'],
            'f5_text3'=>['Example Pages Included'],
            'f5_para3'=>['As for the user backlash, it comes to the challenges faces in building features to aid newcomers, which can impact its growth and bottom line.'],

            'f5_icon4'=>['nc-icon nc-time-alarm'],
            'f5_text4'=>['Save Time'],
            'f5_para4'=>['The feature itself had been developed via experimental account, where it had tested how to better personalize its service to end users.'],
 



            ];

        return $sampleValues[$field] ?? [];
    }
}





