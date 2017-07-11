<?php
class Kegiatan extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Admin_model');
	}

	public function index(){

		$this->load->model('Kegiatan_model');
		$data['show'] = $this->Kegiatan_model->getKegiatan();
		$this->load->view('ekstra/kegiatan',$data);
	}

	public function edit($id){
		$data['emp'] = $this->Admin_model->getById($id);
        $this->load->view('ekstra/adm_edit_kegiatan',$data);

        $this->form_validation->set_rules('title','title','trim|required');
		$this->form_validation->set_rules('descrip','descrip','trim|required');
		$this->form_validation->set_rules('tgl','tgl','trim|required');	

		if ($this->form_validation->run() === FALSE) {
			// $this->load->view('edit_story');
		}else {

			$config['upload_path']   = 'gambar/upload';
			$config['allowed_types'] = 'gif|jpg|png';
        	$config['max_size']      = '1000000000';

        	$this->load->library('upload', $config);

        	if(!$this->upload->do_upload('image')){
        		$err = array('error' => $this->upload->display_errors());
        		var_dump($err); 
        		var_dump($_POST);
        	}else{

        	// $path = "assets/upload/";
         // 	$get_record = $this->Kegiatan_model->getById($id);
         // 	$file = $get_record[0]->img_story;
         // 	unlink($path . $file);

	        $image_data = $this->upload->data();
        	$this->Admin_model->edit($id);
        	$this->session->set_flashdata('msg_success', 'Story has been update');
        	redirect('admin/dashboard','refresh');
				}
			}
	}


	public function hapus($id){
		$path = "./gambar/upload/";
		$record = $this->Admin_model->getById($id);
		//delete_files($path.$record->photo);
		$filename = $record[0]->photo;
		unlink($path . $filename);
		//var_dump($record);
		$delete = $this->Admin_model->delete($id);

		if($delete = true){
			$this->session->set_flashdata('msg_success', 'Data Berhasil Dihapus');
		}else {
			$this->session->set_flashdata('msg_err', 'Data gagal Dihapus :(');
		}

		redirect('admin/dashboard','refresh');	

	}
}
?>