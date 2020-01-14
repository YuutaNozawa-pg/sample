<?php

use Illuminate\Database\Seeder;
use App\ShopUser;
use App\Shop;
use App\User;

class ShopUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shops = (new Shop())
            ->get();

        (new User())->newQuery()
            ->first()
            ->each(function ($user) use ($shops) {
                $user->shops()->attach($shops->pluck('id')->toArray());
            });
    }
}
