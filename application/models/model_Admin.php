<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_Admin extends CI_Model {
	

	// dashboard
	function get_total_accounts()
	{
		$query = $this->db->get('accounts_tbl');
		return $query->num_rows();
	}
	function get_total_applicants()
	{
		$query = $this->db->get('applicant_tbl');
		return $query->num_rows();
	}
	function get_total_companies()
	{
		$query = $this->db->get('company_tbl');
		return $query->num_rows();
	}
	function get_total_jobs()
	{
		$query = $this->db->get('jobs_tbl');
		return $query->num_rows();
	}
	function get_newest_users()
	{
		$this->db->limit(10);
		$this->db->order_by('user_id', 'DESC');
		$query = $this->db->get('accounts_tbl');
		return $query->result_array();
	}

	
	// side nav
	function get_total_unverified_companies()
	{
		$this->db->where('company_profile_status', 0);
		$query = $this->db->count_all_results('company_profile_tbl');
		return $query;
	}

	function get_total_unapproved_jobs()
	{
		$query = $this->db->count_all_results('jobs_tbl');
		return $query;
	}


	// Applicants
	function get_applicants()
	{
		$this->db->get('applicant_tbl');
	}


	// Companies
	function get_unverified_companies()
	{
		$this->db->where('company_profile_status', 0);
		$query = $this->db->get('company_profile_tbl');
		return $query->result_array();
	}
	function verify_company($company_email)
	{
		$email = $control_email;
		$data = array(
			'company_profile_status' => 1,
			'company_verified' => 1,
		);

		$this->db->where('company_email', $company_email);
		$this->db->update('company_tbl', $data);
	}
	function verify_company_profile($company_email)
	{
		$email = $control_email;

		$this->db->set('company_profile_status', 1);
		$this->db->where('company_control_email_address', $company_email);
		$this->db->update('company_profile_tbl');
	}


	// Jobs
	function get_unapproved_jobs()
	{
		$query = $this->db->get('jobs_tbl');
		return $query->result_array();
	}










}
