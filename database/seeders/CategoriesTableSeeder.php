<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run():void
    {
        DB::table('categories')->insert([
            ['category_name' => 'Technology', 'description' => 'Latest gadgets and software.', 'created_at'=> now(), 'updated_at' => now()],
            ['category_name' => 'Health', 'description' => 'Tips and products for a healthy life.', 'created_at'=> now(), 'updated_at' => now()],
            ['category_name' => 'Education', 'description' => 'Resources for students and teachers.', 'created_at'=> now(), 'updated_at' => now()],
            ['category_name' => 'TestCategory1', 'description' => '111 - This is a description for TestCategory1', 'created_at'=> now(), 'updated_at' => now()],
            ['category_name' => 'TestCategory2', 'description' => '222 - This is a description for TestCategory2', 'created_at'=> now(), 'updated_at' => now()],
        ]);
    }
}
