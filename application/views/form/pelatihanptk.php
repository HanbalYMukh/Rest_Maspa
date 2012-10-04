<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Form Profil Kepala Sekolah</title>
<script type="text/javascript" src="<?=base_url()?>static/datetimepicker_css.js"></script>
<link href="<?php echo base_url().'static/css/form2.css'; ?>" rel="stylesheet"/>
<link href="<?php echo base_url().'static/css/rfnet.css'; ?>" rel="stylesheet" type="text/css">
</head>
<body>
<?php if($tipe=="edit"){ ?>

	<form action="<?=base_url()?>index.php/siswa/actionSiswa" method="post">
	<input type="hidden" name="tipe" value="simpanedit" />
	<table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="50%">
	<tr class="tr_head" align="center">
	  <td colspan="2">Form Edit Profil Siswa</td>
	</tr>
	<?php for($i=0;$i<count($id_kepsek);$i++){ ?>
	<tr class="tr_data"><td>&nbsp;Nama Kepala Sekolah <?=$i+1?></td><td>&nbsp;<input type="hidden" name="id_kepsek[]" value="<?=$id_kepsek[$i]?>" /><input type="text" name="nama_kepsek[]" size="50" class="text_box"  value="<?=$nama_kepsek[$i]?>"/></td></tr>
	
	<tr class="tr_data"><td>NIP <?=$i+1?></td><td><input type="text" name="nip_kepsek[]" size="50" class="text_box"  value="<?=$nip_kepsek[$i]?>"/></td></tr>
	<tr class="tr_data"><td>Jenis Kelamin <?=$i+1?></td><td><input type="text" name="kelamin_kepsek[]" size="50" class="text_box"  value="<?=$kelamin_kepsek[$i]?>"/></td></tr>
	<tr class="tr_data"><td>Tempat Lahir <?=$i+1?></td><td><input type="text" name="tmplahir_kepsek[]" size="50" class="text_box"  value="<?=$tmplahir_kepsek[$i]?>"/></td></tr>
	<tr class="tr_data"><td>Tanggal Lahir <?=$i+1?></td><td><input type="text" name="tgllahir_kepsek[]" size="50" class="text_box"  value="<?=$tgllahir_kepsek[$i]?>"/></td></tr>
	<tr class="tr_data"><td>Agama Lahir <?=$i+1?></td><td><input type="text" name="agama_kepsek[]" size="50" class="text_box"  value="<?=$agama_kepsek[$i]?>"/></td></tr>
	<tr class="tr_data"><td>Alamat <?=$i+1?></td><td><input type="text" name="alamat_kepsek[]" size="50" class="text_box"  value="<?=$alamat_kepsek[$i]?>"/></td></tr>
	<tr class="tr_data"><td>Kota <?=$i+1?></td><td><input type="text" name="kota_kepsek[]" size="50" class="text_box"  value="<?=$kota_kepsek[$i]?>"/></td></tr>
	<tr class="tr_data"><td>Kode Pos <?=$i+1?></td><td><input type="text" name="kodepos_kepsek[]" size="50" class="text_box"  value="<?=$kodepos_kepsek[$i]?>"/></td></tr>
	<tr class="tr_data"><td>Telp <?=$i+1?></td><td><input type="text" name="telp_kepsek[]" size="50" class="text_box"  value="<?=$telp_kepsek[$i]?>"/></td></tr>
	<tr class="tr_data"><td>Pendidikan <?=$i+1?></td><td><input type="text" name="pendidikan_kepsek[]" size="50" class="text_box"  value="<?=$pendidikan_kepsek[$i]?>"/></td></tr>
	
	
	<?php } ?>
	
	
	<tr align="center" class="tr_button"><td colspan="2"><input type="button" value="Batalkan"  class="button" onclick="location.href='<?=base_url()?>index.php/kepsek/kepsekData';"/>&nbsp;<input type="submit" value="Simpan" class="button" /></td></tr>
	</table>
	</form>

<?php }else{ ?>


<!-- form input --->

	<form action="<?=base_url()?>index.php/pelatihanptk/saveData" method="post">
	<table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="60%">
	<tr align="center"><td colspan="2"><div class="error" align="center"><?php echo validation_errors(); ?></div></td></tr>
	<tr class="tr_head" align="center">
	  <td colspan="2">Form Input Pelatihan PTK</td>
	</tr>
	<tr class="tr_data">
	  <td>&nbsp;Nama PTK</td>
	  <td><input type="text" name="nuptk" size="50" class="text_box" /></td></tr>
    <tr class="tr_data">
      <td>&nbsp;Tahun</td>
      <td><input type="text" name="tahun" size="50" class="text_box" /></td></tr>
    <tr class="tr_data">
      <td>&nbsp;Nama Pelatihan</td>
      <td><input type="text" name="nama_pelatihan" size="50" class="text_box" /></td></tr>
    <tr class="tr_data">
      <td>&nbsp;Jenis Pelatihan</td>
      <td><input type="text" name="jns_pelatihan" size="50" class="text_box" /></td></tr>
    <tr class="tr_data">
      <td>&nbsp;Nama Lembaga</td>
      <td><input type="text" name="nama_lembaga" size="50" class="text_box" /></td></tr>
    <tr class="tr_data">
      <td>&nbsp;Alamat Lembaga</td>
      <td><input type="text" name="alamat_lembaga" size="50" class="text_box" /></td></tr>
    <tr class="tr_data"><td>&nbsp;Kota Lembaga</td>
    <td><input type="text" name="kota_lembaga" size="50" class="text_box" /></td></tr>
    <tr class="tr_data"><td>&nbsp;Kodepos</td><td><input type="text" name="kodepos_lembaga" size="50" class="text_box" /></td></tr>
    
    <tr align="center" class="tr_button" ><td colspan="2"><input type="button" value="Batalkan"  class="button" onclick="location.href='<?=base_url()?>index.php/pelatihanptk/getData';"/>&nbsp;<input type="submit" value="Simpan" class="button" /></td></tr>
	</table>
</form>

<?php } ?>
</body>
</html>
