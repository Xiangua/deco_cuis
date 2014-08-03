<?php

namespace Ceb\PhotoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ceb\PhotoBundle\Entity\cuisine;
use Ceb\PhotoBundle\Entity\Bain;
use Ceb\PhotoBundle\Entity\Travauxfini;
use Ceb\PhotoBundle\Entity\Finition;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class AdmController extends Controller
{
	/**
    * @Template()
    */
	public function uploadtravaux_finiAction()
    {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedHttpException('Accès limité aux admins!');
        }
        $document = new Travauxfini();
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

                return $this->forward('CebPhotoBundle:Adm:succestravauxfini', array('photo' => $document));
            }
        }

        return $this->render('CebPhotoBundle:adm:upload_travaux_fini.html.twig', array('form' => $form->createView()));
    }

	public function succestravauxfiniAction(Travauxfini $photo)
    {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedHttpException('Accès limité aux admins!');
        }
        if ($photo === null) {
            return $this->render('CebPhotoBundle:Default:error.html.twig');
        }
        return $this->render('CebPhotoBundle:adm:succes_travaux_fini.html.twig', array('photo' => $photo));
    }

    /**
    * @Template()
    */
	public function uploadcuisineAction()
    {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedHttpException('Accès limité aux admins!');
        }
        $document = new Cuisine();
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

                return $this->forward('CebPhotoBundle:Adm:succesCuisine', array('photo' => $document));
            }
        }

        return $this->render('CebPhotoBundle:adm:upload_cuisine.html.twig', array('form' => $form->createView()));
    }

	public function succesCuisineAction(Cuisine $photo)
    {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedHttpException('Accès limité aux admins!');
        }
        if ($photo === null) {
            return $this->render('CebPhotoBundle:Default:error.html.twig');
        }
        return $this->render('CebPhotoBundle:adm:succes_cuisine.html.twig', array('photo' => $photo));
    }

    /**
    * @Template()
    */
    public function uploadbainAction()
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

                return $this->forward('CebPhotoBundle:Adm:succesbain', array('photo' => $document));
            }
        }

        return $this->render('CebPhotoBundle:adm:upload_bain.html.twig', array('form' => $form->createView()));
    }

	public function succesbainAction(Bain $photo)
    {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedHttpException('Accès limité aux admins!');
        }
        if ($photo === null) {
            return $this->render('CebPhotoBundle:Default:error.html.twig');
        }
        return $this->render('CebPhotoBundle:adm:succes_bain.html.twig', array('photo' => $photo));
    }

    /**
    * @Template()
    */
    public function uploadfinitionAction()
    {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedHttpException('Accès limité aux admins!');
        }
        $document = new Finition();
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

                return $this->forward('CebPhotoBundle:Adm:succesfinition', array('photo' => $document));
            }
        }

        return $this->render('CebPhotoBundle:adm:upload_finition.html.twig', array('form' => $form->createView()));
    }

	public function succesfinitionAction(Finition $photo)
    {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedHttpException('Accès limité aux admins!');
        }
        if ($photo === null) {
            return $this->render('CebPhotoBundle:Default:error.html.twig');
        }
        return $this->render('CebPhotoBundle:adm:succes_finition.html.twig', array('photo' => $photo));
    }

    public function erreurAction()
    {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedHttpException('Accès limité aux admins!');
        }
        return $this->render('CebPhotoBundle:Default:error.html.twig');
    }
}