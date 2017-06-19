<?php
class Ekstra extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('ekstra_model');
		// if($this->session->userdata('logged_in')){
		// 	$session_data = $this->session->userdata('logged_in');
		// 	$data['username'] = $session_data['username'];
		// }else{
		// 	redirect('login','refresh');
		// }
	}

	public function index(){
		$this->load->view('uas/header');
		$this->load->view('uas/home');
		$this->load->view('uas/footer');
	}

	public function datatable(){
		$object['ekstra_object']=$this->ekstra_model->getEkstra();
		$this->load->view('uas/tampil', $object);
	}

	public function datatable_ajax(){
		$this->load->view('uas/tampil2');
	}

	public function data_server(){
		$this->load->library('Datatables');
		$this->datatables
			->select('id,name,address,email,telephone,class,ekstra')
			->from('ekstra');
			echo $this->datatables->generate();
	}

	public function tampil(){
		$this->load->model('ekstra_model');
		$object['ekstra_object']=$this->ekstra_model->getEkstra();
		$this->load->view('uas/header');
		$this->load->view('uas/tampil.php', $object);
		$this->load->view('uas/footer');
	}

	public function create(){
		$this->load->view('uas/header');
		$this->form_validation->set_rules('name', 'name', 'trim|required');
		if($this->form_validation->run()==FALSE){
			$this->load->view('uas/daftar');
			//var_dump($_POST);
		}else{
			$this->ekstra_model->insertEkstra();
			$this->session->set_flashdata('msg_success', 'Yay, data berhasil disimpan');
			redirect('ekstra/daftar');
		}
		$this->load->view('uas/footer');
	}

	public function update($id){
		$this->load->view('uas/header');
		$this->form_validation->set_rules('name', 'name', 'trim|required');
		$this->form_validation->set_rules('address', 'address', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('telephone', 'telephone', 'trim|required');
		$this->form_validation->set_rules('class', 'class', 'trim|required');
		$this->form_validation->set_rules('ekstra', 'ekstra', 'trim|required');
		$data['ekstra']=$this->ekstra_model->getEkstra($id);
		if($this->form_validation->run()==FALSE){
			$this->load->view('uas/edit_ekstra', $data);
		}else{
			$this->ekstra_model->updateById($id);
			$this->load->view('uas/edit_success');
		}
		$this->load->view('uas/footer');
	}

	public function delete($id){
		$this->load->view('uas/header');
		$this->ekstra_model->delete($id);
		$this->load->view('uas/delete_success');
		$this->load->view('uas/footer');
	}

	public function home(){
		$this->load->view('uas/header');
		$this->load->view('uas/home');
		$this->load->view('uas/footer');
	}

	public function olahraga(){
		$this->load->view('uas/header');
		$this->load->view('uas/olahraga');
		$this->load->view('uas/footer');
	}

	public function basket(){
		$this->load->view('uas/header');
		$this->load->view('uas/basket');
		$this->load->view('uas/footer');
	}

	public function volly(){
		$this->load->view('uas/header');
		$this->load->view('uas/volly');
		$this->load->view('uas/footer');
	}

	public function futsal(){
		$this->load->view('uas/header');
		$this->load->view('uas/futsal');
		$this->load->view('uas/footer');
	}

	public function karate(){
		$this->load->view('uas/header');
		$this->load->view('uas/karate');
		$this->load->view('uas/footer');
	}

	public function seni(){
		$this->load->view('uas/header');
		$this->load->view('uas/seni');
		$this->load->view('uas/footer');
	}

	public function band(){
		$this->load->view('uas/header');
		$this->load->view('uas/band');
		$this->load->view('uas/footer');
	}
	
	public function drumband(){
		$this->load->view('uas/header');
		$this->load->view('uas/drumband');
		$this->load->view('uas/footer');
	}

	public function padus(){
		$this->load->view('uas/header');
		$this->load->view('uas/padus');
		$this->load->view('uas/footer');
	}

	public function daftar(){
		$this->load->view('uas/header');
		$this->load->view('uas/daftar');
		$this->load->view('uas/footer');
	}

	public function kegiatan(){
		$this->load->view('uas/header');
		$this->load->view('uas/Kegiatan_view');
		$this->load->view('uas/footer');
	}
}
?>