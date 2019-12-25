<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function shopCarts()
    {
        return $this->belongsToMany('App\ShopCart', 'shop_cart_items');
    }
}
