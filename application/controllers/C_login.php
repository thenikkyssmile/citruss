<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url', 'html');
		$this->load->library('form_validation');
		$this->load->model('m_query');
	}
	
	 public function index()
	{
		$this->load->view('v_login');
	}

	public function user_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		if ($this->form_validation->run() )
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->m_query->login($username, $password);
		}
		else
		{
			$this->index();
		}
	}

	public function dashboard()
	{
		$this->load->view('v_dashboard');
	}

		public function keluar()
	{
		$this->session->sess_destroy();
		redirect('C_login', 'refresh');	
	}
}
