<?php

class Kurikulum_model extends CI_Model {
	
	private $tbl = 'kurikulum';

	function selectAll()
	{
		return $this->db->get($this->tbl)->result();
	}
	
	function get_list_data($limit = '10', $offset = '0') 
  	{
		$this->db->limit($limit, $offset);
  		$this->db->order_by('id_pelajaran','asc');
		return $this->db->get($this->tbl,$limit,$offset);
  	}
	function get_relasi_data($limit = '10', $offset = '0'){
		if($offset==""){ $offset=0; }
		$query = $this->db->query("SELECT a.*,b.nama_ptk,c.no_ruang FROM kurikulum a,ptk b, tkelas c WHERE a.guru=b.nuptk and a.kelas=c.id_kelas ORDER BY a.id_pelajaran DESC LIMIT $offset,$limit");
		return $query->result();
	}
	function selectPelajaran()
	{
		return $this->db->query("SELECT id_pelajaran, nama_pelajaran FROM kurikulum")->result();
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
		$this->db->delete($this->tbl, array('id_pelajaran'=>$id));
	}
	
	function select($id)
	{
		return $this->db->get_where($this->tbl, array('id_pelajaran'=>$id))->row();
	}
	
	function update($id)
	{
		$this->db->where('id_pelajaran', $id)->update($this->tbl, $_POST);
	}
	function selectLike($kelas)
	{
		$this->db->where('kelas',$kelas);	
		return $this->db->get($this->tbl)->result();
	}
	
	function search($key)
	{
		$this->db->like('nama_pelajaran',$key);
		return $this->db->get($this->tbl);
	}
	
}