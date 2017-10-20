<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resume extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_User');     
    }

    public function index()
    {
        if ($this->session->userdata('profile_status'))
        {
            $this->load->model('model_User');
            $row = $this->model_User->get_applicant_resume_data($this->session->userdata('email_address'));

            $resume_data = array(
                // resume personal info
                'resume_name'   => $row->resume_first_name." ".$row->resume_last_name,
                'resume_address'    => $row->resume_address,
                'resume_email'  => $row->resume_email,
                'resume_mobile_number'  => $row->resume_mobile_number,
                // resume work
                'resume_work_position'  =>  $row->resume_work_position,
                'resume_company'        => $row->resume_company,
                'resume_company_address'    => $row->resume_company_address,
                'resume_work_year_started'  => $row->resume_work_year_started,
                'resume_work_year_ended'    => $row->resume_work_year_ended,
                // resume school
                'resume_school' => $row->resume_school,
                'resume_degree' => $row->resume_degree,
                'resume_school_address'     => $row->resume_school_address,
                'resume_school_year_started'    => $row->resume_school_year_started,
                'resume_school_year_ended'  => $row->resume_school_year_ended,
                // etc
                'resume_img_url' => $row->resume_img_url,
                'resume_cv_url' => $row->resume_cv_url,
                'resume_about_me' => $row->resume_about
            );

            $page_data = array(
                'page_title'    => 'Resume',
                'email_address' => $this->session->userdata('email_address'),
            );

            $this->session->set_userdata($page_data);

            $this->load->view('user/user-header',$page_data);
            $this->load->view('user/resume', $resume_data);
            $this->load->view('user/user-footer');
        }

        elseif (!$this->session->userdata('profile_status')) 
        {
            $page_data = array(
                'page_title'    => 'Resume',
                'email_address' => $this->session->userdata('email_address') );
            $this->session->set_userdata($page_data);

            $profile_data = array(
                // basic information
                'applicant_first_name' => $this->session->userdata('applicant_first_name'),
                'applicant_last_name' => $this->session->userdata('applicant_last_name'),
                'applicant_birthdate' => $this->session->userdata('applicant_birthdate'),
                'applicant_email' => $this->session->userdata('email_address'),
                'applicant_address' => $this->session->userdata('applicant_address'),
                'applicant_mobile_number' => $this->session->userdata('applicant_mobile_number')
            );
            $this->session->set_userdata($profile_data);
            

            $this->load->view('user/user-header',$page_data);
            $this->load->view('user/create-resume');
            $this->load->view('user/user-footer');
        }
    }



    public function create_resume_1()
    {
        $page_data = array(
            'page_title' => 'Create Profile',
            'email_address' => $this->session->userdata('email_address'),
            'applicant_first_name' => $this->session->userdata('applicant_first_name'),
            'applicant_last_name' => $this->session->userdata('applicant_last_name'),
            'applicant_birthdate' => $this->session->userdata('applicant_birthdate'),
            'applicant_email' => $this->session->userdata('applicant_email'),
            'applicant_address' => $this->session->userdata('applicant_address'),
            'applicant_mobile_number' => $this->session->userdata('applicant_mobile_number')
        );

        $this->load->view('user/user-header',$page_data);
        $this->load->view('user/register-style.php');
        $this->load->view('user/create-resume1');
        $this->load->view('user/user-footer');
    }

    public function create_resume_1_validation()
    {
        $this->form_validation->set_rules('firstName', 'First Name', 'required');
        $this->form_validation->set_rules('lastName', 'Last Name', 'required');
        $this->form_validation->set_rules('birthdate', 'Date of Birth', 'required');        
        $this->form_validation->set_rules('email', 'E-mail', 'required|is_unique[applicant_resume_tbl.resume_email]');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('mobileNumber', 'Mobile number');

        $this->session->set_userdata('applicant_first_name', $this->input->post('firstName'));
        $this->session->set_userdata('applicant_last_name', $this->input->post('lastName'));
        $this->session->set_userdata('applicant_birthdate', $this->input->post('birthdate'));
        $this->session->set_userdata('applicant_email', $this->input->post('email'));            
        $this->session->set_userdata('applicant_address', $this->input->post('address'));
        $this->session->set_userdata('applicant_mobile_number', $this->input->post('mobileNumber'));


        if ($this->form_validation->run()) {

            $profile_data = array(
                'applicant_school_name' => $this->session->userdata('applicant_school_name'),
                'applicant_degree' => $this->session->userdata('applicant_degree'),
                'applicant_school_address' => $this->session->userdata('applicant_school_address'),
                'applicant_school_date_started' => $this->session->userdata('applicant_school_date_started'),
                'applicant_school_date_ended' => $this->session->userdata('applicant_school_date_ended')

            );
            $this->session->set_userdata($profile_data);

            redirect('resume/create_resume_2');
           
        }
        else
        {
            $this->create_resume_1();
        }

    }









    public function create_resume_2()
    {
        $page_data = array(
            'page_title' => 'Create Profile',
            'email_address' => $this->session->userdata('email_address'),
            'applicant_school_name' => $this->session->userdata('applicant_school_name'),
            'applicant_degree' => $this->session->userdata('applicant_degree'),
            'applicant_school_address' => $this->session->userdata('applicant_school_address'),
            'applicant_school_date_started' => $this->session->userdata('applicant_school_date_started'),
            'applicant_school_date_ended' => $this->session->userdata('applicant_school_date_ended')
        );        

        $this->load->view('user/user-header',$page_data);
        $this->load->view('user/register-style.php');
        $this->load->view('user/create-resume2');
        $this->load->view('user/user-footer');
    }

    public function create_resume_2_validation()
    {
        $this->form_validation->set_rules('schoolName', 'School Name', 'required');
        $this->form_validation->set_rules('degree', 'Degree', 'required');
        $this->form_validation->set_rules('schoolAdress', 'School Address', 'required');
        $this->form_validation->set_rules('schoolYearStarted', 'Year Started', 'required');
        $this->form_validation->set_rules('schoolYearEnded', 'Year Ended', 'required');
        
        
        $this->session->set_userdata('applicant_school_name' , $this->input->post('schoolName'));
        $this->session->set_userdata('applicant_degree', $this->input->post('degree'));
        $this->session->set_userdata('applicant_school_address', $this->input->post('schoolAdress'));
        $this->session->set_userdata('applicant_school_date_started', $this->input->post('schoolYearStarted'));
        $this->session->set_userdata('applicant_school_date_ended', $this->input->post('schoolYearEnded'));


        if ($this->form_validation->run())
        {
           $profile_data = array(
               'applicant_company_position' =>  $this->session->userdata('applicant_company_position'),
               'applicant_company_name' =>  $this->session->userdata('applicant_company_name'),
               'applicant_company_adress' =>  $this->session->userdata('applicant_company_adress'),
               'applicant_company_year_started' =>  $this->session->userdata('applicant_company_year_started'),
               'applicant_company_year_ended' =>  $this->session->userdata('applicant_company_year_ended')

           );
           $this->session->set_userdata($profile_data);

           redirect('resume/create_resume_3');
        }
        else
        {
            $this->create_resume_2();
        }
    }









    public function create_resume_3()
    {
        $page_data = array(
            'page_title' => 'Create Profile',
            'email_address' => $this->session->userdata('email_address'),
            'applicant_company_position' =>  $this->session->userdata('applicant_company_position'),
            'applicant_company_name' => $this->session->userdata('applicant_company_name'),
            'applicant_company_adress' => $this->session->userdata('applicant_company_adress'),
            'applicant_company_year_started' => $this->session->userdata('applicant_company_year_started'),
            'applicant_company_year_ended' => $this->session->userdata('applicant_company_year_ended')
        );
        $this->session->set_userdata($page_data);

        $this->load->view('user/user-header',$page_data);
        $this->load->view('user/register-style.php');
        $this->load->view('user/create-resume3');
        $this->load->view('user/user-footer');
    }

    public function create_resume_3_validation()
    {
        $this->form_validation->set_rules('companyPosition', 'Position', 'required');
        $this->form_validation->set_rules('companyName', 'Company Name', 'required');
        $this->form_validation->set_rules('companyAddress', 'Company Address', 'required');
        $this->form_validation->set_rules('workYearStarted', 'Year Started', 'required');
        $this->form_validation->set_rules('workYearEnded', 'Year Ended', 'required');


        $this->session->set_userdata('applicant_company_position', $this->input->post('companyPosition'));
        $this->session->set_userdata('applicant_company_name', $this->input->post('companyName'));
        $this->session->set_userdata('applicant_company_adress', $this->input->post('companyAddress'));
        $this->session->set_userdata('applicant_company_year_started', $this->input->post('workYearStarted'));
        $this->session->set_userdata('applicant_company_year_ended', $this->input->post('workYearEnded'));


        if ($this->form_validation->run())
        {
            $profile_data = array(
                'page_title' => 'Create Profile',
                'email_address' => $this->session->userdata('email_address'),
                'applicant_about' => $this->session->userdata('applicant_about'),
                'applicant_img_url' => $this->session->userdata('applicant_img_url'),
                'applicant_cv_url' => $this->session->userdata('applicant_cv_url')
            );
            $this->session->set_userdata($profile_data);

            redirect('resume/create_resume_4');
        }
        else
        {
            $this->create_resume_3();
        }
    }








    public function create_resume_4()
    {
        $page_data = array(
            'page_title' => 'Create Profile',
            'email_address' => $this->session->userdata('email_address'),
            'applicant_about' => $this->session->userdata('applicant_about'),
            'applicant_img_url' => $this->session->userdata('applicant_img_url'),
            'applicant_cv_url' => $this->session->userdata('applicant_cv_url')
        );
        $this->session->set_userdata($page_data);        
        

        $this->load->view('user/user-header',$page_data);
        $this->load->view('user/register-style.php');
        $this->load->view('user/create-resume4');
        $this->load->view('user/user-footer');
    }

    public function create_resume_4_validation()
    {
        $this->form_validation->set_rules('applicantAbout', 'About your self', 'trim|required|alpha_numeric_spaces');
        $this->form_validation->set_rules('applicantImg', 'Profile Picture');
        $this->form_validation->set_rules('applicantCV', 'CV');

        if(isset($_FILES['applicantImg'])){
           $file_name = $_FILES['applicantImg']['name'];
           $file_size =$_FILES['applicantImg']['size'];
           $file_tmp =$_FILES['applicantImg']['tmp_name'];
           $file_type=$_FILES['applicantImg']['type'];
           $target_file = "uploads/applicant/img/".$file_name;
           $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
           $error = 0;
           $imguploadok = 0;
           
           $extensions= array("jpeg","jpg","png");
           
           if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"){
            $error = 1;
            $this->session->set_flashdata('file_ext', 'extension not allowed, please choose a JPEG or PNG file.');
           }
           
           if($file_size >= 2097152){
            $error = 1;
              $this->session->set_flashdata('file_size', 'File size must be less than or equal to 2 MB');
           }
           
           if($error == 0){
              $this->session->set_userdata('applicant_img_url', "uploads/applicant/img/".$file_name);
              $imguploadok = 1;
           }
        }


        $this->session->set_userdata('applicant_about', $this->input->post('applicantAbout'));
        $this->session->set_userdata('applicant_cv_url', '');       
        

        



        if ($this->form_validation->run() && $imguploadok == 1)
        {

            move_uploaded_file($file_tmp,"uploads/applicant/img/".$file_name);
            $profile_data = array(
                // personal information //
                'resume_first_name' => $this->session->userdata('applicant_first_name'),
                'resume_last_name' => $this->session->userdata('applicant_last_name'),
                'resume_birthdate' => $this->session->userdata('applicant_birthdate'),
                'resume_email' => $this->session->userdata('applicant_email'),
                'resume_address' => $this->session->userdata('applicant_address'),
                'resume_mobile_number' => $this->session->userdata('applicant_mobile_number'),
                // educational background //
                'resume_school' => $this->session->userdata('applicant_school_name'),
                'resume_degree' => $this->session->userdata('applicant_degree'),
                'resume_school_address' => $this->session->userdata('applicant_school_address'),
                'resume_school_year_started' => $this->session->userdata('applicant_school_date_started'),
                'resume_school_year_ended' => $this->session->userdata('applicant_school_date_ended'),
                // work experience //
                'resume_work_position' =>  $this->session->userdata('applicant_company_position'),
                'resume_company' => $this->session->userdata('applicant_company_name'),
                'resume_company_address' => $this->session->userdata('applicant_company_adress'),
                'resume_work_year_started' => $this->session->userdata('applicant_company_year_started'),
                'resume_work_year_ended' => $this->session->userdata('applicant_company_year_ended'),
                // finishing touches //
                'resume_about' => $this->session->userdata('applicant_about'),
                'resume_img_url' => $this->session->userdata('applicant_img_url'),
                'resume_cv_url' => $this->session->userdata('applicant_cv_url'),
                'resume_control_email_address' => $this->session->userdata('email_address')

            );


            $this->load->model('model_User');
            // insert data to table
            $this->model_User->create_resume($profile_data);
            // set profile status to table into TRUE
            $this->model_User->set_applicant_resume_status($this->session->userdata('email_address'), true);

            $this->load->model('model_Main');
            // get new profile status from table and set session of profile status into TRUE
            $profile_status = $this->model_Main->get_profile_status($this->session->userdata('email_address'));
            $this->session->set_userdata('profile_status', $profile_status);

            redirect('resume');
        }
        else
        {
            $this->create_resume_4();
        }
    }








    public function edit_resume()
    {   
        
        $this->load->model('model_User');
        $row = $this->model_User->get_applicant_resume_data($this->session->userdata('email_address'));
        $resume_data = array(
            // resume personal info
            'resume_first_name' => $row->resume_first_name,
            'resume_last_name' => $row->resume_last_name,
            'resume_address' => $row->resume_address,
            'resume_email' => $row->resume_email,
            'resume_mobile_number' => $row->resume_mobile_number,
            // resume work
            'resume_work_position' =>  $row->resume_work_position,
            'resume_company' => $row->resume_company,
            'resume_company_address' => $row->resume_company_address,
            'resume_work_year_started' => $row->resume_work_year_started,
            'resume_work_year_ended' => $row->resume_work_year_ended,
            // resume school
            'resume_school' => $row->resume_school,
            'resume_degree' => $row->resume_degree,
            'resume_school_address' => $row->resume_school_address,
            'resume_school_year_started' => $row->resume_school_year_started,
            'resume_school_year_ended' => $row->resume_school_year_ended,
            // etc
            'resume_img_url' => $row->resume_img_url,
            'resume_cv_url' => $row->resume_cv_url,
            'resume_about_me' => $row->resume_about
        );

        $page_data = array(
            'page_title' => 'Resume',
            'email_address' => $this->session->userdata('email_address'),
        );

        $this->session->set_userdata($page_data);
        $this->load->view('user/user-header',$page_data);
        $this->load->view('user/edit-resume',$resume_data);
        $this->load->view('user/user-footer');
    }



    public function edit_resume_validation()
    {
        
    }






    

}
