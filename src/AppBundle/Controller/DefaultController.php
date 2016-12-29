<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TigoUne\General\Bundles\AuthorizationBundle\Model\Authorization;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
		$authorization = new Authorization();
		$authorization->setSuscriberid("1");
		$authorizationRepository = $this->get("tigoune_general.authorization.autorization_repository");
		$value = $authorizationRepository->validateUrnBySuscriber($authorization);
		var_dump($value);
		die();
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}
