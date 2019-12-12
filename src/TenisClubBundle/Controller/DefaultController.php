<?php

namespace TenisClubBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use TenisClubBundle\Entity\Socio;
use TenisClubBundle\Form\SocioType;

class DefaultController extends Controller
{
    /**
     * @Route("/addUser")
     */
    public function indexAction()
    {
    	$form = $this->createForm(SocioType::class, new Socio());
		return $this->render('@TenisClub/addUser.html.twig', array('form' => $form->createView()));
    }
}
