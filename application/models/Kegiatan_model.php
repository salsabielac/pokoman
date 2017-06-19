<?php

class Kegiatan_model extends CI_Model
{
	public function getPhoto(){
		$view=$this->db->get('kegiatan');
		return $view->result();
	}

	public function insertPhoto($photo){
		$object=array('photo'=>$photo);
		$this->db->insert('kegiatan',$object);
	}

	public function updatePhoto($id,$photo){
		$object = array(
			'photo' => $photo
		);
		$this->db->where('id',$id);
		$this->db->update('kegiatan',$object);
	}

	public function getById($id){
		$this->db->from('kegiatan');
		$this->db->where('id',$id);
		$getById = $this->db->get();

		if($getById->num_rows() == 1){
			return $getById->result();
		}else{
			return false;
		}

	}

	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('kegiatan');
	}

}
?>