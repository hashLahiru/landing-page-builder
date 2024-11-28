<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024/11/25 
class Feedback3Seeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'Feedback3',
            'description' => 'This is the Feedback3 section of the landing page',
        ]);

        $fields = [
        
      
            'fb3_title' ,


            'fb3_img1' ,
            'fb3_text1' ,
            'fb3_icon1' ,
            'fb3_para1' ,

            'fb3_img2' ,
            'fb3_text2' ,
            'fb3_icon2' ,
            'fb3_para2' ,
     

            'fb3_img3' ,
            'fb3_text3' ,
            'fb3_icon3' ,
            'fb3_para3' ,

            'fb3_img4' ,
            'fb3_text4' ,
            'fb3_icon4' ,
            'fb3_para4' ,

            'fb3_img5' ,
            'fb3_text5' ,
            'fb3_icon5' ,
            'fb3_para5' ,
            
            
            
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



            'fb3_title' =>['What Clients Say'],


            'fb3_img1' =>['/img/faces/joe-gardner-2.jpg'],
            'fb3_text1' =>['Erik Johnson'],
            'fb3_icon1' =>['fa fa-quote-right'],
            'fb3_para1' =>['"During the first selection of grant winners on the essential aspects, and the products are not burdened with non-essentials. Back to purity, back to simplicity. At best, it is self-explanatory."'],

            'fb3_img2' =>['/img/faces/erik-lucatero-2.jpg'],
            'fb3_text2' =>[' Erik Johnson'],
            'fb3_icon2' =>['fa fa-quote-right'],
            'fb3_para2' =>['"The plan is to add additional flexibility in the future to allow applicants to make a case for how much money they actually need. Less, but better – because it concentrates on the essential aspects, and the products are not burdened with non-essentials..."'],
     

            'fb3_img3' =>['/img/faces/kaci-baum-2.jpg'],
            'fb3_text3' =>['Erik Johnson'],
            'fb3_icon3' =>['fa fa-quote-right'],
            'fb3_para3' =>['"Simulation of many-body quantum systems with neural networks, and the products are not burdened with non-essentials. Back to purity, back to simplicity. At best, it is self-explanatory."'],

            'fb3_img4' =>['/img/faces/clem-onojeghuo-2.jpg'],
            'fb3_text4' =>['Erik Johnson'],
            'fb3_icon4' =>['fa fa-quote-right'],
            'fb3_para4' =>['"Machine learning for motion recognition and trajectory generation of human movement for rehabilitation with non-essentials. Back to purity, back to simplicity. At best, it is self-explanatory."'],

            'fb3_img5' =>['/img/faces/joe-gardner-2.jpg'],
            'fb3_text5' =>['Erik Johnson'],
            'fb3_icon5' =>['fa fa-quote-right'],
            'fb3_para5' =>['"Less, but better – because it concentrates on the essential aspects, and the products are not burdened with non-essentials. Back to purity, back to simplicity. At best, it is self-explanatory. The entire AI Grant project reminds me of a cross between a Thiel Fellowship and a Kaggle competition."'],
            
            
      

            ];

        return $sampleValues[$field] ?? [];
    }
}





