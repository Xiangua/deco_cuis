<?php

namespace Ceb\PhotoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ceb\PhotoBundle\Entity\Bain;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

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
    /**
    * @Template()
    */
    public function uploadAction()
    {
        $document = new Bain();
        $form = $this->createFormBuilder($document)
            ->add('name')
            ->add('file')
            ->getForm()
        ;

        if ($this->getRequest()->isMethod('POST')) {
            $form->handleRequest($this->getRequest());
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();

                $em->persist($document);
                $em->flush();

                return $this->forward('CebPhotoBundle:Default:succes', array('photo' => $document));
            }
        }

        return $this->render('CebPhotoBundle:Default:upload.html.twig', array('form' => $form->createView()));
    }

    public function succesAction(Bain $photo)
    {
        if ($photo === null) {
            return $this->render('CebPhotoBundle:Default:error.html.twig');
        }
        return $this->render('CebPhotoBundle:Default:succes.html.twig', array('photo' => $photo));
    }

    public function erreurAction()
    {
        return $this->render('CebPhotoBundle:Default:error.html.twig');
    }
    
    public function deleteBainAction()
    {
        $em = $this->getDoctrine()
               ->getManager();

        $Objets = $em->getRepository('CebPhotoBundle:Bain')
                             ->findAll();
        return $this->render('CebPhotoBundle:Default:deleteBain.html.twig', array('Objets' => $Objets));
    }

    public function destroyBainAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $Objet = $em->getRepository('CebPhotoBundle:Bain')->find($id);
        $em->remove($Objet);
        $em->flush();
        return $this->forward('CebPhotoBundle:Default:deleteBain');
    }
}