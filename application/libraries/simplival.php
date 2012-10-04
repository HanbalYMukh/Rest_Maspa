<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Simplival
{
	function Simplival()
	{
		$this->SV =& get_instance();
		$this->SV->load->library('validation');
		$this->SV->load->library(array('loader','auth','encrypt','session'));
		$this->SV->load->helper('security');
	}
	function acceptData($value)
	{
		foreach($value as $key => $val)
		{		
			$data[$val]  = $this->SV->input->post($val,TRUE);
			if(is_array($data[$val])){
					$data[$val] = implode('+',$data[$val]);
				}else{
					$data[$val]  = strip_image_tags($data[$val]);
					$data[$val]  = encode_php_tags($data[$val]);
					$data[$val]  = trim($data[$val]);
					if(strstr($val,'_password'))
					{
						$data[$val] = $this->SV->encrypt->encode($data[$val]);
					}	
					if(strstr($val,'_tanggal'))
					{
						$month = substr($data[$val],3,2);
						$day = substr($data[$val],0,2);
						$year = substr($data[$val],6,4);
						settype($month,'integer');
						settype($day,'integer');
						settype($year,'integer');
						$data[$val] = mktime(5,5,5,$month,$day,$year);
					}	
				}
		}		
		return $data;
	}
	function redirectMessage($message,$url,$segment=NULL)
	{
        $data['pesan']=$message;
        $data['url']=$url;
        $data['seg']=$segment;
        $this->SV->load->view('main/redirect_message',$data);
	}
	function validatingData($field,$rule)
	{
		$data=$field + $rule;
		foreach($data as $key => $val)
		{	
			if(!is_numeric($key))
			{
				$rules[$key]=$val;
			}else{
				$rules[$val]='';	
			}
		}
		$this->SV->validation->set_rules($rules);
		$this->SV->validation->set_message('required', 'field ini tidak boleh kosong!');
		$this->SV->validation->set_message('matches', 'password tidak sama!');
		$this->SV->validation->set_message('valid_captcha', 'captcha tidak sama!');
		$this->SV->validation->set_message('valid_date', 'tanggal tidak valid!');
		$this->SV->validation->set_message('format_date', 'masukkan dengan format yang benar!');
		$this->SV->validation->set_message('integer', 'Harus berupa angka!');
		$this->SV->validation->set_error_delimiters('<div class="error">', '</div>');
		if($this->SV->validation->run()==FALSE)
		{
			return FALSE;
		}else{
			return TRUE;
		}			
	}
	function setFields($data){
		foreach($data as $key => $val)
		{
			$fields[$val]=$val;			
		}
		$this->SV->validation->set_fields($fields);
	}
	function tabs($id)
	{
		$curr=$this->SV->uri->segment(1);
		if(in_array($curr,$id))
		{
			return 'id=current';
			}else{
			return '';
		}
	}
}