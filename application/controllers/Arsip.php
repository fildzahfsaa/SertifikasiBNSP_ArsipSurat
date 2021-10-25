<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_arsip');
        $this->load->library('session');
	}

    public function index()
    {
        $data['arsip'] = $this->Model_arsip->getAlldataarsip();
        if($this->input->post('keyword')){
            $data['arsip']=$this->Model_arsip->cariDataArsip();
        }

        $this->load->view("template/header_arsip", $data);
        $this->load->view("arsip/index",$data);
        $this->load->view("template/footer_arsip", $data);
    }

    public function hapusArsip($id_surat){
        $this->Model_arsip->hapusdataarsip($id_surat);
        $this->session->set_flashdata('message','Data Berhasil Dihapus');
        redirect('arsip','refresh');
    }

    public function inputArsip(){
        $this->form_validation->set_rules('no_surat','no_surat','required');
        $this->form_validation->set_rules('kategori','kategori','required');
        $this->form_validation->set_rules('judul','judul','required');
        $this->form_validation->set_rules('file','file');
        $this->form_validation->set_rules('waktu_pengarsipan','waktu_pengarsipan','required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('template/header_arsip');
            $this->load->view('arsip/input_arsip');
            $this->load->view('template/footer_arsip');
        } else{
            $this->Model_arsip->tambahdataarsip();
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil Ditambahkan
            </div>');
            redirect('arsip','refresh');
        }
    }

    public function lihatArsip($id_surat)
    {
        $data['surat'] = $this->Model_arsip->getArsipbyID($id_surat);

        $this->load->view("template/header_arsip", $data);
        $this->load->view("arsip/lihat_arsip",$data);
        $this->load->view("template/footer_arsip", $data);
    }

    public function editArsip($id_surat){
        $data['surat'] = $this->Model_arsip->getArsipbyID($id_surat);
        $this->form_validation->set_rules('no_surat','no_surat','required');
        $this->form_validation->set_rules('kategori','kategori','required');
        $this->form_validation->set_rules('judul','judul','required');
        $this->form_validation->set_rules('file','file');
        $this->form_validation->set_rules('waktu_pengarsipan','waktu_pengarsipan','required');
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('template/header_arsip');
            $this->load->view('arsip/edit_arsip', $data);
            $this->load->view('template/footer_arsip');
        } else{
            $this->Model_arsip->ubahdataarsip($id_surat);
            $this->session->set_flashdata('flash-data','ditambahkan');
            redirect('arsip','refresh');
        }
    }
}
