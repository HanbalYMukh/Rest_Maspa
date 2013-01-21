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
		$query = $this->db->query ("SELECT a.*, b.*, COUNT( id ) AS jml FROM komunitas_kelas a, tkelas b where a.kelas=b.id_kelas GROUP BY kelas");
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
		return $this->db->get_where($this->tbl, array('id'=>$id));
	}
	
	function selectKelas($kelas)
	{
		$query = $this->db->query ("SELECT a.* , b.no_induk , b.nama_siswa, c.* from komunitas_kelas a, siswa b, tkelas c WHERE a.siswa=b.no_induk AND a.kelas='$kelas' AND c.id_kelas='$kelas'");
		return $query->result();
	}
	
	function edit()
	{
		$this->db->where('id',$_POST['id']);
		$this->db->set('kelas',$_POST['kelas']);
		$this->db->update($this->tbl);
	}
	
	function search($key)
	{
		$this->db->like('no_ruang',$key);
		return $this->db->get($this->tbl);
	}
	function siswaNilai($kelas)
	{
		$query = $this->db->query ("Select a.*, b.nama_siswa from komunitas_kelas a,siswa b where a.kelas=$kelas and a.siswa=b.no_induk");
		return $query->result();
	}
	
}