<?php

namespace App\Http\Controllers;

use App\Content\Posts;

class PostsController
{
    public function page($page, Posts $posts)
    {
        return view('posts.index', [
            'paginator' => $posts->paginate(20, 'page', $page),
        ]);
    }

    public function show($year, $slug, Posts $posts)
    {
        setlocale(LC_TIME, 'es_ES');
        return view('posts.show', [
            'post' => $posts->find($year, $slug),
        ]);
    }
}
