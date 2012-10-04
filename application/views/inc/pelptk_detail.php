<link href="<?php echo base_url().'static/css/form2.css'; ?>" rel="stylesheet"/>
<br /><br />
    <table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="50%">
    	<tr class="tr_head" align="center">
	  		<td colspan="2">Detail Data Pelatihan PTK</td>
		</tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Nama PTK</th>
            <td><input disabled="disabled" size="60" class="text_box" name="nama_ptk" value="&nbsp;<?php echo $m->nama_ptk ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Tahun</th>
            <td><input disabled="disabled" size="60" class="text_box" name="tahun" value="&nbsp;<?php echo $m->tahun ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Nama Pelatihan</th>
            <td><input disabled="disabled" size="60" class="text_box" name="nama_pelatihan" value="&nbsp;<?php echo $m->nama_pelatihan ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Jenis Pelatihan</th>
            <td><input disabled="disabled" size="60" class="text_box" name="jns_pelatihan" value="&nbsp;<?php echo $m->jns_pelatihan ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Nama Lembaga</th>
            <td><input disabled="disabled" size="60" class="text_box" name="nama_lembaga" value="&nbsp;<?php echo $m->nama_lembaga ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Alamat Lembaga</th>
            <td><input disabled="disabled" size="60" class="text_box" name="alamat_lembaga" value="&nbsp;<?php echo $m->alamat_lembaga ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Kota Lembaga</th>
            <td><input disabled="disabled" size="60" class="text_box" name="kota_lembaga" value="&nbsp;<?php echo $m->kota_lembaga ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Kode Pos</th>
            <td><input disabled="disabled" size="60" class="text_box" name="kodepos_lembaga" value="&nbsp;<?php echo $m->kodepos_lembaga ?>"/></td>
        </tr>
    </table>
<table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="50%">
<td> <a href="<?=base_url()?>index.php/data_pelptk/" title="Kembali ke data utama"><img  src="<?=base_url()?>static/images/menu/prev.gif" align="absmiddle"/><font size="2">Kembali</font></a></td>
</table>
