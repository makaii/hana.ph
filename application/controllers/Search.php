<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{
		
	}



	public function result()
	{
		$this->load->model('model_Search');
		$search_result = $this->model_Search->search($this->input->get('searchInput'));

		$page_data = array
		(
			'search_result'		=> $search_result
		);

		$this->load->view('templates/header.php', $page_data);
		$this->load->view('search/index');
		$this->load->view('templates/footer.php')
	}

	
}
