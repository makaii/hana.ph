<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

    public function index()
    {
       // $slug = url_title($this->session->userdata('job_title'));
        //$this->load->model('model_Company');
        //$this->model_Company->update_job_post($id);
        //echo "$id";
        $id = 26;
        $info = array
        (
            'job_title' => 'jobeee',
            'job_type' => 'job-type',
            'job_location' => 'job-location',
            'job_salary' => '50',
            'job_email' =>'email@gmail.com',
            'job_slug' => 'job-Title',
            'job_status' =>1,
            'job_description' => 'job_description',
        ); 

        $this->db->where('job_id', $id);
        $this->db->update('jobs_tbl',$info);


    }

    public function get_profile()
    {
        // $this->load->model('model_Company');
        // $email = 'markbis@gmail.com';
        // $row = $this->model_Company->get_company_profile_data($email);
        // echo "<pre>";
        // echo print_r($row);
        // echo "</pre>";

        



    }

        

}
