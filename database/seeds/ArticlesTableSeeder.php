<?php

use App\Category;
use App\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = (new Category())->newQuery()
            ->where('name', 'お知らせ')
            ->first();

        factory(Article::class, 1)
            ->create([
                'category_id' => $category->id
            ]);
    }
}
