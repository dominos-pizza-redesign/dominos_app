<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Product;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlist = Product::whereRelation('likes', 'user_id', auth()->user()->id)->get();
        return view('wishlist.index', compact('wishlist'));
    }
}
