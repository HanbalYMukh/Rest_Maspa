<link href="<?php echo base_url().'static/css/form2.css'; ?>" rel="stylesheet"/>
<br /><br />
    <table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="50%">
    	<tr class="tr_head" align="center">
	  		<td colspan="2">Detail Data Sertifikasi PTK</td>
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
            <th align="left">&nbsp;Nama Sertifikasi</th>
            <td><input disabled="disabled" size="60" class="text_box" name="nama_sertifikasi" value="&nbsp;<?php echo $m->nama_sertifikasi ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Jenis Keahlian</th>
            <td><input disabled="disabled" size="60" class="text_box" name="jns_keahlian" value="&nbsp;<?php echo $m->jns_keahlian ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Lembaga Penerbit</th>
            <td><input disabled="disabled" size="60" class="text_box" name="lembaga_penerbit" value="&nbsp;<?php echo $m->lembaga_penerbit ?>"/></td>
        </tr>
    </table>
<table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="50%">
<td> <a href="<?=base_url()?>index.php/data_sertptk/" title="Kembali ke data utama"><img  src="<?=base_url()?>static/images/menu/prev.gif" align="absmiddle"/><font size="2">Kembali</font></a></td>
</table>
