<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            // Pizza
            [
                'name'       => 'Mania',
                'slug'       => 'mania',
                'menu_id'    => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'       => 'Super Value',
                'slug'       => 'super-value',
                'menu_id'    => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'       => 'Favourites',
                'slug'       => 'favourites',
                'menu_id'    => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'       => 'Premium',
                'slug'       => 'premium',
                'menu_id'    => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Side Order
            [
                'name'       => 'Sides',
                'slug'       => 'sides',
                'menu_id'    => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'       => 'Desserts',
                'slug'       => 'desserts',
                'menu_id'    => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'       => 'Pasta',
                'slug'       => 'pasta',
                'menu_id'    => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'       => 'Rice',
                'slug'       => 'rice',
                'menu_id'    => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Beverages
            [
                'name'       => 'Soft Drink',
                'slug'       => 'soft-drink',
                'menu_id'    => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'       => 'Others',
                'slug'       => 'others',
                'menu_id'    => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
