<?php

include_once "index.php";
/**
* User_class
*/
class user extends main_controller{
	
	function __construct(){
		parent::__construct();
	}
	public function userReg(){
		$name = isset($_POST["name"])? $_POST["name"]: NULL;
		$username = isset($_POST["username"])? $_POST["username"]: NULL;
		$email = isset($_POST["email"])? $_POST["email"]: NULL;
		$password = isset($_POST["password"])? $_POST["password"]: NULL;
		$cpassword = isset($_POST["cpassword"])? $_POST["cpassword"]: NULL;
        $min=3;
		$max=50;
		$error=[];
		$user_table="user_table";
        $umodel = $this->load->model('usermodel');
        
        if(strlen($name)<$min){
			$error[]="The Minimun character For Name should be {$min}!!";
		}
		if(strlen($name)>$max){
			$error[]="The Maximum character For Name  should be {$max}!!";
		}
		if(strlen($email)<$min){
			$error[]="The Minimun character For Email should be {$min}!!";
		}
		if(strlen($email)>$max){
			$error[]="The Maximum character For Email  should be {$max}!!";
		}
		$cond ="email='$email' ";
		if($umodel->getuserdata($user_table, $cond)){
			$error[]="This Email is already in our Database!!";
		}
		if(strlen($username)<$min){
			$error[]="The Minimun character For Username should be {$min}!!";
        }
		if(strlen($username)>$max){
			$error[]="The Maximum character For Username  should be {$max}!!";
		}
        $cond ="username='$username' ";
		if($umodel->getuserdata($user_table, $cond)){
			$error[]="Username is alreay taken!!";
		}
		if(strlen($password)<$min){
			$error[]="The Minimun character For Password should be {$min}!!";
		}
		if(strlen($password)>$max){
			$error[]="The Maximum character For Password  should be {$max}!!";
		}
		if($password!==$cpassword){
			$error[]="Password doesn't match!!";
		}

		if(empty($error)){
            $data  = array('name' => $name,
					'username' => $username, 
					'email' => $email,
					'password' => $password
					

					);
		$result = $umodel->insert($user_table, $data);
		if($result==1){
			$mdata['msg'] = "Your regtration Successful...<br/>Please Login";
		}
		else $mdata['msg'] = "There was a error";
		session::start();
		session::set("msg", $mdata['msg']);
            
        header("Location: ".BASE_URL."/index/signin");
			
		}
        else{
            session::start();
		    session::set("error", $error);
            header("Location: ".BASE_URL."/index/signup");
        }
	
		
	}

	

	public function userlonin(){
		$username = isset($_POST["username"])? $_POST["username"]: NULL;
		$password = isset($_POST["password"])? $_POST["password"]: NULL;
		//$password = md5($password);
		$user_table="user_table";
		$cond = "username='$username' and password='$password'";
		$umodel = $this->load->model('usermodel');
        $cond = "username='$username' and password='$password'";
		$count      = $umodel->usercontroll($user_table, $cond);
		$data = $umodel->getuserdata($user_table, $cond);
		$remember = isset($_POST["remember"])? $_POST["remember"]: NULL;
		if($remember == "on"){
			setcookie("login",true,time()+84600);
			setcookie("username",$username,time()+84600);
			setcookie("userid",$data[0]["userid"],time()+84600);
			
			setcookie("status",$data[0]["status"],time()+84600);
		}
		if ($count > 0) {

			session::start();
			session::set("login", true);
			session::set("username", $data[0]["username"]);
			session::set("userid", $data[0]["userid"]);
			session::set("status", $data[0]["status"]);
			header("Location: ".BASE_URL);

		} else {
			session::start();
			$rmsg="Username or Password doesn't Match";
			 session::set("rmsg", $rmsg);
			header("Location: ".BASE_URL."/index/signin");
		}

	}

	public function logout(){
		session::start();
		session::destroy();
		if(isset($_COOKIE['login'])){
			unset($_COOKIE['login']);
			unset($_COOKIE['username']);
			unset($_COOKIE['userid']);
			unset($_COOKIE['status']);
			setcookie("login",true,time()-84600);
			setcookie("username",$username,time()-84600);
			setcookie("userid",$data[0]["userid"],time()-84600);
			setcookie("status",$data[0]["status"],time()-84600);
		}
		header("Location: ".BASE_URL."/index/signin");
	}



