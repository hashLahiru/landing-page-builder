<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024/11/25 
class Feedback2Seeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'Feedback2',
            'description' => 'This is the Feedback2 section of the landing page',
        ]);

        $fields = [
        
      
            'fb2_leftimg1' ,
            'fb2_leftimg2' ,
            'fb2_leftimg3' ,
            'fb2_leftimg4' ,
            'fb2_leftimg5' ,
            'fb2_leftimg6' ,
            'fb2_mainimg1' ,
            'fb2_para1' ,
            'fb2_textname1' ,
            'fb2_text1' ,
            'fb2_mainimg2' ,
            'fb2_para2' ,
            'fb2_textname2' ,
            'fb2_text2' ,
            'fb2_mainimg3' ,
            'fb2_para3' ,
            'fb2_textname3' ,
            'fb2_text3' ,
            'fb2_staricon' ,
            'fb2_prebutton_icon' ,
            'fb2_prebutton_url' ,
            'fb2_prebutton_text' ,
            'fb2_nextbutton_icon' ,
            'fb2_nextbutton_url' ,
            'fb2_nextbutton_text' ,
            'fb2_rightimg1' ,
            'fb2_rightimg2' ,
            'fb2_rightimg3' ,
            'fb2_rightimg4' ,
            'fb2_rightimg5' ,
            'fb2_rightimg6' ,  
            

                   
            
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


            'fb2_leftimg1' =>['img/s3.amazonaws.com/creativetim_bucket/photos/125268/thumbaf08.jpg'],
            'fb2_leftimg2' =>['img/s3.amazonaws.com/creativetim_bucket/photos/139481/thumb47ae.jpg'],
            'fb2_leftimg3' =>['img/s3.amazonaws.com/creativetim_bucket/photos/152441/thumb7503.jpg'],
            'fb2_leftimg4' =>['img/s3.amazonaws.com/creativetim_bucket/photos/123334/thumb8cd6.jpg'],
            'fb2_leftimg5' =>['img/s3.amazonaws.com/creativetim_bucket/photos/77627/thumb653f.jpg'],
            'fb2_leftimg6' =>['img/s3.amazonaws.com/creativetim_bucket/photos/18/thumbc4d4.png'], 
            'fb2_mainimg1' =>['img/s3.amazonaws.com/creativetim_bucket/photos/139481/thumb47ae.jpg'],
            'fb2_para1' =>['"I am newer to the front-end... With my creative side lacking in experience this really put me in the right spot to speed through the fast lane. I love this Design kit so much!"'],
            'fb2_textname1' =>['Chase Jackson'],
            'fb2_text1' =>['Web Developer'],
            'fb2_mainimg2' =>['https://s3.amazonaws.com/creativetim_bucket/photos/134607/thumb.?1487680276'],
            'fb2_para2' =>['"Love the shapes and color palette on this one! Perfect for one of my pet projects!"'],
            'fb2_textname2' =>['Robin Leysen'],
            'fb2_text2' =>['Web Developer'],
            'fb2_mainimg3' =>['img/s3.amazonaws.com/creativetim_bucket/photos/125268/thumbaf08.jpg'],
            'fb2_para3' =>[' "Love it. Use it for prototypes and along with Paper Dashboard."'],
            'fb2_textname3' =>['Cristi Jora'],
            'fb2_text3' =>['Web Developer'],
            'fb2_staricon' =>['fa fa-star'],    
            'fb2_prebutton_icon' =>['fa fa-angle-left'],
            'fb2_prebutton_url' =>['#carouselExampleIndicators2'],
            'fb2_prebutton_text' =>['Previous'],
            'fb2_nextbutton_icon' =>['fa fa-angle-right'],
            'fb2_nextbutton_url' =>['#carouselExampleIndicators2'],
            'fb2_nextbutton_text' =>['Next'],
            'fb2_rightimg1' =>['img/s3.amazonaws.com/creativetim_bucket/photos/125268/thumbaf08.jpg'],
            'fb2_rightimg2' =>['img/s3.amazonaws.com/creativetim_bucket/photos/139481/thumb47ae.jpg'],
            'fb2_rightimg3' =>['img/s3.amazonaws.com/creativetim_bucket/photos/152441/thumb7503.jpg'],
            'fb2_rightimg4' =>['img/s3.amazonaws.com/creativetim_bucket/photos/123334/thumb8cd6.jpg'],
            'fb2_rightimg5' =>['img/s3.amazonaws.com/creativetim_bucket/photos/77627/thumb653f.jpg'],
            'fb2_rightimg6' =>['img/s3.amazonaws.com/creativetim_bucket/photos/18/thumbc4d4.png'],  
            
      

            ];

        return $sampleValues[$field] ?? [];
    }
}





