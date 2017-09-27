<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {   
        $page_data = array( 
           'page_title'  => 'Sign In | Hana.ph'
        );  

        $this->session->set_userdata($page_data);
        $this->load->view('templates/header',$page_data);
        $this->load->view('login');
        $this->load->view('templates/footer');
    }



    public function login_validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username',' Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run()) {
            //true
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            // model function
            $this->load->model('model_Main');

            if ($this->model_Main->can_login($username,$password)) {
                
                
                if ($this->model_Main->get_user_type($username) == 'applicant')
                {
                    
                    $profile_status = $this->model_Main->get_profile_status($username);
                    
                    $session_data = array(
                        'email_address' => $username,
                        'logged_in' => true,
                        'user_type' => 'applicant',
                        'profile_status' => $profile_status
                    );
                    $this->session->set_userdata($session_data);
                    redirect(base_url('user'));
                }


                elseif ($this->model_Main->get_user_type($username) == 'employer')
                {
                    
                    $profile_status = $this->model_Main->get_profile_status($username);

                    $session_data = array(
                        'email_address' => $username,
                        'logged_in' => true,
                        'user_type' => 'employer',
                        'profile_status' => $profile_status
                    );
                    $this->session->set_userdata($session_data);
                    redirect(base_url('company'));
                }

                elseif ($this->model_Main->get_user_type($username) == 'admin')
                {
                    $profile_status = $this->model_Main->get_profile_status($username);

                    $session_data = array(
                        'email_address' => $username,
                        'logged_in' => true,
                        'user_type' => 'admin',
                        'profile_status' => $profile_status
                    );
                    $this->session->set_userdata($session_data);
                    redirect(base_url('admin'));
                }
                
            }
            else
            {
                $this->session->set_flashdata('error','invalid username or password');
                $this->index();
            }
        }
        else
        {
            //false
            $this->index();
        }   
    }






    

}
