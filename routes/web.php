<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterStepTwoController;
use App\Http\Controllers\TransactionController;
use App\Http\Livewire\Transaction\Checkout;

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::view('/loading', 'loading');
    Route::view('dashboard', '/dashboard')->name('dashboard');
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Register
    Route::prefix('/register')->controller(RegisterStepTwoController::class)->name('register.')->group(function () {
        Route::get('/step-2', 'index')->name('step-2');
        Route::post('/step-2/store', 'store')->name('step-2.store');
    });

    // Profile
    Route::prefix('/profile')->controller(ProfileController::class)->name('profile.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/edit', 'edit')->name('edit');
        Route::put('/update', 'update')->name('update');
        Route::delete('/delete', 'destroy')->name('destroy');
        Route::get('/password/edit', 'edit_password')->name('password.edit');
    });

    // Product
    Route::get('/products/{menu:slug}/{category:slug}', [ProductController::class, 'index'])->name('products.index');
    Route::get('/wishlist', [ProductController::class, 'wishlist'])->name('wishlist');

    // Transaction
    Route::get('/cart', [TransactionController::class, 'index'])->name('cart');
    Route::get('/transactions/checkout', [TransactionController::class, 'checkout'])->name('transactions.checkout');
    Route::get('/transactions/print/invoice', [TransactionController::class, 'print_invoice'])->name('transactions.print.invoice');
    Route::get('/transactions/success', [TransactionController::class, 'success'])->name('transactions.success');

    // Developer Profile
    Route::view('/developer-profile', 'developer-profile')->name('dev-profile');
});


#region upload product image
Route::get('upload', function () {
    $images = [
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Mania\\1. chili-chicken.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Mania\\2. chili-sausage.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Mania\\3. beef-rasher.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Super Value\\4. beef-delight.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Super Value\\5. cheesy-sausage.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Super Value\\6. chicken-pepperoni-feast.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Super Value\\7. margherita.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Favourites\\8. chicken-delight.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Favourites\\9. beef-pepperoni-feast.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Favourites\\10. double-beef-burger.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Favourites\\11. tuna-delight.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Favourites\\12. meat&meat.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Premium\\13. cheesy-meatball-blast.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Premium\\14. ultimate-cheese-melt.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Premium\\15. extravaganzza.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Premium\\16. grilled-beef-supreme.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Premium\\17. american-classic-cheeseburger.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Premium\\18. american-frankie-sausage.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Pizza\\Premium\\19. mexican-chicken-nachos.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Side Order\\Sides\\20. tasty-stuffed-pocket-peppery-chicken-sausage.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Side Order\\Sides\\21. bbq-meatball-potato-bake.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Side Order\\Sides\\22. tasty-stuffed-pocket-peppery-beef-sausage.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Side Order\\Sides\\23. potato-wedges.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Side Order\\Desserts\\24. chocolate-lava.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Side Order\\Pasta\\25. mac'n-truffle-alfredo-beef.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Side Order\\Pasta\\26. spicy-tuna-mac'n-cheese.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Side Order\\Pasta\\27. beef-pepper-spagetti.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Side Order\\Pasta\\28. american-mac'n-cheese.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Side Order\\Rice\\29. chicken-rice.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Side Order\\Rice\\30. beef-rice.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Beverages\\Soft Drink\\31. fanta.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Beverages\\Soft Drink\\32. coca-cola.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Beverages\\Soft Drink\\33. sprite.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Beverages\\Soft Drink\\34. fanta-1l.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Beverages\\Soft Drink\\35. coca-cola-1l.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Beverages\\Soft Drink\\36. sprite-1l.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Beverages\\Others\\37. frestea-passion-fruit.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Beverages\\Others\\38. frestea-jasmine.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Beverages\\Others\\39. frestea-apple.png",
        "E:\XII\Prod\DMI\S2\Projek Akhir\dominos\storage\app\public\Products\\Beverages\\Others\\40. ades.png",
    ];
    dd($images);
    foreach ($images as $key => $image) {
        Product::where('id', ($key + 1))->first()
            ->addMedia($image)
            ->preservingOriginal()
            ->toMediaCollection('product/images');
    }
    return true;
});
#endregion
