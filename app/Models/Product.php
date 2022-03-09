<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'menu_id',
        'category_id',
        'code',
        'name',
        'price',
        'description',
    ];

    // /**
    //  * Get the route key for the model.
    //  *
    //  * @return string
    //  */
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }

    public function addLike()
    {
        $user_id = auth()->user()->id;
        $like = $this->likes()->where('user_id', $user_id)->first();

        if ($like) {
            return false;
        }

        $this->likes()->create([
            'user_id' => $user_id,
        ]);

        return true;
    }

    public function removeLike()
    {
        $user_id = auth()->user()->id;
        $like = $this->likes()->where('user_id', $user_id)->first();
        $like->delete();

        return true;
    }

    public function isLikedByAuthUser()
    {
        return $this->likes()->where('user_id', auth()->user()->id)->exists()
            ? true
            : false;
    }

    public function addToCart()
    {
        $user_id = auth()->user()->id;
        $cart = $this->transaction()->where('user_id', $user_id)->exists();

        if ($cart) {
            return false;
        }

        $this->transaction()->create([
            'user_id'  => $user_id,
            'code'     => uniqid('TRX-'),
            'notes'    => null,
        ]);

        return true;
    }

    public function isInCart()
    {
        return $this->transaction()->where('user_id', auth()->user()->id)->exists()
            ? true
            : false;
    }
}
