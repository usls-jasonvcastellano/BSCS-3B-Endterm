<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Item;

class CategoriesAndItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Categories
        $categories = [
            [
                'name' => 'Electronics',
                'description' => 'Electronic devices and gadgets.',
            ],
            [
                'name' => 'Clothing',
                'description' => 'Apparel and accessories.',
            ],
            [
                'name' => 'Books',
                'description' => 'Various genres of books.',
            ],
            [
                'name' => 'Home & Kitchen',
                'description' => 'Items for your home and kitchen.',
            ],
        ];

        foreach ($categories as $categoryData) {
            Category::create($categoryData);
        }

        // Create Items
        $electronicsCategory = Category::where('name', 'Electronics')->first();
        $clothingCategory = Category::where('name', 'Clothing')->first();
        $booksCategory = Category::where('name', 'Books')->first();
        $homeKitchenCategory = Category::where('name', 'Home & Kitchen')->first();

        $items = [
            [
                'name' => 'Laptop',
                'description' => 'High-performance laptop.',
                'price' => 1200.00,
                'category_id' => $electronicsCategory->id,
            ],
            [
                'name' => 'Smartphone',
                'description' => 'Latest smartphone model.',
                'price' => 800.00,
                'category_id' => $electronicsCategory->id,
            ],
            [
                'name' => 'T-Shirt',
                'description' => 'Cotton t-shirt.',
                'price' => 25.00,
                'category_id' => $clothingCategory->id,
            ],
            [
                'name' => 'Jeans',
                'description' => 'Denim jeans.',
                'price' => 50.00,
                'category_id' => $clothingCategory->id,
            ],
            [
                'name' => 'The Lord of the Rings',
                'description' => 'Fantasy novel.',
                'price' => 20.00,
                'category_id' => $booksCategory->id,
            ],
            [
                'name' => 'Harry Potter',
                'description' => 'Magic and wizardry.',
                'price' => 15.00,
                'category_id' => $booksCategory->id,
            ],
            [
                'name' => 'Coffee Maker',
                'description' => 'Automatic coffee maker.',
                'price' => 60.00,
                'category_id' => $homeKitchenCategory->id,
            ],
            [
                'name' => 'Pillows',
                'description' => 'Set of 2 comfortable pillows',
                'price' => 30.00,
                'category_id' => $homeKitchenCategory->id,
            ],
        ];

        foreach ($items as $itemData) {
            Item::create($itemData);
        }
    }
}