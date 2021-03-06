<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_query');
		$this->load->library('form_validation');
		$this->load->helper('url', 'html');
	}

	public function index()
	{ 
		$data = $this->m_query->dataMahasiswa();
		$this->load->view('v_mahasiswa', ['data'=>$data]);
	}

	public function insertMahasiswa()
	{
		$this->form_validation->set_rules('nim', 'Nim', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		if($this->form_validation->run() )
		{
			$nim = $this->input->post('nim');
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$status = $this->input->post('status');
			$mahasiswa = (['nim'=>$nim,
						'nama' =>$nama,
						'alamat'=>$alamat,
						'status'=>$status]);
			$data = array_merge($mahasiswa);
			//print_r($data);
			//exit();
			if($this->m_query->TambahMahasiswa($data) == false)
			{
				$this->session->set_flashdata('pesan', 'Data Sudah Tersimpan');
				redirect('C_mahasiswa', 'refresh');
			}
			else
			{
				$this->index();
			}
		}
		else
		{
			$this->index();
		}
	}

	public function EditMahasiswa($id)
	{
		$data = $this->m_query->AmbilDataMahasiswa($id);
		$this->load->view('v_editmahasiswa', ['data'=>$data]);
	}
}
