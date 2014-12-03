<?php

class peu{
	protected $textofooter;
	protected $tancament;

	function __construct(){
		$this->textofooter = "<footer><center><p>Feta per Adria Sanchez";
		$this->fifooter ="</p></center></footer></body>";

	}

	public function mostrar(){
		echo $this->textofooter;
		echo $this->fifooter;
	}
	

}