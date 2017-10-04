<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

    
    public function index(){
    	if ($this->session->userdata('logged_in')) {
    		$page_data = array( 
		   'page_title'  => 'Welcome',  
		   'logged_in' => true,
		   'email_address' => $this->session->userdata('email_address')
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

    public function create_profile(){

        if ($this->session->userdata('profile_status') == false) {
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

        elseif ($this->session->userdata('profile_status') == true) {
            $page_data = array(
                'page_title' => 'Profile',
                'profile_status' => true,
                'email_address' => $this->session->userdata('email_address'));

            $this->session->set_userdata($page_data);


            $this->load->view('company/company-header',$page_data);
            $this->load->view('company/view-company-profile');
            $this->load->view('company/company-footer');
        }
    }


    public function create_profile_1(){
        $page_data = array(
            'page_title' => 'Create Profile',
            'email_address' => $this->session->userdata('email_address'),
            'company_name' => $this->session->userdata('company_name'),
            'company_size' => $this->session->userdata('company_size'),
            'company_contact_person' => $this->session->userdata('company_contact_person'),
            'company_address' => $this->session->userdata('company_address'),
            'company_description' => $this->session->userdata('company_description'),
        );
        $this->session->set_userdata($page_data);

        $this->load->view('company/company-header',$page_data);
        $this->load->view('company/register-style.php');
        $this->load->view('company/create-profilev2');
        $this->load->view('company/company-footer');
    }

    

    public function validate_profile(){
        $this->form_validation->set_rules('companyname', 'Company Name', 'required|max_length[25]');
        $this->form_validation->set_rules('companysize', 'Company Size', 'required|max_length[25]');
        $this->form_validation->set_rules('contactperson', 'Company Admin', 'required');
        $this->form_validation->set_rules('companyaddress', 'Company Address', 'required');
        $this->form_validation->set_rules('companyemail', 'Company Email', 'required');
        $this->form_validation->set_rules('companydescription', 'Company Description', 'required');

        $this->session->set_userdata('company_name',$this->input->post('companyname'));
        $this->session->set_userdata('company_size',$this->input->post('companysize'));
        $this->session->set_userdata('company_contact_person',$this->input->post('contactperson'));
        $this->session->set_userdata('email_address',$this->input->post('email_address'));
        $this->session->set_userdata('company_address',$this->input->post('companyaddress'));
        $this->session->set_userdata('company_description',$this->input->post('companydescription'));

        if ($this->form_validation->run() === true) {

            $profile_data = array(
            'page_title' => 'Validate Profile',
            'email_address' => $this->session->userdata('email_address'),
            'company_name' => $this->session->userdata('company_name'),
            'company_size' => $this->session->userdata('company_size'),
            'company_contact_person' => $this->session->userdata('company_contact_person'),
            'company_address' => $this->session->userdata('company_address'),
            'company_description' => $this->session->userdata('company_description'),
            
             );

            $this->session->set_userdata($profile_data);
            $this->load->view('company/company-header',$profile_data);
            session_destroy();
            $this->load->view('company/register-style.php');
            $this->load->view('company/company-profile-success');
            $this->load->view('company/company-footer');
        }
        else {
            $this->session->set_userdata('company_name',$this->input->post('companyname'));
            $this->session->set_userdata('company_size',$this->input->post('companysize'));
            $this->session->set_userdata('company_contact_person',$this->input->post('contactperson'));
            $this->session->set_userdata('company_email',$this->input->post('email_address'));
            $this->session->set_userdata('company_address',$this->input->post('companyaddress'));
            $this->session->set_userdata('company_description',$this->input->post('companydescription'));
            $this->create_profile_1();

        }


    }
    
   

    
     public function view_company_profile(){
        $page_data = array(
            'page_title' => 'View Company Profile',
            'email_address' => $this->session->userdata('company_email'),
            'company_name' => $this->session->userdata('company_name'),
            'company_size' => $this->session->userdata('company_size'),
            'company_contact_person' => $this->session->userdata('company_contact_person'),
            'company_address' => $this->session->userdata('company_address'),
            'company_description' => $this->session->userdata('company_description'),
            'company_email' => $this->session0->userdata('company_email'),
             );
        $this->model_Company->get_company_profile_data($company_email);
        $this->load->view('company/company-header',$page_data);
        $this->load->view('company/register-style.php');
        $this->load->view('company/view-company-profile');
        $this->load->view('company/company-footer');

    }
    public function edit_profile(){
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

    public function job_posts(){

         $page_data = array(
                'page_title' => 'Job Posts',
                'profile_status' => true,
                'email_address' => $this->session->userdata('email_address'));

         $this->load->model('model_Company');
        $data['posts'] = $this->model_Company->get_posts(); 

        $this->session->set_userdata($page_data);

        $this->load->view('company/company-header',$page_data);
        $this->load->view('company/register-style.php');
        $this->load->view('company/job-posts',$data);
        $this->load->view('company/company-footer');
    }

     public function create_job(){

        $page_data = array(
            'page_title' => 'Create Job Post',
            'email_address' => $this->session->userdata('email_address'),
            'job_title' => $this->session->userdata('job_title'),
            'job_type' => $this->session->userdata('job_type'),
            'job_location' => $this->session->userdata('job_location'),
            'job_salary' => $this->session->userdata('job_salary'),
            'job_email' =>$this->session->userdata('job_email'),
            'job_description' => $this->session->userdata('job_description'),
        );
        $this->session->set_userdata($page_data);
        

        $this->load->view('company/company-header',$page_data);
        $this->load->view('company/register-style.php');
        $this->load->view('company/create-a-job');
        $this->load->view('company/company-footer');
    }      
    public function validate_create_job(){
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

            if ($this->form_validation->run() === true) {



                $job_profile_data = array(
                'page_title' => 'Validate Job Post',
                'email_address' => $this->session->userdata('email_address'),
                'job_title' => $this->session->userdata('job_title'),
                'job_type' => $this->session->userdata('job_type'),
                'job_location' => $this->session->userdata('job_location'),
                'job_salary' => $this->session->userdata('job_salary'),
                'job_email' =>$this->session->userdata('job_email'),
                'job_description' => $this->session->userdata('job_description'),
                 );

                $job_data = array(
                'job_title' => $this->session->userdata('job_title'),
                'job_type' => $this->session->userdata('job_type'),
                'job_location' => $this->session->userdata('job_location'),
                'job_salary' => $this->session->userdata('job_salary'),
                'job_email' =>$this->session->userdata('job_email'),
                'job_slug' =>$this->session->userdata('job_title'),
                'job_status' =>1,
                'job_description' => $this->session->userdata('job_description'),
                );


                $this->session->set_userdata($job_profile_data);
                $this->load->model('model_Company');
                $this->model_Company->create_job_post($job_data);
                $this->load->view('company/company-header',$job_profile_data);
                session_destroy($job_data);
                $this->load->view('company/register-style.php');
                $this->load->view('company/success-post');
                $this->load->view('company/company-footer');

            }
            else {
                $this->session->set_userdata('job_title',$this->input->post('jobtitle'));
                $this->session->set_userdata('job_location',$this->input->post('joblocation'));
                $this->session->set_userdata('job_type',$this->input->post('jobtype'));
                $this->session->set_userdata('job_salary',$this->input->post('jobsalary'));
                $this->session->set_userdata('job_email',$this->input->post('jobemail'));
                $this->session->set_userdata('job_description',$this->input->post('jobdescription'));
                $this->create_job();

            }
    }
    

    public function view_job($slug = NULL){
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
    public function edit_job($slug){
        $page_data = array(
                'page_title' => 'Edit Job Post',
                'profile_status' => true,
                'email_address' => $this->session->userdata('email_address'));

        $this->load->model('model_Company');
        $data['jobs_tbl'] = $this->model_Company->get_posts($slug);
                if(empty($data['jobs_tbl'])){
                    show_404();
                }

        $data ['job_title'] = 'Edit Post';
        
       

        $this->session->set_userdata($page_data);
        $this->load->view('company/company-header',$page_data);
        $this->load->view('company/register-style.php');
        $this->load->view('company/edit-job-post',$data);
        $this->load->view('company/company-footer');
    }
    
    // public function success_job(){
    //     $page_data = array(
    //             'page_title' => 'Edit Job Post',
    //             'profile_status' => true,
    //             'email_address' => $this->session->userdata('email_address'));

    //      $this->session->set_userdata($page_data);
    //     $this->load->view('company/company-header',$page_data);
    //     $this->load->view('company/register-style.php');
    //     $this->load->view('company/edit-job');
    //     $this->load->view('company/company-footer');
    // }  
    public function success_update_job($id){
        $page_data = array(
                'page_title' => 'Update Job Post',
                'profile_status' => true,
                'email_address' => $this->session->userdata('email_address'));
        
         $this->session->set_userdata($page_data);
        $this->load->view('company/company-header',$page_data);
        $this->load->view('company/register-style.php');
        $this->load->view('company/success-update');
        $this->load->view('company/company-footer');
    }     


    
 

}
