<?php

class Ptk_model extends CI_Model {
	
	private $tbl = 'ptk';

	function selectAll()
	{
		return $this->db->get('ptk')->result();
	}
	
	function selectNama()
	{
		return $this->db->query("SELECT id_ptk, nuptk, nama_ptk FROM ptk")->result();
	}
	
	function get_list_data($limit = '10', $offset = '0') 
  	{
		$this->db->limit($limit, $offset);
  		$this->db->order_by('id_ptk','asc');
		return $this->db->get('ptk',$limit,$offset);
  	}
	
	function countData() 
	{   
	  	return $this->db->count_all('ptk');
  	}
	
	function insert($set)
	{
		$this->db->insert('ptk', $set);
	}
	
	function delete($id)
	{
		$this->db->delete('ptk', array('id_ptk'=>$id));
	}
	
	function select($id)
	{
		return $this->db->get_where('ptk', array('id_ptk'=>$id))->row();
	}
	
	function update($id)
	{
		$this->db->where('id_ptk', $id)->update('ptk', $_POST);
	}
	
	function search($key)
	{
		
		$this->db->like('nama_ptk',$key);
		return $this->db->get($this->tbl);
	}
	
}