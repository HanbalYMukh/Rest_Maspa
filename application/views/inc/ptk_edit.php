<link href="<?php echo base_url().'static/css/form2.css'; ?>" rel="stylesheet"/>
<script type="text/javascript" src="<?=base_url()?>static/datetimepicker_css.js"></script>
<link href="<?php echo base_url().'static/css/rfnet.css'; ?>" rel="stylesheet" type="text/css">

<? echo form_open_multipart()?>
    <table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="50%">
        
      <tr class="tr_head" align="center">
  		  <td colspan="2">Ubah Data PTK</td>
	  </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;NUPTK</th>
            <td><input  size="60" class="text_box" name="nuptk" value="<?php echo $m->nuptk ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Nama</th>
            <td><input  size="60" class="text_box" name="nama_ptk" value="<?php echo $m->nama_ptk ?>"/></td>
        </tr>
        <tr class="tr_data"><td>&nbsp;Jenis Kelamin
	  </td>
	<td>
	<?php
		$style=array("","");
		if($m->kelamin_ptk=="L"){ $style[0]="selected"; }else if($m->kelamin_ptk=="P"){ $style[1]="selected"; } else { $style[0]=""; $style[1]="";}
	?>
    <select name="kelamin_ptk" class="select_box">
    <option value="L" <?php echo $style[0]?> >Laki-laki</option>
    <option value="P" <?php echo $style[1]?> >Perempuan</option>
    </select></td></tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Tempat Lahir</th>
            <td><input  size="60" class="text_box" name="tmplahir_ptk" value="<?php echo $m->tmplahir_ptk ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Tanggal Lahir</th>
            <td><input type="text" name="tgllahir_ptk" id="demo3" size="25" class="text_box" value="<?php echo $m->tgllahir_ptk?>"> <a href="javascript:NewCssCal('demo3','yyyymmdd')">
    <img src="<?php echo base_url();?>static/images/images/cal.gif" width="16" height="16" alt="Pick a date"></a></td></td>
        </tr>
        <tr class="tr_data">
	  <td>&nbsp;Agama  </td>
      <td><?php	
			$se=array("","","","","","");
			if($m->agama_ptk=="Islam"){ $se[0]="selected"; }else if($m->agama_ptk=="Kristen"){ $se[1]="selected"; }else if($m->agama_ptk=="Katolik"){ $se[2]="selected"; }else if($m->agama_ptk=="Hindu"){ $se[3]="selected"; }else if($m->agama_ptk=="Buddha"){ $se[4]="selected"; }else if($m->agama_ptk=="Konghucu"){ $se[5]="selected"; }else{ $se[0]=""; $se[1]=""; $se[2]=""; $se[3]=""; $se[4]=""; $se[5]=""; }?>
        
    <select name="agama_ptk" class="select_box">
    <option value="Islam" <?php echo $se[0]?> >Islam</option>
    <option value="Kristen" <?php echo $se[1]?> >Kristen</option>
    <option value="Katolik" <?php echo $se[2]?> >Katolik</option>
    <option value="Hindu" <?php echo $se[3]?> >Hindu</option>
    <option value="Buddha" <?php echo $se[4]?> >Buddha</option>
    <option value="Konghucu" <?php echo $se[5]?> >Konghucu</option> 
    </select>
       </td></tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Alamat</th>
            <td><textarea  size="60" class="textarea" cols="45" name="alamat_ptk"/><?php echo $m->alamat_ptk ?></textarea></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Kota</th>
            <td><input  size="60" class="text_box" name="kota_ptk" value="<?php echo $m->kota_ptk ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Kode Pos</th>
            <td><input  size="60" class="text_box" name="kodepos_ptk" value="<?php echo $m->kodepos_ptk ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Telp</th>
            <td><input  size="60" class="text_box" name="telp_ptk" value="<?php echo $m->telp_ptk ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Golongan</th>
            <td><input  size="60" class="text_box" name="gol_ptk" value="<?php echo $m->gol_ptk ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Pendidikan Terakhir</th>
            <td>
    <?php	
		$so=array("","","","","","","");
	if($m->pendidikan_ptk=="SD"){ $so[0]="selected"; }else if($m->pendidikan_ptk=="SMP"){ $so[1]="selected"; }
	else if($m->pendidikan_ptk=="SMA / SMK / Sederajat"){ $so[2]="selected"; }else if($m->pendidikan_ptk=="D1 / D2 / D3"){ $so[3]="selected"; }
	else if($m->pendidikan_ptk=="D4 / S1"){ $so[4]="selected"; }else if($m->pendidikan_ptk=="S2"){ $so[5]="selected"; }else if($m->pendidikan_ptk=="S3"){ $so[6]="selected"; }
	else{ $so[0]=""; $so[1]=""; $so[2]=""; $so[3]=""; $so[4]=""; $so[5]=""; $so[6]=""; }?>
    <select name="pendidikan_ptk" class="select_box">
        <option value="SD" <?php echo $so[0]?> >&nbsp;SD</option>
        <option value="SMP" <?php echo $so[1]?> >&nbsp;SMP</option>
        <option value="SMA / SMK / Sederajat" <?php echo $so[2]?> >&nbsp;SMA / SMK / Sederajat</option>
        <option value="D1 / D2 / D3" <?php echo $so[3]?> >&nbsp;D1 / D2 / D3</option>
        <option value="D4 / S1" <?php echo $so[4]?> >&nbsp;D4 / S1</option>
        <option value="S2" <?php echo $so[5]?> >&nbsp;S2</option>
        <option value="S3" <?php echo $so[6]?> >&nbsp;S3</option>
      </select></td>
        </tr>
         <tr class="tr_data">
            <th align="left">&nbsp;Status</th>
            <td>
			
    <?php	
	$st=array("","","","","");
	if($m->status_ptk=="Pegawai Negeri Sipil(PNS)"){ $st[0]="selected"; }else if($m->status_ptk=="Guru Tetap Yayasan (GTY)"){ $st[1]="selected"; }else if($m->status_ptk=="Guru Tidak Tetap (GTT)"){ $st[2]="selected"; }else if($m->status_ptk=="Guru Bantu Pusat (GBP)"){ $st[3]="selected"; }else if($m->status_ptk=="Guru Bantu Daerah (GBD)"){ $st[4]="selected"; }?>
    <select name="status_ptk" class="select_box">
        <option value="Pegawai Negeri Sipil (PNS)" <?php echo $st[0]?> >Pegawai Negeri Sipil (PNS)</option>
        <option value="Guru Tetap Yayasan (GTY)" <?php echo $st[1]?> >Guru Tetap Yayasan (GTY)</option>
        <option value="Guru Tidak Tetap (GTT)" <?php echo $st[2]?> >Guru Tidak Tetap (GTT)</option>
        <option value="Guru Bantu Pusat (GBP)" <?php echo $st[3]?> >Guru Bantu Pusat (GBP)</option>
        <option value="Guru Bantu Daerah (GBD)" <?php echo $st[4]?> >Guru Bantu Daerah (GBD)</option>
      </select></td>
        </tr>
		<tr class="tr_data">
		<td>Pilih Foto </td><td><input type="file" name="userfile" size="20" />*jika tidak, kosongkan saja.</td> 
        <td>
        <tr>
            <th></th>
            <td><input type="submit" value="Simpan" class="button"/>&nbsp;<input class="button" type="button" value="Batalkan" onclick="location.href='<?=base_url()?>index.php/data_ptk';"/></td>
            
        </tr>
    </table>
</form>