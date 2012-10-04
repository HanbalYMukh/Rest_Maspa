<?php

class Pendptk_model extends CI_Model {
	
	private $tbl = 'ptk_pendidikan';
	
	function Pendptk_model()
	{
		parent::__cOnstruct();
	}

	function selectAll()
	{
		return $this->db->get('ptk_pendidikan')->result();
	}
	
	function get_list_data($limit = '10', $offset = '0') 
  	{
		$query = "SELECT ptk.*, ptk_pendidikan.* FROM ptk , ptk_pendidikan WHERE ptk_pendidikan.nuptk = ptk.nuptk ORDER_BY jenjang ASC LIMIT $offset, $limit";
		return $query->result();
  	}
	
	function get_relasi($limit = '10', $offset = '0'){
		if($offset==""){ $offset=0; }
		$query = $this->db->query("SELECT * FROM ptk a,ptk_pendidikan b WHERE a.nuptk = b.nuptk LIMIT $offset,$limit");
		return $query->result();
	}
	
	function countData() 
	{   
	  	return $this->db->count_all('ptk_pendidikan');
  	}
	
	function insert($set)
	{
		$this->db->insert('ptk_pendidikan', $set);
	}
	
	function delete($id)
	{
		$this->db->delete('ptk_pendidikan', array('id_pendidikan_ptk'=>$id));
	}
	
	function select($id)
	{
		$query = $this->db->query("SELECT ptk_pendidikan.*,ptk.nama_ptk FROM ptk,ptk_pendidikan WHERE ptk_pendidikan.nuptk=ptk.nuptk AND ptk_pendidikan.id_pendidikan_ptk = '$id'");
		return $query->result();
	}
	
	function update($id)
	{
		$this->db->where('id_pendidikan_ptk', $id)->update('ptk_pendidikan', $_POST);
	}
	
	function search($key,$limit = '10', $offset = '0')
	{
		if($offset==""){ $offset=0; }
		$query = $this->db->query("SELECT * FROM ptk a,ptk_pendidikan b where a.nuptk = b.nuptk AND nama_ptk LIKE '%$key%'LIMIT $offset,$limit");
		
		return $query->result();
	}
}