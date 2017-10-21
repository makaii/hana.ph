<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_Company');
        $company_profile_status = $this->model_Company->get_company_profile_status($this->session->userdata('email_address'));
        $this->session->set_userdata('profile_status', $company_profile_status);
    }

    
    public function index()
    {
    	if ($this->session->userdata('logged_in'))
        {
    		$page_data = array( 
		   'page_title'  => 'Welcome',  
		   'logged_in' => true,
		   'email_address' => $this->session->userdata('email_address'),

			);
			$this->load->view('company/company-header',$page_data);
			$this->load->view('index');
			$this->load->view('company/company-footer');
    	}  
    	else
    	{
    		redirect(base_url('login#email'));
    	}
       
    }

    public function create_profile()
    {

        if ($this->session->userdata('profile_status') == false)
        {
            $page_data = array(
                'page_title' => 'Create Profile',
                'email_address' => $this->session->userdata('email_address') );
             
            $profile_date = array(
                'company_name' => $this->session->userdata('company_name'),
                'company_size' => $this->session->userdata('company_size'),
                'contact_person' => $this->session->userdata('company_contact_person'),
                'company_email' => $this->session->userdata('email_address'),
                'company_address' => $this->session->userdata('company_address'),
                'company_description' => $this->session->userdata('company_description')
            );
            $this->session->set_userdata($profile_date);

            $this->load->view('company/company-header',$page_data);
            $this->load->view('company/create-profile1');
            $this->load->view('company/company-footer');
        }

        elseif ($this->session->userdata('profile_status') == true)
        {
            $page_data = array(
                'page_title' => 'Profile',
                'email_address' => $this->session->userdata('email_address'),
            );

            $this->load->model('model_Company');
            
            $row = $this->model_Company->get_company_profile_data($this->session->userdata('email_address'));

            $profile_data = array(
                'company_address' => $row->company_address,
                'company_email' => $row->company_email,
                'company_name' => $row->company_name,
                'company_contact_person' => $row->company_contact_person,
                'company_size' => $row->company_size,
                'company_description' => $row->company_description,
            );

            $this->session->set_userdata($page_data);
            $this->load->view('company/company-header', $page_data);
            $this->load->view('company/view-company-profile', $profile_data);
            $this->load->view('company/company-footer');
        }
    }

    
     public function view_company_profile()
     {
        $page_data = array(
            'page_title' => 'View Company Profile',
            'email_address' => $this->session->userdata('company_email'),
            'company_name' => $this->session->userdata('company_name'),
            'company_size' => $this->session->userdata('company_size'),
            'company_contact_person' => $this->session->userdata('company_contact_person'),
            'company_address' => $this->session->userdata('company_address'),
            'company_description' => $this->session->userdata('company_description'),
            'company_email' => $this->session->userdata('company_email'),
             );


        $this->model_Company->get_company_profile_data($company_email);
        $this->load->view('company/company-header',$page_data);
        $this->load->view('company/register-style.php');
        $this->load->view('company/view-company-profile');
        $this->load->view('company/company-footer');

    }
    public function edit_profile()
    {
        $page_data = array(
            'page_title' => 'Edit Company Profile',
            'email_address' => $this->session->userdata('company_email'),
            'company_name' => $this->session->userdata('company_name'),
            'company_size' => $this->session->userdata('company_size'),
            'company_contact_person' => $this->session->userdata('company_contact_person'),
            'company_address' => $this->session->userdata('company_address'),
            'company_description' => $this->session->userdata('company_description'),
             );

        $this->load->view('company/company-header',$page_data);
        $this->load->view('company/register-style.php');
        $this->load->view('company/edit-company-profile');
        $this->load->view('company/company-footer');

    }

    public function job_posts()
    {
        

        $this->load->model('model_Company');
        $company_email = $this->session->userdata('email_address');
        $company_name = $this->model_Company->get_company_name($company_email);
        $data['posts'] = $this->model_Company->get_posts(false, $company_email);

        $page_data = array(
                'page_title' => 'Job Posts',
                'profile_status' => true,
                'email_address' => $company_email,
                'company_name' => $company_name,
        );        

        

        // if()

        // {
        //     $this->session->set_userdata($page_data);

        //     $this->load->view('company/company-header',$page_data);
        //     $this->load->view('company/register-style.php');
        //     $this->load->view('company/before-job-post');
        //     $this->load->view('company/company-footer');
        // }
        // // 


        $this->session->set_userdata($page_data);

        $this->load->view('company/company-header',$page_data);
        $this->load->view('company/register-style.php');
        $this->load->view('company/job-posts',$data);
        $this->load->view('company/company-footer');
    }

     public function create_job()
     {

        $page_data = array(
            'page_title' => 'Create Job Post',
            'email_address' => $this->session->userdata('email_address'),
            'job_title' => $this->session->userdata('job_title'),
            'job_type' => $this->session->userdata('job_type'),
            'job_location' => $this->session->userdata('job_location'),
            'job_salary' => $this->session->userdata('job_salary'),
            'job_email' =>$this->session->userdata('job_email'),
            'job_description' => $this->session->userdata('job_description'),
            'job_company' => $this->session->userdata('company_name'),
        );
        $this->session->set_userdata($page_data);
        

        $this->load->view('company/company-header',$page_data);
        $this->load->view('company/register-style.php');
        $this->load->view('company/create-a-job');
        $this->load->view('company/company-footer');
    }

    public function validate_create_job()
    {
        $this->form_validation->set_rules('jobtitle', 'Job Title', 'required|max_length[25]');
        $this->form_validation->set_rules('joblocation', 'Job Location', 'required');
        $this->form_validation->set_rules('jobtype', 'Job Type', 'required');
        $this->form_validation->set_rules('jobsalary', 'Job Salary', 'required');
        $this->form_validation->set_rules('jobemail', 'Company Email', 'required');
        $this->form_validation->set_rules('jobdescription', 'Job Description', 'required');

        $this->session->set_userdata('job_title',$this->input->post('jobtitle'));
        $this->session->set_userdata('job_location',$this->input->post('joblocation'));
        $this->session->set_userdata('job_type',$this->input->post('jobtype'));
        $this->session->set_userdata('job_salary',$this->input->post('jobsalary'));
        $this->session->set_userdata('job_email',$this->input->post('jobemail'));
        $this->session->set_userdata('job_description',$this->input->post('jobdescription'));


        if ($this->form_validation->run() === true)
        {
            $job_profile_data = array(
                'page_title' => 'Validate Job Post',
                'email_address' => $this->session->userdata('email_address'),
                'job_title' => $this->session->userdata('job_title'),
                'job_type' => $this->session->userdata('job_type'),
                'job_location' => $this->session->userdata('job_location'),
                'job_salary' => $this->session->userdata('job_salary'),
                'job_email' =>$this->session->userdata('job_email'),
                'job_description' => $this->session->userdata('job_description'),
                'job_company' =>$this->session->userdata('company_name'),
            );

            $slug = url_title($this->session->userdata('job_title'));

            $job_data = array(
                'job_title' => $this->session->userdata('job_title'),
                'job_type' => $this->session->userdata('job_type'),
                'job_location' => $this->session->userdata('job_location'),
                'job_salary' => $this->session->userdata('job_salary'),
                'job_date_posted' => date('Y-m-d'),
                'job_email' =>$this->session->userdata('job_email'),
                'job_slug' => $slug,
                'job_status' =>0,
                'job_description' => $this->session->userdata('job_description'),
                'job_company' =>$this->session->userdata('company_name'),
                );

            $this->session->set_userdata($job_profile_data);

            $this->load->model('model_Company');
            $this->model_Company->create_job_post($job_data);
   
            $this->load->view('company/company-header',$job_profile_data);
            $this->load->view('company/register-style.php');
            $this->load->view('company/success-post');
            $this->load->view('company/company-footer');                
        }
        else {
            $this->create_job();
        }
    }    

    public function view_job($slug = NULL)
    {
        $page_data = array(
                'page_title' => 'View Job Details',
                'profile_status' => true,
                'email_address' => $this->session->userdata('email_address'));

        $this->load->model('model_Company');
        $data['jobs_tbl'] = $this->model_Company->get_posts($slug);
                if(empty($data['jobs_tbl'])){
                    show_404();
                }
         $data['job_title'] = $data['jobs_tbl']['job_title'];
        $this->session->set_userdata($page_data);
        $this->load->view('company/company-header',$page_data);
        $this->load->view('company/register-style.php');
        $this->load->view('company/view-job-post',$data); 
        $this->load->view('company/company-footer');
    }

    public function edit_job($slug)
    {
        
        $this->session->set_userdata('job_title',$this->input->post('jobtitle'));
        $this->session->set_userdata('job_location',$this->input->post('joblocation'));
        $this->session->set_userdata('job_type',$this->input->post('jobtype'));
        $this->session->set_userdata('job_salary',$this->input->post('jobsalary'));
        $this->session->set_userdata('job_email',$this->input->post('jobemail'));
        $this->session->set_userdata('job_description',$this->input->post('jobdescription'));

        $this->load->model('model_Company');
        $data['jobs_tbl'] = $this->model_Company->get_posts($slug);
        if(empty($data['jobs_tbl']))
        {
            show_404();
        }
        $page_data = array(
                'page_title' => 'Edit Job Post',
                'profile_status' => true,
                'email_address' => $this->session->userdata('email_address'),
                'job_title' => $this->input->post('jobtitle'),
                'job_type' => $this->session->userdata('job_type'),
                'job_location' => $this->session->userdata('job_location'),
                'job_salary' => $this->session->userdata('job_salary'),
                'job_email' =>$this->session->userdata('job_email'),
                'job_description' => $this->session->userdata('job_description'),
        );


        $this->session->set_userdata($page_data);
        $this->load->view('company/company-header',$page_data,$data);
        $this->load->view('company/register-style.php');
        $this->load->view('company/edit-job-post',$data);
        $this->load->view('company/company-footer');

    }
    
    public function update_job()
    {

        $this->session->set_userdata('job_title',$this->input->post('jobtitle'));
        $this->session->set_userdata('job_location',$this->input->post('joblocation'));
        $this->session->set_userdata('job_type',$this->input->post('jobtype'));
        $this->session->set_userdata('job_salary',$this->input->post('jobsalary'));
        $this->session->set_userdata('job_email',$this->input->post('jobemail'));
        $this->session->set_userdata('job_description',$this->input->post('jobdescription'));

        $slug = url_title($this->session->userdata('job_title'));
        $profile_data = array(
                'page_title' => 'Update Job Post',
                'profile_status' => true,
                'email_address' => $this->session->userdata('email_address'),
                'job_title' => $this->session->userdata('job_title'),
                'job_type' => $this->session->userdata('job_type'),
                'job_location' => $this->session->userdata('job_location'),
                'job_salary' => $this->session->userdata('job_salary'),
                'job_email' =>$this->session->userdata('job_email'),
                'job_slug' => $slug,
                'job_status' =>1,
                'job_description' => $this->session->userdata('job_description'),
            );


        $updated_data = array(
                'job_title' => $this->session->userdata('job_title'),
                'job_type' => $this->session->userdata('job_type'),
                'job_location' => $this->session->userdata('job_location'),
                'job_salary' => $this->session->userdata('job_salary'),
                'job_email' =>$this->session->userdata('job_email'),
                'job_slug' => $slug,
                'job_status' =>1,
                'job_description' => $this->session->userdata('job_description'),
                );
        
        $this->session->set_userdata($profile_data);
        
        $this->load->model('model_Company');
        $this->model_Company->update_job_post($updated_data);

        $this->load->view('company/company-header',$profile_data);
        $this->load->view('company/register-style.php');
        $this->load->view('company/success-update');
        
        $this->load->view('company/company-footer');

        
    }     

    public function delete_job($id)
    {
        // $this->load->model('model_Company');
        // $this->model_Company->delete_job_post($id);
        $page_data = array(
                'page_title' => 'Job Posts',
                'profile_status' => true,
                'email_address' => $this->session->userdata('email_address'),
                'job_id' => $id,
            );

        //  $this->load->model('model_Company');
        // $data['posts'] = $this->model_Company->get_posts(); 

        $this->session->set_userdata($page_data);

        $this->load->view('company/company-header',$page_data);
        $this->load->view('company/register-style.php');
        $this->load->view('company/delete-job-notif');
        $this->load->view('company/company-footer');
    }

    public function success_delete_job($id)
    {
        $page_data = array(
                'page_title' => 'Job Posts',
                'profile_status' => true,
                'email_address' => $this->session->userdata('email_address'),
                'job_id' => $id
        );

        //  $this->load->model('model_Company');
        // $data['posts'] = $this->model_Company->get_posts(); 

        $this->load->model('model_Company');
        $this->model_Company->delete_job_post($id);

        $this->session->set_userdata($page_data);

        $this->load->view('company/company-header',$page_data);
        $this->load->view('company/register-style.php');
        $this->load->view('company/');
        $this->load->view('company/company-footer');
    }

}
