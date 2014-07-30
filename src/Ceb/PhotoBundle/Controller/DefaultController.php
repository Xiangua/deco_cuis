<?php

namespace Ceb\PhotoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CebPhotoBundle:Default:index.html.twig');
    }
    public function cuisineAction()
    {
        return $this->render('CebPhotoBundle:Default:cuisine.html.twig');
    }
    public function bainAction()
    {
        return $this->render('CebPhotoBundle:Default:bain.html.twig');
    }
    public function finitionAction()
    {
        return $this->render('CebPhotoBundle:Default:finition.html.twig');
    }
}
