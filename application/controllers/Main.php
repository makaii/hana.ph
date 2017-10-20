<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function _construct()
	{ 
		Parent::_construct();
	}

	public function index()
	{	
		$logged_in = $this->session->userdata('logged_in');
		if (empty($logged_in)) {

			
			$page_data = array( 
			   'page_title'  => 'Home | Hana.ph',  
			   'logged_in' => false,
			   'user_type' => 'guest'
			);  
			$this->session->set_userdata($page_data);
			$this->load->view('templates/header',$page_data);
			$this->load->view('index');
			$this->load->view('templates/footer');
		}
		elseif (!empty($logged_in)) {
			

			$usertype = $this->session->userdata('user_type');
			if ($usertype == 'applicant') {
				redirect(base_url('user'));
			}
			elseif ($usertype == 'employer') {
				redirect(base_url('company'));
			}
		}

		
	}



	public function logout(){

		$this->session->set_userdata('logged_in', false);
		$this->session->unset_userdata('email_address');
		$this->session->set_userdata('user_type', 'guest');


		$profile_data = array(
			'profile_status',
			// applicant resume creation sessions
			'applicant_first_name',
			'applicant_last_name',
			'applicant_birthdate',
			'applicant_mobile_number',
			'applicant_email',
			'applicant_address',
			'applicant_school_name',
			'applicant_degree',
			'applicant_school_address',
			'applicant_school_date_started',
			'applicant_school_date_ended',
			'applicant_company_position',
			'applicant_company_name',
			'applicant_company_adress',
			'applicant_company_year_started',
			'applicant_company_year_ended',
			'applicant_about',
			'applicant_img_url',
			'applicant_cv_url',
			// company profile creation sessions
			'company_name',
			'company_size',
			'company_contact_person',
			'company_email',
			'company_address',
			'company_description',
			// job creation sessions
			'job_title',
			'job_location',
			'job_type',
			'job_salary',
			'job_email',
			'job_description',
		);
		if (isset($profile_data)) {
			$this->session->unset_userdata($profile_data);
		}

		redirect(base_url('login'));
	}


}


?>