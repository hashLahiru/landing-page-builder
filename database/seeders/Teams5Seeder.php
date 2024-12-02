<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024/11/30
class Teams5Seeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'Teams5',
            'description' => 'This is the Teams 5 section of the landing page',
        ]);

        $fields = [

'T5_mainimg',        
'T5_title',      
'T5_description',
'T5_img1',    
'T5_img1_url',         
'T5_textA1',
'T5_textB1',
'T5_para1',
'T5_iconA1',      
'T5_iconA1_url',
'T5_iconB1',      
'T5_iconB1_url',
'T5_iconC1',      
'T5_iconC1_url',
'T5_img2',    
'T5_img2_url',         
'T5_textA2',
'T5_textB2',
'T5_para2',
'T5_iconA2',      
'T5_iconA2_url',
'T5_iconB2',      
'T5_iconB2_url',
'T5_iconC2',      
'T5_iconC2_url',    
'T5_img3',    
'T5_img3_url',         
'T5_textA3',
'T5_textB3',
'T5_para3',
'T5_iconA3',      
'T5_iconA3_url',
'T5_iconB3',      
'T5_iconB3_url',
'T5_iconC3',      
'T5_iconC3_url',
'T5_img4',    
'T5_img4_url',         
'T5_textA4',
'T5_textB4',
'T5_para4',
'T5_iconA4',      
'T5_iconA4_url',
'T5_iconB4',      
'T5_iconB4_url',
'T5_iconC4',      
'T5_iconC4_url',
            
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

'T5_mainimg'=>['img/sections/martin-knize.jpg'],
'T5_title' =>['The Executive Team 5'],   
'T5_description'=>['This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.'],
'T5_img1'=>['img/faces/erik-lucatero-2.jpg'],    
'T5_img1_url'=>['javascript:;'],         
'T5_textA1'=>['Andrew Carnegie'],
'T5_textB1'=>['Project Manager'],
'T5_para1'=>['If a team is to reach its potential, each player must be willing to subordinate his personal goals.'],
'T5_iconA1'=>['fa fa-twitter'],      
'T5_iconA1_url'=>['javascript:;'],
'T5_iconB1'=>['fa fa-facebook'],      
'T5_iconB1_url'=>['javascript:;'],
'T5_iconC1'=>['fa fa-google-plus'],      
'T5_iconC1_url'=>['javascript:;'],
'T5_img2'=>['img/faces/kaci-baum-2.jpg'],    
'T5_img2_url'=>['javascript:;'],         
'T5_textA2'=>['Alec Thompson'],
'T5_textB2'=>['Founder'],
'T5_para2'=>["Interdependent people combine their own efforts with the efforts of others to achieve their greatest success."],
'T5_iconA2'=>['fa fa-linkedin'],      
'T5_iconA2_url'=>['javascript:;'],
'T5_iconB2'=>['fa fa-dribbble'],      
'T5_iconB2_url'=>['javascript:;'],
'T5_iconC2'=>['fa fa-pinterest'],      
'T5_iconC2_url'=>['javascript:;'],   
'T5_img3'=>['img/faces/clem-onojeghuo-3.jpg'],    
'T5_img3_url'=>['javascript:;'],         
'T5_textA3'=>['Gine Andrew'],
'T5_textB3'=>['Web Designer'],
'T5_para3'=>["When he took time to help the man up the mountain, lo, he scaled it himself. Sticks in a bundle are unbreakable."],
'T5_iconA3'=>['fa fa-youtube'],      
'T5_iconA3_url'=>['javascript:;'],
'T5_iconB3'=>['fa fa-twitter'],      
'T5_iconB3_url'=>['javascript:;'],
'T5_iconC3'=>['fa fa-instagram'],      
'T5_iconC3_url'=>['javascript:;'],
'T5_img4'=>['img/faces/clem-onojeghuo-2.jpg'],    
'T5_img4_url'=>['javascript:;'],         
'T5_textA4'=>['George West'],
'T5_textB4'=>['Backend Hacker'],
'T5_para4'=>[" I love you like Kanye loves Kanye. Don't be scared of the truth because we need to restart the human foundation."],
'T5_iconA4'=>['fa fa-linkedin'],      
'T5_iconA4_url'=>['javascript:;'],
'T5_iconB4'=>['fa fa-instagram'],      
'T5_iconB4_url'=>['javascript:;'],
'T5_iconC4'=>['fa fa-dribbble'],      
'T5_iconC4_url'=>['javascript:;'],



            ];

        return $sampleValues[$field] ?? [];
    }
}





