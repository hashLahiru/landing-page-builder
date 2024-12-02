<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024/11/27 
class ProductList3Seeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'ProductList3',
            'description' => 'This is the Product List3 section of the landing page',
        ]);

        $fields = [
        
'p3_text',      
'p3_title',
'p3_img1',      
'p3_img1_url',
'p3_textA1',
'p3_textB1',      
'p3_para1',
'p3_img2',      
'p3_img2_url',
'p3_textA2',
'p3_textB2',      
'p3_para2',
'p3_img3',      
'p3_img3_url',
'p3_textA3',
'p3_textB3',      
'p3_para3',
'p3_img4',      
'p3_img4_url',
'p3_textA4',
'p3_textB4',      
'p3_para4',
'p3_img5',      
'p3_img5_url',
'p3_textA5',
'p3_textB5',      
'p3_para5',
'p3_img6',      
'p3_img6_url',
'p3_textA6',
'p3_textB6',      
'p3_para6',



      
            
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



'p3_text'=>['Our work'],       
'p3_title'=>['Some of Our Awesome Projects - 3'], 
'p3_img1'=>['/img/sections/angelo-pantazis.jpg'],       
'p3_img1_url'=>['http://www.creative-tim.com/product/paper-kit'], 
'p3_textA1'=>['Productivity tools'], 
'p3_textB1'=>['Beautiful Desktop for Designers'],       
'p3_para1'=>['As this technology matures it will be cool to see what hackers are able to do with it.'], 
'p3_img2'=>['/img/sections/patrick-tomasso.jpg'],       
'p3_img2_url'=>['http://www.creative-tim.com/product/paper-kit'], 
'p3_textA2'=>['Web Design'], 
'p3_textB2'=>['Famous Website Redesign Implementation'],       
'p3_para2'=>['Streaming services once again top the list of this year’s Emmy nominations'], 
'p3_img3'=>['/img/sections/luke-chesser.jpg'],       
'p3_img3_url'=>['http://www.creative-tim.com/product/paper-kit'], 
'p3_textA3'=>['Marketing tools'], 
'p3_textB3'=>['The Best Productivity Applications'],       
'p3_para3'=>['Dietary supplements don’t need approval from the Food and Drug Administration.'], 
'p3_img4'=>['/img/sections/rawpixel-coms.jpg'],       
'p3_img4_url'=>['http://www.creative-tim.com/product/paper-kit'], 
'p3_textA4'=>['Website'], 
'p3_textB4'=>['Behance Redesign'],       
'p3_para4'=>['The HDR rollout is being enabled via support from two major studio partners.'], 
'p3_img5'=>['/img/sections/patrick-tomasso.jpg'],       
'p3_img5_url'=>['http://www.creative-tim.com/product/paper-kit'], 
'p3_textA5'=>['Android App'], 
'p3_textB5'=>['Analytics for Android'],       
'p3_para5'=>['Google did not offer an estimate as to when HDR support reaches its other global markets.'], 
'p3_img6'=>['/img/sections/rawpixel-coms.jpg'],       
'p3_img6_url'=>['http://www.creative-tim.com/product/paper-kit'], 
'p3_textA6'=>['Material'], 
'p3_textB6'=>['How to find the contacts.'],       
'p3_para6'=>['Boom, the invitations start flying and Brella makes it easy to accept/decline'], 

            ];

        return $sampleValues[$field] ?? [];
    }
}





