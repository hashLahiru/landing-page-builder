<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'background_image_url',
        'title',
        'description',
        'video_url',
        'watch_video_text',
        'download_text',
        'icon_class'
    ];
}
