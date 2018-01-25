<?php

class history extends CI_Model {
    
	private $table = "history";
	
	public function create($data){
		$this->db->insert($this->table, $data);
		return TRUE;	
	}
	
	public function read($condition=null,$selector=null){
		
		if($selector==null) $selector = '*';
		$this->db->select($selector);
		$this->db->from($this->table);
		
		if( isset($condition) ) $this->db->where($condition);
		

		$query=$this->db->get();

		return $query->result_array();		
	}
	
	public function update($data,$condition){
		$this->db->where($condition);
		$this->db->update($this->table, $data);
		return TRUE;	
	}
	
	public function del($data){
		$this->db->where($data);
		$this->db->delete($this->table);
		return TRUE;	
	}
}
