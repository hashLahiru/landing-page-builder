<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024/11/27 
class ProductList1Seeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'ProductList1',
            'description' => 'This is the Product List1 section of the landing page',
        ]);

        $fields = [
        
      
'p1_title',
'p1_description',
'p1_nav1',
'p1_navl_url',
'p1_nav2',
'p1_nav2_url',
'p1_nav3',
'p1_nav3_url',
'p1_nav4',
'p1_nav4_url',
'p1_nav5',
'p1_nav5_url',
'p1_img1',
'p1_textA1',
'p1_textB1',
'p1_para1',
'p1_btn1_text',
'p1_btn1_icon',
'p1_btn1_url',
'p1_img2',
'p1_textA2',
'p1_textB2',
'p1_para2',
'p1_btn2_text',
'p1_btn2_icon',
'p1_btn2_url',
'p1_img3',
'p1_textA3',
'p1_textB3',
'p1_para3',
'p1_btn3_text',
'p1_btn3_icon',
'p1_btn3_url',
'p1_img4',
'p1_textA4',
'p1_textB4',
'p1_para4',
'p1_btn4_text',
'p1_btn4_icon',
'p1_btn4_url',



                   
            
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
           
                
'p1_title' =>['Some of Our Awesome Products - 1'],
'p1_description'=>['This is the paragraph where you can write more details about your projects. Keep you user engaged by providing meaningful information.'],
'p1_nav1'=>['All categories'],
'p1_navl_url'=>['#pill-1'],
'p1_nav2'=>['Marketing'],
'p1_nav2_url'=>['#pill-2'],
'p1_nav3'=>['Development'],
'p1_nav3_url'=>['#pill-3'],
'p1_nav4'=>['Productivity'],
'p1_nav4_url'=>['#pill-4'],
'p1_nav5'=>['Web Design'],
'p1_nav5_url'=>['#pill-5'],
'p1_img1'=>['/img/sections/pavel-kosov.jpg'],
'p1_textA1'=>['Productivy Apps'],
'p1_textB1'=>['The Best Productivity Apps'],
'p1_textB1_url'=>['javascript:;'],   
'p1_para1'=>["Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is..."],
'p1_btn1_text'=>['READ ARTICLE'],
'p1_btn1_icon'=>['fa fa-book'],
'p1_btn1_url'=>['javascript:;'],
'p1_img2'=>['/img/sections/gukhwa-jang.jpg'],
'p1_textA2'=>['Materials'],
'p1_textB2'=>['US venture investment ticks up'],
'p1_para2'=>['If you’re not familiar with IFTTT, it’s an automation tool for creating your own if/then statements without any programming knowledge. The service makes it possible...'],
'p1_btn2_text'=>['READ ARTICLE'],
'p1_btn2_icon'=>['fa fa-book'],
'p1_btn2_url'=>['javascript:;'],
'p1_img3'=>['/img/sections/joshua-stannard.jpg'],
'p1_textA3'=>['Productivy Apps'],
'p1_textB3'=>['MateLabs mixes machine'],
'p1_textB3_url'=>['javascript:;'],   
'p1_para3'=>['If you’re not familiar with IFTTT, it’s an automation tool for creating your own if/then statements without any programming knowledge. The service makes it possible...'],
'p1_btn3_text'=>['READ ARTICLE'],
'p1_btn3_icon'=>['fa fa-book'],
'p1_btn3_url'=>['javascript:;'],
'p1_img4'=>['/img/sections/ilya-yakover.jpg'],
'p1_textA4'=>['Materials'],
'p1_textB4'=>['How to find the ‘right’ contacts.'],
'p1_para4'=>['Boom, the invitations start flying and Brella makes it easy to accept/decline, schedule a time and reserve a meeting space in Disrupt’s white-glove CrunchMatch meeting...'],
'p1_btn4_text'=>['READ ARTICLE'],
'p1_btn4_icon'=>['fa fa-book'],
'p1_btn4_url'=>['javascript:;'],
             
      

            ];

        return $sampleValues[$field] ?? [];
    }
}





