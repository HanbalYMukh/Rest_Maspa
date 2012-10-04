<?php

class Data_ptk extends CI_Controller {
	
	private $limit = 10;
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$this->load->model('ptk_model');
	}
	
	function index($offset='')
	{
		$this->load->library('pagination'); //load library pagination
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		
		$config['base_url'] = site_url('data_ptk/index/');;
		$config['total_rows'] = $this->ptk_model->countData();
		$config['per_page'] = $this->limit;
		$config['num_links'] = 10;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['offset']=$offset;
		$data['jumlah_data']=$this->ptk_model->countData();
		
		$data['fields']	= $this->ptk_model->get_list_data($this->limit,$offset)->result();
		$this->template->build('data/ptk_view', $data);
		
	}
	
	// ======== detail data =======
	function detailData($id){
		$data['m'] = $this->ptk_model->select($id);
		$this->template->build('inc/ptk_detail', $data);
	}
	
	
	// ======== tambah ===========
	function addData()
	{
		
		// validasi form
		$this->form_validation->set_rules('nuptk', 'NUPTK', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nama_ptk', 'Nama', 'trim|required|xss_clean');
		$this->form_validation->set_rules('kelamin_ptk', 'Kelamin', 'trim|required|xss_clean');
		$this->form_validation->set_rules('tmplahir_ptk', 'Tempat Lahir', 'trim|required|xss_clean');
		$this->form_validation->set_rules('tgllahir_ptk', 'Tanggal Lahir', 'trim|required|xss_clean');
		$this->form_validation->set_rules('agama_ptk', 'Agama', 'trim|required|xss_clean');
		$this->form_validation->set_rules('alamat_ptk', 'Alamat', 'trim|required|xss_clean');
		$this->form_validation->set_rules('kota_ptk', 'Kota', 'trim|required|xss_clean');
		$this->form_validation->set_rules('kodepos_ptk', 'Kode Pos', 'trim|required|xss_clean');
		$this->form_validation->set_rules('telp_ptk', 'No. Telp', 'trim|required|xss_clean');
		$this->form_validation->set_rules('gol_ptk', 'Golongan', 'trim|required|xss_clean');
		$this->form_validation->set_rules('pendidikan_ptk', 'Pendidikan', 'trim|required|xss_clean');
		$this->form_validation->set_rules('status_ptk', 'Status', 'trim|required|xss_clean');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->template->build('inc/ptk_add');
		}else {
				$config['upload_path'] = './asset/tichmage/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2000';
		$config['max_width']  = '2000';
		$config['max_height']  = '2000';
		$config['file_name']= $_POST['nuptk'];
		$config['overwrite']= TRUE;

		$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload())
				{
					$error = array('error' => $this->upload->display_errors());

					$this->template->build('inc/ptk_add', $error);
				}
				else
				{
					$data = array('upload_data' => $this->upload->data());
					
					$config_resize = array (
						'source_image'=> $data['upload_data']['full_path'],
						'new_image'=> './asset/tichresize/',
						'maintain_ration'=> TRUE,
						'overwrite' => TRUE,
						'width'=>85,
						'height'=>113);
					$this->load->library('image_lib',$config_resize);
					$this->image_lib->initialize($config_resize); 
					$this->image_lib->resize();
					
					$config_thumb = array (
						'source_image'=> $data['upload_data']['full_path'],
						'new_image'=> './asset/tichresize_thumb/',
						'maintain_ration'=> TRUE,
						'overwrite' => TRUE,
						'width'=>30,
						'height'=>40);
					$this->image_lib->initialize($config_thumb); 
					$this->image_lib->resize();
				}
		
			$this->ptk_model->insert($_POST);
			redirect('data_ptk/index');
		}
	}
	
	// ======== delete ============
	function deleteData($id)
	{
		$this->ptk_model->delete($id);
		redirect('data_ptk/index');
	}
	
	function editData($id)
	{
		if($_POST==NULL)
		{
			$data['m'] = $this->ptk_model->select($id);
			$this->template->build('inc/ptk_edit', $data);
		}else {
			
				$config['upload_path'] = './asset/tichmage/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '2000';
				$config['max_width']  = '2000';
				$config['max_height']  = '2000';
				$config['file_name']= $_POST['nuptk'];
				$config['overwrite']= TRUE;

		$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload())
				{
					$error = array('error' => $this->upload->display_errors());

					$this->template->build('inc/ptk_add', $error);
				}
				else
				{
					$data = array('upload_data' => $this->upload->data());
					
					$config_resize = array (
						'source_image'=> $data['upload_data']['full_path'],
						'new_image'=> './asset/tichresize/',
						'maintain_ration'=> TRUE,
						'overwrite' => TRUE,
						'width'=>85,
						'height'=>113);
					$this->load->library('image_lib',$config_resize);
					$this->image_lib->initialize($config_resize); 
					$this->image_lib->resize();
					
					$config_thumb = array (
						'source_image'=> $data['upload_data']['full_path'],
						'new_image'=> './asset/tichresize_thumb/',
						'maintain_ration'=> TRUE,
						'overwrite' => TRUE,
						'width'=>30,
						'height'=>40);
					$this->image_lib->initialize($config_thumb); 
					$this->image_lib->resize();
				}
			$this->ptk_model->update($id);
			redirect('data_ptk');
		}
		
	}
	
	function searchData($key)
	{
		if($key==NULL)
		{
			$data['jumlah_data'] = "Data yang dicari tidak ditemukan dalam database!!!";
			$this->template->build('data/ptk_view',$data);
			
		}else {
			$data['fields']=$this->ptk_model->search($key)->result();
			$fields = $this->ptk_model->search($key)->result();
			$data['jumlah_data']=count($fields); 
			$this->template->build('data/ptk_view',$data);
		}
						
	}
	
	
}