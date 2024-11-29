<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminDashMainSeeder extends Seeder
{
    public function run()
    {
        DB::table('admin_dash_main')->insert([
            ['name' => 'Dashboard', 'icon' => 'fa-th-large', 'route' => 'dashboard.index'],
            ['name' => 'Layouts', 'icon' => 'fa-diamond', 'route' => 'layouts.index'],
            ['name' => 'Graphs', 'icon' => 'fa-bar-chart-o', 'route' => null],
        ]);
    }
}
