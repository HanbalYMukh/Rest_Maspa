<?php

class Sertptk_model extends CI_Model {
	
	private $tbl = 'ptk_sertifikasi';

	function selectAll()
	{
		return $this->db->get($this->tbl)->result();
	}
	
	function get_list_data($limit = '10', $offset = '0') 
  	{
		$this->db->limit($limit, $offset);
  		$this->db->order_by('id_sertifikasi','asc');
		return $this->db->get($this->tbl,$limit,$offset);
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
		$this->db->delete($this->tbl, array('id_sertifikasi'=>$id));
	}
	
	function select($id)
	{
		$query = $this->db->query("SELECT ptk_sertifikasi.*,ptk.nama_ptk FROM ptk,ptk_sertifikasi WHERE ptk_sertifikasi.nuptk=ptk.nuptk AND ptk_sertifikasi.id_sertifikasi = '$id'");
		return $query->row();
	}
	
	function update($id)
	{
		$this->db->where('id_sertifikasi', $id)->update($this->tbl, $_POST);
	}
	
	function search($key)
	{
		
		$this->db->like('nama_sertifikasi',$key);
		return $this->db->get($this->tbl);
	}
	
}