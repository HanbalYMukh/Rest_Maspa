<link href="<?php echo base_url().'static/css/form2.css'; ?>" rel="stylesheet"/>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top">
		<table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="98%">
    	<tr>
      <td valign="top">
	  		<table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="98%">
    	<tr class="tr_head" align="center">
	  		<td colspan="2">  Data Siswa </td>
		</tr>
	
	<tr class="tr_data">
	  <td>&nbsp;Nama Siswa </td>
	  <td>
	  <input disabled="disable" name="nama_siswa" size="50" class="text_box"  value="<?php echo $m->nama_siswa?>"/></td></tr>
	
	<tr class="tr_data">
	  <td>&nbsp;No. Induk </td>
	  <td><input disabled="disable" name="no_induk" size="50" class="text_box"  value="<?php echo $m->no_induk?>"/></td></tr>
	<tr class="tr_data"><td>&nbsp;Jenis Kelamin
	  </td>
	<td><input disabled="disable" name="kelamin_siswa" size="25" class="text_box" value="<? echo $m->kelamin_siswa?>"/>
	</td></tr>
   <tr class="tr_data"><td>&nbsp;Tempat Lahir </td>
   <td><input disabled="disable" name="tmplahir_siswa" size="50" class="text_box"  value="<?php echo $m->tmplahir_siswa?>"/></td></tr>
	<tr class="tr_data">
    <td>&nbsp;Tanggal Lahir</td>
    <td><input disabled="disable" name="tgllahir_siswa" size="25" class="text_box" value="<?php echo $m->tgllahir_siswa?>"/> </td></tr>
    
	<tr class="tr_data">
	  <td>&nbsp;Agama  </td>
      <td><input disabled="disable" name="agama_siswa" size="25" class="text_box" value="<? echo $m->agama_siswa?>"/>
       </td></tr>
	<tr class="tr_data">
        <td>&nbsp;Anak Ke</td>
        <td><input disabled="disable" name="anak_ke" class="text-box" cols="45" value="<?php echo $m->anak_ke?>"/></td>
      </tr>
	  <tr class="tr_data">
        <td>&nbsp;Status Keluarga</td>
        <td><input disabled="disable" name="stt_klrga" class="text-box" cols="45" value="<?php echo $m->stt_klrga?>"/></td>
      </tr>
	<tr class="tr_data"><td>&nbsp;Alamat </td>
	<td><input disabled="disable" name="alamat_siswa" rows="3" cols="45" class="textarea" value="<?php echo $m->alamat_siswa?>"/></td></tr>
	<tr class="tr_data"><td>&nbsp;Kota </td>
	<td><input disabled="disable" name="kota_siswa" size="50" class="text_box"  value="<?php echo $m->kota_siswa?>"/></td></tr>
	<tr class="tr_data"><td>&nbsp;Kode Pos </td>
	<td><input disabled="disable" name="kodepos_siswa" size="50" class="text_box"  value="<?php echo $m->kodepos_siswa?>"/></td></tr>
		  <tr class="tr_data">
        <td colspan="3">&nbsp;Diterima di Madrasah ini :</td>
      </tr>
	  <tr class="tr_data">
        <td>&nbsp;Di Kelas</td>
        <td><input disabled="disable" name="kelas_awal" class="text_box" cols="45" value="<?php echo $m->kelas_awal?>"/></td>
      </tr><tr class="tr_data">
        <td>&nbsp;Pada Tanggal</td>
        <td><input disabled="disable" name="tgl_awal" class="text_box" cols="45" value="<?php echo $m->tgl_awal?>"/></td>
      </tr><tr class="tr_data">
        <td>&nbsp;Semester</td>
        <td><input disabled="disable" name="smester_awal" class="text_box" cols="45" value="<?php echo $m->smester_awal?>"/></td>
      </tr>

	<tr class="tr_data">
	  <td>&nbsp;Telp. Siswa </td>
	  <td><input disabled="disable" name="telp_siswa" size="50" class="text_box"  value="<?php echo $m->telp_siswa?>"/></td></tr>
	<tr class="tr_data">
        <td>&nbsp;Asal Sekolah </td>
        <td><input disabled="disable" name="asal_sekolah" size="50" class="text_box" value="<?php echo $m->asal_sekolah?>" /></td>
      </tr>
	  <tr class="tr_data">
        <td>&nbsp;Alamat Sekolah Asal </td>
        <td><input disabled="disable" name="alm_sekolah_asal" size="50" class="text_box" value="<?php echo $m->alm_sekolah_asal?>"/></td>
      </tr>
	  <tr class="tr_data">
        <td>&nbsp;Tahun Ijazah MTs/SMP/Paket B </td>
        <td><input disabled="disable" name="thn_ijazah_awal" size="50" class="text_box" value="<?php echo $m->thn_ijazah_awal?>"/></td>
      </tr><tr class="tr_data">
        <td>&nbsp;Nomor Ijazah MTs/SMP/Paket B</td>
        <td><input disabled="disable" name="no_ijazah_awal" size="50" class="text_box" value="<?php echo $m->no_ijazah_awal?>"/></td>
      </tr><tr class="tr_data">
        <td>&nbsp;Tahun SKHUN MTs/SMP/Paket B
        <td><input disabled="disable" name="thn_skhun_awal" size="50" class="text_box" value="<?php echo $m->thn_skhun_awal?>" /></td>
      </tr><tr class="tr_data">
        <td>&nbsp;Nomor SKHUN MTs/SMP/Paket b </td>
        <td><input disabled="disable" name="no_skhun_awal" size="50" class="text_box" value="<?php echo $m->no_skhun_awal?>"/></td>
      </tr>
      </table>
	  </td>
      <td valign="top">
	  		<table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="98%">
    	<tr class="tr_head" align="center">
	  		<td colspan="2">  Data Orangtua Siswa </td>
		</tr>
	
	<tr class="tr_data">
        <td>&nbsp;Nama Ayah</td>
        <td><input disabled="disable" name="nama_ayah" size="50" class="text_box" value="<? echo $m->nama_ayah ?>" /></td>
      </tr>
	  <tr class="tr_data">
        <td>&nbsp;Nama Ibu</td>
        <td><input disabled="disable" name="nama_ibu" size="50" class="text_box" value="<? echo $m->nama_ibu ?>" /></td>
      </tr>
      <tr class="tr_data">
        <td>&nbsp;Pekerjaan Ayah</td>
        <td><input disabled="disable" name="pekerjaan_ayah" size="50" class="text_box" value="<? echo $m->pekerjaan_ayah ?>"/></td>
      </tr>
	  <tr class="tr_data">
        <td>&nbsp;Pekerjaan ibu</td>
        <td><input disabled="disable" name="pekerjaan_ibu" size="50" class="text_box" value="<? echo $m->pekerjaan_ibu ?>"/></td>
      </tr>
	<tr class="tr_data">
	  <td>&nbsp;Pendidikan Ayah</td>
      <td><input disabled="disable" name="pendidikan_ayah" size="50" class="text_box" value="<? echo $m->pendidikan_ayah ?>"/></td>
	</tr>
	<tr class="tr_data">
	  <td>&nbsp;Pendidikan Ibu</td>
      <td><input disabled="disable" name="pendidikan_ayah" size="50" class="text_box" value="<? echo $m->pendidikan_ibu ?>"/></td>
	</tr>
	<tr class="tr_data"> 
		<td>&nbsp;alamat Ayah</td>
        <td><input disabled="disable" name="alm_ayah" size="50" class="text_box" value="<? echo $m->alm_ayah ?>"/></td>
      </tr><tr class="tr_data">
	  <tr class="tr_data"> 
		<td>&nbsp;alamat Ibu</td>
        <td><input disabled="disable" name="alm_ibu" size="50" class="text_box" value="<? echo $m->alm_ibu ?>"/></td>
      </tr><tr class="tr_data">
	  <tr class="tr_head" align="center">
	  		<td colspan="2"></td>
		</tr>
	  <tr class="tr_head" align="center">
	  		<td colspan="2">  Data Wali Siswa </td>
		</tr>
		<tr class="tr_head" align="center">
	  		<td colspan="2"></td>
		</tr>
	  <tr class="tr_data">
        <td>&nbsp;Nama Wali</td>
        <td><input disabled="disable" name="nm_wali" size="50" class="text_box" value="<? echo $m->nm_wali ?>"/></td>
       <tr class="tr_data"> 
		<td>&nbsp;alamat Wali</td>
        <td><input disabled="disable" name="alm_wali" size="50" class="text_box" value="<? echo $m->alm_wali ?>"/></td>
      </tr><tr class="tr_data">
        <td>&nbsp;Nomor Telepon Wali</td>
        <td><input disabled="disable" name="telp_wali" size="50" class="text_box" value="<? echo $m->telp_wali ?>"/></td>
      </tr>
	  </tr><tr class="tr_data">
        <td>&nbsp;Pekerjaan Wali</td>
        <td><input disabled="disable" name="pkerjaan_wali" size="50" class="text_box" value="<? echo $m->pkerjaan_wali ?>"/></td>
      </tr>
	  <tr class="tr_data">
		<td><img src="../../../asset/sisresize/<?echo $m->no_induk?>.jpg" alt="<?echo $m->nama_siswa ?>" align="right"/></td>
	  </tr>
	  
	  <tr class="tr_data">
		</table>
	        <table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="98%">
              <tr>
                <td><a href="<?=base_url()?>index.php/data_siswa/index/" title="Kembali ke data utama"><img  src="<?=base_url()?>static/images/menu/prev.gif" align="absmiddle"/><font size="2">Kembali</font></a></td>
              </tr>
		</table></td>
  </tr>
</table>

