<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_Admin');
		$this->load->model('model_Activity');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') && ($this->session->userdata('user_type') == 'admin'))
		{
			$page_data = array
			(
				'page_title' 			=>	'Dashboard',
				'total_num_accounts'	=>	$this->model_Admin->get_total_accounts(),
				'total_num_applicanats'	=>	$this->model_Admin->get_total_applicants(),
				'total_num_companies'	=>	$this->model_Admin->get_total_companies(),
				'total_num_jobs'		=>	$this->model_Admin->get_total_jobs(),
				'newest_users'			=> 	$this->model_Admin->get_newest_users(),
				'newest_activities'		=>	$this->model_Activity->get_activity(),			
			);

			$nav_data = array
			(
				'active_dashboard'	=>	'active-menu',
				'active_applicant'	=>	'',
				'active_company'	=>	'',
				'active_job'		=>	'',
				'tn_companies'		=>	$this->model_Admin->get_total_unverified_companies(),
				'tn_jobs'			=>	$this->model_Admin->get_total_unapproved_jobs(),
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
				'page_title'		=>	'Applicants',
			);

			$nav_data = array
			(
				'active_dashboard'	=>	'',
				'active_applicant'	=>	'active-menu',				
				'active_company'	=>	'',
				'active_job'		=>	'',
				'tn_companies'		=>	$this->model_Admin->get_total_unverified_companies(),
				'tn_jobs'			=>	$this->model_Admin->get_total_unapproved_jobs(),

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
				'page_title'		=>	'Companies',
				'unverifed_company'	=>	$query = $this->model_Admin->get_unverified_companies(),
			);

			$nav_data = array
			(
				'active_dashboard'	=>	'',
				'active_applicant'	=>	'',				
				'active_company'	=>	'active-menu',
				'active_job'		=>	'',
				'tn_companies'		=>	$this->model_Admin->get_total_unverified_companies(),
				'tn_jobs'			=>	$this->model_Admin->get_total_unapproved_jobs(),
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
				'page_title'		=>	'Jobs',
				'unapproved_job'	=>	$this->model_Admin->get_unapproved_jobs(),
			);

			$nav_data = array
			(
				'active_dashboard'	=>	'',
				'active_applicant'	=>	'',				
				'active_company'	=>	'',
				'active_job'		=>	'active-menu',
				'tn_companies'		=>	$this->model_Admin->get_total_unverified_companies(),
				'tn_jobs'			=>	$this->model_Admin->get_total_unapproved_jobs(),
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



	public function approve_job($job_id)
	{
		$this->model_Admin->approve_job($job_id);
		redirect(base_url('admin/job'));
	}



	public function verify_company($company_email)
	{
		 $this->model_Admin->verify_company_profile($company_email);
		$this->model_Admin->verify_company($company_email);
		redirect(base_url('admin/company'));
	}

	
}
