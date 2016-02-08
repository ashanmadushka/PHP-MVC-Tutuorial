<?php

class View {
	
	function __construct(){
		
	}
	
	public function render($name, $data = null){
		require 'views/'.$name.'.php';
	}
	
}

?>