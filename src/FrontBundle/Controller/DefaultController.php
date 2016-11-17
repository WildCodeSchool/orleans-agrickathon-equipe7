<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class DefaultController extends Controller
{
    /**
     * @Route("/index", name="index")
     */
    public function indexAction()
    {
        
        return $this->render('FrontBundle:Default:index.html.twig');
    }

	/**
	 * @Route("/fondamentaux", name="fondamentaux")
	 */
	public function fondamentauxAction()
	{
		return $this->render('FrontBundle:Default:fondamentaux.html.twig');
	}
    /**
     * @Route("/contact")
     */
    public function contactAction()
    {
        return $this->render('FrontBundle:Default:contact.html.twig');
    }

    /**
     * @Route("/abonnement")
     */
    public function abonnementAction()
    {
        return $this->render('FrontBundle:Default:abonnement.html.twig');
    }
    /**
     * @Route("/soumettre")
     */
    public function soumettreAction()
    {
        return $this->render('FrontBundle:Default:soumettre.html.twig');
    }

	/**
	 * @Route("/rebours", name="rebours")
	 */
	public function reboursAction()
	{
		return $this->render('Front:Default:rebours.html.twig');
	}



}


