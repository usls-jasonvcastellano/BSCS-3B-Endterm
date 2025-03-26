<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            ['name' => 'Laptop', 'price' => 599.99, 'category_id' => 1, 'created_at'=> now(), 'updated_at' => now()], // Technology
            ['name' => 'Vitamins', 'price' => 15.00, 'category_id' => 2, 'created_at'=> now(), 'updated_at' => now()], // Health
            ['name' => 'Notebook', 'price' => 5.00, 'category_id' => 3, 'created_at'=> now(), 'updated_at' => now()], // Education
            ['name' => 'TestITEM1', 'price' => 15.00, 'category_id' => 4, 'created_at'=> now(), 'updated_at' => now()], // Test1
            ['name' => 'TestITEM2', 'price' => 20.00, 'category_id' => 5, 'created_at'=> now(), 'updated_at' => now()], // Test2
        ]);
    }
}
