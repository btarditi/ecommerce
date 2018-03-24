<?php

namespace PagesLegales\PagesLegalesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesLegalesController extends Controller
{
    public function pageAction($id)
    {
        return $this->render('PagesLegalesBundle:default:pages/layout/pages.html.twig');
    }
}
