<?php

class Data_sertptk extends MY_Controller {
	
	private $limit = 10;
		
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$this->load->model('sertptk_model');
		$this->load->model('ptk_model');
	}
	
	function index($offset='')
	{
		$this->load->library('pagination'); //load library pagination
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		
		$config['base_url'] = site_url('data_sertptk/index/');;
		$config['total_rows'] = $this->sertptk_model->countData();
		$config['per_page'] = $this->limit;
		$config['num_links'] = 10;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['offset']=$offset;
		$data['jumlah_data']=$this->sertptk_model->countData();
		
		$data['fields']	= $this->sertptk_model->get_list_data($this->limit,$offset)->result();
		$this->template->build('data/sertptk_view', $data);
		
	}
	
	// ======== detail data =======
	function detailData($id){
		$data['m'] = $this->sertptk_model->select($id);
		$this->template->build('inc/sertptk_detail', $data);
	}
	
	
	// ======== tambah ===========
	function addData()
	{
		$nama = $this->ptk_model->selectNama();
		$data=(isset($nama))?$nama:'';
		foreach ($nama as $m)
		{
			$data['nuptk'][] 	= $m->nuptk;
			$data['nama_ptk'][]	= $m->nama_ptk;
		}
		// validasi form
		$this->form_validation->set_rules('nuptk', 'Nama PTK', 'trim|required|xss_clean');
		$this->form_validation->set_rules('tahun', 'Tahun', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nama_sertifikasi', 'Nama Sertifikasi', 'trim|required|xss_clean');
		$this->form_validation->set_rules('jns_keahlian', 'Jenis Keahlian', 'trim|required|xss_clean');
		$this->form_validation->set_rules('lembaga_penerbit', 'Nama Lembaga', 'trim|required|xss_clean');
		$this->form_validation->set_message('required', '%s tidak boleh kosong');
				
		if ($this->form_validation->run() == FALSE)
		{
			$this->template->build('inc/sertptk_add', $data);
		}else {
			$this->sertptk_model->insert($_POST);
			redirect('data_sertptk/index');
		}
	}
	
	// ======== delete ============
	function deleteData($id)
	{
		$this->sertptk_model->delete($id);
		redirect('data_sertptk/index');
	}
	
	// ======== edit ===========
	/*
	// fungsi if, itu buat ngecek apakah data udah dikirim atau belum (NULL)? 
	// Nah, klo udah dikirim berarti bakal diupdate… kalo belum maka 
	// program akan mengambil data (select) dan dimasukkan ke dalam form…
	*/
	function editData($id)
	{
		if($_POST==NULL)
		{
			$data['m'] = $this->sertptk_model->select($id);
			$this->template->build('inc/sertptk_edit', $data);
		}else {
			$this->sertptk_model->update($id);
			redirect('data_sertptk');
		}
		
	}
	
	function searchData($key)
	{
		if($key==NULL)
		{
			$data['jumlah_data'] = "Data yang dicari tidak ditemukan dalam database!!!";
			$this->template->build('data/sertptk_view',$data);
			
		}else {
			$data['fields']=$this->sertptk_model->search($key)->result();
			$fields = $this->sertptk_model->search($key)->result();
			$data['jumlah_data']=count($fields); 
			$this->template->build('data/sertptk_view',$data);
		}
						
	}
	
}