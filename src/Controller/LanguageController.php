<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use App\Manager\LanguageManager;

/**
 * Language controller.
 * @Route("/api", name="api_")
 */
class LanguageController extends FOSRestController
{
	/**
	 * Lists languages.
	 * @Rest\Get("/languages")
	 *
	 * @return Response
	 */
	public function getLanguagesAction()
	{
		// Get date - 30 days
		$date = date('yy-m-d', strtotime('-30 days'));
		
		// The data are returned from the manager
		$languageManager = new LanguageManager();
		$languages = $languageManager->getLanguages($date);
		
		// Return the JSON response
		return $this->handleView($this->view($languages));
	}
}
