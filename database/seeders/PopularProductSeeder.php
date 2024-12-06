<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024.12.05
class PopularProductSeeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'PopularProduct',
            'description' => 'This is the Spice Popular Product  section of the landing page',
        ]);

        $fields = [
          
            'pop_title' ,

            'pop_pro1_name',
            'pop_pro1_url' ,
            'pop_paraA1' ,
            'pop_paraB1' ,

            'pop_price1',

            'pop_imgA1',
            'pop_imgA1_url' ,             
            'pop_imgB1',

            'pop_text1' ,

            'pop_btn1_name' ,
            'pop_btn1_icon' ,
            'pop_action1' ,    
            
            
            'pop_iconA1_url',
            'pop_iconA1' ,

            'pop_iconB1_url',
            'pop_iconB1' ,



            'pop_pro2_name',
            'pop_pro2_url',
            'pop_paraA2' ,
            'pop_paraB2',
            'pop_price2' ,

            'pop_imgA2' ,
            'pop_imgA2_url',            
            'pop_imgB2' ,

            'pop_text2' ,

            'pop_btn2_name' ,
            'pop_btn2_icon' ,
            'pop_action2' ,
            
            
            'pop_iconA2_url',
            'pop_iconA2' ,

            'pop_iconB2_url',
            'pop_iconB2',



            
            'pop_pro3_name',
            'pop_pro3_url',
            'pop_paraA3',
            'pop_paraB3' ,
            'pop_priceA3' ,
            'pop_priceB3' ,
           

            'pop_imgA3' ,
            'pop_imgB3' ,

            'pop_text3' ,


            'pop_dis_text',
            'pop_btn3_name',
            'pop_btn3_icon' ,
            'pop_action3' ,    
            
            
            'pop_iconA3_url',
            'pop_iconA3' ,   

            'pop_iconB3_url',
            'pop_iconB3',
             
             
        
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
                
             
        

            'pop_title' =>['popular products'],

            'pop_pro1_name' =>['Schani Moong...'],
            'pop_pro1_url' =>['products/schani-moong-split-chilka.html'],
            'pop_paraA1' =>['Enjoy shopping in our store! Need help? You can address our 24/7 online suppo...'],
            'pop_paraB1' =>[' Enjoy shopping in our store! Need help? You can address
                        our 24/7 online support system. There you can find all
                        answers concerning our goods, terms and prices. So don`t
                        waste your time on hesitation and make your purchase in
                        our store. We bring positive emotions and elegant taste
                        into your dishes. Remember that you can get a good
                        benefit in our store.'],

            'pop_price1' =>['$2.10'],

            'pop_imgA1' =>['SpiceWebTemplate/cdn/shop/products/tandoori-seasoning_01_370x260_crop_topc39e.png'],
            'pop_imgA1_url' =>['collections/salt-free/products/schani-moong-split-chilka.html'],             
            'pop_imgB1' =>['SpiceWebTemplate/cdn/shop/products/tandoori-seasoning_02_370x260_crop_topc39e.png'],

            'pop_text1' =>['new'],

            'pop_btn1_name' =>['Add to cart'],
            'pop_btn1_icon' =>['fa fa-shopping-bag'],
            'pop_action1' =>['https://theme848-spices-store.myshopify.com/cart/add'],    
            
            
            'pop_iconA1_url'=>['pages/wishlist.html'],
            'pop_iconA1' =>['fa fa-heart-o'],    

            'pop_iconB1_url'=>['products/schani-moong-split-chilka.html'],
            'pop_iconB1' =>['fa fa-search-plus'],    



            'pop_pro2_name' =>['McCormick Or...'],
            'pop_pro2_url' =>['products/mccormick-oregano-leaves.html'],
            'pop_paraA2' =>[' We care about our clients and never let them down. Our
                        assortment can satisfy...'],
            'pop_paraB2' =>[' We care about our clients and never let them down. Our
                        assortment can satisfy most whimsical clients. Enjoy
                        shopping in our store! Need help? You can address our
                        24/7 online support system. There you can find all
                        answers concerning our goods, terms and prices. So don`t
                        waste your time on hesitation and make your purchase in
                        our store.'],
            'pop_price2' =>['$5.30'],

            'pop_imgA2' =>['SpiceWebTemplate/cdn/shop/products/sichuan-pepper-sea-salt_01_370x260_crop_topce2f.png'],
            'pop_imgA2_url' =>['collections/salt-free/products/mccormick-oregano-leaves.html'],             
            'pop_imgB2' =>['SpiceWebTemplate/cdn/shop/products/sichuan-pepper-sea-salt_02_370x260_crop_topce2f.png'],

            'pop_text2' =>['new'],

            'pop_btn2_name' =>['Add to cart'],
            'pop_btn2_icon' =>['fa fa-shopping-bag'],
            'pop_action2' =>['https://theme848-spices-store.myshopify.com/cart/add'],    
            
            
            'pop_iconA2_url'=>['pages/wishlist.html'],
            'pop_iconA2' =>['fa fa-heart-o'],    

            'pop_iconB2_url'=>['products/mccormick-oregano-leaves.html'],
            'pop_iconB2' =>['fa fa-search-plus'], 



            
            'pop_pro3_name' =>['Frontier Cin...'],
            'pop_pro3_url' =>['products/frontier-cinnamon-sticks.html'],
            'pop_paraA3' =>['       Our spices are real bestsellers and they have a great
                        number of faithful fans...'],
            'pop_paraB3' =>[' Our spices are real bestsellers and they have a great
                        number of faithful fans all over the country. There is
                        no doubt about our reputation because it`s perfect and
                        our clients` testimonials can prove this fact. We care
                        about our clients and never let them down. Our
                        assortment can satisfy most whimsical clients. Enjoy
                        shopping in our store!'],
            'pop_priceA3' =>['$4.20'],
            'pop_priceB3' =>['$3.80'],
           

            'pop_imgA3' =>['SpiceWebTemplate/cdn/shop/products/organic-bay-leaves_01_370x260_crop_top74e9.png'],
            'pop_imgA3_url' =>['collections/salt-free/products/frontier-cinnamon-sticks.html'],             
            'pop_imgB3' =>['SpiceWebTemplate/cdn/shop/products/organic-bay-leaves_02_370x260_crop_top74e9.png'],

            'pop_text3' =>['new'],


            'pop_dis_text' =>['–10%'],
            'pop_btn3_name' =>['Add to cart'],
            'pop_btn3_icon' =>['fa fa-shopping-bag'],
            'pop_action3' =>['https://theme848-spices-store.myshopify.com/cart/add'],    
            
            
            'pop_iconA3_url'=>['pages/wishlist.html'],
            'pop_iconA3' =>['fa fa-heart-o'],    

            'pop_iconB3_url'=>['products/frontier-cinnamon-sticks.html'],
            'pop_iconB3' =>['fa fa-search-plus'], 

                       
        ];
        return $sampleValues[$field] ?? [];
    }
}
