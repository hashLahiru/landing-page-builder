<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;

// Nithya Jayasooriya - 2024/11/29
class PricingPlan2Seeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'PricingPlan2',
            'description' => 'This is the Pricing Plan2 section of the landing page',
        ]);

        $fields = [
        
    
'pp2_title',
'pp2_description',

'pp2_nav1',
'pp2_nav1_url',

'pp2_nav2',
'pp2_nav2_url',

'pp2_img1',
'pp2_text1',

'pp2_textA1',
'pp2_textA2',
'pp2_textA3',

'pp2_li_A1',
'pp2_liT_A2',
'pp2_li_A3',
'pp2_liT_A4',
'pp2_li_A5',
'pp2_liT_A6',

'pp2_btn1_text',
'pp2_btn1_url',





'pp2_img2',
'pp2_text2',

'pp2_textB1',
'pp2_textB2',
'pp2_textB3',

'pp2_li_B1',
'pp2_liT_B2',
'pp2_li_B3',
'pp2_liT_B4',
'pp2_li_B5',
'pp2_liT_B6',

'pp2_btn2_text',
'pp2_btn2_url',





'pp2_img3',
'pp2_text3',

'pp2_textC1',
'pp2_textC2',
'pp2_textC3',

'pp2_li_C1',
'pp2_liT_C2',
'pp2_li_C3',
'pp2_liT_C4',
'pp2_li_C5',
'pp2_liT_C6',

'pp2_btn3_text',
'pp2_btn3_url',


           
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



    
'pp2_title'=>['Pick the best plan for you'],
'pp2_description'=>['You have Free Unlimited Updates and Premium Support on each package.'],

'pp2_nav1'=>['Monthly'],
'pp2_nav1_url'=>['#month'],

'pp2_nav2'=>['Yearly'],
'pp2_nav2_url'=>['#year'],

'pp2_img1'=>['img/sections/daniel-olahh.jpg'],
'pp2_text1'=>['Free'],

'pp2_textA1'=>['$'],
'pp2_textA2'=>['0'],
'pp2_textA3'=>['/mo'],

'pp2_li_A1'=>['5'],
'pp2_liT_A2'=>['Sharing Tools'],
'pp2_li_A3'=>['10'],
'pp2_liT_A4'=>['Design Tools'],
'pp2_li_A5'=>['100'],
'pp2_liT_A6'=>['Private Messages'],
'pp2_li_A7'=>['2'],
'pp2_liT_A8'=>['Personal Brand'],

'pp2_btn1_text'=>['Get Started'],
'pp2_btn1_url'=>['javascript:;'],





'pp2_img2'=>['img/sections/forest-bg.jpg'],
'pp2_text2'=>['Premium'],

'pp2_textB1'=>['$'],
'pp2_textB2'=>['89'],
'pp2_textB3'=>['/mo'],

'pp2_li_B1'=>['100'],
'pp2_liT_B2'=>['Projects'],
'pp2_li_B3'=>['5'],
'pp2_liT_B4'=>['Team Members'],
'pp2_li_B5'=>['55'],
'pp2_liT_B6'=>['Personal Contacts'],
'pp2_li_B7'=>['5.000'],
'pp2_liT_B8'=>['Messages'],

'pp2_btn2_text'=>[' Get Started'],
'pp2_btn2_url'=>['javascript:;'],





'pp2_img3'=>['img/sections/anders-jilden.jpg'],
'pp2_text3'=>['Platinum'],

'pp2_textC1'=>['$'],
'pp2_textC2'=>['199'],
'pp2_textC3'=>['/mo'],

'pp2_li_C1'=>['1'],
'pp2_liT_C2'=>['Project'],
'pp2_li_C3'=>['5'],
'pp2_liT_C4'=>[' Team Members'],
'pp2_li_C5'=>['55'],
'pp2_liT_C6'=>['Personal Contacts'],
'pp2_li_C7'=>['5.000'],
'pp2_liT_C8'=>['Messages'],

'pp2_btn3_text'=>['Get Started'],
'pp2_btn3_url'=>['javascript:;'],




           ];

        return $sampleValues[$field] ?? [];
    }
}


