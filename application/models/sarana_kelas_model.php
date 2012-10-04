<?php
	
class Sarana_kelas_model extends CI_Model{
	
	function Sarana_kelas_model(){
		parent::__construct();
	}

	function getTotal($kd){
		 $this->db->like('id_kelas',$kd);
		 $this->db->order_by("id", "asc");
		 $Q = $this->db->get('tsarana_kelas');		  
		 $row=$Q->num_rows(); 	
		 return $row;
	}
	
	function getDefault()
	{
		$Q=$this->db->query("SELECT id_kelas,no_ruang from tkelas"); 
        $row = $Q->row_array();
		return $row;	        
	}
	
	function getNo($num,$offset,$kd){		 
		for($i=$offset;$i<=$offset+$num;$i++){
		$j=1;
		$this->db->select(" $i+$j as no, id,id_kelas,jns_sarana, jml_sarana");
		$this->db->where('id_kelas',$kd);
		 $this->db->order_by("id", "asc");
		 $Q = $this->db->get('tsarana_kelas',$num,$offset);		  
		 return $Q->num_rows() ? $Q->result() : false; 	
		}		 
	}
	
	function getData($num,$offset,$kd){		 
		
		$this->db->select(" id,id_kelas,jns_sarana, jml_sarana");
		 $this->db->where('id_kelas',$kd);
		 $this->db->order_by("id", "asc");
		 $Q = $this->db->get('tsarana_kelas',$num,$offset);		  
		 return $Q->num_rows() ? $Q->result() : false; 	
				 
	}
		
	function getDataSaranaKelas($namaTable,$namaWhere)
	{
		$this->db->where('id',$namaWhere);
		$query=$this->db->get($namaTable);
		return $query;
	}
	
	function addSaranaKelas($data){
	   $this->db->insert('tsarana_kelas',$data);
	}
	
	function Edit($namaTable,$namaWhere,$fields)
	{
		$this->db->where('id',$namaWhere);
		$this->db->update($namaTable,$fields);
	}
	
	
	/*function Delete($namaTable,$cek)
	{
		foreach($cek as $key => $value) {
        $this->db->query("DELETE FROM ".$namaTable." WHERE id = '" . $value . "'");		
		}
	}*/
	
	function delete($id)
	{
		$this->db->delete('tsarana_kelas', array('id'=>$id));
	}
	
}
?>