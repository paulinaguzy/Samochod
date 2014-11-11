<?php

include_once ('SamochodWyscigowyInterface.php');
include_once ('samochod.php');
include_once ('Silnik.php');

class SamochodWyscigowy extends samochod implements SamochodWyscigowyInterface 
{
	public $predkoscMaksymalna=$mocSilnika*$przyspieszenie;

	public function SamochodWyscigowy($predkoscMaksymalna, $przyspieszenie) 
	{
		$this->predkoscMaksymalna=$predkoscMaksymalna;
		$this->przyspieszenie=$przyspieszenie;
	}

	public function getPredkoscMaksymalna() 
	{
		return $this->predkoscMaksymalna;
	}
	
	public function setMarka($predkoscMaksymalna) 
	{
		$this->predkoscMaksymalna=$predkoscMaksymalna;
	}
	
	public function getPrzyspieszenie() 
	{
		return $this->przyspieszenie;
	}
	
	public function setPrzyspieszenie($przyspieszenie) 
	{
			$this->przyspieszenie=$przyspieszenie;
	}
}

?>