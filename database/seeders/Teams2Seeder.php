<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024/11/30
class Teams2Seeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'Teams2',
            'description' => 'This is the Teams 2 section of the landing page',
        ]);

        $fields = [
       
'T2_mainimg' ,          
'T2_title' ,
'T2_description',
'T2_img1',    
'T2_img1_url', 
'T2_textA1',
'T2_textB1',
'T2_iconA1', 
'T2_iconA1_url',
'T2_iconB1',
'T2_iconB1_url',
'T2_iconC1',   
'T2_iconC1_url',
'T2_img2',    
'T2_img2_url',    
'T2_textA2',
'T2_textB2',
'T2_iconA2',
'T2_iconA2_url',
'T2_iconB2',
'T2_iconB2_url',
'T2_iconC2',
'T2_iconC2_url',
'T2_img3',
'T2_img3_url',
'T2_textA3',
'T2_textB3',
'T2_iconA3', 
'T2_iconA3_url',
'T2_iconB3',     
'T2_iconB3_url',
'T2_iconC3',
'T2_iconC3_url',
            
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

'T2_mainimg' =>['img/sections/jan-sendereks.jpg'],             
'T2_title' =>['The Executive Team 2'],      
'T2_description'=>['This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.'],
'T2_img1'=>['img/faces/kaci-baum-1.jpg'],    
'T2_img1_url'=>['javascript:;'],         
'T2_textA1'=>['Alec Thompson'],
'T2_textB1'=>['Managing Partner'],
'T2_iconA1'=>['fa fa-twitter'],      
'T2_iconA1_url'=>['javascript:;'],
'T2_iconB1'=>['fa fa-facebook'],      
'T2_iconB1_url'=>['javascript:;'],
'T2_iconC1'=>['fa fa-dribbble'],      
'T2_iconC1_url'=>['javascript:;'],
'T2_img2'=>['img/faces/clem-onojeghuo-1.jpg'],    
'T2_img2_url'=>['javascript:;'],         
'T2_textA2'=>['George Lincoln'],
'T2_textB2'=>['Backend Hacker'],
'T2_iconA2'=>['fa fa-linkedin'],      
'T2_iconA2_url'=>['javascript:;'],
'T2_iconB2'=>['fa fa-facebook'],      
'T2_iconB2_url'=>['javascript:;'],
'T2_iconC2'=>['fa fa-dribbble'],      
'T2_iconC2_url'=>['javascript:;'],
'T2_img3'=>['img/faces/joe-gardner-1.jpg'],    
'T2_img3_url'=>['javascript:;'],         
'T2_textA3'=>['Sophie West'],
'T2_textB3'=>['Photographer'],
'T2_iconA3'=>['fa fa-dribbble'],      
'T2_iconA3_url'=>['javascript:;'],
'T2_iconB3'=>['fa fa-twitter'],      
'T2_iconB3_url'=>['javascript:;'],
'T2_iconC3'=>['fa fa-linkedin'],      
'T2_iconC3_url'=>['javascript:;'],
            




            ];

        return $sampleValues[$field] ?? [];
    }
}





