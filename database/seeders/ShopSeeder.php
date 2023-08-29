<?php

namespace Database\Seeders;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 作成する'Shop'が属する'user'を事前に作成
        $user = User::factory()->create();

        // 'User'に属するデータを10件生成
        Shop::factory()->count(10)->for($user)->create();
    }
}
