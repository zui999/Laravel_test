<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ShopCart;

class ShopCartController extends Controller
{
    public function addToCart($id)
    {
        $shopcart = ShopCart::findOrFail(1);
        $shopcart->books()->attach($id); 

         return redirect("/shop");
    }

    public function index()
    {
        $shopcartitems = ShopCart::with('books');
//        eval(\Psy\sh());
        return view('shopcart/index', compact('shopcartitems'));
    }

    public function destroy($id)
    {
        $shopcartitems = ShopCart::findOrFail($id);
        $shopcartitems->delete();

        return redirect("shopcart");
    }
}
