<?php

namespace Ceb\PhotoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ceb\PhotoBundle\Entity\Travauxfini;
use Ceb\PhotoBundle\Entity\Cuisine;
use Ceb\PhotoBundle\Entity\Bain;
use Ceb\PhotoBundle\Entity\Finition;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class DefaultController extends Controller
{
    public function Travaux_finiAction()
    {
            $em = $this->getDoctrine()
               ->getManager();

        $Objets = $em->getRepository('CebPhotoBundle:Travauxfini')
                             ->findAll();
        return $this->render('CebPhotoBundle:Default:travaux_fini.html.twig', array('Objets' => $Objets));
    }
    public function cuisineAction()
    {
            $em = $this->getDoctrine()
               ->getManager();

        $Objets = $em->getRepository('CebPhotoBundle:Cuisine')
                             ->findAll();
        return $this->render('CebPhotoBundle:Default:cuisine.html.twig', array('Objets' => $Objets));
    }
    public function bainAction()
    {
        $em = $this->getDoctrine()
               ->getManager();

        $Objets = $em->getRepository('CebPhotoBundle:Bain')
                             ->findAll();
        return $this->render('CebPhotoBundle:Default:bain.html.twig', array('Objets' => $Objets));
    }
    public function finitionAction()
    {
        $em = $this->getDoctrine()
               ->getManager();

        $Objets = $em->getRepository('CebPhotoBundle:finition')
                             ->findAll();
        return $this->render('CebPhotoBundle:Default:finition.html.twig', array('Objets' => $Objets));
    }
    /**
    * @Template()
    */
    public function uploadBainAction()
    {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedHttpException('Accès limité aux admins!');
        }
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

    public function erreurAction()
    {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedHttpException('Accès limité aux admins!');
        }
        return $this->render('CebPhotoBundle:Default:error.html.twig');
    }
    
    public function deleteBainAction()
    {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedHttpException('Accès limité aux admins!');
        }

        $em = $this->getDoctrine()
               ->getManager();

        $Bains = $em->getRepository('CebPhotoBundle:Bain')
                             ->findAll();
        $Cuisines = $em->getRepository('CebPhotoBundle:Cuisine')
                             ->findAll();
        $Finitions = $em->getRepository('CebPhotoBundle:Finition')
                             ->findAll();
        $Travaus = $em->getRepository('CebPhotoBundle:Travauxfini')
                             ->findAll();
        return $this->render('CebPhotoBundle:Default:deleteBain.html.twig', array('Bains' => $Bains, 'Cuisines' => $Cuisines, 'Finitions' => $Finitions, 'Travaus' => $Travaus));
    }

    public function destroyBainAction($id)
    {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedHttpException('Accès limité aux admins!');
        }

        $em = $this->getDoctrine()->getManager();
        $Objet = $em->getRepository('CebPhotoBundle:Bain')->find($id);
        $em->remove($Objet);
        $em->flush();
        return $this->forward('CebPhotoBundle:Default:deleteBain');
    }

    public function destroyCuisineAction($id)
    {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedHttpException('Accès limité aux admins!');
        }

        $em = $this->getDoctrine()->getManager();
        $Objet = $em->getRepository('CebPhotoBundle:Cuisine')->find($id);
        $em->remove($Objet);
        $em->flush();
        return $this->forward('CebPhotoBundle:Default:deleteBain');
    }

    public function destroyTravauAction($id)
    {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedHttpException('Accès limité aux admins!');
        }

        $em = $this->getDoctrine()->getManager();
        $Objet = $em->getRepository('CebPhotoBundle:Travauxfini')->find($id);
        $em->remove($Objet);
        $em->flush();
        return $this->forward('CebPhotoBundle:Default:deleteBain');
    }

    public function destroyFinitionAction($id)
    {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedHttpException('Accès limité aux admins!');
        }

        $em = $this->getDoctrine()->getManager();
        $Objet = $em->getRepository('CebPhotoBundle:Finition')->find($id);
        $em->remove($Objet);
        $em->flush();
        return $this->forward('CebPhotoBundle:Default:deleteBain');
    }
}