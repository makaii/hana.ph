<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

    public function get_profile()
    {
        $this->load->model('model_Company');
        $email = 'markbis@gmail.com';
        $row = $this->model_Company->get_company_profile_data($email);
        echo "<pre>";
        echo print_r($row);
        echo "</pre>";
    }

        

}
