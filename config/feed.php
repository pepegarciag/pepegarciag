<?php

return [

    'feeds' => [
        'main' => [
            /*
             * Here you can specify which class and method will return
             * the items that should appear in the feed. For example:
             * 'App\Repositories\NewsItemRepository@getAllOnline'
             */
            'items' => 'App\Content\Posts@feed',

            /*
             * The feed will be available on this url.
             */
            'url' => '/feed',

            'title' => 'Pepe García',

            'description' => 'Desarrollador web en España. Escribo de todo un poco.',
        ],
    ],

];