	public function proupload(){
		$mdata=  array();
		session::start();
		if(isset($_POST['submit'])){
		$file = $_FILES['file'];
		$userid = $_POST['userid'];
		$filename = $_FILES['file']['name'];
		$filetmpname = $_FILES['file']['tmp_name'];
		$filesize = $_FILES['file']['size'];
		$fileerror = $_FILES['file']['error'];
		$filetype = $_FILES['file']['type'];
		$fileext = explode(".", $filename);
		$fileactualext = strtolower(end($fileext)); 
		$allow_file = array("jpg","jpeg","png");
		print_r($file);
		if(in_array($fileactualext, $allow_file)){
		if($fileerror === 0){
		 	if($filesize < 1000000){
		 		$filenamenew = "profile"."$userid".".".$fileactualext;
		 		$filedestination = "images/".$filenamenew;
		 		move_uploaded_file($filetmpname, $filedestination);

		 		$user_table="user_table";
				$umodel = $this->load->model('usermodel');
				$data  = array('status' => '1');
				$cond= "userid=$userid";
				$result = $umodel->update($user_table, $data, $cond);
					
				if($result==1){
					$mdata['msg'] = "Profile Picture Upload Successfully...";
					session::set("status", '1');
				}
			else $mdata['msg'] = "Profile Picture Not Upload";
		 	}
		 	else {
		 			$mdata['msg'] ="File size is too big!!!";
		 }
		 }
		 else {
		 $mdata['msg'] ="There was a error !!!";
		 }
		 }
	else {
	$mdata['msg'] ="You can't upload this file!!!";
	}
	session::set("msg", $mdata['msg']);
	header("Location: ".BASE_URL."/index/writerwall/".$userid);
		

	}
	
	else {header("Location: ".BASE_URL);}
	
	}

	public function addpost(){
		session::start();
		$temp=false;
		$post_table = 'post_table';
		$umodel = $this->load->model('usermodel');
		$data  = array();
		$userid = isset($_POST["userid"])? $_POST["userid"]: NULL;
		$status = '1';
		$title = isset($_POST["title"])? $_POST["title"]: NULL;
		$content = isset($_POST["content"])? $_POST["content"]: NULL;
		$category = isset($_POST["category"])? $_POST["category"]: NULL;
		$data  = array('userid' => $userid,
					'title' => $title, 
					'content' => $content,
					'category' => $category
					);
		$umodel = $this->load->model('usermodel');
		$result = $umodel->dinsert($post_table, $data);
		if($result==1){
			$mdata['msg'] = "Your Article Posted Successfully...";
				$temp=true;
		}
		else $mdata['msg'] = "There was a error";

		if(isset($_POST['submit'])){
		$file = $_FILES['file'];
		$userid = $_POST['userid'];
		$filename = $_FILES['file']['name'];
		$filetmpname = $_FILES['file']['tmp_name'];
		$filesize = $_FILES['file']['size'];
		$fileerror = $_FILES['file']['error'];
		$filetype = $_FILES['file']['type'];
		$fileext = explode(".", $filename);
		$fileactualext = strtolower(end($fileext)); 
		$allow_file = array("jpg","jpeg","png");
		if(in_array($fileactualext, $allow_file)){
		if($fileerror === 0){
		 	if($filesize < 1000000){
		 		
		 		if($temp == true){
				$post_table = "post_table";
				$cond = "userid=$userid order by postid DESC limit 1";
				$pdata  = $umodel->getuserdata($post_table, $cond);	
					$filenamenew = "post".$pdata[0]['postid'].".".$fileactualext;
		 			$filedestination = "images/".$filenamenew;
		 			move_uploaded_file($filetmpname, $filedestination);

		 		}
		 		

		 		}
		 	else {
		 			$mdata['msg'] ="File size is too big!!!";
		 }
		 }
		 else {
		 $mdata['msg'] ="There was a error !!!";
		 }
		 }
	else {
	$mdata['msg'] ="You can't upload this file!!!";
	}
	
	}
	session::set("msg", $mdata['msg']);
	header("Location: ".BASE_URL."/index/writerwall/".$userid);
	
	
	}

