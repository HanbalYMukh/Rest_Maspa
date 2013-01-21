<?php
	class data_nilai extends MY_Controller 
	{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library(array('form_validation','pagination'));
		$this->load->model('kelas_model');
	}
		
	function index()
		{
			$data['kelas']=$this->kelas_model->selectData();
			$this->template->build('data/nilai_view',$data);
		}
	
}