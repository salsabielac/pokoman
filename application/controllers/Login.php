<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Siswa_model');
		$this->load->library('form_validation');
		
	}
	public function index()
	{
		$this->load->view('ekstra/login_view');
	}
	public function cekLogin()
	{
		$this->form_validation->set_rules('nis', 'nis', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required|callback_cekDb');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('ekstra/login_view');
			//var_dump($_POST);
		}else{
			//redirect('Home','refresh');
			if ($this->session->userdata('logged_in')) {
				$session_data = $this->session->userdata('logged_in');
				redirect('home','refresh');
			}
			
		}
	}
	public function cekDb($password)
	{
		$nis=$this->input->post('nis');
		$result = $this->Siswa_model->login($nis,$password);
		if($result){
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = array(
					'id' => $row->id,
					// 'nis'=> $row->nis,
				);
				$this->session->set_userdata('logged_in',$sess_array);
			}
			return true;
		}else{
			$this->form_validation->set_message('cekDb',"Login Gagal ");
			return false;
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('ekstra/home','refresh');
	}
	
	public function register()
	{
		$this->form_validation->set_rules('nis', 'nis', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$this->form_validation->set_rules('fullname', 'fullname', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('kelas', 'kelas', 'trim|required');
		$this->form_validation->set_rules('telp', 'telp', 'trim|required');	

		
		if($this->form_validation->run()==FALSE){
			$this->load->view('ekstra/register');
			var_dump($_POST);
		}else{
			$this->Siswa_model->daftar();
			redirect('login');
		}
		
	}
}