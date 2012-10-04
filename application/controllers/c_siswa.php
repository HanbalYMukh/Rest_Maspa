<?php
class C_siswa extends Controller {

	function C_siswa()
	{
		parent::Controller();
	}
	
	function index()
	{
		$this->load->view('menu/siswa');
	}

	
}