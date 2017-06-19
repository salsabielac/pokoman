<?php
class Ekstra_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function insertEkstra(){
		$object=array
		(
			'name'=>$this->input->post('name'),
			'address'=>$this->input->post('address'),
			'email'=>$this->input->post('email'),
			'telephone'=>$this->input->post('telephone'),
			'class'=>$this->input->post('class'),
			'ekstra'=>$this->input->post('ekstra'),
		);
		$this->db->insert('ekstra',$object);
	}

	public function getEkstra(){
		$query=$this->db->get('ekstra');
		return $query->result();
	}

	public function updateById($id){
		$object=array
		(
			'name'=>$this->input->post('name'),
			'address'=>$this->input->post('address'),
			'email'=>$this->input->post('email'),
			'telephone'=>$this->input->post('telephone'),
			'class'=>$this->input->post('class'),
			'ekstra'=>$this->input->post('ekstra'),
		);
		$this->db->where('id',$id);
		$this->db->update('ekstra',$object);
	}

	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('ekstra');
	}
}
?>