<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024.12.02
class FooterSeeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'footer',
            'description' => 'This is the footer section of the landing page',
        ]);

        $fields = [
        
'footer_select1',
'footer_drop1_1',
'footer_drop1_2',
'footer_drop1_3',
'footer_drop1_4',
'footer_drop1_5',
'footer_drop1_6',
'footer_drop1_7',
'footer_drop1_8',
'footer_drop1_9',
'footer_drop1_10',
'footer_drop1_11',
'footer_drop1_12',
'footer_drop1_13',
'footer_drop1_14',
'footer_drop1_15',
'footer_drop1_16',
'footer_drop1_17',
'footer_drop1_18',
'footer_drop1_19',
'footer_drop1_20',
'footer_drop1_21',
'footer_drop1_22',
'footer_drop1_23',
'footer_drop1_24',
'footer_drop1_25',
'footer_select2',
'footer_drop2_1',
'footer_drop2_2',
'footer_drop2_3',
'footer_drop2_4',
'footer_drop2_5',
'footer_drop2_6',
'footer_drop2_7',
'footer_drop2_8',
'footer_drop2_9',
'footer_drop2_10',
'footer_drop2_11',
'footer_drop2_12',
'footer_drop2_13',
'footer_drop2_14',
'footer_drop2_15',
'footer_drop2_16',
'footer_drop2_17',
'footer_drop2_18',
'footer_drop2_19',
'footer_drop2_20',
'footer_drop2_21',
'footer_drop2_22',
'footer_drop2_23',
'footer_drop2_24',
'footer_drop2_25',
'footer_drop2_26',
'footer_drop2_27',
'footer_drop2_28',
'footer_drop2_29',
'footer_text1',
'footer_text1_url',
'footer_text2',
'footer_text2_url',
'footer_text3',
'footer_text3_url',
'footer_text4',
'footer_text4_url',
'footer_text5',
'footer_text5_url',
'footer_text6',
'footer_text6_url',
'footer_text7',
'footer_text7_url',
'footer_text8',
'footer_text8_url',
'footer_text9',
'footer_text9_url',
'footer_icon1',
'footer_icon2',
'footer_icon3',
'footer_icon4',
'footer_TextA',
'footer_TextB',
'footer_TextC',
'footer_text10',
'footer_text10_url',
'footer_text11',
'footer_text11_url',
'footer_text12',
'footer_text12_url',


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
      

        
            'footer_select1'=> ['English'],
            'footer_drop1_1'=> ['Bahasa Indonesia'],
            'footer_drop1_2'=> ['Bahasa Melayu'],
            'footer_drop1_3'=> ['Català'],
            'footer_drop1_4'=> ['Dansk'],
            'footer_drop1_5'=> ['Deutsch'],
            'footer_drop1_6'=> ['Español'],
            'footer_drop1_7'=> ['Eλληνικά'],
            'footer_drop1_8'=> ['Français'],
            'footer_drop1_9'=> ['Italiano'],
            'footer_drop1_10'=> ['Magyar'],
            'footer_drop1_11'=> ['Nederlands'],
            'footer_drop1_12'=> ['Norsk'],
            'footer_drop1_13'=> ['Polski'],
            'footer_drop1_14'=> ['Português'],
            'footer_drop1_15'=> ['Suomi'],
            'footer_drop1_16'=> ['Svenska'],
            'footer_drop1_17'=> ['Türkçe'],
            'footer_drop1_18'=> ['Íslenska'],
            'footer_drop1_19'=> ['Čeština'],
            'footer_drop1_20'=> ['Русский'],
            'footer_drop1_21'=> ['ภาษาไทย'],
            'footer_drop1_22'=> ['中文 (简体)'],
            'footer_drop1_23'=> ['中文 (繁體)'],
            'footer_drop1_24'=> ['日本語'],
            'footer_drop1_25'=> ['한국어'],
            'footer_select2'=> ['USD'],
            'footer_drop2_1'=> ['ARS'],
            'footer_drop2_2'=> ['AUD'],
            'footer_drop2_3'=> ['BRL'],
            'footer_drop2_4'=> ['CAD'],
            'footer_drop2_5'=> ['CHF'],
            'footer_drop2_6'=> ['CNY'],
            'footer_drop2_7'=> ['CZK'],
            'footer_drop2_8'=> ['DKK'],
            'footer_drop2_9'=> ['EUR'],
            'footer_drop2_10'=> ['GBP'],
            'footer_drop2_11'=> ['HKD'],
            'footer_drop2_12'=> ['HUF'],
            'footer_drop2_13'=> ['IDR'],
            'footer_drop2_14'=> ['ILS'],
            'footer_drop2_15'=> ['INR'],
            'footer_drop2_16'=> ['JPY'],
            'footer_drop2_17'=> ['KRW'],
            'footer_drop2_18'=> ['MYR'],
            'footer_drop2_19'=> ['MXN'],
            'footer_drop2_20'=> ['NOK'],
            'footer_drop2_21'=> ['NZD'],
            'footer_drop2_22'=> ['PHP'],
            'footer_drop2_23'=> ['PLN'],
            'footer_drop2_24'=> ['RUB'],
            'footer_drop2_25'=> ['SEK'],
            'footer_drop2_26'=> ['SGD'],
            'footer_drop2_27'=> ['TWD'],
            'footer_drop2_28'=> ['VND'],
            'footer_drop2_29'=> ['ZAR'],
            'footer_text1'=> ['Home'],
            'footer_text1_url'=> ['#paper-kit'],
            'footer_text2'=> ['Discover'],
            'footer_text2_url'=> ['#paper-kit'],
            'footer_text3'=> ['Blog'],
            'footer_text3_url'=> ['#paper-kit'],
            'footer_text4'=> ['Contact Us'],
            'footer_text4_url'=> ['#paper-kit'],
            'footer_text5'=> ["We're Hiring"],
            'footer_text5_url'=> ['#paper-kit'],
            'footer_text6'=> [' About Us'],
            'footer_text6_url'=> ['#paper-kit'],
            'footer_text7'=> ['Portfolio'],
            'footer_text7_url'=> ['#paper-kit'],
            'footer_text8'=> ['How it works'],
            'footer_text8_url'=> ['#paper-kit'],
            'footer_text9'=> ['Testimonials'],
            'footer_text9_url'=> ['#paper-kit'],
            'footer_icon1'=> ['fa fa-facebook'],
            'footer_icon2'=> ['fa fa-twitter'],
            'footer_icon3'=> ['fa fa-google-plus'],
            'footer_icon4'=> ['fa fa-pinterest-p'],
            'footer_TextA'=> ['©'],
            'footer_TextB'=> ['document.write(new Date().getFullYear())'],
            'footer_TextC'=> ['Creative Tim, made with love'],
            'footer_text10'=> [' Company Policy'],
            'footer_text10_url'=> ['#paper-kit'],
            'footer_text11'=> ['Terms'],
            'footer_text11_url'=> ['#paper-kit'],
            'footer_text12'=> ['Privacy'],
            'footer_text12_url'=> ['#paper-kit'],
            
           
        ];
        return $sampleValues[$field] ?? [];
    }
}
