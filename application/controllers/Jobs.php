<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {

	public function _construct()
	{ 
		parent::__construct();
		$this->load->model('model_Jobs');
	}

	public function index()
	{	
		
	}

	public function my_jobs()
	{
		$page_data = array(
			'page_title' => 'My Jobs',
			'email_address' => $this->session->userdata('email_address'),

		);


		$this->load->view('user/user-header', $page_data);
		$this->load->view('user/user-jobs');
		$this->load->view('user/user-footer');
	}


}


?>