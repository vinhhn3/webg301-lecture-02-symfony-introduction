<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostsController extends AbstractController
{
    /**
     * @Route("/posts", methods={"GET"}, name="posts")
     */
    public function index(): Response
    {
        return $this->render('posts/index.html.twig', [
            'controller_name' => 'PostsController',
        ]);
    }

    /**
     * @Route("/posts/all", methods={"GET"}, name="all_posts")
     */
    public function getAll(): Response
    {
        return $this->json(
            [
                'method' => 'GET',
                'function' => 'getAll'
            ]
        );
    }

    /**
     * @Route("/posts/create", methods={"POST"}, name="add_posts")
     */
    public function addItem(): Response
    {
        return $this->json(
            [
                'method' => 'POST',
                'function' => 'add_item'
            ]
        );
    }

    /**
     * @Route("/posts/{id}", methods={"GET"}, name="post_details")
     */
    public function detailsPost($id): Response
    {
        return $this->json(
            [
                'method' => 'GET',
                'function' => 'add_item',
                'params' => (int)$id
            ]
        );
    }

    /**
     * @Route("/posts/overview", name="app_overview")
     */
    public function overviewAction(): Response
    {
        return $this->json(
            [
                'num_items' => 2,
                'total' => 10
            ]
        );
    }
}
