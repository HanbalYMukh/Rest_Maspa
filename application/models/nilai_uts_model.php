<?php
class nilai_uts_model extends CI_model {

private $tbl = 'nilai_uts';

	function selectAll()
	{
		return $this->db->get($this->tbl)->result();
	}
	
	function get_list_data($kelas) 
  	{
		
		$query = $this->db->query ("select a.*, b.nama_siswa, c.*,d.* from nilai_uts a, siswa b, kurikulum c, thn_ajaran d where a.nis=b.no_induk and a.mapel=c.id_pelajaran and a.thn_ajaran=d.id and a.kelas=$kelas order by a.nilai desc limit 100");
		return $query->result();
	}
	function ambilNilai($nis,$thn_ajaran,$semester){
	return $this->db->query("SELECT a.*,b.*,c.*,d.* FROM nilai_uts a, siswa b, thn_ajaran c, kurikulum d WHERE a.nis=b.no_induk and a.thn_ajaran=c.id and d.id_pelajaran=a.mapel and a.nis='$nis' and a.thn_ajaran='$thn_ajaran' and smester='$semester'")->result();
	}
	function dataNilai($kelas,$mapel,$thn_ajaran,$semester){
		$query = $this->db->query ("select a.*, b.nama_siswa, c.*,d.* from nilai_uts a, siswa b, kurikulum c, thn_ajaran d where a.nis=b.no_induk and a.mapel=c.id_pelajaran and a.thn_ajaran=d.id and a.kelas='$kelas' and a.mapel='$mapel' and a.thn_ajaran='$thn_ajaran' and a.smester='$semester'");
		return $query->result();
	}
	function countData() 
	{   
	  	return $this->db->count_all($this->tbl);
  	}
	function selectSiswa ($nis)
	{
		return $this->db->query("SELECT a.*,b.*,c.*,d.* FROM nilai_uts a, siswa b, thn_ajaran c, kurikulum d WHERE a.nis=b.no_induk and a.thn_ajaran=c.id and d.id_pelajaran=a.mapel and a.nis=$nis")->result();
	}
	function insert($nis,$mapel,$kelas,$thn_ajaran,$smester,$nilai)
	{
		$this->db->set('nis',$nis);
		$this->db->set('mapel',$mapel);
		$this->db->set('kelas',$kelas);
		$this->db->set('thn_ajaran',$thn_ajaran);
		$this->db->set('smester',$smester);
		$this->db->set('nilai',$nilai);
		$this->db->insert($this->tbl);
	}
	
	function delete($id)
	{
		$this->db->delete($this->tbl, array('id_uts'=>$id));
	}
	
	function select($id)
	{
		return $this->db->get_where($this->tbl, array('id_uts'=>$id));
	}
	function selectId($id)
	{
		return $this->db->query("SELECT a.*,b.*,c.*,d.* FROM nilai_uts a, siswa b, thn_ajaran c, kurikulum d WHERE a.nis=b.no_induk and a.thn_ajaran=c.id and d.id_pelajaran=a.mapel and a.id_uts=$id")->result();
	}
	function update()
	{
		$this->db->where('id_uts',$_POST['id']);
		$this->db->set('nilai',$_POST['nilai']);
		$this->db->update($this->tbl);
	}
	
}