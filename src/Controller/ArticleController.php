<?php
/**
 * Created by PhpStorm.
 * User: anujdubey
 * Date: 20/03/18
 * Time: 2:22 PM
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response('Har Har Mahadev');
    }

}