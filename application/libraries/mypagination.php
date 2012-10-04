<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Mypagination
{
 function Mypagination()
 {
  $this->SP =& get_instance();
  $this->SP->load->library('pagination');
 }
 function getPagination($total, $per_page, $url, $uri_segment)
 {
  $config['base_url'] = base_url().'index.php/'.$url;
  $config['total_rows'] = $total;
  $config['full_tag_open'] = '<div class=paging>';
  $config['full_tag_close'] = '</div>';
  $config['cur_tag_open'] = '<span class=pag_link_cur>';
  $config['cur_tag_close'] = '</span>';
  $config['num_tag_open'] = '<span class=pag_link>';
  $config['num_tag_close'] = '</span>';
  $config['per_page'] = $per_page;
  $config['next_link'] = 'next ›';
  $config['prev_link'] = '‹ prev';
  $config['num_links'] = 2;
  $config['uri_segment'] = $uri_segment;  
  $this->SP->pagination->initialize($config);
  $data['page']=5;
  $data['link']=$this->SP->pagination->create_links();
  
  return $data;
 }
}
?>