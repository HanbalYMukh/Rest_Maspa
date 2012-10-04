<?php

class Data_kelas extends CI_Controller {
	
	private $limit = 10;
		
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$this->load->model('kelas_model');
	}
	
	function index($offset='')
	{
		$this->load->library('pagination'); //load library pagination
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		
		$config['base_url'] = site_url('data_kelas/index/');;
		$config['total_rows'] = $this->kelas_model->countData();
		$config['per_page'] = $this->limit;
		$config['num_links'] = 10;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['offset']=$offset;
		$data['jumlah_data']=$this->kelas_model->countData();
		
		$data['fields']	= $this->kelas_model->get_list_data($this->limit,$offset)->result();
		$this->template->build('data/kelas_view', $data);
		
	}
	
	function detailData($id){
		$data['m'] = $this->kelas_model->select($id);
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
			$this->kelas_model->insert($_POST);
			redirect('data_kelas/index');
		}
	}
	
	function deleteData($id)
	{
		$this->kelas_model->delete($id);
		redirect('data_kelas/index');
	}
	
	function editData($id)
	{
		if($_POST==NULL)
		{
			$data['m'] = $this->kelas_model->select($id);
			$this->template->build('inc/kelas_edit', $data);
		}else {
			$this->kelas_model->update($id);
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
			$data['fields']=$this->kelas_model->search($key)->result();
			$fields = $this->kelas_model->search($key)->result();
			$data['jumlah_data']=count($fields); 
			$this->template->build('data/kelas_view',$data);
		}
						
	}
	
}