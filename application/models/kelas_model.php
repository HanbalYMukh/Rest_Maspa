<?php

class Kelas_model extends CI_Model {
	
	private $tbl = 'tkelas';

	function selectAll()
	{
		return $this->db->get($this->tbl)->result();
	}
	
	function get_list_data($limit = '10', $offset = '0') 
  	{
		$this->db->limit($limit, $offset);
  		$this->db->order_by('id_kelas','asc');
		return $this->db->get($this->tbl,$limit,$offset);
  	}
	
	function selectData()
	{
		return $this->db->query("SELECT id_kelas,no_ruang FROM tkelas")->result();
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
		$this->db->delete($this->tbl, array('id_kelas'=>$id));
	}
	
	function select($id)
	{
		return $this->db->get_where($this->tbl, array('id_kelas'=>$id))->row();
	}
	
	function update($id)
	{
		$this->db->where('id_kelas', $id)->update($this->tbl, $_POST);
	}
	
	function search($key)
	{
		$this->db->like('no_ruang',$key);
		return $this->db->get($this->tbl);
	}
	function selectNama()
	{	
		$kelas = $_POST['kelas'];
		$query = mysql_query ("SELECT id_kelas,no_ruang FROM tkelas WHERE id_kelas='$kelas'");
		$hasil = mysql_fetch_array ($query);
		return $hasil;
	}
}