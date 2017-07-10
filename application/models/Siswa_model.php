<?php 


class Siswa_model extends CI_Model {

	public function login($nis,$password)
	{
		$this->db->select('id','nis','password');
		$this->db->from('tb_siswa');
		$this->db->where('nis',$nis);
		$this->db->where('password',md5($password));

		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		}else{
			return false;
		}

	}

	public function daftar(){
		$object = array
		(
			'nis'      => $this->input->post('nis'),
			'password' => md5($this->input->post('password')),
			'fullname' => $this->input->post('fullname'),
			'email'    => $this->input->post('email'),
			'address'  => $this->input->post('address'),
			'kelas'    => $this->input->post('kelas'),
			'telp'     => $this->input->post('telp')
		);
		$this->db->insert('tb_siswa',$object);
	}



}