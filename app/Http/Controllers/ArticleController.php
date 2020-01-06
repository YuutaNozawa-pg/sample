<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __invoke()
    {

        $articles = (new Location())->newQuery()
        ->with(['articles' => function($query) {
            $query->whereHas('category', function($query) {
                $query->where('name', 'お知らせ');
            });
        }])
        ->get()
        ->all();

        return view('article.index', ['articles' => $articles ]);
    }
}
