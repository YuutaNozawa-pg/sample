<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function shopPosition()
    {
        return $this->hasOne(ShopPosition::class, 'shop_id', 'id');
    }
}
