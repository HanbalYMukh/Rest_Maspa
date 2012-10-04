<script>
	$(function() {
		$( "#datepicker" ).datepicker({ dateFormat: "yy-mm-dd"});
	});
</script>
<script>
	$(function() {
		$( ".datepicker" ).datepicker({ dateFormat: "yy-mm-dd"});
	});
</script>

<?php echo form_open_multipart('data_siswa/addData');?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top"><table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="98%">
      
      <tr class="tr_head" align="center">
        <td colspan="2" >Tambah Data Siswa </td>
      </tr>
      <tr class="tr_data">
        <td>&nbsp;Nama Siswa </td>
        <td><input type="text" name="nama_siswa" size="50" class="text_box" /></td>
      </tr>
      <tr class="tr_data">
        <td>&nbsp;No. Induk </td>
        <td><input type="text" name="no_induk" size="50" class="text_box" /></td>
      </tr>
      <tr class="tr_data">
        <td>&nbsp;Jenis Kelamin</td>
        <td><select name="kelamin_siswa" class="select_box">
            <option value="">&nbsp;-- Pilih -- </option>
            <option value="L">&nbsp;Laki-laki</option>
            <option value="P">&nbsp;Perempuan</option>
        </select></td>
      </tr>
      <tr class="tr_data">
        <td>&nbsp;Tempat Lahir</td>
        <td><input type="text" name="tmplahir_siswa" size="50" class="text_box" /></td>
      </tr>
      <tr class="tr_data">
        <td>&nbsp;Tanggal Lahir</td>
        <td>
          <input type="text" name="tgllahir_siswa"id="datepicker" />
		  </td>
      </tr>
      <tr class="tr_data">
        <td>&nbsp;Agama</td>
        <td><select name="agama_siswa" class="select_box">
            <option value="">&nbsp;-- Pilih -- </option>
            <option value="Islam">&nbsp;Islam</option>
            <option value="Kristen">&nbsp;Kristen</option>
            <option value="Katolik">&nbsp;Katolik</option>
            <option value="Hindu">&nbsp;Hindu</option>
            <option value="Buddha">&nbsp;Buddha</option>
            <option value="Konghucu">&nbsp;Konghucu</option>
        </select></td>
      </tr>
	  <tr class="tr_data">
        <td>&nbsp;Anak Ke</td>
        <td><textarea name="anak_ke" class="textarea" cols="45"></textarea></td>
      </tr>
	  <tr class="tr_data">
        <td>&nbsp;Status Keluarga</td>
        <td><textarea name="stt_klrga" class="textarea" cols="45"></textarea></td>
      </tr>
      <tr class="tr_data">
        <td>&nbsp;Alamat</td>
        <td><textarea name="alamat_siswa" class="textarea" cols="45"></textarea></td>
      </tr>
      <tr class="tr_data">
        <td>&nbsp;Kota</td>
        <td><input type="text" name="kota_siswa" size="50" class="text_box" /></td>
      </tr>
      <tr class="tr_data">
        <td>&nbsp;Kode Pos</td>
        <td><input type="text" name="kodepos_siswa" size="50" class="text_box" /></td>
      </tr>
	  <tr class="tr_data">
        <td>&nbsp;Diterima di Madrasah ini :</td>
      </tr>
	  <tr class="tr_data">
        <td>&nbsp;Di Kelas</td>
        <td><input type="text" name="kelas_awal" class="text_box" cols="45"></textarea></td>
      </tr><tr class="tr_data">
        <td>&nbsp;Pada Tanggal</td>
        <td><input type="text" name="tgl_awal" class="datepicker" /></td>
      </tr><tr class="tr_data">
        <td>&nbsp;Semester</td>
        <td><textarea name="smester_awal" class="text_box" cols="45"></textarea></td>
      </tr>
      <tr class="tr_data">
        <td>&nbsp;Telp. Siswa </td>
        <td><input type="text" name="telp_siswa" size="50" class="text_box" /></td>
      </tr>
      <tr class="tr_data">
        <td>&nbsp;Asal Sekolah </td>
        <td><input type="text" name="asal_sekolah" size="50" class="text_box" /></td>
      </tr>
	  <tr class="tr_data">
        <td>&nbsp;Alamat Sekolah Asal </td>
        <td><input type="text" name="alm_sekolah_asal" size="50" class="text_box" /></td>
      </tr>
	  <tr class="tr_data">
        <td>&nbsp;Tahun Ijazah MTs/SMP/Paket B </td>
        <td><input type="text" name="thn_ijazah_awal" size="50" class="text_box" /></td>
      </tr><tr class="tr_data">
        <td>&nbsp;Nomor Ijazah MTs/SMP/Paket B</td>
        <td><input type="text" name="no_ijazah_awal" size="50" class="text_box" /></td>
      </tr><tr class="tr_data">
        <td>&nbsp;Tahun SKHUN MTs/SMP/Paket B
        <td><input type="text" name="thn_skhun_awal" size="50" class="text_box" /></td>
      </tr><tr class="tr_data">
        <td>&nbsp;Nomor SKHUN MTs/SMP/Paket b </td>
        <td><input type="text" name="no_skhun_awal" size="50" class="text_box" /></td>
      </tr>

    </table>	</td>
    <td valign="top">

	<table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="98%">
	<tr class="tr_head" align="center">
	  		<td colspan="2">Tambah Data Orangtua Siswa </td>
		</tr>
      <tr class="tr_data">
        <td>&nbsp;Nama Ayah</td>
        <td><input type="text" name="nama_ayah" size="50" class="text_box" /></td>
      </tr>
	  <tr class="tr_data">
        <td>&nbsp;Nama Ibu</td>
        <td><input type="text" name="nama_ibu" size="50" class="text_box" /></td>
      </tr>
      <tr class="tr_data">
        <td>&nbsp;Pekerjaan Ayah</td>
        <td><input type="text" name="pekerjaan_ayah" size="50" class="text_box" /></td>
      </tr>
	  <tr class="tr_data">
        <td>&nbsp;Pekerjaan ibu</td>
        <td><input type="text" name="pekerjaan_ibu" size="50" class="text_box" /></td>
      </tr>
      <tr class="tr_data">
        <td>&nbsp;Pendidikan Ayah</td>
        <td><!--input type="text" name="pendidikan_siswa" size="50" class="text_box" /-->
            <select name="pendidikan_ayah" class="select_box">
              <option value="">&nbsp;-- Pilih -- </option>
              <option value="SD">&nbsp;SD</option>
              <option value="SMP">&nbsp;SMP</option>
              <option value="SMA / SMK / Sederajat">&nbsp;SMA / SMK / Sederajat</option>
              <option value="D1 / D2 / D3">&nbsp;D1 / D2 / D3</option>
              <option value="D4 / S1">&nbsp;D4 / S1</option>
              <option value="S2">&nbsp;S2</option>
              <option value="S3">&nbsp;S3</option>
          </select></td>
      </tr>
	  <tr class="tr_data">
        <td>&nbsp;Pendidikan Ibu</td>
        <td><!--input type="text" name="pendidikan_siswa" size="50" class="text_box" /-->
            <select name="pendidikan_ibu" class="select_box">
              <option value="">&nbsp;-- Pilih -- </option>
              <option value="SD">&nbsp;SD</option>
              <option value="SMP">&nbsp;SMP</option>
              <option value="SMA / SMK / Sederajat">&nbsp;SMA / SMK / Sederajat</option>
              <option value="D1 / D2 / D3">&nbsp;D1 / D2 / D3</option>
              <option value="D4 / S1">&nbsp;D4 / S1</option>
              <option value="S2">&nbsp;S2</option>
              <option value="S3">&nbsp;S3</option>
          </select></td>
      </tr>
	  <tr class="tr_data"> 
		<td>&nbsp;alamat Ayah</td>
        <td><input type="text" name="alm_ayah" size="50" class="text_box" /></td>
      </tr><tr class="tr_data">
	  <tr class="tr_data"> 
		<td>&nbsp;alamat Ibu</td>
        <td><input type="text" name="alm_ibu" size="50" class="text_box" /></td>
      </tr><tr class="tr_data">
	  <tr class="tr_data">
        <td>&nbsp;Nama Wali</td>
        <td><input type="text" name="nm_wali" size="50" class="text_box" /></td>
       <tr class="tr_data"> 
		<td>&nbsp;alamat Wali</td>
        <td><input type="text" name="alm_wali" size="50" class="text_box" /></td>
      </tr><tr class="tr_data">
        <td>&nbsp;Nomor Telepon Wali</td>
        <td><input type="text" name="telp_wali" size="50" class="text_box" /></td>
      </tr>
	  </tr><tr class="tr_data">
        <td>&nbsp;Pekerjaan Wali</td>
        <td><input type="text" name="pkerjaan_wali" size="50" class="text_box" /></td>
      </tr><tr class="tr_data">
	  <tr align="center">
        <td colspan="2"><div class="error" align="center"><?php echo validation_errors(); ?></div></td>
      </tr>
	  <tr>
		<td>Pilih Foto </td><td><input type="file" name="userfile" size="20" /></td>
	  </tr>
	  
      <tr>
        <th></th>
        <td><input type="submit" value="Simpan" class="button"/>
          &nbsp;
          <input class="button" type="button" value="Batalkan" onclick="location.href='<?=base_url()?>index.php/data_siswa';"/></td>
      </tr>
    </table>

</table>

</form>
