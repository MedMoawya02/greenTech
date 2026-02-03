<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    //
    public function toggle(Product $product){
        auth()->user()->favorites()->toggle($product->id);
        return back();
    }
}
