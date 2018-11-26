<?php

/**
*  Main Database
*/
class database extends PDO{
	
	function __construct($dsn, $user, $pass){
		
		 parent::__construct($dsn, $user, $pass);
	}

	public function select($sql, $data= array(), $fetchStyle = PDO::FETCH_ASSOC){
		
		$query = $this->prepare($sql);
		foreach ($data as $key => $value) {
			$query->bindParam($key, $value);
		}
		$query->execute();
		return $query->fetchAll($fetchStyle);
	}
	public function insert($table, $data){
		$keys   = implode(',', array_keys($data));
		$values =':'. implode(', :', array_keys($data));
		$sql    = "INSERT into $table($keys) Values($values)";

		$stat   = $this->prepare($sql);
		foreach ($data as $key => $value) {
		 	$stat->bindValue(":$key", $value);
		 } 
		  return $stat->execute();

		

	}
	public function dinsert($sql){
		$stat   = $this->prepare($sql);

		
		 return $stat->execute();
		}
	public function update($table, $data, $cond){
		$keys= NULL;
		foreach ($data as $key => $value) {
			$keys.="$key=:$key,";
		}
		$keys = rtrim($keys , ',');
		$sql="UPDATE $table SET $keys Where $cond";
		$stat = $this->prepare($sql);
		foreach ($data as $key => $value) {
			$stat->bindParam(":$key",$value);
		}
		return $stat->execute();
	}
	public function delete($table, $cond, $limit = 1){
		$sql= "DELETE FROM $table Where $cond LIMIT $limit";
		return $this->exec($sql);
	}
	public function affectedrows($sql){
		$state = $this->prepare($sql);
		$state->execute();
		return $state->rowCount();



	}
	public function selectuserdata($sql){

		$stat=$this->prepare($sql);
		$stat->execute();

		return $stat->fetchAll(PDO::FETCH_ASSOC);


	}
	public function postupdate($sql){

		$stat=$this->prepare($sql);
		return $stat->execute();




	}

}

?>