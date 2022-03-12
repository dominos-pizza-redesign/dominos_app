<?php

namespace App\Http\Controllers;

use App\Models\Product;

class UploadProductImageController extends Controller
{
    public function index()
    {
        // $images = [
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Mania\\1. chili-chicken.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Mania\\2. chili-sausage.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Mania\\3. beef-rasher.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Super Value\\4. beef-delight.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Super Value\\5. cheesy-sausage.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Super Value\\6. chicken-pepperoni-feast.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Super Value\\7. margherita.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Favourites\\8. chicken-delight.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Favourites\\9. beef-pepperoni-feast.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Favourites\\10. double-beef-burger.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Favourites\\11. tuna-delight.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Favourites\\12. meat&meat.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Premium\\13. cheesy-meatball-blast.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Premium\\14. ultimate-cheese-melt.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Premium\\15. extravaganzza.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Premium\\16. grilled-beef-supreme.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Premium\\17. american-classic-cheeseburger.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Premium\\18. american-frankie-sausage.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Premium\\19. mexican-chicken-nachos.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Side Order\\Sides\\20. tasty-stuffed-pocket-peppery-chicken-sausage.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Side Order\\Sides\\21. bbq-meatball-potato-bake.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Side Order\\Sides\\22. tasty-stuffed-pocket-peppery-beef-sausage.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Side Order\\Sides\\23. potato-wedges.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Side Order\\Desserts\\24. chocolate-lava.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Side Order\\Pasta\\25. mac'n-truffle-alfredo-beef.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Side Order\\Pasta\\26. spicy-tuna-mac'n-cheese.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Side Order\\Pasta\\27. beef-pepper-spagetti.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Side Order\\Pasta\\28. american-mac'n-cheese.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Side Order\\Rice\\29. chicken-rice.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Side Order\\Rice\\30. beef-rice.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Beverages\\Soft Drink\\31. fanta.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Beverages\\Soft Drink\\32. coca-cola.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Beverages\\Soft Drink\\33. sprite.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Beverages\\Soft Drink\\34. fanta-1l.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Beverages\\Soft Drink\\35. coca-cola-1l.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Beverages\\Soft Drink\\36. sprite-1l.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Beverages\\Others\\37. frestea-passion-fruit.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Beverages\\Others\\38. frestea-jasmine.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Beverages\\Others\\39. frestea-apple.png",
        //     "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Beverages\\Others\\40. ades.png",
        // ];
        // foreach ($images as $key => $image) {
        //     Product::where('id', ($key + 1))->first()
        //         ->addMedia($image)
        //         ->preservingOriginal()
        //         ->toMediaCollection('product/images');
        // }
        // return "Image Uploaded";
        return "Uploaded";
    }
}
