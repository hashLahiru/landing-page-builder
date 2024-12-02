<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024/11/29
class PricingPlan1Seeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'PricingPlan1',
            'description' => 'This is the Pricing Plan1 section of the landing page',
        ]);

        $fields = [
        
    
'pp1_title',
'pp1_description',
'pp1_icon1',
'pp1_text1',
'pp1_para1',
'pp1_btn1_text',
'pp1_btn1_url',
'pp1_icon2',
'pp1_text2',
'pp1_para2',
'pp1_btn2_text',
'pp1_btn2_url',
'pp1_icon3',
'pp1_text3',
'pp1_para3',
'pp1_btn3_text',
'pp1_btn3_url',
'pp1_icon4',
'pp1_text4',
'pp1_para4',
'pp1_btn4_text',
'pp1_btn4_url',

           
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
 

'pp1_title'=>['Pick the best plan for you'],
'pp1_description'=>['You have Free Unlimited Updates and Premium Support on each package.'],
'pp1_icon1'=>['nc-icon nc-basket'],
'pp1_text1'=>['$199'],
'pp1_para1'=>['This is good if your company size is between 5 and 20 employees.'],
'pp1_btn1_text'=>['CHOOSE PLAN'],
'pp1_btn1_url'=>['javascript:;'],
'pp1_icon2'=>['nc-icon nc-watch-time'],
'pp1_text2'=>['$249'],
'pp1_para2'=>['This is good if your company size is between 21 and 59 employees.'],
'pp1_btn2_text'=>['CHOOSE PLAN'],
'pp1_btn2_url'=>['javascript:;'],
'pp1_icon3'=>['nc-icon nc-settings'],
'pp1_text3'=>['$359'],
'pp1_para3'=>['This is good if your company size is between 60 and 159 employees.'],
'pp1_btn3_text'=>['CHOOSE PLAN'],
'pp1_btn3_url'=>['javascript:;'],
'pp1_icon4'=>['nc-icon nc-istanbul'],
'pp1_text4'=>['$599'],
'pp1_para4'=>['This is good if your company size is between 160 and 299 employees.'],
'pp1_btn4_text'=>['CHOOSE PLAN'],
'pp1_btn4_url'=>['javascript:;'],



           ];

        return $sampleValues[$field] ?? [];
    }
}



