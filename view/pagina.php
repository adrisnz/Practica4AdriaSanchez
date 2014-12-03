<?php

require_once 'application/cap.php';
require_once 'application/menu.php';
require_once 'application/contingut.php';
require_once 'application/peu.php';

class pagina{
	protected $cap;
	protected $menu;
	protected $contingut;
	protected $peu;
	function __construct(){
		$this->cap = new cap();
		$this->menu = new menu();
		$this->contingut = new contingut();
		$this->peu = new peu();
		$this->pagina();
	}

	function pagina(){
		$this->cap->mostrar();
		$this->menu->mostrar();
		$this->contingut->mostrar();
		$this->peu->mostrar();
	}

}