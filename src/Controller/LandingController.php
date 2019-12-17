<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LandingController extends AbstractController
{
    public function index()
    {
        return $this->render('landing/index.html.twig', [
            'controller_name' => 'LandingController',
        ]);
    }

    public function about()
    {
        return $this->render('landing/about.html.twig', [
            'controller_name' => 'LandingController',
        ]);
    }

    public function domain()
    {
        return $this->render('landing/domain.html.twig', [
            'controller_name' => 'LandingController',
        ]);
    }

    public function hosting()
    {
        return $this->render('landing/hosting.html.twig', [
            'controller_name' => 'LandingController',
        ]);
    }

    public function blog()
    {
        return $this->render('landing/blog.html.twig', [
            'controller_name' => 'LandingController',
        ]);
    }

    public function contact()
    {
        return $this->render('landing/contact.html.twig', [
            'controller_name' => 'LandingController',
        ]);
    }
}
