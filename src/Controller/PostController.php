<?php

namespace App\Controller;

use App\Controller\BaseController;

final class PostController extends BaseController
{
    public function list(): array
    {
        return [];
    }

    public function create()
    {
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $data = [
                'data' => [
                    'title' => $_POST['title'],
                    'introduction' => $_POST['introduction'],
                    'content' => $_POST['content'],
                ]
            ];
        }

        echo $this->render('post/create.html.twig', $data ?? []);
    }

    public function read()
    {
        // TODO To dev;
        echo $this->render('index.html.twig', [
            'colors' => [
                'red',
                'yellow',
                'green',
            ],
        ]);
    }

    public function update()
    {
        // TODO To dev;
    }

    public function delete()
    {
        // TODO To dev;
    }
}
