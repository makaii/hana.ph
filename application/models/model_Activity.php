<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class model_Activity extends CI_Model
{
	public function get_search($searched_word)
	{
		$search_data = array(
			'search_word' => $searched_word,
			'search_date' => date('Y-m-d H:i:s'),
		);
		$this->db->insert('search_tbl', $search_data);
	}

	public function set_activity($data, $activity_type)
	{
		$date = date('Y-m-d H:i:s');
		switch ($activity_type) {
			case 'search':
				$activity_data = array(
					'activity_type' => 'search',
					'activity_Date' => $date,
					'activity_search_word' => $data,
				);
				$this->db->insert('activity_tbl', $activity_data);
				break;
			
			default:
				# code...
				break;
		}
	}

	public function get_activity()
	{
		$query = $this->db->select()->order_by('activity_id', 'DESC')->limit(10)->get('activity_tbl');
		return $query->result();
	}
}

?>