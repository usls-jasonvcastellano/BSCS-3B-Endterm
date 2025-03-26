<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Pastry', 'description' => 'Sweet and savoury baked goods','created_at'=> now(),'updated_at'=> now()],
            ['name' => 'Candy', 'description' => 'Confections made with sugar.','created_at'=> now(),'updated_at'=> now()],
            ['name' => 'Pasta', 'description' => 'Resources for students and teachers.','created_at'=> now(),'updated_at'=> now()],
            ['name' => 'Pizza', 'description' => 'Flattened disk of bread dough with toppings baked quickly.','created_at'=> now(),'updated_at'=> now()],
            ['name' => 'Beverage', 'description' => 'Drinks other than water.','created_at'=> now(),'updated_at'=> now()],
        ]); 
    }
}
