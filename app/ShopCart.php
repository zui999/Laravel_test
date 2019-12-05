<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopCart extends Model
{
    public $table = 'shop_carts';

    public function books()
    {
         return $this->belongsToMany('App\Book', 'shop_cart_items');
    }
}
