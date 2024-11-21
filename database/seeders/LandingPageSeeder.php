<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LandingPage;
use Illuminate\Support\Facades\DB;

class LandingPageSeeder extends Seeder
{
    public function run()
    {
        DB::table('landing_pages')->insert([
            'title' => 'Test Landing Page',
            'description' => 'This is a sample landing page.',
            'background_image_url' => 'uploads/images/sample-background.jpg',
            'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
            'watch_video_text' => 'Watch Video',
            'download_text' => 'Download',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
