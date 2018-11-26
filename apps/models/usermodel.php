<?php
include_once "main_model.php";
/**
*  User_model class
*/
class usermodel extends main_model{
	

	 
	function __construct(){
		parent::__construct();
	}

	public function list($table){

		$sql="SELECT DISTINCT `category` FROM $table ";
		return $this->db->select($sql);
		
	}
	

	public function insert($table, $data){
		return $this->db->insert($table, $data);
	}
	public function dinsert($table, $data){
		$sql="INSERT INTO `post_table`( `userid`, `title`, `content`, `category`) VALUES ('".$data["userid"]."','".$data["title"]."','".$data["content"]."','".$data["category"]."')";
		return $this->db->dinsert($sql);
	}

	public function delbyid($table, $cond){
		return $this->db->delete($table, $cond);
	}
	public function usercontroll ($user_table, $cond){

		$sql="SELECT *  FROM $user_table where $cond";
		return $this->db->affectedrows($sql);
		
		
	}
	public function getuserdata($user_table, $cond){

		$sql="SELECT *  FROM $user_table where $cond ";
		return $this->db->selectuserdata($sql);
	}
	public function update($table, $data, $cond){
		return $this->db->update($table, $data, $cond);
	}

	public function getallpost($user_table, $post_table, $cond, $limit="7"){

		$sql = "SELECT $post_table.*,$user_table.name
					from $post_table INNER JOIN $user_table 
					on $post_table.userid=$user_table.userid where $cond order by $post_table.postid DESC limit $limit";
			
			return $this->db->select($sql);
		
	}
	public function countdata($post_table, $collum, $cond){
		$sql= "SELECT COUNT($collum) FROM $post_table WHERE $cond";

		return $this->db->selectuserdata($sql);
	}
	public function updatepost($post_table, $data, $cond){
		$sql="UPDATE ".$post_table." SET title='".$data["title"]."', content= '".$data["content"]."', category= '".$data["category"]."' WHERE $cond";
		echo $sql;
		return $this->db->postupdate($sql);
	}
	public function updatestatus($user_table, $cond){
		$sql="UPDATE ".$user_table." SET status= 0 WHERE $cond";

		return $this->db->postupdate($sql);
	}

	public function conbys($tablepost, $keyword){
			$sql="SELECT *  from $tablepost where title like '%$keyword%' OR content like '%$keyword%'";
		
		return $this->db->select($sql);
		
	}
	public function inview($view, $udata){
			$sql='INSERT INTO '.$view.' (`postid`, `userid`, `viewerid`) VALUES ('.$udata["postid"].','.$udata["userid"].','.$udata["viewerid"].')';
		
		return $this->db->postupdate($sql);
		
	}
	public function bestwriter(){
		$sql="SELECT user_table.userid,user_table.name,COUNT(view.userid) from user_table INNER JOIN view on user_table.userid=view.userid GROUP by name order by COUNT(view.userid) DESC  limit 4 ";

		return $this->db->selectuserdata($sql);
	}

	public function bestpost(){
		$sql="SELECT post_table.postid,post_table.title,COUNT(view.postid) from post_table INNER JOIN view on post_table.postid=view.postid GROUP by post_table.postid order by COUNT(view.postid) DESC limit 4 ";

		return $this->db->selectuserdata($sql);
	}
	
}
?>