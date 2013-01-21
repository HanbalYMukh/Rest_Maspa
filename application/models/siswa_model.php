<?php

class Siswa_model extends CI_Model {
	
	private $tbl = 'siswa';

	function selectAll()
	{
		return $this->db->get($this->tbl)->result();
	}
	
	function get_list_data($limit = 10, $offset = 0) 
  	{
		$this->db->limit($limit, $offset);
  		$this->db->order_by('id_siswa','asc');
		return $this->db->get($this->tbl,$limit,$offset);
  	}
	
	function selectNama()
	{
		return $this->db->query("SELECT no_induk, nama_siswa FROM siswa ")->result();
	}
	function selectBiodata($nis){
		$this->db->where('no_induk',$nis);
		return $this->db->get($this->tbl);
	}
	function countData() 
	{   
	  	return $this->db->count_all($this->tbl);
  	}
	
	function insert($set)
	{
		$this->db->insert($this->tbl, $set);
	}
	
	function delete($id)
	{
		$this->db->delete($this->tbl, array('id_siswa'=>$id));
	}
	
	function select($id)
	{
		return $this->db->get_where($this->tbl, array('id_siswa'=>$id))->row();
	}
	
	function update($id)
	{
		$this->db->where('id_siswa', $id)->update($this->tbl, $_POST);
	}
	
	function search($key)
	{
		$this->db->like('nama_siswa',$key);
		return $this->db->get($this->tbl);
	}
	
}