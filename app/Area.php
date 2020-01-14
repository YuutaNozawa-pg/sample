<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function shops()
    {
        return $this->hasMany(Shop::class, 'area_id', 'id');
    }
}
