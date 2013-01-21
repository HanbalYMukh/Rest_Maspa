<?php

class Data_komunitas extends MY_Controller {
	
	private $limit = 10;
		
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$this->load->model('komunitas_model');
		$this->load->model('kelas_model');
	}
	
	function index()
	{
		
		$data['fields']	= $this->komunitas_model->selectCountdata();
		$this->template->build('data/komunitas_view', $data);
		
	}
	
	function detailData($id){
		$data['m'] = $this->komunitas_model->select($id);
		$this->template->build('inc/kelas_detail', $data);
	}
	
	function addData()
	{
		// validasi form
		$this->form_validation->set_rules('id_kelas', 'Id Kelas', 'trim|required|xss_clean');
		$this->form_validation->set_rules('no_ruang', 'Nama Kelas', 'trim|required|xss_clean');
		$this->form_validation->set_rules('luas_lantai', 'Luas Lantai', 'trim|required|xss_clean');
		$this->form_validation->set_rules('kondisi_kelas', 'Kondisi Kelas', 'trim|required|xss_clean');
		
		$this->form_validation->set_message('required', '%s tidak boleh kosong');
				
		if ($this->form_validation->run() == FALSE)
		{
			$this->template->build('inc/kelas_add');
		}else {
			$this->komunitas_model->insert($_POST);
			redirect('data_komunitas/index');
		}
	}
	
	function deleteData($id)
	{
		$this->komunitas_model->delete($id);
		redirect('data_komunitas/index');
	}
	
	function naikKelas($kelas)
	{	
		$data ['kelas']=$this->kelas_model->selectData();
		$data['konten'] = $this->komunitas_model->selectKelas($kelas);
		$this->template->build('inc/naik_kelas', $data);		
	}
	function naik(){
		$gagal='gagal';
		if (isset($_POST['id'])){
			$this->komunitas_model->edit();
			$data = $this->kelas_model->selectNama();
			echo json_encode($data);
		} else {
			$message ='gagal total';
			$data = array ('kelas'=> $message);
			echo json_encode($data);
		}
		
	}

	
	function searchData($key)
	{
		if($key==NULL)
		{
			$data['jumlah_data'] = "Data yang dicari tidak ditemukan dalam database!!!";
			$this->template->build('data/kelas_view',$data);
		}else {
			$data['fields']=$this->komunitas_model->search($key)->result();
			$fields = $this->komunitas_model->search($key)->result();
			$data['jumlah_data']=count($fields); 
			$this->template->build('data/kelas_view',$data);
		}
						
	}
	
}