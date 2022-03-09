<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
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
        ];
    }
}
