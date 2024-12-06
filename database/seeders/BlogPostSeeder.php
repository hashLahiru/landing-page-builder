<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024.12.05
class BlogPostSeeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'BlogPost',
            'description' => 'This is the Spice Blog Post section of the landing page',
        ]);

        $fields = [
          

            'BP_img' ,

            'BP_icon1_url',
            'BP_icon1' ,

            'BP_box1_url' ,
            'BP_box1_img' , 
             'BP_box1_text' ,
             'BP_box1_price',
             
             'BP_icon2_url' ,
             'BP_icon2' ,
 
             'BP_box2_url',
             'BP_box2_img', 
              'BP_box2_text' ,
              'BP_box2_price' ,

              'BP_icon3_url',
              'BP_icon3',
              'BP_box3_url' ,
              'BP_box3_img',
               'BP_box3_text',
               'BP_box3_price' ,
               
               
               'BP_icon4_url' ,
               'BP_icon4' ,
   
               'BP_box4_url' ,
               'BP_box4_img' , 
                'BP_box4_text' ,
                'BP_box4_price' ,
                
                'BP_title',

                'BP_title1' ,
                'BP_title1_url' , 

                'BP_para1' ,


                  'BP_btn1_text' ,
                  'BP_btn1_url',
                  
                  

                  'BP_title2' ,
                  'BP_title2_url', 
  
                  'BP_para2' ,
  
                    'BP_btn2_text',
                    'BP_btn2_url' ,
                       
                    'BP_title3' , 
                    'BP_title3_url' , 
    
                    'BP_para3' , 
    
    
                      'BP_btn3_text' ,
                      'BP_btn3_url' ,
      
      

             
        
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
                
             

            'BP_img' =>['SpiceWebTemplate/cdn/shop/files/lookbook-bg_1440x5471b1d.jpg'],

            'BP_icon1_url' =>['products/chiquilin-smoked-paprika.html'],
            'BP_icon1' =>['fa fa-plus'],

            'BP_box1_url' =>['products/chiquilin-smoked-paprika.html'], 
            'BP_box1_img' =>['SpiceWebTemplate/cdn/shop/products/malaysian-satay-seasoning_01_80x100_crop_top92ce.png'], 
             'BP_box1_text' =>['Chiquilin Smoked Paprika'],
             'BP_box1_price' =>['$2.70'],   
             
             'BP_icon2_url' =>['products/frontier-ginger-root-ground.html'],
             'BP_icon2' =>['fa fa-plus'],
 
             'BP_box2_url' =>['products/chiquilin-smoked-paprika.html'], 
             'BP_box2_img' =>['SpiceWebTemplate/cdn/shop/products/organic-dried-kaffir-lime-leaves_01_80x100_crop_top97b5.png'], 
              'BP_box2_text' =>['Frontier Ginger Root Ground'],
              'BP_box2_price' =>['$4.20'],   

              'BP_icon3_url' =>['products/black-pepper-whole.html'],
              'BP_icon3' =>['fa fa-plus'],
  
              'BP_box3_url' =>['products/black-pepper-whole.html'], 
              'BP_box3_img' =>['SpiceWebTemplate/cdn/shop/products/baharat-spice_01_80x100_crop_top1108.png'], 
               'BP_box3_text' =>['Black Pepper Whole'],
               'BP_box3_price' =>['$2.05'],  
               
               
               'BP_icon4_url' =>['products/camel-green-peas.html'],
               'BP_icon4' =>['fa fa-plus'],
   
               'BP_box4_url' =>['products/camel-green-peas.html'], 
               'BP_box4_img' =>['SpiceWebTemplate/cdn/shop/products/basil_california_01_80x100_crop_top3248.png'], 
                'BP_box4_text' =>['Camel Green Peas'],
                'BP_box4_price' =>['$6.50'], 
                
                'BP_title' =>['Latest from the blog'], 

                'BP_title1' =>['Impact - The Heart of Business'], 
                'BP_title1_url' =>['blogs/news/impact-the-heart-of-business.html'], 

                'BP_para1' =>[' Thousands of people dream of having their own
                                      business and even more so be a successful
                                      entrepreneur. But what does it take to achieve
                                      success in the business industry? One of the most
                                      successful entrepreneurs featured at the Forbes
                                      website,...'], 


                  'BP_btn1_text' =>['Read more'],
                  'BP_btn1_url' =>['blogs/news/believe-in-the-business-of-your-dreams.html'],
                  
                  

                  'BP_title2' =>['Believe in the Business of Your Dreams'], 
                  'BP_title2_url' =>['blogs/news/believe-in-the-business-of-your-dreams.html'], 
  
                  'BP_para2' =>['  What is stopping you from believing in the
                                      business of your dreams? Insecurity? Fear? Lack of
                                      confidence? All of the above? How can you overcome
                                      these obstructions? Your Mantras You may be
                                      wondering if you have the necessary skills,
                                      time,...'], 
  
  
                    'BP_btn2_text' =>['Read more'],
                    'BP_btn2_url' =>['blogs/news/believe-in-the-business-of-your-dreams.html'],
                       
                    'BP_title3' =>['Explore New Items Right Now'], 
                    'BP_title3_url' =>['blogs/news/explore-new-items-right-now.html'], 
    
                    'BP_para3' =>["Many students are cash-strapped, nowadays.
                                      Nevertheless, their purchasing power is very high.
                                      Research reveals that 20 million students in the
                                      US have a combined disposable income of $417
                                      billion. Moreover, another survey of students'
                                      parents reveals that students now make...
                                  "], 
    
    
                      'BP_btn3_text' =>['Read more'],
                      'BP_btn3_url' =>['blogs/news/believe-in-the-business-of-your-dreams.html'],
      
      
                ];
                
        return $sampleValues[$field] ?? [];
    }
}
