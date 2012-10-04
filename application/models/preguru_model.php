<?php

class Preguru_model extends CI_Model {
	
	private $tbl = 'absen_guru';

	function selectAll()
	{
		return $this->db->get($this->tbl)->result();
	}
	
	function get_list_data($limit = '10', $offset = '0') 
  	{
		$this->db->limit($limit, $offset);
  		$this->db->order_by('id','asc');
		return $this->db->get($this->tbl,$limit,$offset);
  	}
	
	function get_relasi($limit = '10', $offset = '0'){
		if($offset==""){ $offset=0; }
		$query = $this->db->query("SELECT a.*, b.nama_pelajaran,c.nama_ptk FROM absen_guru a, kurikulum b,ptk c WHERE a.nuptk=c.nuptk AND a.id_pelajaran=b.id_pelajaran ORDER BY a.id DESC LIMIT $offset,$limit");
		return $query->result();
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
		$this->db->delete($this->tbl, array('id'=>$id));
	}
	
	function select($id)
	{
		$query = $this->db->query("SELECT absen_guru.*,ptk.nama_ptk FROM ptk,absen_guru WHERE absen_guru.nuptk=ptk.nuptk AND absen_guru.id= '$id'");
		return $query->result();
	}
	
	function update($id)
	{
		$this->db->where('id', $id)->update($this->tbl, $_POST);
	}
	
	function search($key,$limit = '10', $offset = '0')
	{
		if($offset==""){ $offset=0; }
		$query = $this->db->query("SELECT a.*, b.nama_pelajaran,c.nama_ptk FROM absen_guru a, kurikulum b,ptk c WHERE a.nuptk=c.nuptk AND a.id_pelajaran=b.id_pelajaran AND nama_ptk LIKE '%$key%' ORDER BY a.id LIMIT $offset,$limit");
		
		return $query->result();
	}
	
}