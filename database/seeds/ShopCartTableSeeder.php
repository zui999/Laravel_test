<?php

use Illuminate\Database\Seeder;

class ShopCartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // 初期データ用意（列名をキーとする連想配列）
        $shop_carts = [ 
             ['id' => 1]
        ];
        // 登録
        foreach($shop_carts as $shop_cart) {
          \App\ShopCart::create($shop_cart);
        }
    }
}
