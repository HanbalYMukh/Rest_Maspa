<link href="<?php echo base_url().'static/css/form2.css'; ?>" rel="stylesheet"/>
<script type="text/javascript" src="<?=base_url()?>static/datetimepicker_css.js"></script>
<link href="<?php echo base_url().'static/css/rfnet.css'; ?>" rel="stylesheet" type="text/css">

<?php echo form_open_multipart('data_ptk/addData');?>
    <table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="50%">
      <tr align="center"><td colspan="2"><div class="error" align="center"><?php echo validation_errors(); ?></div></td></tr>
      <tr class="tr_head" align="center">
  		  <td colspan="2">Tambah Data PTK</td>
	  </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;NUPTK</th>
            <td><input  size="60" class="text_box" name="nuptk" /></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Nama</th>
            <td><input  size="60" class="text_box" name="nama_ptk" /></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Jenis Kelamin</th>
            <td><select name="kelamin_ptk"  class="select_box">
				<option value="">&nbsp;-- Pilih -- </option>
				<option value="L">&nbsp;Laki-laki</option>
				<option value="P">&nbsp;Perempuan</option></select></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Tempat Lahir</th>
            <td><input  size="60" class="text_box" name="tmplahir_ptk" /></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Tanggal Lahir</th>
            <td><input type="text" name="tgllahir_ptk" id="demo3" maxlength="25" size="25" class="text_box"> <a href="javascript:NewCssCal('demo3','yyyymmdd')">
    <img src="<?=base_url();?>static/images/images/cal.gif" width="16" height="16" alt="Pick a date"></a></td></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Agama</th>
            <td><select name="agama_ptk" class="select_box">
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
            <th align="left">&nbsp;Alamat</th>
            <td><textarea  cols="45" class="textarea" name="alamat_ptk"></textarea></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Kota</th>
            <td><input  size="60" class="text_box" name="kota_ptk" /></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Kode Pos</th>
            <td><input  size="60" class="text_box" name="kodepos_ptk" /></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Telp</th>
            <td><input  size="60" class="text_box" name="telp_ptk" /></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Golongan</th>
            <td><input  size="60" class="text_box" name="gol_ptk" /></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Pendidikan Terakhir</th>
            <td><select name="pendidikan_ptk" class="select_box">
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
            <th align="left">&nbsp;Status</th>
            <td><select name="status_ptk" class="select_box">
    	<option value="">&nbsp;-- Pilih -- </option>
        <option value="Pegawai Negeri Sipil (PNS)">&nbsp;Pegawai Negeri Sipil(PNS)</option>
        <option value="Guru Tetap Yayasan (GTY)">&nbsp;Guru Tetap Yayasan (GTY)</option>
        <option value="Guru Tidak Tetap (GTT)">&nbsp;Guru Tidak Tetap (GTT)</option>
        <option value="Guru Bantu Pusat (GBP)">&nbsp;Guru Bantu Pusat (GBP)</option>
        <option value="Guru Bantu Daerah (GBD)">&nbsp;Guru Bantu Daerah (GBD)</option>
        </select></td>
        </tr>
        <tr>
		<td>Pilih Foto </td><td><input type="file" name="userfile" size="20" /></td>
	  </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="Simpan" class="button"/>&nbsp;<input class="button" type="button" value="Batalkan" onclick="location.href='<?=base_url()?>index.php/data_ptk';"/></td>
            
        </tr>
    </table>
</form>