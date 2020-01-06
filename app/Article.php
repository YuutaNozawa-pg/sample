<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $timestamps = false;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
