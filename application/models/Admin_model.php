<?php 


class Admin_model extends CI_Model {

		public function login($username,$password){
			$this->db->where('username',$username);
			$this->db->where('password',md5($password));
			$query = $this->db->get('tb_admin');
			if ($query->num_rows() == 1) {
				return $query->result();
			}else{
				return false;
			}
		}

		public function kegiatan(){
			$mamam = array(
					  'n_kegiatan'   => $this->input->post('title'),
					  'd_kegiatan'   => $this->input->post('descrip'),
					  'img_kegi'     => $this->upload->data('file_name'),
					  'tgl'          => $this->input->post('tgl')
			);
		$this->db->insert('tb_kegiatan',$mamam);
		}

		public function edit($id){
			$mamam = array(
					  'n_kegiatan'   => $this->input->post('title'),
					  'd_kegiatan'   => $this->input->post('descrip'),
					  'img_kegi'     => $this->upload->data('file_name'),
					  'tgl'          => $this->input->post('tgl')
			);
				$this->db->where('id',$id);
				$this->db->update('tb_kegiatan',$mamam);
		}

		public function getById($id){
			$this->db->from('tb_kegiatan');
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
		$this->db->delete('tb_kegiatan');
	}

}