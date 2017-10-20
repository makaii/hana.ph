<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct()
    {
        $this->load->model('model_Company');
    }

    public function index()
    {
    	if ($this->session->userdata('profile_status'))
        {
    		$this->load->model('model_Company');
            $email = $this->session->userdata('email_address');
            $row = $this->model_Company->get_company_profile_data($email);
            $profile_data = array(
                'company_email' => $row->company_email,
                'company_name' => $row->company_name,
                'company_address' => $row->company_address,
                'company_description' => $row->company_description,
                'company_size' => $row->company_size,
                'company_contact_person' => $row->company_contact_person,
            );

            $page_data = array(
                'page_title'    => 'Profile',
                'email_address' => $this->session->userdata('email_address'),
            );
            $this->session->set_userdata($page_data);
            $this->load->view('company/company-header', $page_data);
            $this->load->view('company/view-company-profile', $profile_data);
            $this->load->view('company/company-footer');
    	}
    	elseif (!$this->session->userdata('profile_status'))
    	{
    		$page_data = array(
                'page_title'    => 'Profile',
                'email_address' => $this->session->userdata('email_address'),

            );

            $this->session->set_userdata($page_data);

            $profile_data = array(
                'company_name'          => $this->session->userdata('company_name'),
                'company_size'          => $this->session->userdata('company_size'),
                'company_email'         => $this->session->userdata('email_address'),
                'company_address'       => $this->session->userdata('company_address'),
                'company_description'   => $this->session->userdata('company_description'),
                'company_contact_person'        => $this->session->userdata('company_contact_person'),
            );

            $this->session->set_userdata($profile_data);
            

            $this->load->view('company/company-header', $page_data);
            $this->load->view('company/create-profile');
            $this->load->view('company/company-footer');
    	}
        
    }


    public function create_profile()
    {
        $page_data = array
        (
            'page_title'        => 'Create Profile',
            'email_address'     => $this->session->userdata('email_address'),
            'company_name'      => $this->session->userdata('company_name'),
            'company_email'     => $this->session->userdata('company_email'),
            'company_size'      => $this->session->userdata('company_size'),
            'company_contact_person'    => $this->session->userdata('company_contact_person'),
            'company_address'   => $this->session->userdata('company_address'),
            'company_description'       => $this->session->userdata('company_description'),
        );
        $this->session->set_userdata($page_data);

        $this->load->view('company/company-header',$page_data);
        $this->load->view('company/register-style.php');
        $this->load->view('company/create-profile1');
        $this->load->view('company/company-footer');
    }
    public function validate_profile()
    {
        $this->form_validation->set_rules('companyname', 'Company Name', 'required|max_length[25]');
        $this->form_validation->set_rules('companysize', 'Company Size', 'required|max_length[25]');
        $this->form_validation->set_rules('contactperson', 'Company Admin', 'required');
        $this->form_validation->set_rules('companyaddress', 'Company Address', 'required');
        $this->form_validation->set_rules('companyemail', 'Company Email', 'required');
        $this->form_validation->set_rules('companydescription', 'Company Description', 'required');

        $this->session->set_userdata('company_name',$this->input->post('companyname'));
        $this->session->set_userdata('company_size',$this->input->post('companysize'));
        $this->session->set_userdata('company_contact_person',$this->input->post('contactperson'));
        $this->session->set_userdata('company_email',$this->input->post('companyemail'));
        $this->session->set_userdata('company_address',$this->input->post('companyaddress'));
        $this->session->set_userdata('company_description',$this->input->post('companydescription'));

        if ($this->form_validation->run() === true)
        {
            $page_data = array
            (
                'page_title'        => 'Validate Profile',
                'email_address'     => $this->session->userdata('email_address'),
             );
            $this->session->set_userdata($page_data);

            $profile_data = array
            (
                'company_name'      => $this->session->userdata('company_name'),
                'company_email'     => $this->session->userdata('company_email'),
                'company_size'      => $this->session->userdata('company_size'),
                'company_contact_person'    => $this->session->userdata('company_contact_person'),
                'company_address'   => $this->session->userdata('company_address'),
                'company_description'       => $this->session->userdata('company_description'),
                'company_control_email_address' => $this->session->userdata('email_address'),
             );
            $this->load->model('model_Company');
            $this->model_Company->set_company_profile_data($profile_data);

            $this->load->view('company/company-header',$page_data);
            $this->load->view('company/register-style.php');
            $this->load->view('company/company-profile-success');
            $this->load->view('company/company-footer');
        }
        else
        {
            $this->create_profile();

        }
    }


}