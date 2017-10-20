<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_User');
    }

    public function index()
    {   
    	if ($this->session->userdata('logged_in'))
        {
    		$page_data = array( 
    		   'page_title' => 'Welcome',  
    		   'logged_in' => true,
    		   'email_address' => $this->session->userdata('email_address')
			);

			$this->load->view('user/user-header',$page_data);
			$this->load->view('index');
			$this->load->view('user/user-footer');
    	}  
    	else
    	{
    		redirect(base_url('login#email'));
    	}
        
    }

    

}