<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class model_Search extends CI_Model
{
	function search($input){
		 if (isset($input)) {
		 	$query = $this->db->query('
					SELECT *
					FROM jobs_tbl
					WHERE job_status = 1
					AND
					(
					job_title = "'.$input.'"
					Or job_location = "'.$input.'"
					Or job_company = "'.$input.'"
					Or job_description = "'.$input.'"
					)

		 		');

		 	
		 	if ($query->num_rows() >= 1) {
		 		$result = $query->result_array();
		 		return $result;
		 	}
		 	else
		 	{
		 		return false;
		 	}
		 }
	}
}

?>