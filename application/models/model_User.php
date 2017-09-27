<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class model_User extends CI_Model
	{
		function create_resume($resume_data_array){
			if (isset($resume_data_array))
			{
				$data = $resume_data_array;
				$this->db->insert('applicant_resume_tbl', $data);
			}
		}

		function set_applicant_resume_status($email, $boolean)
		{
			if (isset($boolean) && isset($email))
			{
				if ($boolean == true)
				{
					$this->db->set('applicant_resume_status', 1);
					$this->db->where('applicant_email', $email);
					$this->db->update('applicant_tbl');
				}
				elseif ($boolean == false) {
					$this->db->set('applicant_resume_status',0);
					$this->db->where('applicant_email', $email);
					$this->db->update('applicant_tbl');
				}
			}
		}

		function get_applicant_resume_data($email)
		{
			if (isset($email)) {
				$this->db->where('resume_control_email_address', $email);
				$query = $this->db->get('applicant_resume_tbl');
				if ($query->num_rows() == 1)
				{
					$row = $query->row();
					return $row;
				}
			}
		}
	}

 ?>