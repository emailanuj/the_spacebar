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
     return $this->render('article/show.html.twig',['title'=>ucwords(str_replace('-',' ',$slug))]);
    }

}