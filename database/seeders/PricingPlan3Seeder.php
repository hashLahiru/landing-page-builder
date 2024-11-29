<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024/11/29 
class PricingPlan3Seeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'PricingPlan3',
            'description' => 'This is the Pricing Plan 3 section of the landing page',
        ]);

        $fields = [
        
      
'pp3_title',
'pp3_description',
'pp3_img_url',



'pp3_textA1',
'pp3_icon1',
'pp3_textA2',
'pp3_para1',
'pp3_btn1_text',
'pp3_btn1_url',



'pp3_textB1',
'pp3_icon2',
'pp3_textB2',
'pp3_para2',
'pp3_btn2_text',
'pp3_btn2_url',


'pp3_textC1',
'pp3_icon3',
'pp3_textC2',
'pp3_para3',
'pp3_btn3_text',
'pp3_btn3_url',



                   
            
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
           
 

'pp3_title'=>['Pick the best plan for you'],
'pp3_description'=>['You have Free Unlimited Updates and Premium Support on each package.'],
'pp3_img_url'=>['img/sections/daniel-olahs.jpg'],



'pp3_textA1'=>['Single User'],
'pp3_icon1'=>['nc-icon nc-user-run'],
'pp3_textA2'=>['$29'],
'pp3_para1'=>['Here’s a sentence I never expected: we are making...'],
'pp3_btn1_text'=>['CHOOSE PLAN'],
'pp3_btn1_url'=>['javascript:;'],



'pp3_textB1'=>['Small company'],
'pp3_icon2'=>['nc-icon nc-air-baloon'],
'pp3_textB2'=>['$59'],
'pp3_para2'=>['sometimes combining two companies that compete in the same market provides...'],
'pp3_btn2_text'=>['CHOOSE PLAN'],
'pp3_btn2_url'=>['javascript:;'],


'pp3_textC1'=>['Large Company'],
'pp3_icon3'=>['nc-icon nc-istanbul'],
'pp3_textC2'=>['$199'],
'pp3_para3'=>['his is good if you are a freelancer of photographer.'],
'pp3_btn3_text'=>['CHOOSE PLAN'],
'pp3_btn3_url'=>['javascript:;'],


            ];

        return $sampleValues[$field] ?? [];
    }
}





