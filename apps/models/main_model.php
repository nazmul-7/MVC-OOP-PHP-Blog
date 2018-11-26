<?php

/**
*  main model
*/
class main_model{

	protected $db = array();
	
	public function __construct(){
		$dsn = 'mysql:dbname=db_project; host=localhost';
		$user = 'root';
		$pass = '';
		$this->db= new database($dsn, $user, $pass);
	}
}

?>