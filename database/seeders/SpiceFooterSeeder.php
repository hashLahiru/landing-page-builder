<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024.12.06
class SpiceFooterSeeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'SpiceFooter',
            'description' => 'This is the Spice footer section ',
        ]);

        $fields = [
          
            
            'SF_logo' ,
            'SF_text' ,

            'SF_section1_topic' ,

            'SF_section1_text1',
            'SF_section1_url1' ,

            'SF_section1_text2' ,
            'SF_section1_url2' ,

            'SF_section1_text3' ,
            'SF_section1_url3' ,
            
            'SF_section1_text4',
            'SF_section1_url4' ,

            'SF_section1_text5' ,
            'SF_section1_url5' ,
            
            'SF_section1_text6' ,
            'SF_section1_url6' ,

            

            'SF_section2_topic' ,
            'SF_section2_text1' ,
            'SF_section2_url1' ,

            'SF_section2_text2' ,
            'SF_section2_url2' ,

            'SF_section2_text3' ,
            'SF_section2_url3' ,


            'SF_section3_topic' ,

            'SF_section3_text1' ,
            'SF_section3_url1' ,

            'SF_section3_text2',
            'SF_section3_url2' ,

            'SF_section3_text3' ,
            'SF_section3_url3' ,

            'SF_section3_text4',
            'SF_section3_url4' ,

            'SF_section3_text5' ,
            'SF_section3_url5' ,

            'SF_section3_text6' ,
            'SF_section3_url6' ,

            'SF_section3_text7' ,
            'SF_section3_url7',

            'SF_text2',
            'SF_text3_url' ,
            'SF_text3',
            
              
             
        
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
                

            'SF_logo' =>['SpiceWebTemplate/cdn/shop/files/spiceX_225x125_crop_center8a9c.png'],
            'SF_text' =>['&copy;Powered by Shopify'],

            'SF_section1_topic' =>['Categories'],

            'SF_section1_text1' =>['CANDIED FRUITS'],
            'SF_section1_url1' =>['collections/candied-fruits.html'],

            'SF_section1_text2' =>['Spices & Herbs'],
            'SF_section1_url2' =>['collections/spices-herbs.html'],

            'SF_section1_text3' =>['Natural Flavorings & Extracts'],
            'SF_section1_url3' =>['collections/natural-flavorings-extracts.html'],
            
            'SF_section1_text4' =>['Spice Blends'],
            'SF_section1_url4' =>['collections/spice-blends.html'],

            'SF_section1_text5' =>['Salt-Free'],
            'SF_section1_url5' =>['collections/salt-free.html'],
            
            'SF_section1_text6' =>['Seasonings'],
            'SF_section1_url6' =>['collections/seasonings.html'],

            

            'SF_section2_topic' =>['Information'],

            'SF_section2_text1' =>['Home'],
            'SF_section2_url1' =>['pages/home.html'],

            'SF_section2_text2' =>['products'],
            'SF_section2_url2' =>['pages/products.html'],

            'SF_section2_text3' =>['Contact Us'],
            'SF_section2_url3' =>['pages/contact-us.html'],


            'SF_section3_topic' =>['My Account'],

            'SF_section3_text1' =>['My Account'],
            'SF_section3_url1' =>['account/login4236.html'],

            'SF_section3_text2' =>['Log in'],
            'SF_section3_url2' =>['account/login.html'],

            'SF_section3_text3' =>['My Addresses'],
            'SF_section3_url3' =>['account/login4918.html'],

            'SF_section3_text4' =>['My Orders'],
            'SF_section3_url4' =>['account/login4236.html'],

            'SF_section3_text5' =>['Password page'],
            'SF_section3_url5' =>['pages/password-page.html'],

            'SF_section3_text6' =>['Contact Us'],
            'SF_section3_url6' =>['pages/contact-us.html'],

            'SF_section3_text7' =>['Latest News'],
            'SF_section3_url7' =>['blogs/news.html'],

            'SF_text2' =>[' ©theme848-spices-store.'],
            'SF_text3_url' =>['https://www.shopify.com/?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore'],
            'SF_text3' =>['Powered by Shopify'],
            
            
                       
        ];
        return $sampleValues[$field] ?? [];
    }
}
