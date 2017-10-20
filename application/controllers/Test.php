<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_Admin');
        $this->load->model('model_Company');
        $this->load->model('model_Main');        
        $this->load->model('model_Search');
        $this->load->model('model_User');
    }

    public function index()
    {

    }

    public function get_profile()
    {

    }



    public function get_jobs()
    {
        $this->load->model('model_Search');
        $input = 'web';

        $query = $this->model_Search->search($input);
        if (!empty($query))
        {
            echo "<pre>";
            print_r($query);
            $sql = $this->db->last_query();;
            echo $sql;
            echo "</pre>";
        }
    }

        

}
