<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024/11/29 
class PricingPlan4Seeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'PricingPlan4',
            'description' => 'This is the Pricing Plan 4 section of the landing page',
        ]);

        $fields = [
            
            'pp4_title',
            'pp4_description',
            'pp4_textA1',
            'pp4_textA2',
            'pp4_textA3',
            'pp4_iconA3',
            'pp4_textA4',
            'pp4_iconA4',
            'pp4_textA5',
            'pp4_iconA5',
            'pp4_textA6',
            'pp4_iconA6',
            'pp4_btn1_text',
            'pp4_btn1_url',
            'pp4_textB1',
            'pp4_textB2',
            'pp4_textB3',
            'pp4_iconB3',
            'pp4_textB4',
            'pp4_iconB4',
            'pp4_textB5',
            'pp4_iconB5',
            'pp4_textB6',
            'pp4_iconB6',
            'pp4_btn2_text',
            'pp4_btn2_url',
            'pp4_textC1',
            'pp4_textC2',          
            'pp4_textC3',
            'pp4_iconC3',
            'pp4_textC4',
            'pp4_iconC4',
            'pp4_textC5',
            'pp4_iconC5',
            'pp4_textC6',
            'pp4_iconC6',
            'pp4_btn3_text',
            'pp4_btn3_url',
            'pp4_textD1',
            'pp4_textD2',
            'pp4_textD3',
            'pp4_iconD3',
            'pp4_textD4',
            'pp4_iconD4',
            'pp4_textD5',
            'pp4_iconD5',
            'pp4_textD6',
            'pp4_iconD6',
            'pp4_btn4_text',
            'pp4_btn4_url',
            

                   
            
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
           
 
'pp4_title'=>['Pick the best plan for you'],
'pp4_description'=>['You have Free Unlimited Updates and Premium Support on each package.'],
'pp4_textA1'=>['Startup'],
'pp4_textA2'=>['$0'],
'pp4_textA3'=>['Sharing Tools'],
'pp4_iconA3'=>['fa fa-check'],
'pp4_textA4'=>['Design Tools'],
'pp4_iconA4'=>['fa fa-check'],
'pp4_textA5'=>[' Private Messages'],
'pp4_iconA5'=>['fa fa-times'],
'pp4_textA6'=>['Personal Brand'],
'pp4_iconA6'=>['fa fa-times'],
'pp4_btn1_text'=>['DOWNGRADE PLAN'],
'pp4_btn1_url'=>['javascript:;'],
'pp4_textB1'=>['Small company'],
'pp4_textB2'=>['$89'],
'pp4_textB3'=>['Sharing Tools'],
'pp4_iconB3'=>['fa fa-check'],
'pp4_textB4'=>['Design Tools'],
'pp4_iconB4'=>['fa fa-check'],
'pp4_textB5'=>['Private Messages'],
'pp4_iconB5'=>['fa fa-times'],
'pp4_textB6'=>['Personal Brand'],
'pp4_iconB6'=>['fa fa-times'],
'pp4_btn2_text'=>['CURRENT PLAN'],
'pp4_btn2_url'=>['javascript:;'],
'pp4_textC1'=>['Large Company'],
'pp4_textC2'=>['$189'],
'pp4_textC3'=>['Sharing Tools'],
'pp4_iconC3'=>['fa fa-check'],
'pp4_textC4'=>['Design Tools'],
'pp4_iconC4'=>['fa fa-check'],
'pp4_textC5'=>['Private Messages'],
'pp4_iconC5'=>['fa fa-times'],
'pp4_textC6'=>['Personal Brand'],
'pp4_iconC6'=>['fa fa-times'],
'pp4_btn3_text'=>['UPGRADE PLAN'],
'pp4_btn3_url'=>['javascript:;'],
'pp4_textD1'=>['Enterprise'],
'pp4_textD2'=>['$389'],
'pp4_textD3'=>['Sharing Tools'],
'pp4_iconD3'=>['fa fa-check'],
'pp4_textD4'=>[' Design Tools'],
'pp4_iconD4'=>['fa fa-check'],
'pp4_textD5'=>[' Private Messages'],
'pp4_iconD5'=>['fa fa-times'],
'pp4_textD6'=>['Personal Brand'],
'pp4_iconD6'=>['fa fa-times'],
'pp4_btn4_text'=>['UPGRADE PLAN'],
'pp4_btn4_url'=>['javascript:;'],


            ];

        return $sampleValues[$field] ?? [];
    }
}





