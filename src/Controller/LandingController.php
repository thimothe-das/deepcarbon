<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LandingController extends AbstractController
{
    public function index()
    {
        return $this->render('landing/index.html.twig', [
        ]);
    }

    public function about()
    {
        return $this->render('landing/about.html.twig', [
        ]);
    }

    public function domain()
    {
        return $this->render('landing/domain.html.twig', [
        ]);
    }

    public function hosting()
    {
        return $this->render('landing/hosting.html.twig', [
        ]);
    }

    public function blog()
    {
        return $this->render('landing/blog.html.twig', [
        ]);
    }

    public function contact()
    {
        return $this->render('landing/contact.html.twig', [
        ]);
    }
}
