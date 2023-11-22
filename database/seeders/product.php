<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed some sample data for Products
        $products = [
            [
                'nama' => 'Mawar',
                'harga' => 10000,
                'image' => 'product1.jpg',
            ],
        ];

        // Insert data into the database
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
