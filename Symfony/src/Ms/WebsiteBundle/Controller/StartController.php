<?php

namespace Ms\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class StartController extends Controller {
	
	/**
	 * @Route("/",name="_start_index")
	 * @Template
	 */
	public function indexAction() {
		return array(); #array("title" => "Herzlich Willkommen auf Marc-Schumann.com");
	}
}