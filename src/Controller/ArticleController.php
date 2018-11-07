<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 08.11.2018
 * Time: 1:20
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Omg! My first page already! woo!');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf(
            'Future page to show the article %s',
            $slug
        ));
    }
}