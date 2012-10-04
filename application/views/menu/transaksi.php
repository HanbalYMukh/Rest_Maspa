<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Data Siswa</title>
<link href="<?php echo base_url().'static/css/data.css'; ?>" rel="stylesheet"/>
</head>
<body>
<div id="conten">
	<!--<div id="info_login">
	<?php echo date('d M Y H:i:s'); ?> | User Login : admin (Super Admin / Root)&nbsp;
	</div>-->
	<div id="header_data" align="center">
	Data Transaksi Sekolah
	</div>
    
    	<fieldset id="menu">
		<a href="<?=base_url()?>index.php/data_preguru">
		<img src="<?=base_url()?>static/images/sysimages/menu_icons/guru.png" />
		<p align="center">Data Presensi Guru</p></a>
		</fieldset>
	
		<fieldset id="menu">
		<a href="<?=base_url()?>index.php/data_presiswa">
		<img src="<?=base_url()?>static/images/sysimages/menu_icons/user.png" />
		<p align="center">Data Presensi Siswa</p></a>
		</fieldset>
		
		
		<fieldset id="menu">
		<a href="<?=base_url()?>index.php/data_kurikulum">
		<img src="<?=base_url()?>static/images/sysimages/menu_icons/snp.png" />
		<p align="center">Data Kurikulum</p></a>
		</fieldset>
	
		<fieldset id="menu">
		<a href="<?=base_url()?>index.php/tahun_ajaran">
		<img src="<?=base_url()?>static/images/sysimages/menu_icons/penilaian.png" />
		<p align="center">Tahun Ajaran</p></a>
		</fieldset>
		<fieldset id="menu">
		<a href="<?=base_url()?>index.php/data_sarana_kelas">
		<img src="<?=base_url()?>static/images/sysimages/menu_icons/guru.png" />
		<p align="center">Data kelas</p></a>
		</fieldset>
		<!--fieldset id="menu">
		<a href="<?=base_url()?>index.php/profile">
		<img src="<?=base_url()?>static/images/sysimages/menu_icons/provinsi.png" />
		<p align="center">Data Sekolah</p></a>
		</fieldset>
		
		<<fieldset id="menu">
		<a href="<?=base_url()?>index.php/statistik/kabupaten">
		<img src="<?=base_url()?>static/images/sysimages/menu_icons/kabupaten.png" />
		<p align="center">Data Kabupaten</p></a>
		</fieldset-->
		
		
	
</div>
</body>
</html>
