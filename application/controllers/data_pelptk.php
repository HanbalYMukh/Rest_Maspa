<?php

class Data_pelptk extends CI_Controller {
	
	private $limit = 10;
	private $tbl = 'ptk_pelatihan';
		
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$this->load->model('pelptk_model');
		$this->load->model('ptk_model');
	}
	
	function index($offset='')
	{
		$this->load->library('pagination'); //load library pagination
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		
		$config['base_url'] = site_url('data_pelptk/index/');;
		$config['total_rows'] = $this->pelptk_model->countData();
		$config['per_page'] = $this->limit;
		$config['num_links'] = 10;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['offset']=$offset;
		$data['jumlah_data']=$this->pelptk_model->countData();
		
		$data['fields']	= $this->pelptk_model->get_relasi($this->limit,$offset);
		$this->template->build('data/pelptk_view', $data);
		
	}
	
	
	function detailData($id){
		$data['m'] = $this->pelptk_model->select($id);
		$this->template->build('inc/pelptk_detail', $data);
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
		$this->form_validation->set_rules('nama_pelatihan', 'Nama Pelatihan', 'trim|required|xss_clean');
		$this->form_validation->set_rules('jns_pelatihan', 'Jenis Pelatihan', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nama_lembaga', 'Nama Lembaga', 'trim|required|xss_clean');
		$this->form_validation->set_rules('alamat_lembaga', 'Alamat Lembaga', 'trim|required|xss_clean');
		$this->form_validation->set_rules('kota_lembaga', 'Kota Lembaga', 'trim|required|xss_clean');
		$this->form_validation->set_rules('kodepos_lembaga', 'Kode Pos', 'trim|required|xss_clean');
		$this->form_validation->set_message('required', '%s tidak boleh kosong');
				
		if ($this->form_validation->run() == FALSE)
		{
			$this->template->build('inc/pelptk_add', $data);
		}else {
			$this->pelptk_model->insert($_POST);
			redirect('data_pelptk/index');
		}
	}
	
	
	function deleteData($id)
	{
		$this->pelptk_model->delete($id);
		redirect('data_pelptk/index');
	}
	
	function editData($id)
	{
		if($_POST==NULL)
		{
			$data['m'] = $this->pelptk_model->select($id);
			$this->template->build('inc/pelptk_edit', $data);
		}else {
			$this->pelptk_model->update($id);
			redirect('data_pelptk');
		}
		
	}
	
	function searchData($key)
	{
		if($key==NULL)
		{
			$data['jumlah_data'] = "Data yang dicari tidak ditemukan dalam database!!!";
			$this->template->build('data/pelptk_view',$data);
			
		}else {
			$data['fields']=$this->pelptk_model->search($key);
			$fields = $this->pelptk_model->search($key);
			$data['jumlah_data']=count($fields); 
			$this->template->build('data/pelptk_view',$data);
		}
						
	}
	
	
}