<?php

namespace App\Controller;

use App\Controller\BaseController;
use App\Model\Post;
use App\Repository\PostRepository;

final class PostController extends BaseController
{
    private PostRepository $postRepository; 

    public function __construct()
    {
        $this->postRepository = new PostRepository();
    }

    public function list(): array
    {
        return [];
    }

    public function create()
    {
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            /* $data = [
                'data' => [
                    'title' => $_POST['title'],
                    'introduction' => $_POST['introduction'],
                    'content' => $_POST['content'],
                ]
            ]; */

            $post = new Post();
            $post->setTitle($_POST['title']);
            $post->setIntroduction($_POST['introduction']);
            $post->setContent($_POST['content']);

            $this->postRepository->create($post);
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
