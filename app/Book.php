<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $table = 'books';

    public function shopcarts()
    {
         return $this->belongsToMany('App\ShopCart')->using('App\ShopCartItems');
    }
}
