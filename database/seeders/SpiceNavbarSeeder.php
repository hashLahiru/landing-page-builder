<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024.12.05
class SpiceNavbarSeeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'SpiceNavbar',
            'description' => 'This is the Spice Navbar section ',
        ]);

        $fields = [
          
            
            'SN_text1' ,
            'SN_logo_url' ,
            'SN_logo' ,
           
            'SN_icon' ,
            'SN_icon_text' ,

            'SN_icon1' ,
            'SN_icon1_text' ,
            'SN_icon1_url' ,

            'SN_icon2' ,
            'SN_icon2_text' ,
            'SN_icon2_url' ,

            
            
            'SN_icon3_text' ,
            'SN_icon2_url' ,

            'SN_cart_icon' ,
            'SN_cart_text' ,
            'SN_cart_url' ,

            'SN_textA' ,
              
             
        
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
                

            'SN_text1' =>['Order online or call us (1800) 000 8808'],
            'SN_logo_url' =>['index.html'],
            'SN_logo' =>['SpiceWebTemplate/cdn/shop/files/logo_5faca918-a849-4860-a888-0f9eef45496d_170x70_crop_center%402xbd99.png'],
           
            'SN_icon' =>['fa fa-bars'],
            'SN_icon_text' =>['Menu'],

            'SN_icon1' =>['level_1__trigger megamenu_trigger'],
            'SN_icon1_text' =>['Home'],
            'SN_icon1_url' =>['http://127.0.0.1:8000/spice-home'],

            'SN_icon2' =>['level_1__trigger megamenu_trigger'],
            'SN_icon2_text' =>['Products'],
            'SN_icon2_url' =>['http://127.0.0.1:8000/spice-products'],

            
           
            'SN_icon3_text' =>['Contact Us'],
            'SN_icon3_url' =>['http://127.0.0.1:8000/spice-contactus'],

            'SN_cart_icon' =>['fa fa-shopping-cart'],
            'SN_cart_text' =>['0 item(s)'],
            'SN_cart_url' =>['cart.html'],

            'SN_textA' =>['  It appears that your cart is currently empty'],
                       
        ];
        return $sampleValues[$field] ?? [];
    }
}
