<?php


/**
* 
*/
class index extends main_controller 
{
	

	
	function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->home();
	}
	public function home(){
		$user_table = 'user_table';
		$post_table = 'post_table';
		$umodel = $this->load->model('usermodel');
		$data  = array();
		$this->load->view("header");
		$data['allcategory']=$umodel->list($post_table);
		$this->load->view("navbar",$data);
		$cond = "1";
		$data['allpost']  = $umodel->getallpost($user_table, $post_table, $cond);
		$this->load->view("home",$data);
		$cond = "1 limit 4";
		$data['writersinfo']  = $umodel->bestwriter();
		$data['bestpost']  = $umodel->bestpost();
		$this->load->view("footer",$data);
	}

	

	public function writerwall($id){
		$user_table = 'user_table';
		$post_table = 'post_table';
		$umodel = $this->load->model('usermodel');
		$data  = array();
		$this->load->view("header");
		$data['allcategory']=$umodel->list($post_table);
		$this->load->view("navbar",$data);
		$cond = "userid='$id'";
		$collum='postid';
		$data['countpost'] = $umodel->countdata($post_table, $collum, $cond);
		$limit = 4;
		$data['allinfo']  = $umodel->getuserdata($user_table, $cond);
		$cond = "post_table.userid='$id'";
		$data['wpost']  = $umodel->getallpost($user_table, $post_table, $cond,$limit);
		$this->load->view("writerwall",$data);
		$cond = "1 limit 4";
		$data['writersinfo']  = $umodel->bestwriter();
		$data['bestpost']  = $umodel->bestpost();
		$this->load->view("footer",$data);
	}

	
	public function signin(){
		$user_table = 'user_table';
		$post_table = 'post_table';
		$umodel = $this->load->model('usermodel');
		$data  = array();
		$this->load->view("header");
		$data['allcategory']=$umodel->list($post_table);
		$this->load->view("navbar",$data);
		$this->load->view("signin");
		$cond = "1 limit 4";
		$data['writersinfo']  = $umodel->bestwriter();
		$data['bestpost']  = $umodel->bestpost();
		$this->load->view("footer",$data);
	}
	public function signup(){
		$user_table = 'user_table';
		$post_table = 'post_table';
		$umodel = $this->load->model('usermodel');
		$data  = array();
		$this->load->view("header");
		$data['allcategory']=$umodel->list($post_table);
		$this->load->view("navbar",$data);
		$this->load->view("signup");
		$cond = "1 limit 4";
		$data['writersinfo']  = $umodel->bestwriter();
		$data['bestpost']  = $umodel->bestpost();
		$this->load->view("footer",$data);
	}


	

	public function addarticle($id){
		$user_table = 'user_table';
		$post_table = 'post_table';
		$umodel = $this->load->model('usermodel');
		$data  = array();
		$this->load->view("header");
		$data['allcategory']=$umodel->list($post_table);
		$this->load->view("navbar",$data);
		$this->load->view("addarticle");
		$cond = "1 limit 4";
		$data['writersinfo']  = $umodel->bestwriter();
		$data['bestpost']  = $umodel->bestpost();
		$this->load->view("footer",$data);
	}

	public function postdetails($id){
		   
			$user_table = 'user_table';
			$post_table = 'post_table';
			$umodel = $this->load->model('usermodel');
			$data  = array();
			$udata = array();
			$this->load->view("header");
			$data['allcategory']=$umodel->list($post_table);
			$this->load->view("navbar",$data);

			$cond = "postid=$id";
			$data['post']  = $umodel->getallpost($user_table, $post_table, $cond);
			$pdata=$data['post'];
			if(session::get("login")== true){
				if(session::get("userid")!=$pdata[0]["userid"]){
					$udata = array('postid' => $id,
									'userid' => $pdata[0]["userid"], 
									'viewerid' => session::get("userid")
							);
					$view="view"; 
					$result = $umodel->inview($view, $udata);
				}
			} else{
				$udata = array('postid' => $id,
									'userid' => $pdata[0]["userid"], 
									'viewerid' => 0
							);
					$view="view"; 
					$result = $umodel->inview($view, $udata);
			}
			$this->load->view("postdetails",$data);
			$cond = "1 limit 4";
			$data['writersinfo']  = $umodel->bestwriter();
			$data['bestpost']  = $umodel->bestpost();
			$this->load->view("footer",$data);
	}
		
		
	


	
}


?>