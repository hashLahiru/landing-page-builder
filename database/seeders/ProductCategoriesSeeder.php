<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoriesSeeder extends Seeder
{
    public function run()
    {
        DB::table('product_categories')->insert([
            ['cat_name' => 'Whole Spices', 'cat_image' => '/productImages/2A.jpg', 'status' => 'active'],
            ['cat_name' => 'Ground Spices', 'cat_image' => '/productImages/7A.jpg', 'status' => 'active'],
            ['cat_name' => 'Spice Blends', 'cat_image' => '/productImages/10A.jpg', 'status' => 'active'],
        ]);
    }
}
