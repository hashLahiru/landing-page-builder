<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;

// Nithya Jayasooriya - 2024/11/29
class PricingPlan5Seeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'PricingPlan5',
            'description' => 'This is the Pricing Plan 5 section of the landing page',
        ]);

        $fields = [
        
    
'pp5_title',
'pp5_nav1',
'pp5_nav1_url',
'pp5_nav2',
'pp5_nav2_url',
'pp5_description',
'pp5_headertextA1',
'pp5_headertextA2',
'pp5_numA1',
'pp5_textA1',
'pp5_numA2',
'pp5_textA2',
'pp5_numA3',
'pp5_textA3',
'pp5_numA4',
'pp5_textA4',
'pp5_btn1_text',
'pp5_btn1_url',
'pp5_headertextB1',
'pp5_headertextB2',
'pp5_numB1',
'pp5_textB1',
'pp5_numB2',
'pp5_textB2',
'pp5_numB3',
'pp5_textB3',
'pp5_numB4',
'pp5_textB4',
'pp5_btn2_text',
'pp5_btn2_url',
'pp5_headertextC1',
'pp5_headertextC2',
'pp5_numC1',
'pp5_textC1',
'pp5_numC2',
'pp5_textC2',
'pp5_numC3',
'pp5_textC3',
'pp5_numC4',
'pp5_textC4',
'pp5_btn3_text',
'pp5_btn3_url',
'pp5_headertextD1',
'pp5_headertextD2',
'pp5_numD1',
'pp5_textD1',
'pp5_numD2',
'pp5_textD2',
'pp5_numD3',
'pp5_textD3',
'pp5_numD4',
'pp5_textD4',
'pp5_btn4_text',
'pp5_btn4_url',



           
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
 
'pp5_title'=>['Choose a plan for your next project'],
'pp5_nav1'=>['Personal'],
'pp5_nav1_url'=>['#personal'],
'pp5_nav2'=>['Commercial'],
'pp5_nav2_url'=>['#commercial'],
'pp5_description'=>["You have Free Unlimited Updates and Premium Support on each package. You also have 20 days to request a refund if you're not happy with your purchase."],
'pp5_headertextA1'=>['HTML Package'],
'pp5_headertextA2'=>['$0'],
'pp5_numA1'=>['1'],
'pp5_textA1'=>['Developer'],
'pp5_numA2'=>['99+'],
'pp5_textA2'=>['Components'],
'pp5_numA3'=>['HTML'],
'pp5_textA3'=>['Elements'],
'pp5_numA4'=>['14'],
'pp5_textA4'=>['Page Examples'],
'pp5_btn1_text'=>['Free download'],
'pp5_btn1_url'=>['javascript:;'],
'pp5_headertextB1'=>['HTML Package'],
'pp5_headertextB2'=>['$59'],
'pp5_numB1'=>['5'],
'pp5_textB1'=>['Developer'],
'pp5_numB2'=>['129+'],
'pp5_textB2'=>['Components'],
'pp5_numB3'=>['HTML'],
'pp5_textB3'=>['Elements'],
'pp5_numB4'=>['24'],
'pp5_textB4'=>['Page Examples'],
'pp5_btn2_text'=>['Free download'],
'pp5_btn2_url'=>['javascript:;'],
'pp5_headertextC1'=>['HTML Package'],
'pp5_headertextC2'=>['$159'],
'pp5_numC1'=>['5+'],
'pp5_textC1'=>['Developer'],
'pp5_numC2'=>['199+'],
'pp5_textC2'=>['Components'],
'pp5_numC3'=>['HTML'],
'pp5_textC3'=>['Elements'],
'pp5_numC4'=>['34'],
'pp5_textC4'=>['Page Examples'],
'pp5_btn3_text'=>['Buy Now !'],
'pp5_btn3_url'=>['javascript:;'],
'pp5_headertextD1'=>['HTML Package'],
'pp5_headertextD2'=>['$359'],
'pp5_numD1'=>['15'],
'pp5_textD1'=>['Developer'],
'pp5_numD2'=>['229+'],
'pp5_textD2'=>['Components'],
'pp5_numD3'=>['HTML'],
'pp5_textD3'=>['Elements'],
'pp5_numD4'=>['44'],
'pp5_textD4'=>['Page Examples'],
'pp5_btn4_text'=>['Free download'],
'pp5_btn4_url'=>['javascript:;'],




           ];

        return $sampleValues[$field] ?? [];
    }
}


