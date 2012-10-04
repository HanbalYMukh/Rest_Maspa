<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gt_img_lib{

	var $cloaded=false;
	var $tema="default";
	
    function previewImage($thumb="",$title="") {
		$x="";
		$hasil="";
		$real_name="";
		if(($thumb!="")&&(file_exists('files_upload/foto/'.$thumb)))
		{
			$real_name='files_upload/foto/'.str_replace('_thumb', '', $thumb);
			if(file_exists($real_name))
			{
				if(!$this->cloaded)
				{
					$x='<link rel="stylesheet" type="text/css" href="'.FOLDER_SIS.FOLDER_APP.'tema/'.$this->tema.'/jquery.lightbox-0.5.css" media="screen" />';
					$x.='<script language="javascript" type="text/javascript" src="'.FOLDER_SIS.FOLDER_APP.'javascript/plugins/lightbox/jquery.lightbox-0.5.min.js">			
					</script>
					<script type="text/javascript">
						$(function() {
							$("#page_isi_utama #gt_preview").lightBox(
								{
								imageLoading: "'.FOLDER_SIS.FOLDER_APP.'tema/'.$this->tema.'/images/lightbox/loading.gif",
								imageBtnClose: "'.FOLDER_SIS.FOLDER_APP.'tema/'.$this->tema.'/images/lightbox/close.gif",
								imageBtnPrev: "'.FOLDER_SIS.FOLDER_APP.'tema/'.$this->tema.'/images/lightbox/prev.gif",
								imageBtnNext: "'.FOLDER_SIS.FOLDER_APP.'tema/'.$this->tema.'/images/lightbox/next.gif"
								}
							);
						});
					</script>';
					$this->cloaded=true;
				}
				$hasil=$x.'<a href="'.$real_name.'" id="gt_preview"><img class="gt_preview" src="files_upload/foto/'.$thumb.'" title="'.$title.' (Klik untuk melihat ukuran lebih besar)" alt="'.$title.'" /></a>';
			}
			else
			{
				$hasil=$x.'<img src="files_upload/foto/'.$thumb.'" title="'.$title.'" alt="'.$title.'" id="gt_no_preview" />';
			}
		}
		else
			$hasil=$x.'<img src="'.FOLDER_SIS.FOLDER_APP.'tema/'.$this->tema.'/images/form/blank_photo.png" title="Tidak ada foto" alt="Tidak ada foto" />';
		return $hasil;
	}
	
	function setThemeName($tm){
		$this->tema=$tm;
	}
	
}

