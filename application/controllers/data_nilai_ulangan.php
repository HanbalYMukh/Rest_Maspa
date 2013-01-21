<?php
	class data_nilai_ulangan extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library(array('form_validation','pagination'));
		$this->load->model('nilai_ulangan_model');
		$this->load->model('kelas_model');
	}
	
	function  index ($kelas)
	{
		//disini akan membutuhkan rekondisi untuk user. Apakah Admin. guru . atau Siswa.
		$data['fields']	= $this->nilai_ulangan_model->get_list_data($kelas);
		$data['kelas'] = $kelas;
		$data['nama_kelas'] = $this->kelas_model->select($kelas);
		
				$this->load->model('kurikulum_model');
				$this->load->model('tahunajaran_model');
				
				$data['mapel']= $this->kurikulum_model->selectLike($kelas);
				$data['thn_ajaran']= $this->tahunajaran_model->selectAll();
		$this->template->build('data/nilai_ulangan_view', $data);
		
	}
	function addData($kelas)/*Tambah form jenis nilai ulangan (ulangan 1,2,3,4,5)*/
	{
		if($_POST==NULL)
		{
			$this->load->model('komunitas_model');
			$this->load->model('kurikulum_model');
			$this->load->model('tahunajaran_model');
			$data['man'] = $this->komunitas_model->siswaNilai($kelas);
			$data['mapel']= $this->kurikulum_model->selectLike($kelas);
			$data['thn_ajaran']= $this->tahunajaran_model->selectAll();
			$data['kelas']= $kelas;
			$this->template->build('inc/nilai_ulangan_add', $data);
		}else {
			$this->form_validation->set_rules('mapel', 'Mata Pelajaran', 'trim|required|xss_clean');
			$this->form_validation->set_rules('thn_ajaran', 'Tahun Ajaran', 'trim|required|xss_clean');
			$this->form_validation->set_rules('semester', 'Semester', 'trim|required|xss_clean');
			$this->form_validation->set_rules('jenis', 'Jenis Nilai ulangan', 'trim|required|xss_clean');
			$this->form_validation->set_message('required', ' %s tidak boleh kosong !!');		
			if ($this->form_validation->run() == FALSE){
				$this->load->model('komunitas_model');
				$this->load->model('kurikulum_model');
				$this->load->model('tahunajaran_model');
				$data['man'] = $this->komunitas_model->siswaNilai($kelas);
				$data['mapel']= $this->kurikulum_model->selectLike($kelas);
				$data['thn_ajaran']= $this->tahunajaran_model->selectAll();
				$data['kelas']= $kelas;
				$this->template->build('inc/nilai_ulangan_add', $data);
			}
			/* Jika data siswa di kelas tersebut kosong, perlu ada penanganan yang lebih baik lagi*/
			/*<SELECT DISTINCT> Perlu dibuat rekondisi, Jika nilai dengan nis,  Kelas, Pelajaran, Tahun Ajaran dan Smester sudah ada di database, maka ada action lain untuk menanggulangi terjadinya perubahan data tanpa disengaja*/
			else{
				foreach ($_POST['nilai'] as $nis => $isi){
					$ceck = $this->nilai_ulangan_model->ceckData($nis,$_POST['mapel'],$kelas,$_POST['thn_ajaran'],$_POST['semester']);
					if($ceck['nis']==$nis && $ceck['mapel']==$_POST['mapel'] && $ceck['kelas']==$kelas && $ceck['thn_ajaran']==$_POST['thn_ajaran'] && $ceck['smester']==$_POST['semester']){
						$this->nilai_ulangan_model->insertUpdate($nis,$kelas,$_POST['jenis'],$isi);
					}
					else {
						$this->nilai_ulangan_model->insert($nis,$_POST['mapel'],$kelas,$_POST['thn_ajaran'],$_POST['semester'],$_POST['jenis'],$isi);
					}
				}
				$data['hasil']= $this->nilai_ulangan_model->dataNilai($kelas,$_POST['mapel'],$_POST['thn_ajaran'],$_POST['semester']);
				$this->template->build('data/nilai_ulangan_input_view',$data);
			}
		}
	}
	function detailData($nis){
			$this->load->model('siswa_model');
			$this->load->model('tahunajaran_model');
			$data['thn_ajaran']= $this->tahunajaran_model->selectAll();
			$data['bio']=$this->siswa_model->selectBiodata($nis);
			$data['field'] = $this->nilai_ulangan_model->selectSiswa($nis);
			$data['nis']=$nis;
			$this->template->build('data/detil_ulangan_siswa_view', $data);
	}
	
	function viewSpesifik(){
		$data['detail'] = $this->nilai_ulangan_model->dataNilai($_GET['kelas'],$_GET['mapel'],$_GET['thn_ajaran'],$_GET['semester']);
		$this->load->view('data/spesifik_ulangan_view',$data);
	}
	function viewDetail(){
		$data['nilai'] = $this->nilai_ulangan_model->ambilNilai($_GET['nis'],$_GET['thn_ajaran'],$_GET['semester']);
		$this->load->view('data/detil_spesifik_ulangan_siswa_view',$data);
	}
	function edit(){
			$this->nilai_ulangan_model->update();
			echo json_encode ($_POST['nilai']);
		}
	function hapus($id){
		$this->nilai_ulangan_model->delete($id);
	}
	function hapusOnfly($jenis,$id){
		$this->nilai_ulangan_model->deleteOnfly($jenis,$id);
	}
}
