<?php 


class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->library('form_validation');
	}

	public function index(){
		$this->load->view('ekstra/adm_login');
	}

	public function kegiatan(){
		$this->load->view('ekstra/tambah_kegiatan');
	}


	public function dashboard(){
		$this->load->view('ekstra/adm_dashboard');
	}

	public function cekLogin()
	{
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required|callback_cekDb');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('ekstra/adm_login');
			//var_dump($_POST);
		}else{
			//redirect('Home','refresh');
			if ($this->session->userdata('logged_in')) {
				$session_data = $this->session->userdata('logged_in');
				redirect('admin/dashboard','refresh');
			}
			
		}
	}
	public function cekDb($password)
	{
		$username=$this->input->post('username');
		$result = $this->Admin_model->login($username,$password);
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

}