<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminDashMain extends Model
{
    protected $table = 'admin_dash_main';

    public function subMenus()
    {
        return $this->hasMany(AdminDashSub::class, 'main_id');
    }
}
