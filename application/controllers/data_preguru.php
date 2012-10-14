<?php

class Data_preguru extends MY_Controller {
	
	private $limit = 10;
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$this->load->library('fungsi');
		$this->load->model('ptk_model');
		$this->load->model('preguru_model');
		$this->load->model('kurikulum_model');
		$this->load->model('kelas_model');
		$this->load->model('tahunajaran_model');
	}
	
	function index($offset= 0)
	{
		$this->load->library('pagination'); //load library pagination
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		
		$config['base_url'] = site_url('data_jadwal/index/');;
		$config['total_rows'] = $this->preguru_model->countData();
		$config['per_page'] = $this->limit;
		$config['num_links'] = 10;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['offset']=$offset;
		$data['jumlah_data']=$this->preguru_model->countData();
		
		$data['fields']	= $this->preguru_model->get_relasi($this->limit,$offset);
		$this->template->build('data/preguru_view', $data);
		
	}
	
	function detailData($id){
	
		$ptk = $this->preguru_model->select($id);
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
		$this->template->build('inc/jadwal_detail', $data);
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
		$nama = $this->ptk_model->selectNama();
		foreach ($nama as $m)
		{
			$data['nuptk'][] 	= $m->nuptk;
			$data['nama_ptk'][]	= $m->nama_ptk;
		}
		
		$pelajaran = $this->kurikulum_model->selectPelajaran();
		foreach ($pelajaran as $m)
		{
			$data['id_pelajaran'][]		= $m->id_pelajaran;
			$data['nama_pelajaran'][]	= $m->nama_pelajaran;
		}
		
		$kelas = $this->kelas_model->selectData();
		foreach ($kelas as $m)
		{
			$data['id_kelas'][]		= $m->id_kelas;
			$data['no_ruang'][]		= $m->no_ruang;
		}
		$thn= $this->tahunajaran_model->selectAll();
		foreach($thn as $m)
		{
			$data['id'][]			= $m->id;
			$data['tahun'][]		= $m->tahun;
		}
		
		// validasi form
		$this->form_validation->set_rules('nuptk', 'Nama PTK', 'trim|required|xss_clean');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required|xss_clean');
		$this->form_validation->set_rules('id_pelajaran', 'Nama Pelajaran', 'trim|required|xss_clean');
		$this->form_validation->set_rules('tahun_ajar', 'Tahun Ajaran', 'trim|required|xss_clean');
		$this->form_validation->set_rules('semester', 'Semester', 'trim|required|xss_clean');
		$this->form_validation->set_rules('no_ruang', 'No Ruang Kelas', 'trim|required|xss_clean');
		$this->form_validation->set_rules('m_jam', 'Jam Masuk', 'trim|required|xss_clean');
		$this->form_validation->set_rules('m_menit', 'Menit Masuk', 'trim|required|xss_clean');
		$this->form_validation->set_rules('p_jam', 'Jam Pulang', 'trim|required|xss_clean');
		$this->form_validation->set_rules('p_menit', 'Menit pulang', 'trim|required|xss_clean');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');
				
		if ($this->form_validation->run() == FALSE)
		{
			$this->template->build('inc/preguru_add',$data);
		}else {
		
			$data = array(
				'nuptk'=> $this->input->post('nuptk'),
				'tanggal'=> $this->input->post('tanggal'),
				'id_pelajaran'=> $this->input->post('id_pelajaran'),
				'tahun_ajar'=> $this->input->post('tahun_ajar'),
				'semester'=> $this->input->post('semester'),
				'no_ruang'=> $this->input->post('no_ruang'),
				'pertemuan'=> $this->input->post('pertemuan'),
				'materi'=> $this->input->post('materi'),
				'jam_masuk'=> $this->input->post('m_jam').':'.$this->input->post('m_menit').':00',
				'jam_keluar'=> $this->input->post('p_jam').':'.$this->input->post('p_menit').':00',
				'keterangan'=> $this->input->post('keterangan')
			);
		
			$this->preguru_model->insert($data);
			redirect('data_preguru/index');
		}
	}
	
	// ======== delete ============
	function deleteData($id)
	{
		$this->preguru_model->delete($id);
		redirect('data_pregur/index');
	}
	
	function editData($id)
	{
		if($_POST==NULL)
		{
			$this->load->library(array('simpliparse','validation','pquery'));
			$data['m'] = $this->preguru_model->select($id);
			$this->template->build('inc/preguru_edit', $data);
		}else {
			$this->preguru_model->update($id);
			redirect('data_preguru');
		}
		
	}
	
	function searchData($key)
	{
		if($key==NULL)
		{
			$data['jumlah_data'] = "Data yang dicari tidak ditemukan dalam database!!!";
			$this->template->build('data/jadwal_view',$data);
			
		}else {
			$data['fields']=$this->preguru_model->search($key);
			$fields = $this->preguru_model->search($key);
			$data['jumlah_data']=count($fields); 
			$this->template->build('data/jadwal_view',$data);
		}
						
	}
	
}