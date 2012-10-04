<?php

class Data_pendptk extends CI_Controller {
	
	private $limit = 10;

	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$this->load->model('pendptk_model');
		$this->load->model('ptk_model');
	}
	
	function index($offset= 0)
	{
		$this->load->library('pagination'); //load library pagination
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		
		$config['base_url'] = site_url('data_pendptk/index/');;
		$config['total_rows'] = $this->pendptk_model->countData();
		$config['per_page'] = $this->limit;
		$config['num_links'] = 10;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['offset']=$offset;
		$data['jumlah_data']=$this->pendptk_model->countData();
		
		$data['fields']	= $this->pendptk_model->get_relasi($this->limit,$offset);
		$this->template->build('data/pendptk_view', $data);
		
	}
	
	function detailData($id){
	
		$ptk = $this->pendptk_model->select($id);
		foreach ($ptk as $m)
		{
			$data['id_pend'] 	= $m->id_pendidikan_ptk;
			$data['nama'] 		= $m->nama_ptk;
			$data['tahun'] 		= $m->tahun;
			$data['jenjang'] 	= $m->jenjang;
			$data['prodi'] 		= $m->prodi;
			$data['jurusan'] 	= $m->jurusan;
			$data['nama_pt'] 	= $m->nama_pt;
			$data['kota_pt'] 	= $m->kota_pt;
		}
		$this->template->build('inc/pendptk_detail', $data);
	}
	
	function newData()
	{
		$nama = $this->ptk_model->selectNama();
		$data=(isset($nama))?$nama:'';
		foreach ($nama as $m)
		{
			$data['nuptk'][] 	= $m->nuptk;
			$data['nama_ptk'][]	= $m->nama_ptk;
		}
	
		$this->template->build('inc/pendptk_add', $data);
	}
	
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
		$this->form_validation->set_rules('jenjang', 'Jenjang', 'trim|required|xss_clean');
		$this->form_validation->set_rules('prodi', 'Prodi', 'trim|required|xss_clean');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nama_pt', 'Nama Perguruan Tinggi', 'trim|required|xss_clean');
		$this->form_validation->set_rules('kota_pt', 'Kota', 'trim|required|xss_clean');
		$this->form_validation->set_message('required', '%s tidak boleh kosong');
				
		if ($this->form_validation->run() == FALSE)
		{
			$this->template->build('inc/pendptk_add',$data);
		}else {
			$this->pendptk_model->insert($_POST);
			redirect('data_pendptk/index');
		}
	}
	
	// ======== delete ============
	function deleteData($id)
	{
		$this->pendptk_model->delete($id);
		redirect('data_pendptk/index');
	}
	
	function editData($id)
	{
		if($_POST==NULL)
		{
			$data['m'] = $this->pendptk_model->select($id);
			$this->template->build('inc/pendptk_edit', $data);
		}else {
			$this->pendptk_model->update($id);
			redirect('data_pendptk');
		}
		
	}
	
	function searchData($key)
	{
		if($key==NULL)
		{
			$data['jumlah_data'] = "Data yang dicari tidak ditemukan dalam database!!!";
			$this->template->build('data/pendptk_view',$data);
			
		}else {
			$data['fields']=$this->pendptk_model->search($key);
			$fields = $this->pendptk_model->search($key);
			$data['jumlah_data']=count($fields); 
			$this->template->build('data/pendptk_view',$data);
		}
						
	}
	
}