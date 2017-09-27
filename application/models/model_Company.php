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






	}

 ?>