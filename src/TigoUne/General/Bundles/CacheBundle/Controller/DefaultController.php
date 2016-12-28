<?php

namespace TigoUne\General\Bundles\CacheBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TigoUneGeneralBundlesCacheBundle:Default:index.html.twig');
    }
}
