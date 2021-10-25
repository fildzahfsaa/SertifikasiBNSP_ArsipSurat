<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_arsip extends CI_Model {

    public function getAlldataarsip(){
		$query=$this->db->get('arsip');
		return $query->result_array();
	}
	
	public function tambahdataarsip()
	{
        $this->id_surat = uniqid();
		$data= 
		[	
			'no_surat' => $this->input->post('no_surat',true),
			'kategori' => $this->input->post('kategori',true),
			'judul' => $this->input->post('judul',true),
            'file' => $this->uploadfile(),
            'waktu_pengarsipan' => $this->input->post('waktu_pengarsipan', true)
		];
		$this->db->insert('arsip',$data);
    }

    public function uploadfile()
    {
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'pdf';
        $config['file_name'] = $this->id_surat;
        $config['overwrite'] = true;
        // $config['max_size'] = 1024;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file')) {
            return $this->upload->data("file_name");
        }
    }

	public function hapusdataarsip($id_surat)
	{
		$this->db->where('id_surat',$id_surat);
		$this->db->delete('arsip');
	}
	
	public function cariDataArsip()
    {
        $keyword=$this->input->post('keyword');
        $this->db->like('no_surat', $keyword);
        $this->db->or_like('kategori', $keyword);
        $this->db->or_like('judul', $keyword);
        $this->db->or_like('waktu_pengarsipan', $keyword);
        return $this->db->get('arsip')->result_array();
	}
	
	public function getArsipbyID($id_surat){
        return $this->db->get_where('arsip',['id_surat'=> $id_surat])->row_array();
    }

    public function ubahdataarsip($id_surat)
    {
        $data=
        [ 
            'no_surat' => $this->input->post('no_surat',true),
			'kategori' => $this->input->post('kategori',true),
			'judul' => $this->input->post('judul',true),
            'file' => $this->uploadfile(),
            'waktu_pengarsipan' => $this->input->post('waktu_pengarsipan', true)              
        ];
        $this->db->where('id_surat', $this->input->post('id_surat'));
        $this->db->update('arsip',$data);
    }
}