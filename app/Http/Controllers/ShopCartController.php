<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ShopCart;
use App\Book;

class ShopCartController extends Controller
{
    public function index()
    {
        $shopcartitems = ShopCart::findOrFail(1)->books;

        return view('shopcart/index', compact('shopcartitems'));

    }

    public function addToCart($id)
    {
        $shopcartitems = Book::findOrFail($id);

        $shopcartitems->shopCarts()->attach(1);

        return redirect('shopcart');
    }

    public function deleteFromCart($id)
    {
        $shopcartitems = Book::findOrFail($id);

        $shopcartitems->shopCarts()->detach(1);

        return redirect('shopcart');
    }
}
