<?php
namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SecurityController extends Controller {
	public function loginAction() {
		return new Response("<html><body>login !</body></html>");
	}
}