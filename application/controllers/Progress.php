<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Progress extends CI_Controller {

    public function index()
    {
        $this->load->view("template/header_arsip");
        $this->load->view("arsip/progress");
        $this->load->view("template/footer_progress");
    }

}

/* End of file progress.php */


?>