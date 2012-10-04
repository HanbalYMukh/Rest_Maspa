<?php

class Pelptk_model extends CI_Model {
	
	private $tbl = 'ptk_pelatihan';
	private $tbl1 = 'ptk';

	function selectAll()
	{
		return $this->db->get($this->tbl)->result();
	}
	
	function get_list_data($limit = '10', $offset = '0') 
  	{
		$this->db->limit($limit, $offset);
  		$this->db->order_by('id_pelatihan','asc');
		return $this->db->get($this->tbl,$limit,$offset);
  	}
	
	function get_relasi($limit = '10', $offset = '0'){
		if($offset==""){ $offset=0; }
		$query = $this->db->query("SELECT * FROM ptk a,ptk_pelatihan b where a.nuptk = b.nuptk LIMIT $offset,$limit");
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
		$this->db->delete($this->tbl, array('id_pelatihan'=>$id));
	}
	
	function select($id)
	{
		$query = $this->db->query("SELECT ptk_pelatihan.*,ptk.nama_ptk FROM ptk,ptk_pelatihan WHERE ptk_pelatihan.nuptk=ptk.nuptk AND ptk_pelatihan.id_pelatihan = '$id'");
		return $query->row();
		
		
	}
	
	function update($id)
	{
		$this->db->where('id_pelatihan', $id)->update($this->tbl, $_POST);
	}
	
	function search($key,$limit = '10', $offset = '0')
	{
			
		if($offset==""){ $offset=0; }
		$query = $this->db->query("SELECT * FROM ptk a,ptk_pelatihan b where a.nuptk = b.nuptk AND nama_ptk LIKE '%$key%'LIMIT $offset,$limit");
		
		return $query->result();
		
	}
	
}