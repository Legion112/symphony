<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 08.11.2018
 * Time: 1:20
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
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
        $comments = [
            'First comment',
            'Second comment',
            'Ferd comment',

        ];

        return $this->render('article/show.html.twig', [
            'title' =>  ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,
        ]);
    }
}