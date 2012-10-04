<?php
	
	class Tahunajaran_model Extends CI_Model{
		private $tbl='thn_ajaran';
	
		function selectAll(){
			return $this->db->get($this->tbl)->result();
		}
		function get_list_data($limit = '10', $offset = '0') 
		{
		$this->db->limit($limit, $offset);
  		$this->db->order_by('id','asc');
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
	}