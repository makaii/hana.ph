<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sessions extends CI_Controller {

	Public function _construct() { 
		parent::__construct();
	}

	public function index()
	{	
		echo "<pre>";
		print_r($this->session->all_userdata());
		echo "</pre>";
	}

}


?>