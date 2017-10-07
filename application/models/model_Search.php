<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class model_Search extends CI_Model
{
	// function search($input){
	// 	 if (isset($input)) {
	// 	 	$query = $this->db->query('
	// 				SELECT *
	// 				FROM jobs_tbl
	// 				WHERE job_status = 1
	// 				AND
	// 				(
	// 				job_title = "'.$input.'"
	// 				Or job_location = "'.$input.'"
	// 				Or job_company = "'.$input.'"
	// 				Or job_description = "'.$input.'"
	// 				)

	// 	 		');

		 	
	// 	 	if ($query->num_rows() >= 1) {
	// 	 		$result = $query->result_array();
	// 	 		return $result;
	// 	 	}
	// 	 	else
	// 	 	{
	// 	 		return false;
	// 	 	}
	// 	 }
	// }

	// search jobs by title, company, location, and description
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
					->group_end()
					// like job title
					->or_group_start()
						->like('job_title', $input, 'before')
						->or_like('job_title', $input, 'after')
						->or_like('job_title', $input, 'both')
					->group_end()
					// like job location
					->or_group_start()
						->like('job_location', $input, 'before')
						->or_like('job_location', $input, 'after')
						->or_like('job_location', $input, 'both')
					->group_end()
					// like company
					->or_group_start()
						->like('job_company', $input, 'before')
						->or_like('job_company', $input, 'after')
						->or_like('job_company', $input, 'both')
					->group_end() 
					// like job description
					->or_group_start()
						->like('job_description', $input, 'before')
						->or_like('job_description', $input, 'after')
						->or_like('job_description', $input, 'both')
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