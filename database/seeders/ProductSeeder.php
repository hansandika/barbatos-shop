<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'product_name' => 'Samsung Galaxy S21 Ultra',
            'product_description' => 'Samsung Galaxy S21 Ultra 5G is a new smartphone by Samsung, the price of Galaxy S21 Ultra 5G in Indonesia is IDR 21,999,000, on this page you can find the best and most updated price of Galaxy S21 Ultra 5G in Indonesia with detailed specifications and features.',
            'product_price' => 21999000,
            'product_image' => 'https://www.samsung.com/id/smartphones/galaxy-s21/gallery/ultra/ultra-5g-black-1.jpg',
            'product_category_id' => 1,
        ]);

        Product::create([
            'product_name' => 'Samsung Galaxy S21',
            'product_description' => 'Samsung Galaxy S21 5G is a new smartphone by Samsung, the price of Galaxy S21 5G in Indonesia is IDR 14,999,000, on this page you can find the best and most updated price of Galaxy S21 5G in Indonesia with detailed specifications and features.',
            'product_price' => 14999000,
            'product_image' => 'https://www.samsung.com/id/smartphones/galaxy-s21/gallery/s21-5g-black-1.jpg',
            'product_category_id' => 1,
        ]);

        Product::create([
            'product_name' => 'Canon EOS 5D Mark IV',
            'product_description' => 'Canon EOS 5D Mark IV is a full frame DSLR camera with 30.4MP CMOS sensor and DIGIC 6+ image processor. It has 61-point AF system with 41 cross-type points and 4K video recording at 30 fps. It has 3.2-inch LCD screen with 1,620,000 dots resolution.',
            'product_price' => 29999000,
            'product_image' => 'https://www.canon.co.id/image/5dmarkiv/5dmarkiv_01.jpg',
            'product_category_id' => 2,
        ]);

        Product::create([
            'product_name' => 'Stick Computer Intel NUC 10 Performance',
            'product_description' => 'Intel NUC 10 Performance is a stick computer with Intel Core i7-10710U processor, 16GB RAM, 512GB SSD, and Intel Iris Plus Graphics 645. It has 2x USB 3.1 Gen 2 Type-A, 1x USB 3.1 Gen 2 Type-C, 1x HDMI 2.0, 1x Gigabit Ethernet, and 1x 3.5mm audio jack.',
            'product_price' => 10999000,
            'product_image' => 'https://www.intel.com/content/dam/www/public/us/en/images/visuals/visuals-nuc-10-performance-visual-1.jpg.rendition.intel.web.1280.1280.jpg',
            'product_category_id' => 5,
        ]);

        Product::create([
            'product_name' => 'Garden Chair',
            'product_description' => 'Garden chair is a chair for outdoor use. It is made of wood, plastic, or metal. It is usually used for garden, patio, or balcony.',
            'product_price' => 299000,
            'product_image' => 'https://www.ikea.com/id/en/images/products/ekeroe-armchair__0732009_PE737202_S5.JPG?f=s',
            'product_category_id' => 3,
        ]);
    }
}
