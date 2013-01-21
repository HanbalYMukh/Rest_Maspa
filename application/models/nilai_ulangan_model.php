<?php
class nilai_ulangan_model extends CI_model {

private $tbl = 'nilai_ulangan';

	function selectAll()
	{
		return $this->db->get($this->tbl)->result();
	}
	
	function get_list_data($kelas) 
  	{
		
		$query = $this->db->query ("select a.*, b.nama_siswa, c.*,d.* from nilai_ulangan a, siswa b, kurikulum c, thn_ajaran d where a.nis=b.no_induk and a.mapel=c.id_pelajaran and a.thn_ajaran=d.id and a.kelas=$kelas order by a.thn_ajaran desc limit 100");
		return $query->result();
	}
	function ambilNilai($nis,$thn_ajaran,$semester){
	return $this->db->query("SELECT a.*,b.*,c.*,d.* FROM nilai_ulangan a, siswa b, thn_ajaran c, kurikulum d WHERE a.nis=b.no_induk and a.thn_ajaran=c.id and d.id_pelajaran=a.mapel and a.nis='$nis' and a.thn_ajaran='$thn_ajaran' and smester='$semester'")->result();
	}
	function dataNilai($kelas,$mapel,$thn_ajaran,$semester){
		$query = $this->db->query ("select a.*, b.nama_siswa, c.*,d.* from nilai_ulangan a, siswa b, kurikulum c, thn_ajaran d where a.nis=b.no_induk and a.mapel=c.id_pelajaran and a.thn_ajaran=d.id and a.kelas='$kelas' and a.mapel='$mapel' and a.thn_ajaran='$thn_ajaran' and a.smester='$semester'");
		return $query->result();
	}
	function countData() 
	{   
	  	return $this->db->count_all($this->tbl);
  	}
	function selectSiswa ($nis)
	{
		return $this->db->query("SELECT a.*,b.*,c.*,d.* FROM nilai_ulangan a, siswa b, thn_ajaran c, kurikulum d WHERE a.nis=b.no_induk and a.thn_ajaran=c.id and d.id_pelajaran=a.mapel and a.nis=$nis")->result();
	}
	function insert($nis,$mapel,$kelas,$thn_ajaran,$smester,$jenis,$nilai)
	{
		$this->db->set('nis',$nis);
		$this->db->set('mapel',$mapel);
		$this->db->set('kelas',$kelas);
		$this->db->set('thn_ajaran',$thn_ajaran);
		$this->db->set('smester',$smester);
		switch ($jenis){
			case 1:
				$this->db->set('nilai_1',$nilai);
			break;
			case 2:
				$this->db->set('nilai_2',$nilai);
			break;
			case 3:
				$this->db->set('nilai_3',$nilai);
			break;
			case 4:
				$this->db->set('nilai_4',$nilai);
			break;
			case 5:
				$this->db->set('nilai_5',$nilai);
			break;
			default:
				echo'anda belum memilih jenis nilai';
		}
		$this->db->insert($this->tbl);
	}
	function insertUpdate($nis,$kelas,$jenis,$nilai)
	{
		$this->db->where('nis',$nis);
		$this->db->where('mapel',$_POST['mapel']);
		$this->db->where('kelas',$kelas);
		$this->db->where('thn_ajaran',$_POST['thn_ajaran']);
		$this->db->where('smester',$_POST['semester']);
		switch ($jenis){
			case 1:
				$this->db->set('nilai_1',$nilai);
			break;
			case 2:
				$this->db->set('nilai_2',$nilai);
			break;
			case 3:
				$this->db->set('nilai_3',$nilai);
			break;
			case 4:
				$this->db->set('nilai_4',$nilai);
			break;
			case 5:
				$this->db->set('nilai_5',$nilai);
			break;
			default:
				echo'anda belum memilih jenis nilai';
		}
		$this->db->update($this->tbl);
	}
	function ceckData($nis,$mapel,$kelas,$thn_ajaran,$smester){
		$query = mysql_query("SELECT * FROM nilai_ulangan WHERE nis='$nis' and mapel='$mapel' and kelas='$kelas' and thn_ajaran='$thn_ajaran' and smester='$smester'");
		return mysql_fetch_array($query);
	}
	function delete($id)
	{
		$this->db->delete($this->tbl, array('id_ulangan'=>$id));
	}
	
	function select($id)
	{
		return $this->db->get_where($this->tbl, array('id_ulangan'=>$id));
	}
	function selectId($id)
	{
		return $this->db->query("SELECT a.*,b.*,c.*,d.* FROM nilai_ulangan a, siswa b, thn_ajaran c, kurikulum d WHERE a.nis=b.no_induk and a.thn_ajaran=c.id and d.id_pelajaran=a.mapel and a.id_ulangan=$id")->result();
	}
	function update()
	{
		$this->db->where('id_ulangan',$_POST['id']);
		switch ($_POST['jenis']){
			case 1:
				$this->db->set('nilai_1',$_POST['nilai']);
			break;
			case 2:
				$this->db->set('nilai_2',$_POST['nilai']);
			break;
			case 3:
				$this->db->set('nilai_3',$_POST['nilai']);
			break;
			case 4:
				$this->db->set('nilai_4',$_POST['nilai']);
			break;
			case 5:
				$this->db->set('nilai_5',$_POST['nilai']);
			break;
			default:
				echo'anda belum memilih jenis nilai';
		}
		$this->db->update($this->tbl);
	}
	function deleteOnfly($jenis,$id)
	{
		$this->db->where('id_ulangan',$id);
		switch ($jenis){
			case 1:
				$this->db->set('nilai_1',null);
			break;
			case 2:
				$this->db->set('nilai_2',null);
			break;
			case 3:
				$this->db->set('nilai_3',null);
			break;
			case 4:
				$this->db->set('nilai_4',null);
			break;
			case 5:
				$this->db->set('nilai_5',null);
			break;
			default:
				echo'anda belum memilih jenis nilai';
		}
		$this->db->update($this->tbl);
	}
}