<?php


/**
* 
*/
class post extends main_controller 
{
	

	
	function __construct(){
		parent::__construct();
	}

	public function Category($string){
			$user_table = 'user_table';
			$post_table = 'post_table';
			$umodel = $this->load->model('usermodel');
			$data  = array();
			$this->load->view("header");
			$data['allcategory']=$umodel->list($post_table);
			$this->load->view("navbar",$data);
			$category = $string;
			$cond = "category='$category'  ";
			$data['categorypost']  = $umodel->getallpost($user_table, $post_table, $cond);
			$this->load->view("category",$data);
			$cond = "1 limit 4";
			$data['writersinfo']  = $umodel->bestwriter();
			$data['bestpost']  = $umodel->bestpost();
			$this->load->view("footer",$data);

	}

	public function postbyid($id){
			$user_table = 'user_table';
			$post_table = 'post_table';
			$umodel = $this->load->model('usermodel');
			$data  = array();
			$this->load->view("header");
			$data['allcategory']=$umodel->list($post_table);
			$this->load->view("navbar",$data);
			$cond = "post_table.userid='$id'  ";
			$data['pbyid']  = $umodel->getallpost($user_table, $post_table, $cond);
			$this->load->view("postbyid",$data);
			$cond = "1 limit 4";
			$data['writersinfo']  = $umodel->bestwriter();
			$data['bestpost']  = $umodel->bestpost();
			$this->load->view("footer",$data);

	}

	public function editpost($id){
		$user_table = 'user_table';
		$post_table = 'post_table';
		$umodel = $this->load->model('usermodel');
		$data  = array();
		$this->load->view("header");
		$data['allcategory']=$umodel->list($post_table);
		$this->load->view("navbar",$data);
		$cond = "postid=$id";
		$data['post']  = $umodel->getallpost($user_table, $post_table, $cond);
		$this->load->view("editpost",$data);
		$cond = "1 limit 4";
		$data['writersinfo']  = $umodel->bestwriter();
		$data['bestpost']  = $umodel->bestpost();
		$this->load->view("footer",$data);
	}

	public function conbysearch(){
		$keyword = $_REQUEST['keyword'];



		$user_table = 'user_table';
		$post_table = 'post_table';
		$umodel = $this->load->model('usermodel');
		$data  = array();
		$this->load->view("header");
		$data['allcategory']=$umodel->list($post_table);
		$this->load->view("navbar",$data);
		$data['conbys']  = $umodel->conbys($post_table, $keyword);
		$this->load->view("conbysearch",$data);
		$cond = "1 limit 4";
		$data['writersinfo']  = $umodel->bestwriter();
		$data['bestpost']  = $umodel->bestpost();
		$this->load->view("footer",$data);
	}



}