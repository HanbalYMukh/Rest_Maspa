<link href="<?php echo base_url().'static/css/form2.css'; ?>" rel="stylesheet"/>
<form action="" method="post">
    <table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="50%">
    	<tr class="tr_head" align="center">
	  		<td colspan="2">Ubah  Data Sertifikasi PTK</td>
		</tr>
        <tr class="tr_data">
            <th align="left">&nbsp;id PTK</th>
            <td><input size="60" class="text_box" name="id_ptk" value="<?php echo $m->id_ptk ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Tahun</th>
            <td><input size="60" class="text_box" name="tahun" value="<?php echo $m->tahun ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Nama Sertifikasi</th>
            <td><input size="60" class="text_box" name="nama_sertifikasi" value="<?php echo $m->nama_sertifikasi ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Jenis Keahlian</th>
            <td><input size="60" class="text_box" name="jns_keahlian" value="<?php echo $m->jns_keahlian ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Lembaga Penerbit</th>
            <td><input size="60" class="text_box" name="lembaga_penerbit" value="<?php echo $m->lembaga_penerbit ?>"/></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="Simpan" class="button"/>&nbsp;<input class="button" type="button" value="Batalkan" onclick="location.href='<?=base_url()?>index.php/data_sertptk';"/></td>
            
        </tr>
    </table>
</form>
