<?php
namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContext;

class SecurityController extends Controller {
	public function loginAction() {
		
		$authUtils = $this->get('security.authentication_utils');

		$error = $authUtils->getLastAuthenticationError();
		$lastUsername = $authUtils->getLastUsername();

		return $this->render('BlogBundle:Security:login.html.twig', array(
			'last_username' => $lastUsername,
			'error' => $error
		));
	}
}