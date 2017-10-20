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
        echo "this is the testing controller";
    }

        

}
