<?php

class menu{

	protected $contingut;

	function __construct(){

		$this->contingut = Array("Inicio","BOTON2","BOTON3","BOTON4");

	}

	public function mostrar(){
		$max = sizeof($this->contingut);
		echo "<div class='navegacio'><nav><ul>";
		for($i=0;$i<$max;$i++){
			echo "<li><a href='#'>".$this->contingut[$i]."</a></li>";
		}
		echo "</ul></nav>";
	}

}