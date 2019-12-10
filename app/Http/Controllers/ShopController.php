<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;

class ShopController extends Controller
{
    //
    public function index()
    {
      // DBよりCDテーブルの値を全て取得
        $books = Book::all();

      // 取得した値をビュー「book/index」に渡す
        return view('shop/index', compact('books'));
    }

}


