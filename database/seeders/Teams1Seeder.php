<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024/11/30
class Teams1Seeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'Teams1',
            'description' => 'This is the Teams 1 section of the landing page',
        ]);

        $fields = [
        
'T1_title',      
'T1_description',
'T1_img1',    
'T1_img1_url',
'T1_text1_url',          
'T1_textA1',
'T1_textB1',
'T1_para1',
'T1_iconA1',      
'T1_iconA1-url',
'T1_iconB1',      
'T1_iconB1-url',
'T1_iconC1',      
'T1_iconC1-url',
'T1_img2',     
'T1_img2_url',
'T1_text2_url',   
'T1_textA2',
'T1_textB2',
'T1_para2',
'T1_iconA2',      
'T1_iconA2-url',
'T1_iconB2',      
'T1_iconB2-url',
'T1_iconC2',      
'T1_iconC2-url',
'T1_img3',  
'T1_img3_url',
'T1_text3_url',      
'T1_textA3',
'T1_textB3',
'T1_para3',
'T1_iconA3',      
'T1_iconA3-url',
'T1_iconB3',      
'T1_iconB3-url',
'T1_iconC3',      
'T1_iconC3-url',
'T1_img4',  
'T1_img4_url',
'T1_text4_url',     
'T1_textA4',
'T1_textB4',
'T1_para4',
'T1_iconA4',      
'T1_iconA4-url',
'T1_iconB4',      
'T1_iconB4-url',
'T1_iconC4',      
'T1_iconC4-url',
            
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



'T1_title'=>['Our Stunning Team 1'],      
'T1_description'=>['This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.'],
'T1_img1'=>['img/faces/clem-onojeghuo-3.jpg'],    
'T1_img1_url'=>['#avatar'],
'T1_text1_url'=>['javascript:;'],     
'T1_textA1'=>['Henry Ford'],
'T1_textB1'=>['PRODUCT MANAGER'],
'T1_para1'=>['Teamwork is so important that it is virtually impossible for you to reach the heights of your capabilities or make the money that you want without becoming very good at it.'],
'T1_iconA1'=>['fa fa-twitter'],      
'T1_iconA1_url'=>['javascript:;'],
'T1_iconB1'=>['fa fa-dribbble'],      
'T1_iconB1_url'=>['javascript:;'],
'T1_iconC1'=>['fa fa-linkedin'],      
'T1_iconC1_url'=>['javascript:;'],
'T1_img2'=>['img/faces/joe-gardner-2.jpg'],    
'T1_img2_url'=>['#avatar'],
'T1_text2_url'=>['javascript:;'],    
'T1_textA2'=>['Sophie West'],
'T1_textB2'=>['Designer'],
'T1_para2'=>[' A group becomes a team when each member is sure enough of himself and his contribution to praise the skill of the others. No one can whistle a symphony. It takes an orchestra to play it.'],
'T1_iconA2'=>['fa fa-twitter'],      
'T1_iconA2_url'=>['javascript:;'],
'T1_iconB2'=>['fa fa-dribbble'],      
'T1_iconB2_url'=>['javascript:;'],
'T1_iconC2'=>['fa fa-linkedin'],      
'T1_iconC2_url'=>['javascript:;'],
'T1_img3'=>['img/faces/erik-lucatero-2.jpg'],      
'T1_img3_url'=>['#avatar'],
'T1_text3_url'=>['javascript:;'],    
'T1_textA3'=>['Robert Orben'],
'T1_textB3'=>['Developer'],
'T1_para3'=>['The strength of the team is each individual member. The strength of each member is the team. If you can laugh together, you can work together, silence isn’t golden, it’s deadly.'],
'T1_iconA3'=>['fa fa-twitter'],      
'T1_iconA3_url'=>['javascript:;'],
'T1_iconB3'=>['fa fa-dribbble'],      
'T1_iconB3_url'=>['javascript:;'],
'T1_iconC3'=>['fa fa-linkedin'],      
'T1_iconC3_url'=>['javascript:;'],
'T1_img4'=>['img/faces/ayo-ogunseinde-2.jpg'],      
'T1_img4_url'=>['#avatar'],
'T1_text4_url'=>['javascript:;'],       
'T1_textA4'=>['Patrick Lencioni'],
'T1_textB4'=>['Brand Manager'],
'T1_para4'=>['Great teams do not hold back with one another. They are unafraid to air their dirty laundry. They admit their mistakes, their weaknesses and their concerns without fear of reprisal.'],
'T1_iconA4'=>['fa fa-twitter'],      
'T1_iconA4_url'=>['javascript:;'],
'T1_iconB4'=>['fa fa-dribbble'],      
'T1_iconB4_url'=>['javascript:;'],
'T1_iconC4'=>['fa fa-linkedin'],      
'T1_iconC4_url'=>['javascript:;'],




            ];

        return $sampleValues[$field] ?? [];
    }
}





