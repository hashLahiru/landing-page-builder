<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024.12.01
class Header2Seeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'header2',
            'description' => 'This is the header2 section of the landing page',
        ]);

        $fields = [
          
            'H2_img',
            'H2_text1' ,
            'H2_text1_url' ,
            'H2_text2' ,
            'H2_text2_url',
            'H2_text3',
            'H2_text3_url',
            'H2_icon1' ,
            'H2_icon1_url' ,
            'H2_icon2' ,
            'H2_icon2_url' ,
            'H2_title' ,
            'H2_para' ,
            'H2_action' ,
            'H2_placeholder1',
            'H2_placeholder2' ,
            'H2_placeholder3',
            'H2_btn_text',
            'H2_btn_icon',
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
                
            'H2_img' => ['https://images.unsplash.com/photo-1498475932703-000eb46e6375?dpr=2&amp;auto=format&amp;fit=crop&amp;w=1500&amp;h=1000&amp;q=80&amp;cs=tinysrgb&amp;crop='],
            'H2_text1' => ['Creative Tim'],
            'H2_text1_url' => ['www.creative-tim.html'],
            'H2_text2' => ['Components'],
            'H2_text2_url' => ['javascript:;'],
            'H2_text3' => ['Tutorial'],
            'H2_text3_url' => ['javascript:;'],
            'H2_icon1' => ['fa fa-twitter'],
            'H2_icon1_url' => ['javascript:;'],
            'H2_icon2' => ['fa fa-facebook'],
            'H2_icon2_url' => ['javascript:;'],
            'H2_title' => ['Find your next trip'],
            'H2_para' => ["Now you have no excuses, it's time to surprise your clients, your competitors, and why not, the world. You probably won't have a better chance to show off all your potential if it's not by designing a website for your own agency or web studio."],
            'H2_action' => ['#'],
            'H2_placeholder1' => ['City'],
            'H2_placeholder2' => ['Country'],
            'H2_placeholder3' => ['Date'],
            'H2_btn_text' => ['Search'],
            'H2_btn_icon' => ['nc-icon nc-zoom-split'],

            
        ];
        return $sampleValues[$field] ?? [];
    }
}
