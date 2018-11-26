<?php
include_once "main_model.php";
/**
*  User_model class
*/
class usermodel extends main_model{
	

	 
	function __construct(){
		parent::__construct();
	}
	public function category($table, $id){
		$sql="SELECT * from $table where id = :id";
		$data = array(':id' => $id );
		return $this->db->select($sql, $data);
	}

}