<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
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
        ]);
    }
}
