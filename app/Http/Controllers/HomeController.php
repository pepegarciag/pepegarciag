<?php

namespace App\Http\Controllers;

use App\Content\Posts;
use Carbon\Carbon;
use Illuminate\Routing\Controller;

class HomeController
{
    public function index(Posts $posts)
    {
        setlocale(LC_TIME, 'es_ES');

        $posts = $posts->all();

        return view('home.index', [
            'posts' => $posts,
        ]);
    }
}
