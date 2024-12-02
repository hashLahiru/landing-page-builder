<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024.12.01
class Header3Seeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'header3',
            'description' => 'This is the header 3 section of the landing page',
        ]);

        $fields = [
          
     
            'H3_text1' ,
            'H3_text1_url' ,
            'H3_text2',
            'H3_text2_url',
            'H3_text3',
            'H3_text3_url',
            'H3_icon1' ,
            'H3_icon1_url' ,
            'H3_icon2' ,
            'H3_icon2_url',
            'H3_C1_img' ,
            'H3_C1_title' ,
            'H3_C1_para',
            'H3_C1_btntext' ,
            'H3_C1_btnurl' ,
            'H3_C1_icon1' ,
            'H3_C1_icon1url',
            'H3_C1_icon2',
            'H3_C1_icon2url',
            'H3_C1_icon3' ,
            'H3_C1_icon3url' ,
            'H3_C2_img' ,
            'H3_C2_title' ,
            'H3_C2_para' ,
            'H3_C2_text' ,
            'H3_C2_icon1',
            'H3_C2_icon1url' ,
            'H3_C2_icon2' ,
            'H3_C2_icon2url',
            'H3_C2_icon3' ,
            'H3_C2_icon3url',
            'H3_C2_icon4',
            'H3_C2_icon4url',
            'H3_C3_img' ,
            'H3_C3_title' ,
            'H3_C3_para' ,
            'H3_C3_btn1' ,
            'H3_C3_btn1url',
            'H3_C3_btn1icon' ,
            'H3_C3_btn2',
            'H3_C3_btn2url',
            'H3_C3_btn2icon' ,
            'H3_leftbtn',
            'H3_leftbtn_icon' ,
            'H3_leftbtn_url' ,
            'H3_rightbtn' ,
            'H3_rightbtn_icon',
            'H3_rightbtn_url' ,




        
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
                
            'H3_text1' =>['Creative Tim'],
            'H3_text1_url' =>['ww.creative-tim.html'],
            'H3_text2' =>['Components'],
            'H3_text2_url'=>['javascript:;'],
            'H3_text3'=>['Tutorial'],
            'H3_text3_url'=>['javascript:;'],
            'H3_icon1' =>['fa fa-twitter'],
            'H3_icon1_url' =>['javascript:;'],
            'H3_icon2' =>['fa fa-facebook'],
            'H3_icon2_url' =>['javascript:;'],
            'H3_C1_img' =>['https://images.unsplash.com/photo-1498063401574-13cbee350467?dpr=2&amp;auto=format&amp;fit=crop&amp;w=1500&amp;h=1000&amp;q=80&amp;cs=tinysrgb&amp;crop='],
            'H3_C1_title' =>['Paper Kit 2 PRO'],
            'H3_C1_para' =>["Now you have no excuses, it's time to surprise your clients, your competitors, and why not, the world. You probably won't have a better chance to show off all your potential if it's not by designing a website for your own agency or web studio."],
            'H3_C1_btntext' =>['Read More'],
            'H3_C1_btnurl' =>['javascript:;'],
            'H3_C1_icon1' =>['fa fa-twitter'],
            'H3_C1_icon1url' =>['javascript:;'],
            'H3_C1_icon2' =>['fa fa-facebook-square'],
            'H3_C1_icon2url' =>['javascript:;'],
            'H3_C1_icon3' =>['fa fa-get-pocket'],
            'H3_C1_icon3url' =>['javascript:;'],
            'H3_C2_img' =>['https://images.unsplash.com/photo-1482690205767-61deebe15ef7?dpr=2&amp;auto=format&amp;fit=crop&amp;w=1500&amp;h=1000&amp;q=80&amp;cs=tinysrgb&amp;crop='],
            'H3_C2_title' =>['Awesome Experiences'],
            'H3_C2_para' =>["Now you have no excuses, it's time to surprise your clients, your competitors, and why not, the world. You probably won't have a better chance to show off all your potential if it's not by designing a website for your own agency or web studio."],
            'H3_C2_text' =>['Connect with us:'],
            'H3_C2_icon1' =>['fa fa-twitter'],
            'H3_C2_icon1url' =>['javascript:;'],
            'H3_C2_icon2' =>['fa fa-facebook-square'],
            'H3_C2_icon2url' =>['javascript:;'],
            'H3_C2_icon3' =>['fa fa-instagram'],
            'H3_C2_icon3url' =>['javascript:;'],
            'H3_C2_icon4' =>['fa fa-google-plus'],
            'H3_C2_icon4url' =>['javascript:;'],
            'H3_C3_img' =>['https://images.unsplash.com/photo-1498063669468-89723a87123d?dpr=2&amp;auto=format&amp;fit=crop&amp;w=1500&amp;h=1000&amp;q=80&amp;cs=tinysrgb&amp;crop='],
            'H3_C3_title' =>['Premium Offers for Venice'],
            'H3_C3_para' =>["Now you have no excuses, it's time to surprise your clients, your competitors, and why not, the world. You probably won't have a better chance to show off all your potential if it's not by designing a website for your own agency or web studio."],
            'H3_C3_btn1' =>['Share Offer'],
            'H3_C3_btn1url' =>['javascript:;'],
            'H3_C3_btn1icon' =>['fa fa-share-alt'],
            'H3_C3_btn2' =>['Shop Now'],
            'H3_C3_btn2url' =>['javascript:;'],
            'H3_C3_btn2icon' =>['fa fa-shopping-cart'],
            'H3_leftbtn' =>['Previous'],
            'H3_leftbtn_icon' =>['fa fa-angle-left'],
            'H3_leftbtn_url' =>['#carouselExampleIndicators'],
            'H3_rightbtn' =>['Next'],
            'H3_rightbtn_icon' =>['fa fa-angle-right'],
            'H3_rightbtn_url' =>['#carouselExampleIndicators'],


            
        ];
        return $sampleValues[$field] ?? [];
    }
}
