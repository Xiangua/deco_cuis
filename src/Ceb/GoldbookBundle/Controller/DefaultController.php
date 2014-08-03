<?php

namespace Ceb\GoldBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ceb\GoldbookBundle\Entity\Post;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$post = new Post();

    	$em = $this->getDoctrine()
          ->getManager();

        $Objets = $em->getRepository('CebGoldbookBundle:Post')
              ->findAll();

    	$form = $this->createFormBuilder($post)
            ->add('pseudo')
            ->add('email')
            ->add('message')
            ->getForm();

        if ($this->getRequest()->isMethod('POST'))
        {
            $form->handleRequest($this->getRequest());
            if ($form->isValid())
            {
                $post->setDate(new \Datetime());
                $em->persist($post);
                $em->flush();
        		
        		return $this->render('CebGoldbookBundle:Default:index.html.twig', array('form' => $form->createView(), 'Objets' => $Objets));
            }
        }

        return $this->render('CebGoldbookBundle:Default:index.html.twig', array('form' => $form->createView(), 'Objets' => $Objets));
	}
}