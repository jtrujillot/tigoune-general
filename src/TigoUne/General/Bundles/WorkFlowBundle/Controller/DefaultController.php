<?php

namespace TigoUne\General\Bundles\WorkFlowBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TigoUneGeneralBundlesWorkFlowBundle:Default:index.html.twig');
    }
}
