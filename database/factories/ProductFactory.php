<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            #region Mania
            [
                'name'        => 'Chili Chicken',
                'code'        => uniqid('PZA-'),
                'price'       => 1.99,
                'description' => 'Chili Chicken, Sambal Sauce, Cheese Sauce, Parsley, Mozzarella Cheese',
                'category_id' => 1,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => 'Chili Sausage',
                'code'        => uniqid('PZA-'),
                'price'       => 1.99,
                'description' => 'Chili Sausage, Sambal Sauce, Cheese Sauce, Parsley, Mozzarella Cheese',
                'category_id' => 1,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => 'Chili Pepperoni',
                'code'        => uniqid('PZA-'),
                'price'       => 1.99,
                'description' => 'Chili Pepperoni, Sambal Sauce, Cheese Sauce, Parsley, Mozzarella Cheese',
                'category_id' => 1,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            #endregion

            #region Super Value
            [
                'name'        => 'Beef Delight',
                'code'        => uniqid('PZA-'),
                'price'       => 2.99,
                'description' => 'Beef Delight, Sambal Sauce, Cheese Sauce, Parsley, Mozzarella Cheese',
                'category_id' => 2,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => 'Cheesy Sausage',
                'code'        => uniqid('PZA-'),
                'price'       => 2.99,
                'description' => "Domino's Pizza Sauce, Beef Sausage Cut, Mozzarella Cheese",
                'category_id' => 2,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => 'Chicken Papperoni Feast',
                'code'        => uniqid('PZA-'),
                'price'       => 2.99,
                'description' => "Domino's Pizza Sauce, Beef Sausage Cut, Mozzarella Cheese",
                'category_id' => 2,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => 'Margherita',
                'code'        => uniqid('PZA-'),
                'price'       => 2.99,
                'description' => "Domino's Pizza Sauce, Tomato, Parsley, Mozzarella Cheese",
                'category_id' => 2,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            #endregion

            #region Favourites
            [
                'name'        => 'Chicken Delight',
                'code'        => uniqid('PZA-'),
                'price'       => 5.99,
                'description' => "Domino's Pizza Sauce, Onion, Tomato, Chili Chicken, Parsley, Mozzarella Cheese",
                'category_id' => 3,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => 'Beef Pepperoni Feast',
                'code'        => uniqid('PZA-'),
                'price'       => 5.99,
                'description' => "BuDomino's Pizza Sauce, Beef Pepperoni, Mozzarella Cheese",
                'category_id' => 3,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => 'Double Beef Burger',
                'code'        => uniqid('PZA-'),
                'price'       => 5.99,
                'description' => "Domino's Pizza Sauce, Beef Pepperoni, Mozzarella Cheese",
                'category_id' => 3,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => 'Tuna Delight',
                'code'        => uniqid('PZA-'),
                'price'       => 5.99,
                'description' => "Hot Spicy Tuna, Mayonnaise, Onion, Red Pepper, Parsley, Mozzarella Cheese",
                'category_id' => 3,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => 'Meat & Meat',
                'code'        => uniqid('PZA-'),
                'price'       => 5.99,
                'description' => "Domino's Pizza Sauce, Tomato, Parsley, Mozzarella Cheese",
                'category_id' => 3,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            #endregion

            #region Premium
            [
                'name'        => 'Cheesy Metball Blast',
                'code'        => uniqid('PZA-'),
                'price'       => 5.99,
                'description' => "Domino's Pizza Sauce, Beef Pepperoni, Mozzarella Cheese",
                'category_id' => 4,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => 'Ultimate Cheese Mate',
                'code'        => uniqid('PZA-'),
                'price'       => 5.99,
                'description' => "Hot Spicy Tuna, Mayonnaise, Onion, Red Pepper, Parsley, Mozzarella Cheese",
                'category_id' => 4,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => 'Extravaganzza',
                'code'        => uniqid('PZA-'),
                'price'       => 5.99,
                'description' => "Hot Spicy Tuna, Mayonnaise, Onion, Red Pepper, Parsley, Mozzarella Cheese",
                'category_id' => 4,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => 'Grilled Beef Supreme',
                'code'        => uniqid('PZA-'),
                'price'       => 5.99,
                'description' => "Butterscotch Sauce, Boba, Mozzarella Cheese, Icing Sugar",
                'category_id' => 4,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => 'American Classic Cheeseburger',
                'code'        => uniqid('PZA-'),
                'price'       => 5.99,
                'description' => "Tomato sauce,Mustard Sauc,Timato, Beef Rasher, Beef Crumble",
                'category_id' => 4,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => 'American Frankie Sausage',
                'code'        => uniqid('PZA-'),
                'price'       => 5.99,
                'description' => "Hot Spicy Tuna, Mayonnaise, Onion, Red Pepper, Parsley, Mozzarella Cheese",
                'category_id' => 4,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => 'Mexican Chicken Nacos',
                'code'        => uniqid('PZA-'),
                'price'       => 5.99,
                'description' => "Hot Spicy Tuna, Mayonnaise, Onion, Red Pepper, Parsley, Mozzarella Cheese",
                'category_id' => 4,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            #endregion

            #region Sides
            [
                'name'        => 'Tasty Stuffed Pocket Spicy Chicken Sausage',
                'code'        => uniqid('SDS-'),
                'price'       => 0.99,
                'description' => "Chili Chicken, Sambal Sauce, Cheese Sauce, Parsley, Mozzarella Cheese",
                'category_id' => 5,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => 'BBQ Meatball Potato Bake',
                'code'        => uniqid('SDS-'),
                'price'       => 2.99,
                'description' => "Chili Chicken, Sambal Sauce, Cheese Sauce, Parsley, Mozzarella Cheese",
                'category_id' => 5,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => 'Tasty Stuffed Pocket Peppery Beef Sausage',
                'code'        => uniqid('SDS-'),
                'price'       => 0.99,
                'description' => "Chili Chicken, Sambal Sauce, Cheese Sauce, Parsley, Mozzarella Cheese",
                'category_id' => 5,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => 'Potato Wedges',
                'code'        => uniqid('SDS-'),
                'price'       => 0.99,
                'description' => "Chili Chicken, Sambal Sauce, Cheese Sauce, Parsley, Mozzarella Cheese",
                'category_id' => 5,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            #endregion

            #region Desserts
            [
                'name'        => 'Chocolate Lava',
                'code'        => uniqid('SDS-'),
                'price'       => 1.99,
                'description' => "Sweet Lava Chocolate",
                'category_id' => 6,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            #endregion

            #region Pasta
            [
                'name'        => "Mac'n Truffle Alfredo Beef",
                'code'        => uniqid('SDS-'),
                'price'       => 2.99,
                'description' => "Mac'N Truflle Alfredo Beef",
                'category_id' => 7,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => "Spicy Tuna Mac'n Cheese",
                'code'        => uniqid('SDS-'),
                'price'       => 2.99,
                'description' => "Spicy Tuna Mac'n Cheese",
                'category_id' => 7,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => "Beef Pepper Spaghetti",
                'code'        => uniqid('SDS-'),
                'price'       => 2.99,
                'description' => "Beef Pepper Spaghetti",
                'category_id' => 7,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => "American Mac’n Cheese",
                'code'        => uniqid('SDS-'),
                'price'       => 2.99,
                'description' => "American Mac’n Extra Cheese",
                'category_id' => 7,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            #endregion

            #region Rice
            [
                'name'        => "Rice Bowl With Chicken",
                'code'        => uniqid('SDS-'),
                'price'       => 2.99,
                'description' => "Rice Bowl With Chicken",
                'category_id' => 8,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => "Rice Bowl With Beef",
                'code'        => uniqid('SDS-'),
                'price'       => 2.99,
                'description' => "Rice Bowl With Beef",
                'category_id' => 8,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            #endregion

            #region Soft Drink
            [
                'name'        => "Fanta",
                'code'        => uniqid('BVR-'),
                'price'       => 0.84,
                'description' => "390 ML",
                'category_id' => 9,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => "Coca Cola",
                'code'        => uniqid('BVR-'),
                'price'       => 0.84,
                'description' => "390 ML",
                'category_id' => 9,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => "Sprite",
                'code'        => uniqid('BVR-'),
                'price'       => 0.84,
                'description' => "390 ML",
                'category_id' => 9,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => "Fanta",
                'code'        => uniqid('BVR-'),
                'price'       => 1.19,
                'description' => "1 L",
                'category_id' => 9,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => "Coca Cola",
                'code'        => uniqid('BVR-'),
                'price'       => 1.19,
                'description' => "1 L",
                'category_id' => 9,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => "Sprite",
                'code'        => uniqid('BVR-'),
                'price'       => 1.19,
                'description' => "1 L",
                'category_id' => 9,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            #endregion

            #region Others
            [
                'name'        => "Freshtea Passion Fruit",
                'code'        => uniqid('BVR-'),
                'price'       => 0.84,
                'description' => "350 ML",
                'category_id' => 10,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => "Freshtea Jasmine",
                'code'        => uniqid('BVR-'),
                'price'       => 0.84,
                'description' => "350 ML",
                'category_id' => 10,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => "Freshtea Apple",
                'code'        => uniqid('BVR-'),
                'price'       => 0.84,
                'description' => "350 ML",
                'category_id' => 10,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'name'        => "Ades",
                'code'        => uniqid('BVR-'),
                'price'       => 0.77,
                'description' => "600 ML",
                'category_id' => 10,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            #endregion
        ];
    }
}
