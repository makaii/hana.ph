<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{
		$search_string = $this->input->get('searchInput');
		$this->load->model('model_Search');
		$search_result = $this->model_Search->search($search_string);
		if ($search_result == false) {
			echo "no result";
		}
		elseif (isset($search_result)) {
			foreach ($search_result as $row) {
				echo $row['job_title'];
				echo $row['job_description'];
				echo $row['job_company'];
				echo $row['job_location'];
				echo $row['job_salary'];
			}
		}
	}





	public function result()
	{

	}

	
}
