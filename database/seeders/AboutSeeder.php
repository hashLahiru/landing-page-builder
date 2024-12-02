<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024.12.02
class AboutSeeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'about',
            'description' => 'This is the about section of the landing page',
        ]);

        $fields = [
          
                    
            'AB_title' ,
            'AB_img1' ,
            'AB_img1_url' ,
            'AB_textA1',   
            'AB_textB1', 
            'AB_text1_url',
            'AB_para1',     
            'AB_iconA1', 
            'AB_iconA1_url',     
            'AB_iconB1', 
            'AB_iconB1_url',
            'AB_iconC1', 
            'AB_iconC1_url',
            'AB_img2' ,
            'AB_img2_url' ,
            'AB_textA2',   
            'AB_textB2', 
            'AB_text2_url',   
            'AB_para2',    
            'AB_iconA2', 
            'AB_iconA2_url',     
            'AB_iconB2', 
            'AB_iconB2_url',
            'AB_iconC2', 
            'AB_iconC2_url',
            'AB_img3' ,
            'AB_img3_url' ,
            'AB_textA3',   
            'AB_textB3', 
            'AB_text3_url',     
            'AB_para3',
            'AB_iconA3', 
            'AB_iconA3_url',     
            'AB_iconB3', 
            'AB_iconB3_url',
            'AB_iconC3', 
            'AB_iconC3_url',

            
       
                  
        
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
                
            'AB_title' =>["Let's talk about us"],
            'AB_img1' =>['img/faces/joe-gardner-2.jpg'],
            'AB_img1_url' =>['#avatar'],
            'AB_textA1'=>['Henry Ford'],   
            'AB_textB1'=>['Product Manager'], 
            'AB_text1_url'=>['#paper-kit'],
            'AB_para1'=>['Teamwork is so important that it is virtually impossible for you to reach the heights of your capabilities or make the money that you want without becoming very good at it.'],
            'AB_iconA1'=>['fa fa-twitter'], 
            'AB_iconA1_url'=>['#pablo'],     
            'AB_iconB1'=>['fa fa-dribbble'], 
            'AB_iconB1_url'=>['#pablo'],
            'AB_iconC1'=>['fa fa-linkedin'], 
            'AB_iconC1_url'=>['#pablo'],
            'AB_img2' =>['img/faces/joe-gardner-2.jpg'],
            'AB_img2_url' =>['#avatar'],
            'AB_textA2'=>['Sophie West'],   
            'AB_textB2'=>['Designer'], 
            'AB_text2_url'=>['#paper-kit'],
            'AB_para2'=>['A group becomes a team when each member is sure enough of himself and his contribution to praise the skill of the others. No one can whistle a symphony. It takes an orchestra to play it.'],     
            'AB_iconA2'=>['fa fa-twitter'], 
            'AB_iconA2_url'=>['#pablo'],     
            'AB_iconB2'=>['fa fa-dribbble'], 
            'AB_iconB2_url'=>['#pablo'],
            'AB_iconC2'=>['fa fa-linkedin'], 
            'AB_iconC2_url'=>['#pablo'],
            'AB_img3' =>['img/faces/erik-lucatero-2.jpg'],
            'AB_img3_url' =>['#avatar'],
            'AB_textA3'=>['Robert Orben'],   
            'AB_textB3'=>['Developer'], 
            'AB_text3_url'=>['#paper-kit'],     
            'AB_para3'=>['The strength of the team is each individual member. The strength of each member is the team. If you can laugh together, you can work together, silence isn’t golden, it’s deadly.'],     
            'AB_iconA3'=>['fa fa-twitter'], 
            'AB_iconA3_url'=>['#pablo'],     
            'AB_iconB3'=>['fa fa-dribbble'], 
            'AB_iconB3_url'=>['#pablo'],
            'AB_iconC3'=>['fa fa-linkedin'], 
            'AB_iconC3_url'=>['#pablo'],



            
        ];
        return $sampleValues[$field] ?? [];
    }
}
