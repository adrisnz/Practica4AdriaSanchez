<?php

class cap{
	protected $apertura;
	protected $contingut;
	protected $tancament;

	function __construct(){
		$this->apertura = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Practica 4 M7</title><link rel='stylesheet' href='styles/styles.css'></head><body><header><center>";
		$this->contingut = "<div id='textologo'>Adria Sanchez</div><img src='/Practica4/application/logo.png' alt>";
		$this->tancament = "</center></header>";
	}

	public function mostrar(){
		echo $this->apertura;
		echo $this->contingut;
		echo $this->tancament;
	}


}