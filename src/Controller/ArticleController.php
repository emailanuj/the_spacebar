<?php
/**
 * Created by PhpStorm.
 * User: anujdubey
 * Date: 20/03/18
 * Time: 2:22 PM
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response('Har Har Mahadev');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug){
        $comments = [
            'I ate a normal rock once. It did NOT taste like bacon!',
            'Woohoo! I\'m going on an all-asteroid diet!',
            'I like bacon too! Buy some from my site! bakinsomebacon.com',
        ];
     return $this->render('article/show.html.twig',['comments'=>$comments,]);
    }

}