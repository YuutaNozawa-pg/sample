<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __invoke()
    {
        
        $articles = (new Article())->newQuery()
        ->whereHas('category', function ($query) {

            $query->where('name', 'お知らせ');
        })
        ->get();

        return view('article.index', ['articles' => $articles ]);
    }
}
