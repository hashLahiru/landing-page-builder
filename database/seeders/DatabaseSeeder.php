<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Call the ComponentSeeder to insert sample data
        //  $this->call(ComponentSeeder::class);
        //  $this->call(Feature1Seeder::class);
        //  $this->call(Feature2Seeder::class);
        //  $this->call(Feature3Seeder::class);
        //  $this->call(Feature4Seeder::class);
        //  $this->call(Feature5Seeder::class);
        //  $this->call(Feedback1Seeder::class);
        //$this->call(Feedback2Seeder::class);
        //$this->call(Feedback3Seeder::class);
        //$this->call(ProductList1Seeder::class);
        //$this->call(ProductList2Seeder::class);
        $this->call(ProductList3Seeder::class);
       //$this->call(ProductList4Seeder::class);
      
}

}

