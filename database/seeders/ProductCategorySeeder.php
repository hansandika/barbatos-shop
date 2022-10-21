<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::create([
            'category_name' => 'Electronics',
        ]);

        ProductCategory::create([
            'category_name' => 'Fashion',
        ]);

        ProductCategory::create([
            'category_name' => 'Home & Garden',
        ]);

        ProductCategory::create([
            'category_name' => 'Sports & Outdoors',
        ]);

        ProductCategory::create([
            'category_name' => 'Toys & Hobbies',
        ]);

        ProductCategory::create([
            'category_name' => 'Health & Beauty',
        ]);

        ProductCategory::create([
            'category_name' => 'Automotive',
        ]);

        ProductCategory::create([
            'category_name' => 'Groceries',
        ]);

        ProductCategory::create([
            'category_name' => 'Books',
        ]);

        ProductCategory::create([
            'category_name' => 'Movies & Music',
        ]);

        ProductCategory::create([
            'category_name' => 'Baby & Kids',
        ]);

        ProductCategory::create([
            'category_name' => 'Pets',
        ]);

        ProductCategory::create([
            'category_name' => 'Travel',
        ]);

        ProductCategory::create([
            'category_name' => 'Services',
        ]);

        ProductCategory::create([
            'category_name' => 'Others',
        ]);
    }
}
