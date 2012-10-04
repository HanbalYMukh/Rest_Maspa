<link href="<?php echo base_url().'static/css/form2.css'; ?>" rel="stylesheet"/>

<br /><br />
    <table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="50%">
    	<tr class="tr_head" align="center">
	  		<td colspan="2"><input type="hidden" name="id" value="<?=$id_pend?>"/>Detail Data Pendidikan PTK</td>
		</tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Nama PTK</th>
            <td><input size="60" disabled="disabled" class="text_box" name="nama_ptk" value="&nbsp;<?=$nama?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Tahun</th>
            <td><input size="60" class="text_box" disabled="disabled" name="tahun" value="&nbsp;<?=$tahun?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Jenjang</th>
            <td><input size="60" disabled="disabled" class="text_box" name="jenjang" value="&nbsp;<?=$jenjang?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Prodi</th>
            <td><input size="60" class="text_box" disabled="disabled" name="prodi" value="&nbsp;<?=$prodi?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Jurusan</th>
            <td><input size="60" class="text_box" name="jurusan" disabled="disabled" value="&nbsp;<?=$jurusan?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Nama Perguruan Tinggi</th>
            <td><input size="60" class="text_box" disabled="disabled" name="nama_pt" value="&nbsp;<?=$nama_pt?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Kota Perguruan Tinggi</th>
            <td><input size="60" class="text_box" name="kota_pt" disabled="disabled" value="&nbsp;<?=$kota_pt?>"/></td>
        </tr>
    </table>
<table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="50%">
<td> <a href="<?=base_url()?>index.php/data_pendptk/" title="Kembali ke data utama"><img  src="<?=base_url()?>static/images/menu/prev.gif" align="absmiddle"/><font size="2">Kembali</font></a></td>
</table>
