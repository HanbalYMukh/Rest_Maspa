<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller Extends CI_Controller 
{
	function __construct() {
		parent::__construct();
		$level = $this->session->userdata('level');
		//get menu data
		$global_data['menusatu'] = $this->usermodel->get_menusatu_for_level($level);
		$global_data['menudua'] = $this->usermodel->get_menudua_for_level($level);
		$global_data['menutiga'] = $this->usermodel->get_menutiga_for_level($level);
		$global_data['menuempat'] = $this->usermodel->get_menuempat_for_level($level);

		//load into all views loaded by this controller
		$this->load->vars($global_data);
	}
	
	function logout()
	{
		if($this->auth->is_logged_in() == true)
		{
			// jika dia memang sudah login, destroy session
			$this->auth->do_logout();
		}
		// larikan ke halaman utama
		redirect('home');
	}
}
