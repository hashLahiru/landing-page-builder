<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewHeaderVideoOrderTable extends Seeder
{
    public function run()
    {
        DB::table('new_header_video_order')->insert([
            'title' => 'Test with us',
            'description' => 'There no doubt that Tesla is delighted with the interest, but the data also raises a few questions. How long will it take for Tesla to fulfill all those extra orders?',
            'background_image_url' => 'https://images.unsplash.com/photo-1486310662856-32058c639c65?dpr=2&amp;auto=format&amp;fit=crop&amp;w=1500&amp;h=1125&amp;q=80&amp;cs=tinysrgb&amp;crop=',
            'video_url' => 'https://www.youtube.com/embed/RcmrbNRK-jY?modestbranding=1&amp;autohide=1&amp;showinfo=0',
            'button_text' => 'Order Now',
            'button_url' => 'https://www.youtube.com/watch?v=RcmrbNRK-jY',
            'button_icon' => 'nc-icon nc-cart-simple',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
