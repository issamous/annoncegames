<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoriesController extends Controller
{
    public function ajoutPageAction()
    {
        return $this->render('AdminBundle:Categories:ajout.html.twig');
    }

    public function listePageAction()
    {
        return $this->render('AdminBundle:Categories:listecategories.html.twig');
    }
}
