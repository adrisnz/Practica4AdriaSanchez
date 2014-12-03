<?php

class contingut{
	protected $contingut;

	function __construct(){
		$this->contingut = "<div style='margin-left:2%; font-size:20pt;'><p>It is Mars One's goal to establish a human settlement on Mars. Human settlement of Mars is the next giant leap for humankind. Exploring the solar system as a united humanity will bring us all closer together. Mars is the stepping stone of the human race on its voyage into the universe. Human settlement on Mars will aid our understanding of the origins of the solar system, the origins of life and our place in the universe. As with the Apollo Moon landings, a human mission to Mars will inspire generations to believe that all things are possible, anything can be achieved.</p></div>";
	}
	
	public function mostrar(){
		echo $this->contingut;
	}

}