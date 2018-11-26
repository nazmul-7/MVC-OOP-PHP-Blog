<?php


/**
*  loadder class
*/
class load {
	
	public function view($name,$data = false){
		if( $data == true){
			extract($data);
		}
		include_once "apps/views/".$name.".php";
	}

	public function model($name){
		include_once 'apps/models/'.$name.'.php';
		return new $name();
	}

}

?>