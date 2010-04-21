<?php

class Helper extends Controller {

	function Helper()
	{
		parent::Controller();
		$this->lang->load('help'); 
	}


	function index()
	{
		echo $this->lang->line('help_reg_about'); 
	}
}
?>