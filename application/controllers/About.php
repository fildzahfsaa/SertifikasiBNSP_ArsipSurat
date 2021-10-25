<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index()
    {
        $this->load->view("template/header_arsip");
        $this->load->view("arsip/about");
        $this->load->view("template/footer_about");
    }

}

/* End of file About.php */


?>