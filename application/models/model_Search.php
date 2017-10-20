<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class model_Search extends CI_Model
{
	public function search($input)
	{
		if (!empty($input))
		{
			$query = $this->db->select('*')
				->from('jobs_tbl')
				->where('job_status', 1)
					->group_start()
						->or_where('job_title', $input)
							->or_where('job_location', $input)
							->or_where('job_company', $input)
							->or_where('job_description', $input)
								->or_group_start()
									// like job title
									->like('job_title', $input, 'before')
									->or_like('job_title', $input, 'after')
									->or_like('job_title', $input, 'both')
									// like job location
									->or_like('job_location', $input, 'before')
									->or_like('job_location', $input, 'after')
									->or_like('job_location', $input, 'before')
									// like job company
									->or_like('job_company', $input, 'before')
									->or_like('job_company', $input, 'after')
									->or_like('job_company', $input, 'before')
									// like job description
									->or_like('job_description', $input, 'before')
									->or_like('job_description', $input, 'after')
									->or_like('job_description', $input, 'before')
								->group_end()
					->group_end()
					->get();

			if ($query->num_rows() >= 1)
			{
				return $query->result_array();
			}
			else
				 return false;
		}
		else
			return "No input";
	}
}

?>