<?php

use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Product::class)->constrained('products')->onDelete('cascade')->nullable();
            $table->foreignIdFor(User::class)->constrained('users')->onDelete('cascade')->nullable();
            $table->string("code", 50);
            $table->integer('quantity')->default(1);
            $table->enum("status", ["success", "pending", "failed", 'cancelled'])->default('pending');
            $table->mediumText("notes")->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
