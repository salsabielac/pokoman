<?php 

/**
* 
*/
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

}