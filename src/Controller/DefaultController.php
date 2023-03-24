<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Selene\CMSBundle\Controller\BlogController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends BlogController
{
    #[Route('/', name: 'app_default')]
    public function index(ManagerRegistry $doctrine): Response
    {
        return $this->render('default/index.html.twig', [
            'recentBlogs' => $this->getBlogList($doctrine, 3),
        ]);
    }
}
