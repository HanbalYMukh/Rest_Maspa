<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gt_panel{

	var $f_hasil	=	'';
	var $f_panjang	=	'100';
	var $f_judul	=	'';
	var $f_icon_path	=	'';
	var $f_isi	=	'';
	var $f_margintop	=	'10';
	
	function resetContainer(){
		$this->f_hasil	=	'';
		$this->f_panjang	=	'100';
		$this->f_judul	=	'';
		$this->f_icon_path	=	'';
		$this->f_isi	=	'';
		$this->f_margintop	=	'10';
	}
    
    function generate()
    {
        $this->f_hasil='
		<center><table style="margin-top:'.$this->f_margintop.'px;margin-bottom:20px;" width="'.$this->f_panjang.'" cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td class="panel_top_left">&nbsp;</td>
			<td class="panel_top_mid">';
			if($this->f_icon_path != ""){
				$this->f_hasil .='<img src="'.$this->f_icon_path.'" height="16" /> ';
			}
			$this->f_hasil .= $this->f_judul.'</td>
			<td class="panel_top_right">&nbsp;</td>
		</tr>
		<tr>
			<td class="panel_mid_left">&nbsp;</td>
			<td class="panel_mid_mid" align="center">'.$this->f_isi.'</td>
			<td class="panel_mid_right">&nbsp;</td>
		</tr>
		<tr>
			<td class="panel_bottom_left">&nbsp;</td>
			<td class="panel_bottom_mid">&nbsp;</td>
			<td class="panel_bottom_right">&nbsp;</td>
		</tr>
		</table></center>';
		return $this->f_hasil;
    }
	
	//@p = panjang, q=judul, r=icon
	function setProperti($p,$q,$r)
	{
		$this->f_panjang=$p;
		$this->f_judul=$q;
		$this->f_icon_path=$r;
	}
	
	function setMarginTop($p)
	{
		$this->f_margintop=$p;
	}
	
	function addItem($p)
	{
		$this->f_isi=$p;
	}
}