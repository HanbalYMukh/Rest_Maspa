<?php
	class Komunitas_model extends CI_Model {
	
	private $tbl = 'komunitas_kelas';

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
	
	function selectCountdata()
	{
		$query = $this->db->query ("SELECT *, COUNT( kelas ) AS jml FROM komunitas_kelas GROUP BY kelas");
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
		return $this->db->get_where($this->tbl, array('id'=>$id))->row();
	}
	
	function update($id)
	{
		$this->db->where('id', $id)->update($this->tbl, $_POST);
	}
	
	function search($key)
	{
		$this->db->like('no_ruang',$key);
		return $this->db->get($this->tbl);
	}
	
}