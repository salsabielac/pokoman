<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cetak_model extends CI_Model
{
	
	public function view()
	{
		$this->db->select("id,name,address,email,telephone,class,ekstra");
		$query = $this->db->get('ekstra');
		return $query->result();
	}

	public function view_row()
	{
		$this->db->select("id,name,address,email,telephone,class,ekstra");
		$query = $this->db->get('ekstra');
		return $query->result();
	}
}
