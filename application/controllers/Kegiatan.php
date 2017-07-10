<?php
class Kegiatan extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		//$this->load->helper('file');
		$this->load->model('Kegiatan_model');
	}

	public function index(){
		//$this->load->view('uas/header');
		$data['show']=$this->Kegiatan_model->getPhoto();
		$this->load->view('uas/Kegiatan_view',$data);
		//$this->load->view('uas/footer');
	}

	public function hapus($id){
		$path = "./gambar/upload/";
		$record = $this->Kegiatan_model->getById($id);
		//delete_files($path.$record->photo);
		$filename = $record[0]->photo;
		unlink($path . $filename);
		//var_dump($record);
		$delete = $this->Kegiatan_model->delete($id);

		if($delete = true){
			$this->session->set_flashdata('msg_success', 'Data Berhasil Dihapus');
		}else {
			$this->session->set_flashdata('msg_err', 'Data gagal Dihapus :(');
		}

		redirect('kegiatan','refresh');	

	}

	public function save(){
		// Resize Image Here :)
		// $config['image_library'] = 'gd2';
  		// $config['source_image'] = $image_data['full_path']; //get original image
  		// $config['maintain_ratio'] = TRUE;
 		// $config['width']         = 75;
		// $config['height']       = 50;
		
		// $this->image_lib->resize();

		$config['upload_path'] = 'gambar/upload';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		
		
		if ( ! $this->upload->do_upload('gambar')){
			//$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('msg_err', 'Data gagal disimpan :(');
			// echo $this->upload->display_errors();
			redirect('kegiatan');
		}
		else{

		$image_data = $this->upload->data();	
			// Resize Image Here :)
		$config['image_library'] = 'gd2';
  		$config['source_image'] = $image_data['full_path']; //get original image
  		$config['maintain_ratio'] = TRUE;
 		$config['width']         = 300;
		$config['height']       = 300;

		$this->load->library('image_lib', $config);

		$this->image_lib->resize();

			$data = array('upload_data' => $this->upload->data());
			$photo = $this->upload->data('file_name');	
			$this->Kegiatan_model->insertPhoto($photo);
			$this->session->set_flashdata('msg_success', 'Yay, data berhasil disimpan');
			redirect('kegiatan');
		}

	}

	public function edit($id){
		$this->load->view('uas/header');
		//$id = array('id' => $id);
		$data['find'] = $this->Kegiatan_model->getById($id);
		$this->load->view('uas/edit_kegiatan',$data);
		$this->load->view('uas/footer');
	}

	public function update(){
		$id = $this->input->post('id');

		$config['upload_path'] = 'gambar/upload';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('poto')){
			$this->session->set_flashdata('msg_err', 'Data gagal diubah :(');
			//var_dump($error);
		}
		else{
			$data = array('upload_data' => $this->upload->data());

			$path = "./gambar/upload/";
			$record = $this->Kegiatan_model->getById($id);
			//delete_files($path.$record->photo);
			$filename = $record[0]->photo;
			unlink($path . $filename);

			$photo = $this->upload->data('file_name');
			//var_dump($_POST);
			$this->Kegiatan_model->updatePhoto($id,$photo);
			$this->session->set_flashdata('msg_success', 'Yay, data berhasil diubah');
			redirect('kegiatan');

		}
	}

}
?>