	public function editpost($postid){
		session::start();
		$temp=false;
		$ptemp= true;
		$post_table = 'post_table';
		$umodel = $this->load->model('usermodel');
		$data  = array();
		$userid = isset($_POST["userid"])? $_POST["userid"]: NULL;
		$status = '1';
		$title = isset($_POST["title"])? $_POST["title"]: NULL;
		$content = isset($_POST["content"])? $_POST["content"]: NULL;
		$category = isset($_POST["category"])? $_POST["category"]: NULL;
		$data  = array('userid' => $userid,
					'title' => $title, 
					'content' => $content,
					'category' => $category
					);
		$cond ="postid=$postid and userid=$userid";
		$umodel = $this->load->model('usermodel');
		$result = $umodel->updatepost($post_table, $data, $cond);
		if($result==1){
			$mdata['msg'] = "Your Article Update Successfully...";
				$temp=true;
		}
		else $mdata['msg'] = "There was a error ";

		if($_FILES['file']['name'] != NULL){
		$file = $_FILES['file'];
		$userid = $_POST['userid'];
		$filename = $_FILES['file']['name'];
		$filetmpname = $_FILES['file']['tmp_name'];
		$filesize = $_FILES['file']['size'];
		$fileerror = $_FILES['file']['error'];
		$filetype = $_FILES['file']['type'];
		$fileext = explode(".", $filename);
		$fileactualext = strtolower(end($fileext)); 
		$allow_file = array("jpg","jpeg","png");
		if(in_array($fileactualext, $allow_file)){
		if($fileerror === 0){
		 	if($filesize < 1000000){
		 		
		 		

		 			$dfilename = "images/post".$postid."*";
					$dfileinfo =glob($dfilename);
					$dfileext = explode(".",$dfileinfo[0]);
					$dfileactualext = $dfileext[1];
					$dfile= "images/post".$postid.".".$dfileactualext;
		
					if(!unlink($dfile)){
						$mdata['msg'] ="There are some error in delete the images!!!";
						$ptemp=false;
					} else {
						$post_table = "post_table";
					$cond = "postid=$postid";
					$pdata  = $umodel->getuserdata($post_table, $cond);	
					$filenamenew = "post".$pdata[0]['postid'].".".$fileactualext;
		 			$filedestination = "images/".$filenamenew;
		 			move_uploaded_file($filetmpname, $filedestination);
		 			$mdata['msg'] = "Your Article Update Successfully...";
		 			session::set("msg", $mdata['msg']);
					header("Location: ".BASE_URL."/index/postdetails/".$postid);
						
					}
		 		}
		 	else {
		 			$mdata['msg'] ="File size is too big!!!";
		 			$ptemp=false;
		 }
		 }
		 else {
		 $mdata['msg'] ="There was a error  eikhane!!!";
		 $ptemp=false;
		 }
		 }
	else {
	$mdata['msg'] ="You can't upload this file!!!";
	$ptemp=false;
	}
	
	}
	session::set("msg", $mdata['msg']);
	if($temp == $ptemp){
 	header("Location: ".BASE_URL."/index/postdetails/".$postid);}
	else header("Location: ".BASE_URL."/post/editpost/".$postid);

	}


	public function deletepic($postid){
		$mdata=  array();
		session::start();
		if(isset($_POST['submit'])){
		
		$userid = $_POST['userid'];
		
		$dfilename = "images/profile".$userid."*";
		$dfileinfo =glob($dfilename);
		$dfileext = explode(".",$dfileinfo[0]);
		$dfileactualext = $dfileext[1];
		$dfile= "images/profile".$userid.".".$dfileactualext;
	
		if(!unlink($dfile)){
		$mdata['msg'] ="There are some error in delete the images!!!";
			
		} else {
			$user_table= "user_table";

		$cond =" userid=$userid";
		$umodel = $this->load->model('usermodel');
		$result = $umodel->updatestatus($user_table, $cond);
		if($result==1){
			$mdata['msg'] = "Your Profile Picture Deleted...";
			session::set("status", '0');
				
		}
		else $mdata['msg'] = "There are some error in delete the images ";




		}

		session::set("msg", $mdata['msg']);
		header("Location: ".BASE_URL."/index/writerwall/".$userid);
	}



	}
	


}

?>