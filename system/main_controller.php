<?php
/**
*  main Dcontrolls
*/
class main_controller 
{
	protected $load = array();
	
	function __construct()
	{
		$this->load = new load();
	}
}

?>