<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminDashSub extends Model
{
    protected $table = 'admin_dash_sub';

    public function mainMenu()
    {
        return $this->belongsTo(AdminDashMain::class, 'main_id');
    }
}
