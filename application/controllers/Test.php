<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

    
    public function get_user_type(){
        // $this->load->model('model_Main');

        
        // // $query = $this->db->query("SELECT * FROM accounts_tbl WHERE user_type='applicant' AND user_status='1' AND user_email='mark@gmail.com'");

        // $where = "user_type='applicant' AND user_status='1' AND user_email='"+$email+"'";
        // $query = $this->db->where($where);


        // // echo "<pre>";
        // // print_r($query);
        // // echo "</pre>";
        
        // if ($query->num_rows() == 1) {
        //     echo "success";
        // }
        // else
        //     echo "fail";
    }


    public function hey()
    {
        $email = 'luna@gmail.com';
        $this->load->model('model_User');
        $row = $this->model_User->get_applicant_resume_data($email);
        echo $row->resume_first_name;
    }

    public function hoy()
    {
        $this->load->model('model_Search');
        $search_result = $this->model_Search->search("web developer");
    }

    public function sup()
    {
        $this->load->model('model_Company');
        $email = 'mark4gmail.com';
        $row = $this->model_Company->get_company_profile_data($email);
        echo $row->company_name;
    }

    public function kek()
    {
        $this->load->model('model_Main');
        $email = 'admin@hana.ph';
        $row = $this->model_Main->get_user_type($email);
        echo $row;

    }


    public function lol()
    {
        $this->load->model('model_Admin');
        $row = $this->model_Admin->get_newest_users();
        echo "<pre>";
        echo print_r($row);
        echo "</pre>";
    }

        

}
