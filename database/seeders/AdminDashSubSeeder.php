<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminDashSubSeeder extends Seeder
{
    public function run()
    {
        DB::table('admin_dash_sub')->insert([
            ['main_id' => 1, 'name' => 'Dashboard v.1', 'route' => 'dashboard.v1'],
            ['main_id' => 1, 'name' => 'Dashboard v.2', 'route' => 'dashboard.v2'],
            ['main_id' => 3, 'name' => 'Flot Charts', 'route' => 'graphs.flot'],
            ['main_id' => 3, 'name' => 'Morris.js Charts', 'route' => 'graphs.morris'],
        ]);
    }
}
