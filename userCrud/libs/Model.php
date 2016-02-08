<?php

class Model {
	public $conn;
	function __Construct(){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "userManagement";

		// Create connection
		$this->conn = new mysqli($servername, $username, $password, $dbname);
		
		
		// Check connection
		if ($this->conn->connect_error) {
			die("Connection failed: " . $this->conn->connect_error);
		}
	}
}

?>