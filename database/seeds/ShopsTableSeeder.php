<?php

use Illuminate\Database\Seeder;
use App\Shop;
use App\Area;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $area = (new Area())->newQuery()
            ->first();

        for ($i = 0; $i < 10; $i++) {
            (new Shop())->newQuery()
                ->create([
                    'name' => 'sample',
                    'area_id' => $area->id,
                    'zip_code' => 'zip_code',
                    'address' => 'address',
                    'phone' => '0000000'
                ]);
        }
    }
}
