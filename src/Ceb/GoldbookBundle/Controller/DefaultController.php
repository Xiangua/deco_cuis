<?php

namespace Ceb\GoldbookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CebGoldbookBundle:Default:index.html.twig');
    }
}
