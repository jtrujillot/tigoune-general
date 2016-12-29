<?php

namespace TigoUne\General\Bundles\AuthorizationBundle\Repository;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use TigoUne\General\Bundles\AuthorizationBundle\Model\Authorization;

class AuthorizationRepository
{
	private $container;

    public function __construct(Container $container) {
        $this->container = $container;
    }
	
	public function validateUrnBySuscriber(Authorization $authorization)
	{
		return true;		
	}
   
}

