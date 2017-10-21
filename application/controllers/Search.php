<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_Search');		
	}

	public function index()
	{	
		$search_string = $this->input->get('searchInput');
		$search_result = $this->model_Search->search($search_string);		

		$page_data = array
		(
			'page_title'	=> "result of ".$search_string,
			'jobs'			=> $search_result,
			'email_address' => $this->session->userdata('email_address'),
		);

		$user_type = $this->session->userdata('user_type');
		if ($user_type == 'applicant')
		{
			$this->load->view('user/user-header', $page_data);
			$this->load->view('search/index');
			$this->load->view('user/user-footer');
		}
		elseif ($user_type == 'employer')
		{
			$this->load->view('company/company-header', $page_data);
			$this->load->view('search/index');
			$this->load->view('company/company-footer');
		}
		else{
			$this->load->view('templates/header', $page_data);
			$this->load->view('search/index');
			$this->load->view('templates/footer');
		}

		
	}

	
}
