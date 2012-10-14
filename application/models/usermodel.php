<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usermodel extends CI_Model
{
	public function get_menusatu_for_level($user_level)
	{
		$this->db->from('menu');
		$this->db->like('menu_allowed','+'.$user_level.'+');
		$this->db->where('menu_id BETWEEN 1 and 10');
		$result = $this->db->get();
		return $result;
	}
	public function get_menudua_for_level($user_level)
	{
		$this->db->from('menu');
		$this->db->like('menu_allowed','+'.$user_level.'+');
		$this->db->where('menu_id BETWEEN 11 and 20');
		$result = $this->db->get();
		return $result;
	}
	public function get_menutiga_for_level($user_level)
	{
		$this->db->from('menu');
		$this->db->like('menu_allowed','+'.$user_level.'+');
		$this->db->where('menu_id BETWEEN 21 and 30');
		$result = $this->db->get();
		return $result;
	}
	public function get_menuempat_for_level($user_level)
	{
		$this->db->from('menu');
		$this->db->like('menu_allowed','+'.$user_level.'+');
		$this->db->where('menu_id BETWEEN 31 and 40');
		$result = $this->db->get();
		return $result;
	}
	function get_array_menu($id)
	{
		$this->db->select('menu_allowed');
		$this->db->from('menu');
		$this->db->where('menu_id',$id);
		$data = $this->db->get();
		if($data->num_rows() > 0)
		{
			$row = $data->row();
			$level = $row->menu_allowed;
			$arr = explode('+',$level);
			return $arr;
		}
		else
		{
			die();
		}
	}
}