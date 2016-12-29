<?php

namespace TigoUne\General\Bundles\AuthorizationBundle\Model;

class Authorization
{
	 private $urns;
	 
	 private $suscriberId;
	 
	 private $countryCode;
	 
	 public function getUrns()
	 {
		 return $this->urns;
	 }
	 
	 public function setUrns($urns)
	 {
		 $this->urns = $urns;
	 }
	 
	 public function getSuscriberId()
	 {
		 return $this->suscriberId;
	 }
	 
	 public function setSuscriberid($suscriberId)
	 {
		 $this->suscriberId =  $suscriberId;
	 }
	 
	 public function getCountryCode()
	 {
		 return $this->countryCode;
	 }
	 
	 public function setCountryCode($countryCode)
	 {
		 $this->countryCode = $countryCode;
	 }
}


