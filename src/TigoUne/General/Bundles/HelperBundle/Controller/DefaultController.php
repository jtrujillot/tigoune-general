<?php

namespace TigoUne\General\Bundles\HelperBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TigoUneGeneralBundlesHelperBundle:Default:index.html.twig');
    }
}
