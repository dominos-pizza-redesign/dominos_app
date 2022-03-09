<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            [
                'name'       => 'Pizza',
                'slug'       => 'pizza',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'       => 'Side Order',
                'slug'       => 'side-order',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'       => 'Beverages',
                'slug'       => 'beverages',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
    }
}
