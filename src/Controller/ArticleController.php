<?php


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
        return new Response('hello symfony');
    }

    /**
     * @Route("/news/{slug}");
     */
    public function show($slug)
    {
        dump($slug, $this);
        return new Response('<body>Future page to show one space article!</body>');
    }

}