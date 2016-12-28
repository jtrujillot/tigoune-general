<?php

namespace TigoUne\General\Bundles\AuthorizationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TigoUneGeneralBundlesAuthorizationBundle:Default:index.html.twig');
    }
}
