<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024/11/30
class Teams3Seeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'Teams3',
            'description' => 'This is the Teams 3 section of the landing page',
        ]);

        $fields = [
        
'T3_title',      
'T3_description',
'T3_img1',    
'T3_img1_url',         
'T3_textA1',
'T3_textB1',
'T3_para1',
'T3_iconA1',      
'T3_iconA1_url',
'T3_iconB1',      
'T3_iconB1_url',
'T3_iconC1',      
'T3_iconC1_url',
'T3_img2',    
'T3_img2_url',         
'T3_textA2',
'T3_textB2',
'T3_para2',
'T3_iconA2',      
'T3_iconA2_url',
'T3_iconB2',      
'T3_iconB2_url',
'T3_iconC2',      
'T3_iconC2_url',    
'T3_img3',    
'T3_img3_url',         
'T3_textA3',
'T3_textB3',
'T3_para3',
'T3_iconA3',      
'T3_iconA3_url',
'T3_iconB3',      
'T3_iconB3_url',
'T3_iconC3',      
'T3_iconC3_url',
'T3_img4',    
'T3_img4_url',         
'T3_textA4',
'T3_textB4',
'T3_para4',
'T3_iconA4',      
'T3_iconA4_url',
'T3_iconB4',      
'T3_iconB4_url',
'T3_iconC4',      
'T3_iconC4_url',
            
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

'T3_title' =>['The Executive Team 3'],   
'T3_description'=>['This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.'],
'T3_img1'=>['img/faces/clem-onojeghuo-3.jpg'],    
'T3_img1_url'=>['javascript:;'],         
'T3_textA1'=>['Alec Thompson'],
'T3_textB1'=>['Founder'],
'T3_para1'=>['Individual commitment to a group effort – that’s what makes a team work, a society work...'],
'T3_iconA1'=>['fa fa-twitter'],      
'T3_iconA1_url'=>['javascript:;'],
'T3_iconB1'=>['fa fa-facebook'],      
'T3_iconB1_url'=>['javascript:;'],
'T3_iconC1'=>['fa fa-google-plus'],      
'T3_iconC1_url'=>['javascript:;'],
'T3_img2'=>['img/faces/ayo-ogunseinde-2.jpg'],    
'T3_img2_url'=>['javascript:;'],         
'T3_textA2'=>['Ethan Smith'],
'T3_textB2'=>['Founder'],
'T3_para2'=>["Don't be scared of the truth because we need to restart the human foundation in truth..."],
'T3_iconA2'=>['fa fa-linkedin'],      
'T3_iconA2_url'=>['javascript:;'],
'T3_iconB2'=>['fa fa-dribbble'],      
'T3_iconB2_url'=>['javascript:;'],
'T3_iconC2'=>['fa fa-pinterest'],      
'T3_iconC2_url'=>['javascript:;'],  
'T3_img3'=>['img/faces/clem-onojeghuo-2.jpg'],    
'T3_img3_url'=>['javascript:;'],         
'T3_textA3'=>['Lucas Andrew'],
'T3_textB3'=>['Web Designer'],
'T3_para3'=>["I love you like Kanye loves Kanye. Don't be scared of the truth. Kanye loves himself like Kanye loves Kanye."],
'T3_iconA3'=>['fa fa-youtube'],      
'T3_iconA3_url'=>['javascript:;'],
'T3_iconB3'=>['fa fa-twitter'],      
'T3_iconB3_url'=>['javascript:;'],
'T3_iconC3'=>['fa fa-instagram'],      
'T3_iconC3_url'=>['javascript:;'],
'T3_img4'=>['img/faces/kaci-baum-2.jpg'],    
'T3_img4_url'=>['javascript:;'],         
'T3_textA4'=>['Sophie West'],
'T3_textB4'=>['Backend Hacker'],
'T3_para4'=>['It is literally true that you can succeed best and quickest by helping others to succeed because they care about.'],
'T3_iconA4'=>['fa fa-linkedin'],      
'T3_iconA4_url'=>['javascript:;'],
'T3_iconB4'=>['fa fa-instagram'],      
'T3_iconB4_url'=>['javascript:;'],
'T3_iconC4'=>['fa fa-dribbble'],      
'T3_iconC4_url'=>['javascript:;'],



            ];

        return $sampleValues[$field] ?? [];
    }
}





