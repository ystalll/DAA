<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Smartphone XYZ',
                'price' => 5000000,
                'stock' => 100,
                'category' => 'Smartphones',
                'supplier_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'LED TV 42 inch',
                'price' => 3500000,
                'stock' => 50,
                'category' => 'Televisions',
                'supplier_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wireless Earbuds',
                'price' => 1500000,
                'stock' => 200,
                'category' => 'Accessories',
                'supplier_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
