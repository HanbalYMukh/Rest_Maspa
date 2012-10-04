<script type="text/javascript" src="<?=base_url()?>static/datetimepicker_css.js"></script>
<link href="<?php echo base_url().'static/css/rfnet.css'; ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url().'static/css/form2.css'; ?>" rel="stylesheet"/>
<?php echo form_open_multipart();?>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="top">
	  		<table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="98%">
    	<tr class="tr_head" align="center">
	  		<td colspan="2">Ubah  Data Siswa </td>
		</tr>
	
	<tr class="tr_data">
	  <td>&nbsp;Nama Siswa </td>
	  <td>
	  <input type="text" name="nama_siswa" size="50" class="text_box"  value="<?php echo $m->nama_siswa?>"/></td></tr>
	
	<tr class="tr_data">
	  <td>&nbsp;No. Induk </td>
	  <td><input type="text" name="no_induk" size="50" class="text_box"  value="<?php echo $m->no_induk?>"/></td></tr>
	<tr class="tr_data"><td>&nbsp;Jenis Kelamin
	  </td>
	<td>
	<?php
		$style=array("","");
		if($m->kelamin_siswa=="L"){ $style[0]="selected"; }else if($m->kelamin_siswa=="P"){ $style[1]="selected"; } else { $style[0]=""; $style[1]="";}
	?>
    <select name="kelamin_siswa" class="select_box">
    <option value="L" <?php echo $style[0]?> >Laki-laki</option>
    <option value="P" <?php echo $style[1]?> >Perempuan</option>
    </select></td></tr>
   <tr class="tr_data"><td>&nbsp;Tempat Lahir </td>
   <td><input type="text" name="tmplahir_siswa" size="50" class="text_box"  value="<?php echo $m->tmplahir_siswa?>"/></td></tr>
	<tr class="tr_data">
    <td>&nbsp;Tanggal Lahir</td>
    <td><input type="text" name="tgllahir_siswa" id="demo3" size="25" class="text_box" value="<?php echo $m->tgllahir_siswa?>"> <a href="javascript:NewCssCal('demo3','yyyymmdd')">
    <img src="<?php echo base_url();?>static/images/images/cal.gif" width="16" height="16" alt="Pick a date"></a></td></tr>
    
	<tr class="tr_data">
	  <td>&nbsp;Agama  </td>
      <td><?php	
			$se=array("","","","","","");
			if($m->agama_siswa=="Islam"){ $se[0]="selected"; }else if($m->agama_siswa=="Kristen"){ $se[1]="selected"; }else if($m->agama_siswa=="Katolik"){ $se[2]="selected"; }else if($m->agama_siswa=="Hindu"){ $se[3]="selected"; }else if($m->agama_siswa=="Buddha"){ $se[4]="selected"; }else if($m->agama_siswa=="Konghucu"){ $se[5]="selected"; }else{ $se[0]=""; $se[1]=""; $se[2]=""; $se[3]=""; $se[4]=""; $se[5]=""; }?>
        
    <select name="agama_siswa" class="select_box">
    <option value="Islam" <?php echo $se[0]?> >Islam</option>
    <option value="Kristen" <?php echo $se[1]?> >Kristen</option>
    <option value="Katolik" <?php echo $se[2]?> >Katolik</option>
    <option value="Hindu" <?php echo $se[3]?> >Hindu</option>
    <option value="Buddha" <?php echo $se[4]?> >Buddha</option>
    <option value="Konghucu" <?php echo $se[5]?> >Konghucu</option> 
    </select>
       </td></tr>
	<tr class="tr_data">
        <td>&nbsp;Anak Ke</td>
        <td><input type="text" name="anak_ke" class="text-box" cols="45" value="<?php echo $m->anak_ke?>"/></td>
      </tr>
	  <tr class="tr_data">
        <td>&nbsp;Status Keluarga</td>
        <td><input type="text" name="stt_klrga" class="text-box" cols="45" value="<?php echo $m->stt_klrga?>"/></td>
      </tr>
	<tr class="tr_data"><td>&nbsp;Alamat </td>
	<td><textarea name="alamat_siswa" rows="3" cols="45" class="textarea"><?php echo $m->alamat_siswa?></textarea></td></tr>
	<tr class="tr_data"><td>&nbsp;Kota </td>
	<td><input type="text" name="kota_siswa" size="50" class="text_box"  value="<?php echo $m->kota_siswa?>"/></td></tr>
	<tr class="tr_data"><td>&nbsp;Kode Pos </td>
	<td><input type="text" name="kodepos_siswa" size="50" class="text_box"  value="<?php echo $m->kodepos_siswa?>"/></td></tr>
		  <tr class="tr_data">
        <td colspan="3">&nbsp;Diterima di Madrasah ini :</td>
      </tr>
	  <tr class="tr_data">
        <td>&nbsp;Di Kelas</td>
        <td><input type="text" name="kelas_awal" class="text_box" cols="45" value="<?php echo $m->kelas_awal?>"/></td>
      </tr><tr class="tr_data">
        <td>&nbsp;Pada Tanggal</td>
        <td><input type="text" name="tgl_awal" class="text_box" cols="45" value="<?php echo $m->tgl_awal?>"/></td>
      </tr><tr class="tr_data">
        <td>&nbsp;Semester</td>
        <td><input type="text" name="smester_awal" class="text_box" cols="45" value="<?php echo $m->smester_awal?>"/></td>
      </tr>

	<tr class="tr_data">
	  <td>&nbsp;Telp. Siswa </td>
	  <td><input type="text" name="telp_siswa" size="50" class="text_box"  value="<?php echo $m->telp_siswa?>"/></td></tr>
	<tr class="tr_data">
        <td>&nbsp;Asal Sekolah </td>
        <td><input type="text" name="asal_sekolah" size="50" class="text_box" value="<?php echo $m->asal_sekolah?>" /></td>
      </tr>
	  <tr class="tr_data">
        <td>&nbsp;Alamat Sekolah Asal </td>
        <td><input type="text" name="alm_sekolah_asal" size="50" class="text_box" value="<?php echo $m->alm_sekolah_asal?>"/></td>
      </tr>
	  <tr class="tr_data">
        <td>&nbsp;Tahun Ijazah MTs/SMP/Paket B </td>
        <td><input type="text" name="thn_ijazah_awal" size="50" class="text_box" value="<?php echo $m->thn_ijazah_awal?>"/></td>
      </tr><tr class="tr_data">
        <td>&nbsp;Nomor Ijazah MTs/SMP/Paket B</td>
        <td><input type="text" name="no_ijazah_awal" size="50" class="text_box" value="<?php echo $m->no_ijazah_awal?>"/></td>
      </tr><tr class="tr_data">
        <td>&nbsp;Tahun SKHUN MTs/SMP/Paket B
        <td><input type="text" name="thn_skhun_awal" size="50" class="text_box" value="<?php echo $m->thn_skhun_awal?>" /></td>
      </tr><tr class="tr_data">
        <td>&nbsp;Nomor SKHUN MTs/SMP/Paket b </td>
        <td><input type="text" name="no_skhun_awal" size="50" class="text_box" value="<?php echo $m->no_skhun_awal?>"/></td>
      </tr>
      </table>
	  </td>
      <td valign="top">
	  		<table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="98%">
    	<tr class="tr_head" align="center">
	  		<td colspan="2">Ubah  Data Orangtua Siswa </td>
		</tr>
	
	<tr class="tr_data">
        <td>&nbsp;Nama Ayah</td>
        <td><input type="text" name="nama_ayah" size="50" class="text_box" value="<? echo $m->nama_ayah ?>" /></td>
      </tr>
	  <tr class="tr_data">
        <td>&nbsp;Nama Ibu</td>
        <td><input type="text" name="nama_ibu" size="50" class="text_box" value="<? echo $m->nama_ibu ?>" /></td>
      </tr>
      <tr class="tr_data">
        <td>&nbsp;Pekerjaan Ayah</td>
        <td><input type="text" name="pekerjaan_ayah" size="50" class="text_box" value="<? echo $m->pekerjaan_ayah ?>"/></td>
      </tr>
	  <tr class="tr_data">
        <td>&nbsp;Pekerjaan ibu</td>
        <td><input type="text" name="pekerjaan_ibu" size="50" class="text_box" value="<? echo $m->pekerjaan_ibu ?>"/></td>
      </tr>
	<tr class="tr_data">
	  <td>&nbsp;Pendidikan Ayah</td>
      <td>
    <?php	
		$st=array ("","","","","","","");
	if($m->pendidikan_ayah=="SD"){ $st[0]="selected"; }else if($m->pendidikan_ayah=="SMP"){ $st[1]="selected"; }
		else if($m->pendidikan_ayah=="SMA / SMK / Sederajat"){ $st[2]="selected"; }else if($m->pendidikan_ayah=="D1 / D2 / D3"){ $st[3]="selected"; }
		else if($m->pendidikan_ayah=="D4 / S1"){ $st[4]="selected"; }else if($m->pendidikan_ayah=="S2"){ $st[5]="selected"; }
		else if($m->pendidikan_ayah=="S3"){ $st[6]="selected"; }else{ $st[0]=""; $st[1]=""; $st[2]=""; $st[3]=""; $st[4]=""; $st[5]=""; $st[6]=""; }?>
    <select name="pendidikan_ayah" class="select_box">
        <option value="SD" <?php echo $st[0]?> >&nbsp;SD</option>
        <option value="SMP" <?php echo $st[1]?> >&nbsp;SMP</option>
        <option value="SMA / SMK / Sederajat" <?php echo $st[2]?> >&nbsp;SMA / SMK / Sederajat</option>
        <option value="D1 / D2 / D3" <?php echo $st[3]?> >&nbsp;D1 / D2 / D3</option>
        <option value="D4 / S1" <?php echo $st[4]?> >&nbsp;D4 / S1</option>
        <option value="S2" <?php echo $st[5]?> >&nbsp;S2</option>
        <option value="S3" <?php echo $st[6]?> >&nbsp;S3</option>
      </select></td>
	</tr>
	<tr class="tr_data">
	  <td>&nbsp;Pendidikan Ibu</td>
      <td>
    <?php	
		$st=array ("","","","","","","");
	if($m->pendidikan_ibu=="SD"){ $st[0]="selected"; }else if($m->pendidikan_ibu=="SMP"){ $st[1]="selected"; }
		else if($m->pendidikan_ibu=="SMA / SMK / Sederajat"){ $st[2]="selected"; }else if($m->pendidikan_ibu=="D1 / D2 / D3"){ $st[3]="selected"; }
		else if($m->pendidikan_ibu=="D4 / S1"){ $st[4]="selected"; }else if($m->pendidikan_ibu=="S2"){ $st[5]="selected"; }
		else if($m->pendidikan_ibu=="S3"){ $st[6]="selected"; }else{ $st[0]=""; $st[1]=""; $st[2]=""; $st[3]=""; $st[4]=""; $st[5]=""; $st[6]=""; }?>
    <select name="pendidikan_ibu" class="select_box">
        <option value="SD" <?php echo $st[0]?> >&nbsp;SD</option>
        <option value="SMP" <?php echo $st[1]?> >&nbsp;SMP</option>
        <option value="SMA / SMK / Sederajat" <?php echo $st[2]?> >&nbsp;SMA / SMK / Sederajat</option>
        <option value="D1 / D2 / D3" <?php echo $st[3]?> >&nbsp;D1 / D2 / D3</option>
        <option value="D4 / S1" <?php echo $st[4]?> >&nbsp;D4 / S1</option>
        <option value="S2" <?php echo $st[5]?> >&nbsp;S2</option>
        <option value="S3" <?php echo $st[6]?> >&nbsp;S3</option>
      </select></td>
	</tr>
	<tr class="tr_data"> 
		<td>&nbsp;alamat Ayah</td>
        <td><input type="text" name="alm_ayah" size="50" class="text_box" value="<? echo $m->alm_ayah ?>"/></td>
      </tr><tr class="tr_data">
	  <tr class="tr_data"> 
		<td>&nbsp;alamat Ibu</td>
        <td><input type="text" name="alm_ibu" size="50" class="text_box" value="<? echo $m->alm_ibu ?>"/></td>
      </tr><tr class="tr_data">
	  <tr class="tr_head" align="center">
	  		<td colspan="2"></td>
		</tr>
	  <tr class="tr_head" align="center">
	  		<td colspan="2">Ubah  Data Wali Siswa </td>
		</tr>
		<tr class="tr_head" align="center">
	  		<td colspan="2"></td>
		</tr>
	  <tr class="tr_data">
        <td>&nbsp;Nama Wali</td>
        <td><input type="text" name="nm_wali" size="50" class="text_box" value="<? echo $m->nm_wali ?>"/></td>
       <tr class="tr_data"> 
		<td>&nbsp;alamat Wali</td>
        <td><input type="text" name="alm_wali" size="50" class="text_box" value="<? echo $m->alm_wali ?>"/></td>
      </tr><tr class="tr_data">
        <td>&nbsp;Nomor Telepon Wali</td>
        <td><input type="text" name="telp_wali" size="50" class="text_box" value="<? echo $m->telp_wali ?>"/></td>
      </tr>
	  </tr><tr class="tr_data">
        <td>&nbsp;Pekerjaan Wali</td>
        <td><input type="text" name="pkerjaan_wali" size="50" class="text_box" value="<? echo $m->pkerjaan_wali ?>"/></td>
      </tr>
	  <tr>
		<td>Pilih Foto </td><td><input type="file" name="userfile" size="20" /></td>
	  </tr>
	  <tr class="tr_data">
        <tr>
            <th></th>
            <td><input type="submit" value="Simpan" class="button"/>&nbsp;<input class="button" type="button" value="Batalkan" onclick="location.href='<?php echo base_url()?>index.php/data_siswa';"/></td>
        </tr>
    </table>
	  </td>
    </tr>
  </table>
    
</form>
