<form action="" method="post">
    <table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="50%">
    	<tr align="center"><td colspan="2"><div class="error" align="center"><?php echo validation_errors(); ?></div></td></tr>
        <tr class="tr_head" align="center">
	  		<td colspan="2">Tambah Data Tahun Ajaran </td>
		</tr>
		<tr class="tr_data">
            <th align="left">&nbsp;Nama Tahun Ajaran</th>
            <td><input size="60" class="text_box" name="tahun" value="<?php echo $m->tahun ?>"/></td>
        </tr>
		<tr>
            <th></th>
            <td><input type="submit" value="Simpan" class="button"/>&nbsp;<input class="button" type="button" value="Batalkan" onclick="location.href='<?=base_url()?>index.php/tahun_ajaran/index';"/></td>
        </tr>
    </table>
</form>