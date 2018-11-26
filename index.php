<?php



include_once "apps/config/config.php";
include_once "system/database.php";
include_once "system/main_controller.php";
include_once "system/load.php";
include_once "system/session.php";


$url=isset($_GET["url"])? $_GET["url"]: NULL;
if($url != NULL){
	$url = rtrim($url, '/');
	$url = explode('/', $url);
}
else{ unset($url);}

if(isset($url[0])){
	include_once "apps/controllers/".$url[0].".php";
	$main = new $url[0]();
	if(isset($url[1])){
		if (isset($url[2])) {
			echo $main->{$url[1]}($url[2]);
		}
		elseif (isset($url[1] )) {
		echo $main->{$url[1]}();
		}
	}
	
}
else {
		include_once "apps/controllers/index.php";
		$auto = new index();
		$auto->home();

}