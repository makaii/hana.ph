<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class model_Main extends CI_Model
	{
		function can_login($email,$password)
		{
			$this->db->where('user_email', $email);
			$this->db->where('user_password', $password);
			$query = $this->db->get('accounts_tbl');

			if ($query->num_rows() > 0) {
				return true;
			}
			else
			{
				return false;
			}
		}

		function can_register($email){			

			$this->db->where('user_email', $email);
			$query = $this->db->get('accounts_tbl');
			if ($query->num_rows() == 0) {
				return true;
			}
			else{
				return false;
			}
		}

		function register($data){
			$this->db->insert('accounts_tbl', $data);
		}

		function set_profile($data){
			$this->db->insert('company_tbl', $data);
		}

		function set_resume($data)
		{
			$this->db->insert('applicant_tbl', $data);
		}

		// true for Applicant false for company
		function get_user_type($email){
			
			$this->db->select('user_type');
			$this->db->where('user_email', $email);
			$this->db->where('user_status', 1);
			$query = $this->db->get('accounts_tbl');
			if ($query->num_rows() == 1) {
				return $query->row()->user_type;
			}
			else
				return false;
		}

		function get_profile_status($email){
			
			$this->db->where('applicant_email', $email);
			$query = $this->db->get('applicant_tbl');
			if ($query->num_rows() == 1) {
				return true;
			}
			else{
				$this->db->where('company_email', $email);
				$query = $this->db->get('company_tbl');
				if ($query->num_rows() == 1) {
					return true;
				}
				else
					return false;
			}
		}

		
	}

 ?>