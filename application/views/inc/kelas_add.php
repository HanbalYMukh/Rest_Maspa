<link href="<?php echo base_url().'static/css/form2.css'; ?>" rel="stylesheet"/>
<form action="" method="post">
    <table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="50%">
    	<tr align="center"><td colspan="2"><div class="error" align="center"><?php echo validation_errors(); ?></div></td></tr>
        <tr class="tr_head" align="center">
	  		<td colspan="2">Tambah Data Kelas </td>
		</tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Id Kelas </th>
            <td><input size="60" class="text_box" name="id_kelas"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Nama Kelas</th>
            <td><input size="60" class="text_box" name="no_ruang"/></td>
        </tr>
		<tr class="tr_data">
            <th align="left">&nbsp;Luas Lantai </th>
            <td><input size="60" class="text_box" name="luas_lantai"/></td>
        </tr>
		<tr class="tr_data">
            <th align="left">&nbsp;Kondisi Kelas </th>
            <td><input size="60" class="text_box" name="kondisi_kelas"/></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="Simpan" class="button"/>&nbsp;<input class="button" type="button" value="Batalkan" onclick="location.href='<?=base_url()?>index.php/data_kelas';"/></td>
        </tr>
    </table>
</form>
