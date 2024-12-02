<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024/11/27 
class ProductList2Seeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'ProductList2',
            'description' => 'This is the Product List2 section of the landing page',
        ]);

        $fields = [
        
'p2_text',      
'p2_title',
'p2_description',
'p2_img1',      
'p2_img1_url',
'p2_text1',
'p2_text1_url',      
'p2_subtext1',
'p2_para1',
'p2_img2',      
'p2_img2_url',
'p2_text2',
'p2_text2_url',      
'p2_subtext2',
'p2_para2',
'p2_img3',      
'p2_img3_url',
'p2_text3',
'p2_text3_url',      
'p2_subtext3',
'p2_para3'

      
            
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


'p2_text'=>['Our work'], 
'p2_title'=>['Some of Our Awesome Products - 2'],
'p2_description'=>['This is the paragraph where you can write more details about your projects. Keep you user engaged by providing meaningful informati'],
'p2_img1'=>['img/sections/opt_pk_thumbnail.jpg'],      
'p2_img1_url'=>['http://www.creative-tim.com/product/paper-kit'],
'p2_text1'=>['Paper Kit Free'],
'p2_text1_url'=>['http://www.creative-tim.com/product/paper-kit'],      
'p2_subtext1'=>['Free Ui kit'],
'p2_para1' =>["Paper Kit is a free Bootstrap UI kit that can get you going in a new creative direction! To say the least, it's different since it's not material, flat or iOS inspired."],
'p2_img2'=>['img/sections/opt_lbd_pro_new_thumbnail.jpg'],
'p2_img2_url'=>['https://www.creative-tim.com/product/light-bootstrap-dashboard-pro'],
'p2_text2'=>['Light Bootstrap Dashboard'],
'p2_text2_url'=>['https://www.creative-tim.com/product/light-bootstrap-dashboard-pro'],      
'p2_subtext2'=>['Premium template'],
'p2_para2' =>['Light Bootstrap Dashboard PRO is a Bootstrap Admin Theme designed to look simple and beautiful. Forget about boring dashboards and grab yourself a copy to kickstart new project!'],
'p2_img3'=>['img/sections/opt_gsdk_new_thumbnail.jpg'],     
'p2_img3_url'=>['https://www.creative-tim.com/product/get-shit-done-pro'],
'p2_text3'=>['Get Shit Done Kit Pro'],
'p2_text3_url'=>['https://www.creative-tim.com/product/get-shit-done-pro'],   
'p2_subtext3'=>['Premium UI kit'],
'p2_para3'=>["Get Shit Done Kit Pro it's a Bootstrap Kit that comes with a huge number of customisable components. They are pixel perfect, light and easy to use and combine with other elements"],
      

            ];

        return $sampleValues[$field] ?? [];
    }
}





