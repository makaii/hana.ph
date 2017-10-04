<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class model_Company extends CI_Model
	{
		public function get_posts ($slug = FALSE){
			
			if($slug === FALSE){
				$this->db->order_by('job_id','DESC');
				$this->db->where('job_status',1);
				$query = $this->db->get('jobs_tbl');
				return $query->result_array();
			}
				$query = $this->db->get_where('jobs_tbl',array('job_slug' => $slug));
				return $query->row_array();
				
		}

		public function get_company_profile_data($company_email)
		{

			if (!empty($company_email))
			{
				$this->db->where('company_control_email_address', $company_email);
				$this->db->where('company_profile_status', 1);
				$query = $this->db->get('company_profile_tbl');

				if (!empty($query) && $query->num_rows() == 1)
				{
					return $query->row();
				}
				else
					return "no result";
			}
			else
				"no email";
		}

		public function set_company_profile_data($profile_data)
		{
			if (!empty($profile_data))
			{
				$this->db->insert('company_profile_tbl', $profile_data);
			}
		}
		
		
		public function create_job_post($job_profile_data){
			if(!empty($job_profile_data))
			{
				$this->db->insert('jobs_tbl', $job_profile_data);
			}

		}


		public function update_job_post($job_data,$id)
		{
			
			echo $id;
			// $string = $this->session->userdata('job_title');
			// echo $string;
			// foreach ($edit_data as $row) {
			//     echo $row->job_title;
			//     echo $row->job_type;
			//     echo $row->job_salary;
			// }
			
			// $slug = url_title($this->session->userdata('job_title'));
			
			// $info = array (
			// 	'job_title' => $this->session->userdata('job_title'),
   //              'job_type' => $this->session->userdata('job_type'),
   //              'job_location' => $this->session->userdata('job_location'),
   //              'job_salary' => $this->session->userdata('job_salary'),
   //              'job_email' =>$this->session->userdata('job_email'),
   //              'job_slug' =>$slug,
   //              'job_status' =>1,
   //              'job_description' => $this->session->userdata('job_description'),
			// );
			// $this->db->where('job_id', $id);
			// return $this->db->update('jobs_tbl',$info);
		}



}