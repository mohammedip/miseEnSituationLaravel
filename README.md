PS C:\laragon\www\miseEnSituation> php artisan tinker
Psy Shell v0.12.7 (PHP 8.4.4 — cli) by Justin Hileman

> $article=App\Models\Article::create(['title'=>'article1','description'=>'description1','category_id'=>1]);                                     
= App\Models\Article {#5247
    title: "article1",
    description: "description1",
    category_id: 1,
    updated_at: "2025-03-10 10:41:51",
    created_at: "2025-03-10 10:41:51",
    id: 1,
  }

> $article=App\Models\Article::find(1);                                                                                                          
= App\Models\Article {#5278
    id: 1,
    title: "article1",
    description: "description1",
    category_id: 1,
    created_at: "2025-03-10 10:41:51",
    updated_at: "2025-03-10 10:41:51",
  }

> $article->update(['title'=>'article1 updated']);                                                                                               
= true

> $article=App\Models\Article::create(['title'=>'article2','description'=>'description1','category_id'=>1]);                                     
= App\Models\Article {#5276
    title: "article2",
    description: "description1",
> $article=App\Models\Article::find(2);
= App\Models\Article {#5273
> $article=App\Models\Article::find(2);
= App\Models\Article {#5273
    id: 2,
    title: "article2",
    description: "description1",
    category_id: 1,
    created_at: "2025-03-10 10:44:08",
    updated_at: "2025-03-10 10:44:08",
  }

> $article->delete();
= true

>         