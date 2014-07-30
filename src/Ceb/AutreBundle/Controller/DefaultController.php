<?php

namespace Ceb\AutreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function contactAction()
    {
        return $this->render('CebAutreBundle:Default:index.html.twig');
    }

    public function partenaireAction()
    {
    	return $this->render('CebAutreBundle:Default:partenaire.html.twig');
    }

    public function presentationAction()
    {
    	return $this->render('CebAutreBundle:Default:present.html.twig');
    }
}
