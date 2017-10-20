<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        $this->load->model('model_Main');
    }

    public function index()
    {   
        $page_data = array( 
           'page_title'  => 'Sign Un | Hana.ph'
        );  

        $this->session->set_userdata($page_data);
        $this->load->view('templates/header',$page_data);
        $this->load->view('register');
        $this->load->view('templates/footer');
    }


    public function register_validation(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email','E-mail Address', 'required|trim|valid_email|is_unique[accounts_tbl.user_email]');
        $this->form_validation->set_rules('password','Password', 'required');
        $this->form_validation->set_rules('password-re','Confirm Password', 'required|matches[password]');
        $this->form_validation->set_rules('accountType','Account Type', 'required');


        if ($this->form_validation->run()) {
            $email = $this->input->post('username');
            $password = $this->input->post('password');
            $accountType = $this->input->post('accountType');
            $time = date('Y-m-d');

            $this->load->model('model_Main');
            if ($this->model_Main->can_register($email)) {
                $data = array(
                    'user_email' => $this->input->post('email'),
                    'user_password' => $this->input->post('password'),
                    'user_type' => $this->input->post('accountType'),
                    'user_date_joined' => date('Y-m-d')
                );

                $this->model_Main->register($data);
                
                if ($this->input->post('accountType') == 'applicant')
                {
                    $data = array (
                        'applicant_email' => $this->input->post('email'),
                    );
                    $this->model_Main->set_resume($data);
                }
                elseif ($this->input->post('accountType') == 'employer')
                {
                    $data = array (
                        'company_email' => $this->input->post('email'),
                    );
                    $this->model_Main->set_profile($data);
                }
                
                redirect(base_url('register/register_success'));
            }
            else{
                // $this->session->set_flashdata('error','email address is already taken');
                redirect(base_url('register'));
            }
        }
        else
        {
            $this->index();
        }
        
    }


    public function register_success()
    {
        $page_data = array (
            'page_title' => 'Register Success!'
        );
        $this->load->view('templates/header',$page_data);
        $this->load->view('register-success');
        $this->load->view('templates/footer');
    }



    

}
