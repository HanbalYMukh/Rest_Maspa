<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gt_content{

	var $base_url;
	
    function getHeader(){
		$hasil='
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<meta http-equiv="Content-Style-Type" content="text/css">
			<meta http-equiv="Content-Script-Type" content="text/javascript">
			<title>Sistem Informasi Evaluasi Diri Sekolah</title>
			<script src="'.$this->base_url.'static/javascripts/jquery/jquery-1.3.2.min.js" type="text/javascript"></script>
			<script src="'.$this->base_url.'static/javascripts/jquery/plugins/jquery.tabs.min.js" type="text/javascript"></script>
			<script src="'.$this->base_url.'static/javascripts/jquery/plugins/cookie/jquery.cookie.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(function() {
					var x=0;
					x=x+parseInt($.cookie("lasttab"));
					$("#container-5").tabs(x);
					$("#container-5 .tabheader").click(function(){
						$.cookie("lasttab", this.rel);
					});
				});
			</script>
	
			<link rel="stylesheet" href="'.$this->base_url.'static/css/jquery.tabs.css" type="text/css" media="print, projection, screen">
			<link rel="stylesheet" href="'.$this->base_url.'static/css/reset.css" type="text/css">
			<link rel="stylesheet" href="'.$this->base_url.'static/css/style_admin.css" type="text/css">
			';
		return $hasil;
	}
	
	function getMenu(){
		
	}
	
	function setBaseUrl($b){
		$this->base_url=$b;
	}
	
	function getIconMenu($group='tab1'){
		$hasil='';
		if($group=="tab1"){
			$hasil='<h1>Menu SNP</h1><a href="'.$this->base_url.'index.php/snp" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/snp.png" />Data SNP</a>';
			$hasil.='<a href="'.$this->base_url.'index.php/aspek" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/aspek.png" />Data Aspek</a>';			
			$hasil.='<a href="'.$this->base_url.'index.php/dataindikator" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/indikator.png" />Indikator</a>';
			$hasil.='<a href="'.$this->base_url.'index.php/parameter" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/parameter.png" />Parameter</a>';
			$hasil.='<a href="'.$this->base_url.'index.php/bukti" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/bukti.png" />Data Bukti Aspek</a>';
			$hasil.='<a href="'.$this->base_url.'index.php/spec" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/spec.png" />Data Spesifikasi Aspek</a>';
			$hasil.='<a href="'.$this->base_url.'index.php/tingkatcapai" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/diagram.png" />Data Tingkat Capai</a>';
			$hasil.='<a href="'.$this->base_url.'index.php/indikator" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/data indikator.png" />Data Indikator</a>';
			$hasil.='<a href="'.$this->base_url.'index.php/tingkatcapai" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/tingkat capai.png" />Standar Capaian</a>';
			
		}else if($group=="tab2"){
			$hasil.='<h1>Menu Statistik</h1><a href="'.$this->base_url.'index.php/statistik/sekolah" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/sekolah.png" /><br/>Data Sekolah</a>';
			$hasil.='<a href="'.$this->base_url.'index.php/statistik/kecamatan" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/kecamatan.png" /><br/>Data Kecamatan</a>';	
			$hasil.='<a href="'.$this->base_url.'index.php/statistik/kabupaten" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/kabupaten.png" /><br/>Data Kabupaten</a>';	
			$hasil.='<a href="'.$this->base_url.'index.php/statistik/provinsi" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/provinsi.png" /><br/>Data Provinsi</a>';	
		}else if($group=="tab3"){
			//$hasil.='<h1>Menu Data Evaluasi Diri Sekolah</h1><a href="'.$this->base_url.'index.php/eds" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/kabupaten.png" /><br/>Nilai Evaluasi Diri Sekolah</a>';
			//$hasil.='<a href="'.$this->base_url.'index.php/detail_ringkasan" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/bukti.png" /><br/>Detail Ringkasan</a>';
			//$hasil.='<a href="'.$this->base_url.'index.php/spec" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/spec.png" /><br/>Detail Bukti</a>';
			$hasil.='<a href="'.$this->base_url.'index.php/sarana" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/" /><br/>Standar Sarana dan Prasarana</a>';
			$hasil.='<a href="'.$this->base_url.'index.php/spec" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/" /><br/>Standar Isi</a>';
			$hasil.='<a href="'.$this->base_url.'index.php/spec" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/" /><br/>Standar Proses</a>';
			$hasil.='<a href="'.$this->base_url.'index.php/spec" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/" /><br/>Standar Penilaian</a>';
			$hasil.='<a href="'.$this->base_url.'index.php/spec" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/" /><br/>Standar Kompetensi Kelulusan</a>';
			$hasil.='<a href="'.$this->base_url.'index.php/spec" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/" /><br/>Standar Pengelolaan</a>';
			$hasil.='<a href="'.$this->base_url.'index.php/spec" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/spec.png" /><br/>Standar Pendidik dan Tenaga Kependidikan</a>';
			$hasil.='<a href="'.$this->base_url.'index.php/spec" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/" /><br/>Standar Pembiayaan</a>';
		}else if($group=="tab4"){
			$hasil.='<h1>Data Analisis dan Laporan</h1><a href="'.$this->base_url.'index.php/analisis" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/user.png" /><br/>Data Analisis</a>';
		}else if($group=="tab5"){
			$hasil.='<h1>User Management</h1><a href="'.$this->base_url.'index.php/config/user_manager" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/user.png" /><br/>User Administrator</a>';
			$hasil.='<a href="'.$this->base_url.'index.php/config/blah/add" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/user_add.png" /><br/>Add new user</a>';		
		}else if($group=="tab6"){
			$hasil.='<h1>Setting</h1><a href="'.$this->base_url.'index.php/config/aplikasi" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/setting.png" /><br/>Konfigurasi Aplikasi</a>';
			$hasil.='<a href="'.$this->base_url.'index.php/config/account" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/myaccount.png" /><br/>Ubah data account</a>';	
		}else if($group=="tab7"){
			$hasil.='<h1>Anda yakin untuk logout?</h1><a href="'.$this->base_url.'index.php/home/logout" class="menu_icon"><img src="'.$this->base_url.'static/images/sysimages/menu_icons/logout.png" /><br/>Logout</a>';	
		}
		return $hasil;
	}
}
