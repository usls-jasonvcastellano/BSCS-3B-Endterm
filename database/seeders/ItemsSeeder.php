<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ItemsSeeder extends Seeder
{
    public function run(): void
    {   
        $categories = DB::table("categories")->get(); 

        foreach ($categories as $category) {
            DB::table("items")->insert([
                'category_id' => $category->id, 
                'item_name' => Str::random(10), 
                'price' => rand(100, 10000) / 100,
                'qty' => rand(1, 50), // 
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
