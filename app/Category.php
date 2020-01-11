<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categorys';
    public $timestamps = false;

    public function article()
    {
        return $this->belongsTo(Article::class, 'id', 'category_id');
    }
}
