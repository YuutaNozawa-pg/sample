<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TokensTableSeeder::class,
            DevicesTableSeeder::class,
            UsersTableSeeder::class,
            GuestsTableSeeder::class,
            AreasTableSeeder::class,
            ShopsTableSeeder::class,
            ShopPositionsTableSeeder::class,
            ShopUserTableSeeder::class,
            ShopGuestTableSeeder::class,
        ]);
    }
}
