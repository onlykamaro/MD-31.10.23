<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Article;
use App\Response;

class ArticleController
{
    public function index(): Response
    {
        // The logic goes here

        return new Response('articles.index', [
            'articles' => [
                new Article('Title 1', 'Description 1'),
                new Article('Title 2', 'Description 2'),
                new Article('Title 3', 'Description 3'),
            ]
        ]);
    }

    public function show(): Response
    {
        // The logic goes here

        return new Response('articles.show', [
            'articles' => new Article('Title ABC', 'Description ABC')
        ]);
    }

}