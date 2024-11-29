<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Hasintha Lahiru - 2025.11.28
class Header1Seeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'header',
            'description' => 'This is the header1 section of the landing page',
        ]);

        $fields = [
            'title',
            'description',
            'background_image_url',
            'video_url',
            'button_text',
            'button_url',
            'button_icon',
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
            'title' => ['Test with us'],
            'description' => ['There no doubt that Tesla is delighted with the interest, but the data also raises a few questions. How long will it take for Tesla to fulfill all those extra orders?'],
            'background_image_url' => ['https://images.unsplash.com/photo-1486310662856-32058c639c65?dpr=2&amp;auto=format&amp;fit=crop&amp;w=1500&amp;h=1125&amp;q=80&amp;cs=tinysrgb&amp;crop='],
            'video_url' => ['https://www.youtube.com/embed/RcmrbNRK-jY?modestbranding=1&amp;autohide=1&amp;showinfo=0'],
            'button_text' => ['Order Now'],
            'button_url' => ['https://www.youtube.com/watch?v=RcmrbNRK-jY'],
            'button_icon' => ['nc-icon nc-cart-simple'],
        ];
        return $sampleValues[$field] ?? [];
    }
}
