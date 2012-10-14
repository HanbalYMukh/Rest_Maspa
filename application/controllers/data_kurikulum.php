<?php

class Data_kurikulum extends MY_Controller {
	
	private $limit = 10;
		
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$this->load->model('kurikulum_model');
		$this->load->model('kelas_model');
		$this->load->model('ptk_model');
	}
	
	function index($offset='')
	{
		$this->load->library('pagination'); //load library pagination
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		
		$config['base_url'] = site_url('data_kurikulum/index/');;
		$config['total_rows'] = $this->kurikulum_model->countData();
		$config['per_page'] = $this->limit;
		$config['num_links'] = 10;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['offset']=$offset;
		$data['jumlah_data']=$this->kurikulum_model->countData();
		
		$data['fields']	= $this->kurikulum_model->get_relasi_data($this->limit,$offset);
		$this->template->build('data/kurikulum_view', $data);
		
	}
	
	function detailData($id){
		$data['m'] = $this->kurikulum_model->select($id);
		$this->template->build('inc/kurikulum_detail', $data);
	}
	
	function addData()
	{
		$this->load->library(array('simpliparse','validation','pquery'));
		$kelas = $this->kelas_model->selectData();
		foreach ($kelas as $m)
		{
			$data['id_kelas'][]		= $m->id_kelas;
			$data['no_ruang'][]		= $m->no_ruang;
		}
		$nama = $this->ptk_model->selectNama();
		foreach ($nama as $m)
		{
			$data['nuptk'][] 	= $m->nuptk;
			$data['nama_ptk'][]	= $m->nama_ptk;
		}
		// validasi form
		$this->form_validation->set_rules('nama_pelajaran', 'Nama Pelajaran', 'trim|required|xss_clean');
		$this->form_validation->set_rules('kelas', 'kelas', 'trim|required|xss_clean');
		$this->form_validation->set_rules('guru','Guru Pengampu', 'trim|required|xss_clean');
		$this->form_validation->set_rules('kelompok', 'Kelompok', 'trim|required|xss_clean');
				
		if ($this->form_validation->run() == FALSE)
		{
			$this->template->build('inc/kurikulum_add',$data);
		}else {
			$this->kurikulum_model->insert($_POST);
			redirect('data_kurikulum/index');
		}
	}
	
	function deleteData($id)
	{
		$this->kurikulum_model->delete($id);
		redirect('data_kurikulum/index');
	}
	
	function editData($id)
	{
		if($_POST==NULL)
		{
			$kelas = $this->kelas_model->selectData();
		foreach ($kelas as $m)
		{
			$data['id_kelas'][]		= $m->id_kelas;
			$data['no_ruang'][]		= $m->no_ruang;
		}
		$nama = $this->ptk_model->selectNama();
		foreach ($nama as $m)
		{
			$data['nuptk'][] 	= $m->nuptk;
			$data['nama_ptk'][]	= $m->nama_ptk;
		}
			$data['m'] = $this->kurikulum_model->select($id);
			$this->template->build('inc/kurikulum_edit', $data);
		
		}else {
			$this->kurikulum_model->update($id);
			redirect('data_kurikulum');
		}
		
	}
	
	function searchData($key)
	{
		if($key==NULL)
		{
			$data['jumlah_data'] = "Data yang dicari tidak ditemukan dalam database!!!";
			$this->template->build('data/ptk_view',$data);
			
		}else {
			$data['fields']=$this->kurikulum_model->search($key)->result();
			$fields = $this->kurikulum_model->search($key)->result();
			$data['jumlah_data']=count($fields); 
			$this->template->build('data/kurikulum_view',$data);
		}
						
	}
	
}