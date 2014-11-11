<?php

include_once ('SilnikInterface.php');

class Silnik implements SilnikInterface 
{
	public $mocSilnika;
	public function Silnik($mocSilnika) 
	{
		$this->mocSilnika=$mocSilnika;
	}
}
 
public function getMoc()
{
	return $this->mocSilnika;
}
 
public function setMoc($mocSilnika) 
{
	$this->mocSilnika=$mocSilnika;
}
	
?>