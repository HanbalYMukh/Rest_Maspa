<?php

class Data_komunitas extends MY_Controller {
	
	private $limit = 10;
		
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$this->load->model('komunitas_model');
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
			redirect('data_kelas/index');
		}
	}
	
	function deleteData($id)
	{
		$this->komunitas_model->delete($id);
		redirect('data_kelas/index');
	}
	
	function editData($id)
	{
		if($_POST==NULL)
		{
			$data['m'] = $this->komunitas_model->select($id);
			$this->template->build('inc/kelas_edit', $data);
		}else {
			$this->komunitas_model->update($id);
			redirect('data_kelas');
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