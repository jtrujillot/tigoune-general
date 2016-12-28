<?php

namespace TigoUne\General\Bundles\DataProtectionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TigoUneGeneralBundlesDataProtectionBundle:Default:index.html.twig');
    }
}
