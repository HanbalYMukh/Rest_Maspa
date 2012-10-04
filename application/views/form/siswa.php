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

	<form action="<?=base_url()?>index.php/siswa/saveSiswa" method="post">
	<table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="60%">
	<tr align="center"><td colspan="2"><div class="error" align="center"><?php echo validation_errors(); ?></div></td></tr>
	<tr class="tr_head" align="center">
	  <td colspan="2">Form Input Profil Siswa</td>
	</tr>
	<tr class="tr_data">
	  <td>&nbsp;No. Induk Siswa</td>
	  <td>&nbsp;<input type="text" name="no_induk" size="50" class="text_box" /></td></tr>
    <tr class="tr_data">
      <td>&nbsp;Nama Siswa</td><td>&nbsp;<input type="text" name="nama_siswa" size="50" class="text_box" /></td></tr>
    <tr class="tr_data"><td>&nbsp;Jenis Kelamin</td>
    <td>&nbsp;<select name="kelamin_siswa" class="select_box">
        <option value="">&nbsp;-- Pilih -- </option>
        <option value="L">&nbsp;Laki-laki</option>
        <option value="P">&nbsp;Perempuan</option></select></td></tr>
    <tr class="tr_data"><td>&nbsp;Tempat Lahir</td><td>&nbsp;<input type="text" name="tmplahir_siswa" size="50" class="text_box" /></td></tr>
    <tr class="tr_data"><td>&nbsp;Tanggal Lahir</td><td>&nbsp;
    <input type="text" name="demo3" id="demo3" maxlength="25" size="25"> <a href="javascript:NewCssCal('demo3','yyyymmdd')">
    <img src="<?=base_url();?>static/images/images/cal.gif" width="16" height="16" alt="Pick a date"></a>
    
    
    
      <!--select name="tgllahir_kepsek" class="select_box">
        <option value="">&nbsp;-- Pilih -- </option>
        <option value="01">&nbsp;01</option>
        <option value="02">&nbsp;02</option>
        <option value="03">&nbsp;03</option>
        <option value="04">&nbsp;04</option>
        <option value="05">&nbsp;05</option>
        <option value="06">&nbsp;06</option>
        <option value="07">&nbsp;07</option>
        <option value="08">&nbsp;08</option>
        <option value="09">&nbsp;09</option>
        <option value="10">&nbsp;10</option>
        <option value="11">&nbsp;11</option>
        <option value="12">&nbsp;12</option>
        <option value="13">&nbsp;13</option>
        <option value="14">&nbsp;14</option>
        <option value="15">&nbsp;15</option>
        <option value="16">&nbsp;16</option>
        <option value="17">&nbsp;17</option>
        <option value="18">&nbsp;18</option>
        <option value="19">&nbsp;19</option>
        <option value="20">&nbsp;20</option>
        <option value="21">&nbsp;21</option>
        <option value="22">&nbsp;22</option>
        <option value="23">&nbsp;23</option>
        <option value="24">&nbsp;24</option>
        <option value="25">&nbsp;25</option>
        <option value="26">&nbsp;26</option>
        <option value="27">&nbsp;27</option>
        <option value="28">&nbsp;28</option>
        <option value="29">&nbsp;29</option>
        <option value="30">&nbsp;30</option>
        <option value="31">&nbsp;31</option>
      </select>
      <select name="blnlahir_kepsek" class="select_box">
        <option value="">&nbsp;-- Pilih -- </option>
        <option value="Januari">&nbsp;Januari</option>
        <option value="Februari">&nbsp;Februari</option>
        <option value="Maret">&nbsp;Maret</option>
        <option value="April">&nbsp;April</option>
        <option value="Mei">&nbsp;Mei</option>
        <option value="Juni">&nbsp;Juni</option>
        <option value="Juli">&nbsp;Juli</option>
        <option value="Agustus">&nbsp;Agustus</option>
        <option value="September">&nbsp;September</option>
        <option value="Oktober">&nbsp;Oktober</option>
        <option value="November">&nbsp;November</option>
        <option value="Desember">&nbsp;Desember</option>
      </select>
      <input type="text" name="thnlahir_kepsek" size="25" class="text_box" /--></td>
     
    </tr>
    <tr class="tr_data"><td>&nbsp;Agama</td>
    <td>&nbsp;<select name="agama_siswa" class="select_box">
    	<option value="">&nbsp;-- Pilih -- </option>
        <option value="Islam">&nbsp;Islam</option>
        <option value="Kristen">&nbsp;Kristen</option>
        <option value="Katolik">&nbsp;Katolik</option>
        <option value="Hindu">&nbsp;Hindu</option>
        <option value="Buddha">&nbsp;Buddha</option>
        <option value="Konghucu">&nbsp;Konghucu</option>
        </select></td></tr>
	<tr class="tr_data"><td>&nbsp;Alamat</td><td>&nbsp;
	  <textarea name="alamat_siswa" class="textarea" cols="45"></textarea></td></tr>
    <tr class="tr_data"><td>&nbsp;Kota</td><td>&nbsp;<input type="text" name="kota_siswa" size="50" class="text_box" /></td></tr>
    <tr class="tr_data"><td>&nbsp;Kodepos</td><td>&nbsp;<input type="text" name="kodepos_siswa" size="50" class="text_box" /></td></tr>
    <tr class="tr_data">
      <td>&nbsp;Telp. Siswa</td><td>&nbsp;<input type="text" name="telp_siswa" size="50" class="text_box" /></td></tr>
    <tr class="tr_data">
      <td>&nbsp;Nama Orangtua</td><td>&nbsp;<input type="text" name="nama_ortu" size="50" class="text_box" /></td></tr>
     <tr class="tr_data">
      <td>&nbsp;Pekerjaan Orangtua</td><td>&nbsp;<input type="text" name="pekerjaan_ortu" size="50" class="text_box" /></td></tr>
    <tr class="tr_data"><td>&nbsp;Pendidikan</td><td>&nbsp;<!--input type="text" name="pendidikan_kepsek" size="50" class="text_box" /--><select name="pendidikan_ortu" class="select_box">
    	<option value="">&nbsp;-- Pilih -- </option>
        <option value="SD">&nbsp;SD</option>
        <option value="SMP">&nbsp;SMP</option>
        <option value="SMA / SMK / Sederajat">&nbsp;SMA / SMK / Sederajat</option>
        <option value="D1 / D2 / D3">&nbsp;D1 / D2 / D3</option>
        <option value="D4 / S1">&nbsp;D4 / S1</option>
        <option value="S2">&nbsp;S2</option>
        <option value="S3">&nbsp;S3</option>
        </select></td></tr>
     <tr class="tr_data">
      <td>&nbsp;Tahun Masuk</td><td>&nbsp;<input type="text" name="thn_masuk" size="50" class="text_box" /></td></tr>
      <tr class="tr_data">
      <td>&nbsp;Asal Sekolah</td><td>&nbsp;<input type="text" name="asal_sekolah" size="50" class="text_box" /></td></tr>
    <tr align="center" class="tr_button" ><td colspan="2"><input type="button" value="Batalkan"  class="button" onclick="location.href='<?=base_url()?>index.php/siswa/siswaData';"/>&nbsp;<input type="submit" value="Simpan" class="button" /></td></tr>
	</table>
</form>

<?php } ?>
</body>
</html>
