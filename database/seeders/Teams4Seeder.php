<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024/11/30
class Teams4Seeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'Teams4',
            'description' => 'This is the Teams 4 section of the landing page',
        ]);

        $fields = [


'T4_mainimg',
'T4_title',      
'T4_description',
'T4_img1',    
'T4_img1_url',         
'T4_text1',
'T4_para1',
'T4_iconA1',      
'T4_iconA1_url',
'T4_iconB1',      
'T4_iconB1_url',
'T4_iconC1',      
'T4_iconC1_url',
'T4_img2',    
'T4_img2_url',         
'T4_text2',
'T4_para2',
'T4_iconA2',      
'T4_iconA2_url',
'T4_iconB2',      
'T4_iconB2_url',
'T4_iconC2',      
'T4_iconC2_url',
'T4_img3',    
'T4_img3_url',         
'T4_text3',
'T4_para3',
'T4_iconA3',      
'T4_iconA3_url',
'T4_iconB3',      
'T4_iconB3_url',
'T4_iconC3',      
'T4_iconC3_url',



            
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




'T4_mainimg'=>['img/sections/fabio-mangione.jpg'],   
'T4_title'=>['The Executive Team 4'],         
'T4_description'=>['This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information'],   
'T4_img1'=>['img/faces/ayo-ogunseinde-2.jpg'],       
'T4_img1_url'=>['#avatar'],            
'T4_text1'=>['Eric Thomson'],   
'T4_para1'=>['A group becomes a team when each member is sure enough of himself and his contribution to praise the skill of the others. No one can whistle a symphony. It takes an orchestra to play it.'],   
'T4_iconA1'=>['fa fa-linkedin'],         
'T4_iconA1_url'=>['javascript:;'],   
'T4_iconB1'=>['fa fa-dribbble'],         
'T4_iconB1_url'=>['javascript:;'],   
'T4_iconC1'=>['fa fa-instagram'],         
'T4_iconC1_url'=>['javascript:;'],   
'T4_img2'=>['img/faces/joe-gardner-2.jpg'],       
'T4_img2_url'=>['#avatar'],            
'T4_text2'=>['Sophia West'],   
'T4_para2'=>['The strength of the team is each individual member. The strength of each member is the team. If you can laugh together, you can work together, silence isn’t golden, it’s deadly.'],   
'T4_iconA2'=>['fa fa-linkedin'],         
'T4_iconA2_url'=>['javascript:;'],   
'T4_iconB2'=>['fa fa-dribbble'],         
'T4_iconB2_url'=>['javascript:;'],   
'T4_iconC2'=>['fa fa-pinterest'],         
'T4_iconC2_url'=>['javascript:;'],   
'T4_img3'=>['img/faces/clem-onojeghuo-2.jpg'],       
'T4_img3_url'=>['#avatar'],            
'T4_text3'=>['Lucas Andrew'],   
'T4_para3'=>['Great teams do not hold back with one another. They are unafraid to air their dirty laundry. They admit their mistakes, their weaknesses and their concerns without fear of reprisal.'],   
'T4_iconA3'=>['fa fa-youtube'],         
'T4_iconA3_url'=>['javascript:;'],   
'T4_iconB3'=>['fa fa-twitter'],         
'T4_iconB3_url'=>['javascript:;'],   
'T4_iconC3'=>['fa fa-instagram'],         
'T4_iconC3_url'=>['javascript:;'],   



            ];

        return $sampleValues[$field] ?? [];
    }
}





