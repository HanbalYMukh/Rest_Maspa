<?php

	class tahun_ajaran extends CI_Controller{
		
		private $limit=10;
		
		function __construct(){
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->library('fungsi');
			$this->load->model('tahunajaran_model');
		}
		function index($offset= 0)
		{
		$this->load->library('pagination'); //load library pagination
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		
		$config['base_url'] = site_url('tahun_ajaran/index/');;
		$config['total_rows'] = $this->tahunajaran_model->countData();
		$config['per_page'] = $this->limit;
		$config['num_links'] = 10;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['offset']=$offset;
		$data['jumlah_data']=$this->tahunajaran_model->countData();
		
		$data['fields']	= $this->tahunajaran_model->get_list_data($this->limit,$offset)->result();
		$this->template->build('data/tahunajaran_view', $data);
		
		}
	
		
		
		function newData()
		{
			$nama = $this->ptk_model->selectNama();
			foreach($nama as $m)
			{
				$data['nuptk'][] 	= $m->nuptk;
				$data['nama_ptk'][]	= $m->nama_ptk;
			}
			
			/*$pelajaran = $this->kurikulum_model->selectPelajaran()
			foreach($pelajaran as $m)
			{
				$data['id_pelajaran'][]		= $m->id_pelajaran;
				$data['nama_pelajaran'][]	= $m->nama_pelajaran;
			}*/
		
			$this->template->build('inc/preguru_add', $data);
		}
		
		function addData()
		{
					
			$this->load->library(array('simpliparse','validation','pquery'));			
			// validasi form
			$this->form_validation->set_rules('tahun', 'tahun ajaran', 'trim|required|xss_clean');

			$this->form_validation->set_message('required', '%s tidak boleh kosong');
					
			if ($this->form_validation->run() == FALSE)
			{
				$this->template->build('inc/tahunajar_add');
			}else {
				$this->tahunajaran_model->insert($_POST);
				redirect('tahun_ajaran/index');
			}
		}
		
		// ======== delete ============
		function deleteData($id)
		{
			$this->tahunajaran_model->delete($id);
			redirect('tahun_ajaran/index');
		}
		
		function editData($id)
		{
			if($_POST==NULL)
			{
				$data['m'] = $this->tahunajaran_model->select($id);
				$this->template->build('inc/tahunajar_edit', $data);
			}else {
				$this->tahunajaran_model->update($id);
				redirect('tahun_ajaran');
			}
			
		}
		
	
	}