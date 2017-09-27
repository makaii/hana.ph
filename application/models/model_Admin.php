<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_Admin extends CI_Model {

	


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



	function get_applicants()
	{
		$this->db->get('applicant_tbl');
	}


	function get_unapproved_jobs()
	{
		$this->db->get('jobs_tbl');
	}


	function get_unapproved_companies()
	{
		$this->db->where('company_verfied', 0);
		$this->db->get('company_tbl');
	}

}
