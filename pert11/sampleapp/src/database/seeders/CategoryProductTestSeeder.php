<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProductTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Electronics', 'description' => 'All electronic products'],
            ['name' => 'Fashion', 'description' => 'Clothing, shoes, and accessories'],
            ['name' => 'Home Appliances', 'description' => 'Appliances for home use'],
        ];

        foreach ($categories as $category) {
            DB::table('category_product_tests')->insert([
                'name' => $category['name'],
                'description' => $category['description'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
