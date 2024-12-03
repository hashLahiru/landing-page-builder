<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024/11/27 
class ProductList4Seeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'ProductList4',
            'description' => 'This is the Product List4 section of the landing page',
        ]);

        $fields = [
        
    
'p4_title',
'p4_description',
'p4_img1',
'p4_imgicon1',
'p4_textA1',
'p4_textB1',
'p4_para1',
'p4_btn1_text',
'p4_btn1_icon',
'p4_btn1_url',
'p4_iconA1',
'p4_iconA1_url',
'p4_iconB1',
'p4_iconB1_url',
'p4_iconC1',
'p4_iconC1_url',
'p4_img2',
'p4_imgicon2',
'p4_textA2',
'p4_textB2',
'p4_para2',
'p4_btn2_text',
'p4_btn2_icon',
'p4_btn2_url',
'p4_iconA2',
'p4_iconA2_url',
'p4_iconB2',
'p4_iconB2_url',
'p4_iconC2',
'p4_iconC2_url',




     
            
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



'p4_title'=>['Some of Our Awesome Projects - 4'], 
'p4_description'=>['This is the paragraph where you can write more details about your projects. Keep you user engaged by providing meaningful information.'], 
'p4_img1'=>['img/sections/sebastien-gabrieles.jpg'], 
'p4_imgicon1'=>['nc-icon nc-mobile'], 
'p4_textA1'=>['Technology'], 
'p4_textB1'=>['The need of a great product'], 
'p4_textB1_url'=>['javascript:;'], 
'p4_para1'=>['Artificial intelligence-focused investment funds are a dime a dozen these days. Everyone knows there’s money to be made from AI, but to capture value, good VCs know they need to back products and not technologies.'], 
'p4_btn1_text'=>['READ MORE'], 
'p4_btn1_icon'=>['fa fa-book'], 
'p4_btn1_url'=>['javascript:;'], 
'p4_iconA1'=>['fa fa-apple'], 
'p4_iconA1_url'=>['javascript:;'], 
'p4_iconB1'=>['fa fa-android'], 
'p4_iconB1_url'=>['javascript:;'], 
'p4_iconC1'=>['fa fa-windows'], 
'p4_iconC1_url'=>['javascript:;'], 
'p4_img2'=>['img/sections/john-towner.jpg'], 
'p4_imgicon2'=>['nc-icon nc-controller-modern'],
'p4_textA2'=>['Design'], 
'p4_textB2'=>['The aesthetic quality of a product'],
'p4_textB2_url'=>['javascript:;'],  
'p4_para2'=>['Eventually, the data collected from the grant program could allow the two to play a bit of machine learning moneyball — valuing machine learning engineers without traditional metrics (like having a PhD from Stanford)...'], 
'p4_btn2_text'=>['READ MORE'],
'p4_btn2_icon'=>['fa fa-book'], 
'p4_btn2_url'=>['javascript:;'], 
'p4_iconA2'=>['fa fa-apple'], 
'p4_iconA2_url'=>['javascript:;'], 
'p4_iconB2'=>['fa fa-android'], 
'p4_iconB2_url'=>['javascript:;'], 
'p4_iconC2'=>['fa fa-windows'], 
'p4_iconC2_url'=>['javascript:;'],

           ];

        return $sampleValues[$field] ?? [];
    }
}