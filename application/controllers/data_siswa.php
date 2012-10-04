<?php

class Data_siswa extends CI_Controller {
	
	private $limit = 10;
		
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library(array('form_validation','pagination'));
		$this->load->model('siswa_model');
	}
	
	function index($offset='')
	{
		$this->load->library('pagination'); //load library pagination
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		
		$config['base_url'] = site_url('data_siswa/index/');
		$config['total_rows'] = $this->siswa_model->countData();
		$config['per_page'] = $this->limit;
		$config['num_links'] = 10;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['offset']=$offset;
		$data['jumlah_data']=$this->siswa_model->countData();
		
		$data['fields']	= $this->siswa_model->get_list_data($this->limit,$offset)->result();
		$this->template->build('data/siswa_view', $data);
		
	}
	
	function detailData($id){
		$data['m'] = $this->siswa_model->select($id);
		$this->template->build('inc/siswa_detail', $data);
	}
	
	function addData()
	{
		
		// validasi form
		$this->form_validation->set_rules('no_induk', 'No. Induk', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'trim|required|xss_clean');
		$this->form_validation->set_rules('kelamin_siswa', 'Jenis Kelamin', 'trim|required|xss_clean');
		$this->form_validation->set_rules('tmplahir_siswa', 'Tempat Lahir', 'trim|required|xss_clean');
		$this->form_validation->set_rules('tgllahir_siswa', 'Tanggal Lahir', 'trim|required|xss_clean');
		$this->form_validation->set_rules('agama_siswa', 'Agama', 'trim|required|xss_clean');
		$this->form_validation->set_rules('anak_ke', 'Anak Ke', 'trim|required|xss_clean');
		$this->form_validation->set_rules('stt_klrga', 'Status Keluarga', 'trim|required|xss_clean');
		$this->form_validation->set_rules('alamat_siswa', 'Alamat', 'trim|required|xss_clean');
		$this->form_validation->set_rules('kota_siswa', 'Kota', 'trim|required|xss_clean');
		$this->form_validation->set_rules('kodepos_siswa', 'Kodepos', 'trim|required|xss_clean');
		$this->form_validation->set_rules('kelas_awal', 'Kelas', 'trim|required|xss_clean');
		$this->form_validation->set_rules('tgl_awal', 'Tanggal', 'trim|required|xss_clean');
		$this->form_validation->set_rules('smester_awal','Semester', 'trim|required|xss_clean');
		$this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'trim|required|xss_clean');
		$this->form_validation->set_rules('alm_sekolah_asal', 'Alamat Sekolah Asal', 'trim|required|xss_clean');
		$this->form_validation->set_rules('thn_ijazah_awal','Tahun Ijazah MTs/SMP/Paket B', 'trim|required|xss_clean');
		$this->form_validation->set_rules('no_ijazah_awal', 'No Ijazah MTs/SMP/Paket B', 'trim|required|xss_clean');
		$this->form_validation->set_rules('thn_skhun_awal', 'Tahun SKHUN MTs/SMP/Paket B', 'trim|required|xss_clean');
		$this->form_validation->set_rules('no_skhun_awal', 'No SKHUN MTs/SMP/Paket B', 'trim|required|xss_clean');
		$this->form_validation->set_rules('telp_siswa', 'Telp', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'trim|required|xss_clean');
		$this->form_validation->set_rules('pendidikan_ayah', 'Pendidikan Terakhir Ayah', 'trim|required|xss_clean');
		$this->form_validation->set_rules('pendidikan_ibu', 'Pendidikan Terakhir Ibu', 'trim|required|xss_clean');
		$this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan Ayah', 'trim|required|xss_clean');
		$this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan Ibu', 'trim|required|xss_clean');
		$this->form_validation->set_rules('alm_ayah', 'Alamat Ayah', 'trim|required|xss_clean');
		$this->form_validation->set_rules('alm_ibu', 'Alamat Ibu', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nm_wali', 'Nama Wali', 'trim|required|xss_clean');
		$this->form_validation->set_rules('alm_wali', 'Alamat Wali', 'trim|required|xss_clean');
		$this->form_validation->set_rules('telp_wali', 'Telepon Wali', 'trim|required|xss_clean');
		$this->form_validation->set_rules('pkerjaan_wali', 'Pekerjaan Wali', 'trim|required|xss_clean');
		
		$this->form_validation->set_message('required', ' %s tidak boleh kosong !!');		

		
		if ($this->form_validation->run() == FALSE)
		{
			$this->template->build('inc/siswa_add');
		}	
		else{
				$config['upload_path'] = './asset/sismage/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '2000';
				$config['max_width']  = '2000';
				$config['max_height']  = '2000';
				$config['file_name']= $_POST['no_induk'];
				$config['overwrite']= TRUE;

				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload())
				{
					$error = array('error' => $this->upload->display_errors());

					$this->template->build('inc/siswa_add', $error);
				}
				else
				{
					$data = array('upload_data' => $this->upload->data());
					
					$config_resize = array (
						'source_image'=> $data['upload_data']['full_path'],
						'new_image'=> './asset/sisresize/',
						'maintain_ration'=> TRUE,
						'overwrite' => TRUE,
						'width'=>85,
						'height'=>113);
					$this->load->library('image_lib',$config_resize);
					$this->image_lib->initialize($config_resize); 
					$this->image_lib->resize();
					
					$config_thumb = array (
						'source_image'=> $data['upload_data']['full_path'],
						'new_image'=> './asset/sisresize_thumb/',
						'maintain_ration'=> TRUE,
						'overwrite' => TRUE,
						'width'=>30,
						'height'=>40);
					$this->image_lib->initialize($config_thumb); 
					$this->image_lib->resize();
				}
				$this->siswa_model->insert($_POST);
				redirect('data_siswa/index',$data);
			}
		}
	
	
	function deleteData($id)
	{
		$this->siswa_model->delete($id);
		redirect('data_siswa/index');
	}
	
	function editData($id)
	{
		if($_POST==NULL)
		{
			$data['m'] = $this->siswa_model->select($id);
			$this->template->build('inc/siswa_edit', $data);
		}else {
				$config['upload_path'] = './asset/sismage/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '2000';
				$config['max_width']  = '2000';
				$config['max_height']  = '2000';
				$config['file_name']= $_POST['no_induk'];
				$config['overwrite']= TRUE;

				$this->load->library('upload', $config);
			
				if ( ! $this->upload->do_upload())
				{
					$error = array('error' => $this->upload->display_errors());

					$this->template->build('inc/siswa_add', $error);
				}
				else
				{
					$data = array('upload_data' => $this->upload->data());
					
					$config_resize = array (
						'source_image'=> $data['upload_data']['full_path'],
						'new_image'=> './asset/sisresize/',
						'maintain_ration'=> TRUE,
						'overwrite' => TRUE,
						'width'=>85,
						'height'=>113);
					$this->load->library('image_lib',$config_resize);
					$this->image_lib->initialize($config_resize); 
					$this->image_lib->resize();
					
					$config_thumb = array (
						'source_image'=> $data['upload_data']['full_path'],
						'new_image'=> './asset/sisresize_thumb/',
						'maintain_ration'=> TRUE,
						'overwrite' => TRUE,
						'width'=>30,
						'height'=>40);
					$this->image_lib->initialize($config_thumb); 
					$this->image_lib->resize();
				}
			$this->siswa_model->update($id);
			redirect('data_siswa');
		}
		
	}
	
	function searchData($key)
	{
		if(!isset($key))
		{
			$data['jumlah_data'] = "Data yang dicari tidak ditemukan dalam database!!!";
			//$data['fields']	= $this->siswa_model->get_list_data($this->limit,$offset)->result();
			$this->load->view('data/siswa_view',$data);
			
		}else {
			$data['fields']=$this->siswa_model->search($key)->result();
			$fields = $this->siswa_model->search($key)->result();
			$data['jumlah_data']=count($fields); 
			$this->load->view('data/siswa_view',$data);
		}
						
	}
}