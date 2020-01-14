<?php

use Illuminate\Database\Seeder;
use App\ShopPosition;
use App\Shop;

class ShopPositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $latMax = 40;
        $latMin = 30;
        $lngMax = 140;
        $lngMin = 130;

        $shops = (new Shop())->newQuery()
            ->get();

        for ($i = 0; $i < 10; $i++) {
            $lat = $latMin + mt_rand() / mt_getrandmax() * ($latMax - $latMin);
            $lng = $lngMin + mt_rand() / mt_getrandmax() * ($lngMax - $lngMin);
            // (new ShopPosition())->newQuery()
            //     ->create([
            //         'shop_id' => $shops[$i]->id,
            //         'lat' => $lat,
            //         'lng' => $lng,
            //         'position' => "(ST_GeomFromText('POINT($lng $lat)', 4326))"
            //     ]);
        }
    }
}