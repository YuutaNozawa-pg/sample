<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $timestamps = false;
    protected $guarded = [
        'id'
    ];

    public function articles()
    {
        return $this->hasMany(Article::class, 'id', 'article_id');
    }
}
