<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('logged_in') && ($this->session->userdata('user_type') == 'admin'))
		{
			$this->load->model('model_Admin');

			$page_data = array
			(
				'page_title' 			=>	'Dashboard',
				'total_num_accounts'	=>	$this->model_Admin->get_total_accounts(),
				'total_num_applicanats'	=>	$this->model_Admin->get_total_applicants(),
				'total_num_companies'	=>	$this->model_Admin->get_total_companies(),
				'total_num_jobs'		=>	$this->model_Admin->get_total_jobs(),
				'newest_users'			=> 	$this->model_Admin->get_newest_users(),
			);

			$nav_data = array
			(
				'active_dashboard'	=>	'active-menu',
				'active_applicant'	=>	'',
				'active_company'	=>	'',
				'active_job'		=>	'',
			);

			$this->load->view('admin/template/header', $page_data);
			$this->load->view('admin/template/nav', $nav_data);
			$this->load->view('admin/index');
			$this->load->view('admin/template/footer');
		}


		else
		{
			redirect(base_url('login'));
		}
	}


	public function applicant()
	{
		if ($this->session->userdata('logged_in') && ($this->session->userdata('user_type') == 'admin'))
		{
			$page_data = array
			(
				'page_title' => 'Applicants',
			);

			$nav_data = array
			(
				'active_dashboard' =>'',
				'active_applicant' =>'active-menu',				
				'active_company' =>'',
				'active_job' =>'',

			);

			$this->load->view('admin/template/header', $page_data);
			$this->load->view('admin/template/nav', $nav_data);
			$this->load->view('admin/applicants');
			$this->load->view('admin/template/footer');
		}


		else
		{
			redirect(base_url('login'));
		}
	}




	public function company()
	{
		if ($this->session->userdata('logged_in') && ($this->session->userdata('user_type') == 'admin'))
		{
			$page_data = array
			(
				'page_title' => 'Companies',
			);

			$nav_data = array
			(
				'active_dashboard' =>'',
				'active_applicant' =>'',				
				'active_company' =>'active-menu',
				'active_job' =>'',
			);

			$this->load->view('admin/template/header', $page_data);
			$this->load->view('admin/template/nav', $nav_data);
			$this->load->view('admin/companies');
			$this->load->view('admin/template/footer');
		}


		else
		{
			redirect(base_url('login'));
		}
	}


	public function job()
	{
		if ($this->session->userdata('logged_in') && ($this->session->userdata('user_type') == 'admin'))
		{
			$page_data = array
			(
				'page_title' => 'Jobs',
			);

			$nav_data = array
			(
				'active_dashboard' =>'',
				'active_applicant' =>'',				
				'active_company' =>'',
				'active_job' =>'active-menu',
			);

			$this->load->view('admin/template/header', $page_data);
			$this->load->view('admin/template/nav', $nav_data);
			$this->load->view('admin/jobs');
			$this->load->view('admin/template/footer');
		}


		else
		{
			redirect(base_url('login'));
		}
	}













	public function reports()
	{
		if ($this->session->userdata('logged_in') && ($this->session->userdata('user_type') == 'admin'))
		{
			$page_data = array
			(
				'page_title' => 'Reports',
			);

			$this->load->view('admin/template/header', $page_data);
			$this->load->view('admin/index');
			$this->load->view('admin/template/footer');
		}


		else
		{
			redirect(base_url('login'));
		}
	}

	
}
