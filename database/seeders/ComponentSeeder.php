<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;

class ComponentSeeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'about-us',
            'description' => 'This is the main about us section'
        ]);

        $fields = [
            'title',
            'card_1_url',
            'card_1_img',
            'card_1_name',
            'card_1_role',
            'card_1_description',
            'card_1_twitter',
            'card_1_dribble',
            'card_1_linkedin',
            'card_2_url',
            'card_2_img',
            'card_2_name',
            'card_2_role',
            'card_2_description',
            'card_2_twitter',
            'card_2_dribble',
            'card_2_linkedin',
            'card_3_url',
            'card_3_img',
            'card_3_name',
            'card_3_role',
            'card_3_description',
            'card_3_twitter',
            'card_3_dribble',
            'card_3_linkedin',
        ];

        foreach ($fields as $field) {
            $componentField = ComponentField::create([
                'component_id' => $component->id,
                'field_name' => $field,
            ]);

            $fieldValues = $this->getAboutUsValues($field);

            foreach ($fieldValues as $value) {
                ComponentFieldValue::create([
                    'component_field_id' => $componentField->id,
                    'value' => $value,
                ]);
            }
        }
    }

    private function getAboutUsValues($field)
    {
        $sampleValues = [
            'title' => ['Let\'s talk about us'],
            'card_1_url' => ['#avatar'],
            'card_1_img' => ['img/faces/clem-onojeghuo-3.jpg'],
            'card_1_name' => ['Henry Ford'],
            'card_1_role' => ['Product Manager'],
            'card_1_description' => ['Teamwork is so important that it is virtually impossible for you to reach the heights of your capabilities or make the money that you want without becoming very good at it.'],
            'card_1_twitter' => ['#pablo'],
            'card_1_dribble' => ['#pablo'],
            'card_1_linkedin' => ['#pablo'],
            'card_2_url' => ['#avatar'],
            'card_2_img' => ['img/faces/joe-gardner-2.jpg'],
            'card_2_name' => ['Sophie West'],
            'card_2_role' => ['Designer'],
            'card_2_description' => ['A group becomes a team when each member is sure enough of himself and his contribution to praise the skill of the others. No one can whistle a symphony. It takes an orchestra to play it.'],
            'card_2_twitter' => ['#pablo'],
            'card_2_dribble' => ['#pablo'],
            'card_2_linkedin' => ['#pablo'],
            'card_3_url' => ['#avatar'],
            'card_3_img' => ['img/faces/erik-lucatero-2.jpg'],
            'card_3_name' => ['Robert Orben'],
            'card_3_role' => ['Developer'],
            'card_3_description' => ['The strength of the team is each individual member. The strength of each member is the team. If you can laugh together, you can work together, silence isn’t golden, it’s deadly.'],
            'card_3_twitter' => ['#pablo'],
            'card_3_dribble' => ['#pablo'],
            'card_3_linkedin' => ['#pablo'],
        ];

        return $sampleValues[$field] ?? [];
    }

    private function getSampleValues($field)
    {
        $sampleValues = [
            'title' => ['Welcome to Our Website'],
            'description' => ['There no doubt that Tesla is delighted with the interest, but the data also raises a few questions. How long will it take for Tesla to fulfill all those extra orders?'],
            'background_image_url' => ['https://images.unsplash.com/photo-1486310662856-32058c639c65?dpr=2&amp;auto=format&amp;fit=crop&amp;w=1500&amp;h=1125&amp;q=80&amp;cs=tinysrgb&amp;crop='],
            'video_url' => ['https://www.youtube.com/embed/RcmrbNRK-jY?modestbranding=1&amp;autohide=1&amp;showinfo=0'],
            'button_text' => ['Order Now'],
            'button_url' => ['https://www.youtube.com/watch?v=RcmrbNRK-jY'],
            'button_icon' => ['nc-icon nc-cart-simple'],
        ];

        return $sampleValues[$field] ?? [];
    }

    private function getSampleValues2($field)
    {
        $sampleValues = [
            'product_title' => ['Is this what you are looking for?'],
            'product_description' => ['This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldnt scroll to get here.'],
            'detail_button_url' => ['#'],
            'detail_button_text' => ['Show more'],
            'icon_1' => ['nc-icon nc-world-2'],
            'text_1' => ['Design'],
            'description_1' => ['Unlike fashionable design, it lasts many years – even in todays throwaway society.'],
            'button_1_url' => ['#'],
            'button_1_text' => ['Show more'],
            'icon_2' => ['nc-icon nc-single-copy-04'],
            'text_2' => ['UI Kits'],
            'description_2' => ['Imagine if you could go to the profile of a friend and instead of scrolling through...'],
            'button_2_text' => ['Show more'],
            'icon_3' => ['nc-icon nc-time-alarm'],
            'text_3' => ['Development'],
            'description_3' => ['For starters, it seemed like a good idea to keep a running list of Vision investments.'],
            'button_3_url' => ['#'],
            'button_3_text' => ['Show more'],
            'icon_4' => ['nc-icon nc-time-alarm'],
            'text_4' => ['Development'],
            'description_4' => ['For starters, it seemed like a good idea to keep a running list of Vision investments.'],
            'button_4_url' => ['#'],
            'button_4_text' => ['Show more'],
        ];

        return $sampleValues[$field] ?? [];
    }
}
