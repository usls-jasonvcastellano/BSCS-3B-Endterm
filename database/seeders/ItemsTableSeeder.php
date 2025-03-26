<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('items')->insert([
            ['name' => 'Cream puff', 'price' => 599.99, 'category_id' => 1,'created_at'=> now(),'updated_at'=> now()], // Pastry
            ['name' => 'Caramel', 'price' => 799.99, 'category_id' => 2,'created_at'=> now(),'updated_at'=> now()], // Candy
            ['name' => 'Carbonara', 'price' => 25.00, 'category_id' => 3,'created_at'=> now(),'updated_at'=> now()], // Pasta
            ['name' => 'Pepperoni pizza', 'price' => 15.00, 'category_id' => 4,'created_at'=> now(),'updated_at'=> now()], // Pizza
            ['name' => 'Popple', 'price' => 39.99, 'category_id' => 5, 'created_at'=> now(),'updated_at'=> now()],// Beverage
        ]);
    }
}
