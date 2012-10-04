<link href="<?php echo base_url().'static/css/form2.css'; ?>" rel="stylesheet"/>

    <table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="50%">
    	<tr class="tr_head" align="center">
	  		<td colspan="2">Detail Data PTK</td>
		</tr>
        <tr class="tr_data">
            <th align="left">&nbsp;NUPTK</th>
            <td><input disabled="disabled" size="60" class="text_box" name="nuptk" value="&nbsp;<?php echo $m->nuptk ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Nama</th>
            <td><input disabled="disabled" size="60" class="text_box" name="nama_ptk" value="&nbsp;<?php echo $m->nama_ptk ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Jenis Kelamin</th>
            <td><input disabled="disabled" size="60" class="text_box" name="kelamin_ptk" value="&nbsp;<?php echo $m->kelamin_ptk ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Tempat Lahir</th>
            <td><input disabled="disabled" size="60" class="text_box" name="tmplahir_ptk" value="&nbsp;<?php echo $m->tmplahir_ptk ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Tanggal Lahir</th>
            <td><input disabled="disabled" size="60" class="text_box" name="tgllahir_ptk" value="&nbsp;<?php echo $m->tgllahir_ptk ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Agama</th>
            <td><input disabled="disabled" size="60" class="text_box" name="agama_ptk" value="&nbsp;<?php echo $m->agama_ptk ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Alamat</th>
            <td><input disabled="disabled" size="60" class="text_box" name="alamat_ptk" value="&nbsp;<?php echo $m->alamat_ptk ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Kota</th>
            <td><input disabled="disabled" size="60" class="text_box" name="kota_ptk" value="&nbsp;<?php echo $m->kota_ptk ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Kode Pos</th>
            <td><input disabled="disabled" size="60" class="text_box" name="kodepos_ptk" value="&nbsp;<?php echo $m->kodepos_ptk ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Telp</th>
            <td><input disabled="disabled" size="60" class="text_box" name="telp_ptk" value="&nbsp;<?php echo $m->telp_ptk ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Golongan</th>
            <td><input disabled="disabled" size="60" class="text_box" name="gol_ptk" value="&nbsp;<?php echo $m->gol_ptk ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Pendidikan Terakhir</th>
            <td><input disabled="disabled" size="60" class="text_box" name="pendidikan_ptk" value="&nbsp;<?php echo $m->pendidikan_ptk ?>"/></td>
        </tr>
         <tr class="tr_data">
            <th align="left">&nbsp;Status</th>
            <td><input disabled="disabled" size="60" class="text_box" name="status_ptk" value="&nbsp;<?php echo $m->status_ptk ?>"/></td>
        </tr>
		<tr>
		<td><img src="<?=base_url()?>/asset/tichresize/<?echo $m->nuptk; ?>.jpg" alt="<?echo $m->nama_ptk ?>" align="centre"/></td>
		</tr>
    </table>
<table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="50%">
<td> <a href="<?=base_url()?>index.php/data_ptk/" title="Kembali ke data utama"><img  src="<?=base_url()?>static/images/menu/prev.gif" align="absmiddle"/><font size="2">Kembali</font></a></td>
</table>
