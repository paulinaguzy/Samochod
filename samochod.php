<?php

include_once('SamochodInterface.php');

class Samochod
{
	public $marka;
	public $model;
	public $kolor;
	public $typ;

	/*public function Samochod() 
	{
		$this->marka="Fiat";
		$this->model="126p";
		$this->kolor="zielony";
		$this->typ="sedan";
	}*/

	public function Samochod($marka, $model, $kolor, $typ) 
	{
		$this->marka=$marka;
        $this->model=$model;
        $this->kolor=$kolor;
        $this->typ=$typ;
	}

	public function helloSamochod() 
	{
		$opis="Witaj! To ja - Twój samochód: ".$this->kolor." ".$this->marka." ".$this->model.".\n";
		return $opis;
	}
	
	public function otoSamochod() 
	{
		$opis="Witaj! To ja - Twój samochód: ".$this->kolor." ".$this->marka." ".$this->model.".\n";
		return $opis;
	}
	
	
	public function getMarka() 
	{
		return $this->marka;
    }

    public function setMarka($marka) 
	{
		$this->marka=$marka;
	}
	
	public function getModel() 
	{
		return $this->model;
	}
	
	public function setModel($model) 
	{
		$this->model=$model;
	}
	
	public function getKolor() 
	{
		return $this->kolor;
    }

	public function setKolor($kolor) 
	{
		$this->kolor=$kolor;
	}
	
	public function getTyp() 
	{
		return $this->typ;
	}
	
	public function setTyp($typ) 
	{
		$this->typ=$typ;
	}
}

?>