<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error extends CI_Controller {

	public function index()
	{
		$this->load->view('error-404');
		$this->load->view('templates/footer');
	}

	
}
