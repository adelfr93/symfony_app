<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController {

    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        // return new Response('<html><body>Hello </body></html>');
        return $this->render('Front/index.html.twig');
    }

}