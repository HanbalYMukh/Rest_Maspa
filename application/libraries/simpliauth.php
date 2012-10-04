<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Simpliauth
{
	function Simpliauth()
	{
		$this->SA =& get_instance();
		$this->SA->load->library(array('auth','loader','simplival','encrypt'));
		$this->SA->load->database();
		$this->SA->config->load('config');
		$this->SA->load->helper('string');
		$this->SA->load->plugin('captcha');
	}
	function setChaptcha()
	{
		$captcha_path = $this->SA->config->item('captcha_path');
		$vals = array(
            'img_path'      => './captcha/',
            'img_url'       => $captcha_path,
            'expiration'    => 3600,// one hour
			'font_path'	 	=> './system/fonts/georgia.ttf',
			'img_width'	 	=> '140',
			'word'			=> random_string('numeric', 6),
        );
		$cap = create_captcha($vals);
        $capdb = array(
                'captcha_id'      => '',
                'captcha_time'    => $cap['time'],
                'ip_address'      => $this->SA->input->ip_address(),
                'word'            => $cap['word']
        );
        $query = $this->SA->db->insert_string('captcha', $capdb);
        $this->SA->db->query($query);
        $data['cap'] = $cap;
		return $data;
	}
	function loginMe($value,$rule)
	{		
		$this->SA->simplival->setFields($value);
		if($this->SA->simplival->validatingData($value,$rule)==FALSE)
		{	
			$data = $this->setChaptcha();
			redirect('home/login','refresh');
		}else{
			$this->loginProcess($value);
		}
	}
	function loginProcess($value)
	{      
          $datalogin = $this->SA->simplival->acceptData($value);
          array_pop($datalogin);
          if($this->SA->auth->process_login($datalogin)==FALSE)  
          {  
          	$this->SA->simplival->redirectMessage('Anda salah memasukkan username atau password',
             									 'home/login');           
          }else{  
            $this->SA->auth->redirect(); 
          } 
	}
}