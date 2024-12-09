<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024.12.06
class SpiceContactusSeeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'SpiceContactus',
            'description' => 'This is the Spice contact us section ',
        ]);

        $fields = [

            'Con_title1' ,

            'Con_urlA1' ,
            'Con_urlB1',
            'Con_detail1',
            'Con_text1' ,
        

            'Con_urlA2' ,
            'Con_urlB2' ,
            'Con_detail2' ,
            'Con_text2' ,
            'Con_text2_url' ,

            
            'Con_urlA3' ,
            'Con_urlB3',
            'Con_detail3' ,
            'Con_text3',
           

            'Con_urlA3' ,
            'Con_urlB3' ,
            'Con_detail4' ,
            'Con_text4',
            'Con_text4_url',
            

            'Con_title2' ,


            'Con_title3',


            'Con_textA' ,
            'Con_textA_icon',
            'Con_textA_url' ,

            'Con_textB' ,
            'Con_textB_icon' ,
            'Con_textB_url' ,

            'Con_textc' ,
            'Con_textc_icon',
            'Con_textc_url' ,

            'Con_textD' ,
            'Con_textD_icon' ,
            'Con_textD_url' ,

            
        
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

            'Con_title1' =>['contacts'],

            'Con_urlA1' =>['http://www.w3.org/2000/svg'],
            'Con_urlB1' =>['http://www.w3.org/1999/xlink'],
            'Con_detail1' =>['Address'],
            'Con_text1' =>['7563 St. Vicent Place, Glasgow'],
        

            'Con_urlA2' =>['http://www.w3.org/2000/svg'],
            'Con_urlB2' =>['http://www.w3.org/1999/xlink'],
            'Con_detail2' =>['Phone'],
            'Con_text2' =>['+09123 456 789'],
            'Con_text2_url' =>['tel:+09123456789'],

            
            'Con_urlA3' =>['http://www.w3.org/2000/svg'],
            'Con_urlB3' =>['http://www.w3.org/1999/xlink'],
            'Con_detail3' =>['Hours'],
            'Con_text3' =>['7 Days a week from 10:00 am to 6:00 pmt'],
           

            'Con_urlA3' =>['http://www.w3.org/2000/svg'],
            'Con_urlB3' =>['http://www.w3.org/1999/xlink'],
            'Con_detail4' =>['Email'],
            'Con_text4' =>['zemes@demolink.org'],
            'Con_text4_url' =>['mailto:zemes@demolink.org'],
            

            'Con_title2' =>['get in touch with us'],


            'Con_title3' =>['follow us'],


            'Con_textA' =>['follow us on Facebook'],
            'Con_textA_icon' =>['fa fa-facebook'],
            'Con_textA_url' =>['https://www.facebook.com/zmzcommerce/'],

            'Con_textB' =>['Join us on twitter'],
            'Con_textB_icon' =>['fa fa-twitter'],
            'Con_textB_url' =>['https://twitter.com/zemezlab'],

            'Con_textc' =>['follow us on instagram'],
            'Con_textc_icon' =>['fa fa-instagram'],
            'Con_textc_url' =>['https://www.instagram.com/zemezlab'],

            'Con_textD' =>['subscribe us on youtube'],
            'Con_textD_icon' =>['fa fa-youtube'],
            'Con_textD_url' =>['https://www.youtube.com/channel/UCPW43un8VFXHe9LxKpR_2Hg'],

            
                       
        ];
        return $sampleValues[$field] ?? [];
    }
}
